/* Ocultar elemento loader al cargar la pagina */
$(window).on('load', function() {
    $(".loader").fadeOut("slow");
});
// Inicializar AOS(animacion con el scroll)
AOS.init();

$(document).ready(function() {
    let modalPreview = $('#modal-preview'),
        fotoGaleria = $('.galeria img'),
        txtNombre = $('#nombre'),
        txtEmail = $('#email'),
        txtTelefono = $('#telefono'),
        selectServicio = $('#servicio'),
        txtArea = $('#area'),
        txtAsunto = $('#asunto'),
        txtMensaje = $('#mensaje'),
        formCotizador = $('#form-cotizador'),
        btnServicios = $(".service a"),
        modalMensaje = $('#modal-mensaje');

    // Establecer la mascara para el input del telefono
    let im = new Inputmask("9999-9999");
    im.mask(txtTelefono);

    // Abrir modal para previsualizar imagen de la galeria
    fotoGaleria.on('click', function() {
        modalPreview.find('.modal-body').html(`<img src="${this.src}" alt="${this.alt}" class="col-12 col-sm-9">`);
        modalPreview.modal('show');
    });

    // Al presionar cualquiera de los botones de "cotizar", hacer focus y establecer el servicio seleccionado en el select
    btnServicios.on('click', function() {
        let indice = $(".service a").index(this);
        txtNombre.focus();
        selectServicio.find('option').eq(indice).prop('selected', true);
    });

    // Realizar envio de cotizacion
    formCotizador.on("submit", SubmitCotizacion);

    /**
     * Realiza el envio de la cotizacion mediante ajax
     * @param {object} e Elemento form
     */
    function SubmitCotizacion(e) {
        e.preventDefault();
        let vali = ValidarElementos();
        if (vali == true) {
            let datos = {
                nombre: txtNombre.val().trim(),
                email: txtEmail.val().trim(),
                telefono: txtTelefono.val().trim(),
                servicio: selectServicio.val().trim(),
                area: txtArea.val().trim(),
                asunto: txtAsunto.val().trim(),
                mensaje: txtMensaje.val().trim()
            };
            modalMensaje.find('.modal-body').html('<img src="img/loading.gif"><h2>Enviando...</h2>');
            modalMensaje.modal('show');
            $.ajax({
                type: 'post',
                url: '../backend/AjaxSolicitud.php',
                data: { datos: JSON.stringify(datos) },
                success: function(res) {
                    if (res.trim() == 'true') {
                        CrearMensaje(false, 'Cotización enviada', "Hemos enviado la cotización a tu correo");
                        InicializarElementos();
                    } else {
                        CrearMensaje(true, 'Error', 'La cotización no pudo ser enviada, contacta con el administrador del sitio');
                    }
                }
            });
        } else {
            CrearMensaje(true, 'Error', vali);
        }
    }

    /**
     * Reestablecer los valores de elementos
     */
    function InicializarElementos() {
        txtNombre.val('');
        txtEmail.val('');
        txtTelefono.val('');
        selectServicio.find('option').eq(0).prop('selected', true);
        txtArea.val('1');
        txtAsunto.val('');
        txtMensaje.val('');
    }

    /**
     * Agrega contenido a modal y muestra (show)
     * @param {boolean} error Indicar si es mensaje de error (true|false)
     * @param {string} titulo Titulo del mensaje
     * @param {string} texto Texto del mensaje
     */
    function CrearMensaje(error, titulo, texto) {
        icono = (error == false ? 'fa-check-circle' : 'fa-exclamation-triangle');
        modalMensaje.find('.modal-body').html(`
        <i class="fas ${icono} fs-1"></i>
        <h2>${titulo}</h2>
        <p>${texto}</p>
        `);
        modalMensaje.modal('show');
    }

    /**
     * Realiza la validacion de los diversos campos 
     * @returns {true|string} true: si no ocurrio ningun error, de lo contrario mensaje de error
     */
    function ValidarElementos() {
        let campos = [txtNombre.val().trim(), txtEmail.val().trim(), txtTelefono.val().trim(), selectServicio.val().trim(), txtArea.val().trim(), txtAsunto.val().trim(), txtMensaje.val().trim()];
        let res = true;
        if (camposVacios([campos])) {
            return 'Ingrese todos los campos por favor.';
        } else if (!isEmail([txtEmail.val().trim()])) {
            return 'Ingrese un email valido';
        } else if (!isTelefono([txtTelefono.val().trim()])) {
            return 'Ingrese un numero telefonico valido con el formato: 0000-0000';
        } else if (!isNumeric([txtArea.val().trim()])) {
            return 'Ingrese un numero valido y mayor que cero.';
        } else {
            return res;
        }
    }

    /**
     * Validar si los campos email son validos
     * @param {Array} campos 
     * @return {boolean}
     */
    function isEmail(campos) {
        return campos.some((v) => {
            const exp = /^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;
            return exp.test(v);
        });
    }

    /**
     * Validar si los campos telefonos son validos
     * @param {Array} campos 
     * @return {boolean}
     */
    function isTelefono(campos) {
        return campos.some((v) => {
            const formats = "9999-9999";
            const r = RegExp("^(" +
                formats
                .replace(/([\(\)])/g, "\\$1")
                .replace(/9/g, "\\d") +
                ")$");
            return r.test(v);
        });
    }

    /**
     * Validar si los campos numericos son validos (numeros y mayor que ceros)
     * @param {Array} campos 
     * @return {boolean}
     */
    function isNumeric(campos) {
        return campos.some((v) => {
            return (typeof Number(v) == 'number' && Number(v) > 0);
        });
    }

    /**
     * Validar si los campos estan vacios
     * @param {Array} campos 
     * @return {boolean}
     */
    function camposVacios(campos) {
        return campos.some((v) => {
            return (v == '' || v == undefined);
        });
    }
});