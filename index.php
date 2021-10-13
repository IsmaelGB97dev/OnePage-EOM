<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/icon.png" sizes="10x10">
    <title>Inicio - Rnueva</title>

    <!-- ESTILOS -->
    <link rel="stylesheet" href="css/style.css">

    <!-- JQUERY -->
    <script src="js/jquery-3.6.0.min.js"></script>

    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.bundle.min.js"></script>

    <!-- GOOGLE FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400&display=swap" rel="stylesheet">

    <!-- ICONOS FONTAWESOME -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <!-- JQUERY INPUTMASK -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/5.0.7-beta.23/jquery.inputmask.min.js" integrity="sha512-mh8BrmrpMLvcfym8unG8TXU+LGUP0A2C6tN4b/RXWK3xffaA9k4blevFyY9WFyn3Y4pqpPNIVWtCZUTGRLqrrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- AOS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
</head>

<body>
    <div class="loader"></div>

    <!--//////////////////// HEADER /////////////////-->
    <header class="navbar sticky-top navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <div class="d-flex flex-grow-1">
                <span class="w-100 d-lg-none d-block"></span>
                <a class="navbar-brand d-none d-lg-inline-block" href="#">
                    <img src="img/logo.png" alt="logo" height="60">
                </a>
                <a class="navbar-brand-two mx-auto d-lg-none d-inline-block" href="#">
                    <img src="img/logo.png" alt="logo" height="40">
                </a>
                <div class="w-100 text-right">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#myNavbar">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
            </div>
            <div class="collapse navbar-collapse flex-grow-1 text-right" id="myNavbar">
                <ul class="navbar-nav ms-auto flex-nowrap pt-2">
                    <li class="nav-item">
                        <span class="me-5 menu-item">
                                <i class="fas fa-phone-alt"></i>
                                Llámanos al 2222-9999
                            </span>
                    </li>
                    <li class="nav-item">
                        <span class="menu-item">
                            <i class="fas fa-envelope"></i>
                            Escríbenos en <a class="text-decoration-none" href="mailto:info@rnueva.com">info@rnueva.com</a>
                        </span>
                    </li>
                </ul>
            </div>
        </div>
    </header>

    <!--//////////////////// SLIDER /////////////////-->
    <div class="slider container" data-aos="fade-down">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/slide1.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption h-100 d-flex align-items-center justify-content-center">
                        <h1>Colores</h1>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/slide2.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption h-100 d-flex align-items-center justify-content-center">
                        <h1>Elegancia</h1>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/slide3.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption h-100 d-flex align-items-center justify-content-center">
                        <h1>Detalles</h1>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <!--//////////////////// SECCION 3 (contenido y mini galeria) /////////////////-->
    <div class="seccion-3 d-flex flex-wrap" id="rnueva">
        <div class="col col-12 col-md-12 col-lg-6 px-4" data-aos="fade-down">
            <h3 class="fs-2 encabezado">Remodelación y renovación</h3>
            <hr class="separador">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut quas impedit suscipit amet ad esse, velit numquam quibusdam dolore enim quidem aliquid provident quaerat minima dolor pariatur? Excepturi, laborum ab!</p>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eos a voluptatem deleniti, nostrum accusamus mollitia nobis, rem dolores commodi similique necessitatibus. Nulla eligendi labore temporibus quas eaque minima quidem illum.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit fugit rem accusamus pariatur aut exercitationem illum, vel rerum laboriosam. Voluptatum doloremque dolore obcaecati cumque qui eaque esse excepturi sunt doloribus?</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non, debitis deserunt nihil ipsam eligendi harum voluptatem reiciendis. Expedita sed, excepturi eligendi, tenetur, natus praesentium doloremque hic cumque id fuga maxime!</p>
            <div class="row cualidades pt-4">
                <div class="col-4">
                    <p class="text-center ">
                        <i class="fas fa-rabbit-fast"></i><br> Agíl
                    </p>
                </div>
                <div class="col-4">
                    <p class="text-center">
                        <i class="fad fa-user-hard-hat"></i><br> Profesional
                    </p>
                </div>
                <div class="col-4">
                    <p class="text-center">
                        <i class="fas fa-lock-alt "></i><br> Seguro
                    </p>
                </div>

            </div>
        </div>
        <div class="col-lg-1 d-sm-none"></div>
        <div class="col-12 col-md-12 col-lg-5" data-aos="fade-down">
            <h3 class="fs-2 encabezado">Galeria</h3>
            <hr class="separador">
            <div class="galeria d-flex flex-wrap justify-content-center">
                <img src="img/galeria1.jpg" alt="foto galeria 1">
                <img src="img/galeria2.jpg" alt="foto galeria 2">
                <img src="img/galeria3.jpg" alt="foto galeria 3">
                <img src="img/galeria4.jpg" alt="foto galeria 4">
                <img src="img/galeria5.jpg" alt="foto galeria 5">
            </div>
        </div>
    </div>

    <!--//////////////////// SECCION 4 (servicios y cotizador) /////////////////-->
    <div class="seccion-4 mt-4 p-4 d-flex flex-column align-items-center" id="servicios">
        <div class="container text-center mb-3 col-12" data-aos="flip-down">
            <h3 class="fs-2 encabezado">Servicios</h3>
            <hr class="separador">
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Assumenda quam illum dolores quis labore inventore nisi velit, possimus accusamus distinctio soluta voluptas minima, neque nam quisquam et? Illum, odit beatae! Lorem ipsum dolor sit,
                amet consectetur adipisicing elit. Aspernatur officiis nisi atque error dolore a sit cumque vel porro quod maiores, fuga nihil cupiditate corrupti ipsam saepe pariatur rerum magni?</p>
        </div>
        <div class="service-list d-flex justify-content-center flex-wrap">
            <div class="service p-3 m-2 col-10 col-lg-3 text-center" data-aos="fade-up" data-aos-duration="1000">
                <div class="service-header">
                    <i class="fas fa-paint-roller"></i>
                    <h4>Pintura</h4>
                </div>
                <div class="service-descrip">
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Distinctio nihil veniam esse eligendi debitis reiciendis dolores vitae provident quisquam ab architecto pariatur iste, molestias laboriosam error quaerat iusto dolorum ad.</p>
                </div>
                <a class="btn btn-primary">Cotizar</a>
            </div>
            <div class="service p-3 m-2 col-10 col-lg-3 text-center" data-aos="fade-up" data-aos-duration="1500">
                <div class="service-header">
                    <i class="fas fa-home-alt"></i>
                    <h4>Drywall</h4>
                </div>
                <div class="service-descrip">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores hic, saepe, incidunt iure possimus debitis voluptatibus quo natus in dignissimos voluptatem! Atque exercitationem amet repellat soluta hic alias, libero debitis.</p>
                </div>
                <a class="btn btn-primary">Cotizar</a>
            </div>
            <div class="service p-3 m-2 col-10 col-lg-3 text-center" data-aos="fade-up" data-aos-duration="2000">
                <div class="service-header">
                    <i class="fas fa-columns"></i>
                    <h4>Sheetrock</h4>
                </div>
                <div class="service-descrip">
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Distinctio nihil veniam esse eligendi debitis reiciendis dolores vitae provident quisquam ab architecto pariatur iste, molestias laboriosam error quaerat iusto dolorum ad.</p>
                </div>
                <a class="btn btn-primary">Cotizar</a>
            </div>
        </div>
        <!-- +++++++ cotizador ++++++++++++ -->
        <div id="cotizador" class="m-4 col-12 col-md-8" data-aos="zoom-out-up">
            <h3 class="fs-2 encabezado">Cotizador</h3>
            <hr class="separador">
            <form id="form-cotizador" method="post">
                <div class="row mb-3">
                    <div class="col-12 col-md-6">
                        <label class="form-label" for="nombre">Nombre</label>
                        <input class="form-control" type="text" name="nombre" id="nombre" autocapitalize="words" placeholder="Ingresa tu nombre" required>
                    </div>
                    <div class="col-12 col-md-6">
                        <label class="form-label" for="correo">Correo</label>
                        <input class="form-control" type="email" name="email" id="email" inputmode="email" placeholder="Ingresa tu correo" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-12 col-md-6">
                        <label class="form-label" for="telefono">Teléfono</label>
                        <input class="form-control" type="tel" name="telefono" id="telefono" inputmode="tel" required>
                    </div>
                    <div class="col-12 col-md-6">
                        <label class="form-label" for="servicio">Servicio</label>
                        <select class="form-select" name="servicio" id="servicio">
                            <option value="pintura">Pintura</option>
                            <option value="drywall">Drywall</option>
                            <option value="sheetrock">Sheetrock</option>
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-6 col-md-6">
                        <label class="form-label" for="area">Área (m<sup>2</sup>)</label>
                        <input class="form-control" type="number" inputmode="numeric" name="area" step="0.01" id="area" value="1" required>
                    </div>
                    <div class="col-12 col-md-6">
                        <label class="form-label" for="asunto">Asunto</label>
                        <input class="form-control" type="text" name="asunto" id="asunto" autocapitalize="on" placeholder="Ingresa el asunto" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-12">
                        <label class="form-label" for="mensaje">Mensaje</label>
                        <textarea class="form-control " name="mensaje" id="mensaje" cols="30" rows="3" placeholder="Mensaje a enviar" required></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="text-center">
                        <input class="btn btn-primary" type="submit" name="enviar" id="enviar" value="Enviar cotización">
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!--//////////////////// SECCION 5 (google map y embed video) /////////////////-->
    <div class="seccion-5 d-flex flex-wrap p-3" id="ubicacion" data-aos="flip-right">
        <div class="col-12 col-lg-6">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3900.7712854796537!2d-86.2244642857749!3d12.12779543611294!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f73fe7b1522430b%3A0x7a65353d058d0186!2sRENUEVA%20S%20A!5e0!3m2!1ses!2sni!4v1634074982820!5m2!1ses!2sni"
                class="col-12" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
        <div class="col-12 col-lg-6">
            <iframe class="col-12" height="400" src="https://www.youtube.com/embed/BLAkRv8-evE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
    </div>

    <!--//////////////////// FOOTER /////////////////-->
    <footer>
        <div class="row col-12">
            <div class="col-12 d-flex justify-content-center">
                <img src="/img/logo.png" width="150" alt="logo">
            </div>
        </div>
        <div class="row col-12">
            <ul class="navbar-nav pt-3 d-flex flex-row justify-content-center align-items-center fs-6 col-12 col-md-6">
                <li class="nav-item pe-3">
                    <a class="nav-link" href="#rnueva">Rnueva</a>
                </li>
                <li class="nav-item pe-3">
                    <a class="nav-link" href="#servicios">Servicios</a>
                </li>
                <li class="nav-item pe-3">
                    <a class="nav-link" href="#cotizador">Cotizador</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#ubicacion">Ubicación</a>
                </li>
            </ul>
            <ul class="social pt-3 navbar-nav d-flex flex-row justify-content-center fs-4 col-12 col-md-6">
                <li class="nav-item pe-3 social-face">
                    <a class="nav-link text-light" href="https://www.facebook.com" target="_blank">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                </li>
                <li class="nav-item pe-3 social-twit">
                    <a class="nav-link text-light" href="https://www.twitter.com" target="_blank">
                        <i class="fab fa-twitter"></i>
                    </a>
                </li>
                <li class="nav-item pe-3 social-inst">
                    <a class="nav-link text-light" href="https://www.instagram.com" target="_blank">
                        <i class="fab fa-instagram"></i>
                    </a>
                </li>
                <li class="nav-item  social-yout">
                    <a class="nav-link text-light" href="https://www.youtube.com" target="_blank">
                        <i class="fab fa-youtube"></i>
                    </a>
                </li>
            </ul>
        </div>
        <div class="row col-12 text-center pt-3">
            <h6 class="text-light">&copy; 2021 Rnueva. Todos los derechos reservados.</h6>
        </div>
    </footer>

    <!-- Modal galeria -->
    <div class="modal fade" id="modal-preview" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true ">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex justify-content-center">
                </div>
            </div>
        </div>
    </div>

    <!-- Modal mensaje-->
    <div class="modal fade" id="modal-mensaje" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center">

                </div>
                <div class="modal-footer d-flex justify-content-center">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Ok</button>
                </div>
            </div>
        </div>
    </div>

    <!-- SCRIPT JS-->
    <script src="js/inicio.js "></script>
</body>

</html>