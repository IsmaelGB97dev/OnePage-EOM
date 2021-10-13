<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


/**
 * Convertir caracteres especiales a entidades HTML
 * @param  string $data
 * @return string Variable convertidad
 */
function escapar($data) {
    return htmlspecialchars($data, ENT_QUOTES | ENT_SUBSTITUTE, "UTF-8");
}

/**
 * Realizar el proceso de cotizacion (calculo y envio de correo)
 * @return string 'true' si no ocurrio problema, de lo contratio true mas la cadena con la excepcion
 */
function Cotizar() {
    $datos = json_decode($_POST['datos']);
    
    $nombre = escapar($datos->nombre);
    $email = escapar($datos->email);
    $telefono = escapar($datos->telefono);
    $servicio = escapar($datos->servicio);
    $area = escapar($datos->area);
    $asunto = escapar($datos->asunto);
    $mensaje = escapar($datos->mensaje);
    
    $ValorServicio = ['pintura' => 20, 'drywall' => 45, 'sheetrock' => 33.05]; 
    $total = round($ValorServicio[$servicio] * $area, 2);

    $html = "
        <div style='background-color: #3873A6; text-align:center;'>
            <h2 style='color: white'>Rnueva</h2>
        </div>
        <div style='padding-top: 5px;'>
            <p>Hola $nombre hemos recibido la siguiente solicitud de cotización.</p>
            <div style='margin: 10px; padding:5px; border: 1px solid black;'>
                <p><b>Nombre: </b> $nombre</p>
                <p><b>Correo: </b> $email</p>
                <p><b>Teléfono: </b> $telefono</p>
                <p><b>Servicio: </b> $servicio</p>
                <p><b>Área: </b> $area m<sup>2</sup></p>
                <p><b>Asunto: </b> $asunto</p>
                <p><b>Mensaje: </b> $mensaje</p>
            </div>
            <h4>Resultados:</h4>
            <table style='width: 100%; border: 1px solid black; border-collapse: collapse;'>
                <tr>
                    <th style='padding: 4px; border: 1px solid black; border-collapse: collapse;'>Servicio</th>
                    <th style='padding: 4px; border: 1px solid black; border-collapse: collapse;'>Precio</th>
                    <th style='padding: 4px; border: 1px solid black; border-collapse: collapse;'>Área</th>
                    <th style='padding: 4px; border: 1px solid black; border-collapse: collapse;'>Total</th>
                </tr>
                <tr>
                    <td style='padding: 4px; border: 1px solid black; border-collapse: collapse;'>$servicio</td>
                    <td styleenvio del correo='padding: 4px; border: 1px solid black; border-collapse: collapse;'>$ $ValorServicio[$servicio]</td>
                    <td style='padding: 4px; border: 1px solid black; border-collapse: collapse;'>$area m<sup>2</sup></td>
                    <td style='padding: 4px; border: 1px solid black; border-collapse: collapse;'>$ $total</td>
                </tr>
            </table>
            <h5 style='margin-top: 10px'>Un placer atenderte, estamos a tu servicio.</h5>
        </div>
        ";
    $res = EnviarCorreo($email, $html);
    echo $res == '' ? 'true' : $res;
}
Cotizar();


/**
 * Realizar envio del correo
 * @param  string $email Correo del usuario que realizo cotizacion
 * @param  string $html Cuerpo del correo con formato HTML a enviar
 * @return string Mensaje de error en caso de error
 */
function EnviarCorreo($email, $html) {
    require 'vendor/autoload.php';
    $mail = new PHPMailer(true);
    try {
        //Server settings
        //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                     // Enable verbose debug output
        $mail->isSMTP();                                            // Send using SMTP
        $mail->Host = "smtp.gmail.com";                                         // Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
        $mail->Username = "infornueva21@gmail.com";                                // SMTP username
        $mail->Password = "Rnueva2021@";                            // SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
        $mail->Port       = '587';                                 // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
        $mail->CharSet = 'UTF-8';

        //Recipients
        $mail->setFrom("infornueva@gmail.com", 'Rnueva');
        $mail->addAddress($email);

        // Content
        $mail->isHTML(true);
        $mail->Subject = 'Rnueva - Cotización';
        $mail->Body    = $html;

        $mail->send();
    } catch (Exception $e) {
        echo "El correo fue enviado, error: {$mail->ErrorInfo}";
    }
}

