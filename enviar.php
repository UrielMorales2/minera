<?php

$nombre = $_POST["nombre"];
$correo = $_POST["correo"];
$telefono = $_POST["telefono"];
$mensaje = $_POST["mensaje"];

$body = "Nombre: " . $nombre . "<br>Correo: " . $correo . "<br>Telefono: " . $telefono . "<br>Mensaje: " . $mensaje;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';


$mail = new  PHPMailer ( true );                                                    // La instanciación y el paso de `true` habilita 
//excepciones 
try {
     // Configuración del servidor 
    $mail -> SMTPDebug =0 ;                                                         // Habilita la salida de depuración detallada 
    $mail -> isSMTP ();                                                             // Enviar usando SMTP 
    $mail -> Host  = 'smtp.gmail.com' ;                                             // Configure el servidor SMTP para enviar a través de  
    $mail -> SMTPAuth   = true ;                                                    // Habilita la autenticación SMTP 
    $mail -> Username = 'antequeraminerales1@gmail.com' ;                           // Nombre de usuario SMTP 
    $mail -> password    = 'minerales123' ;                                         // Contraseña SMTP 
    $mail -> SMTPSecure = 'TLS' ;                                                   // Habilite el cifrado TLS; `PHPMailer :: ENCRYPTION_SMTPS` alentó 
    $mail -> Port        = 587 ;                                                    // Puerto TCP para conectarse, use 465 para `PHPMailer :: ENCRYPTION_SMTPS` arriba

    // Recipients 
    $mail -> setFrom ( 'antequeraminerales1@gmail.com' , $nombre );
    $mail -> addAddress ( 'antequeraminerales1@gmail.com' );                        // Add a recipient 
   

   // Content
    $mail -> isHTML ( true );                                                     // Establecer el formato de correo electrónico en HTML
    $mail -> Subject = ' asunto Importante' ;
    $mail -> Body    = $body ;
    $mail -> CharSet = 'UTF-8';
    $mail -> IsHTML (true);
    $mail -> send();
    echo  ' <script>
         alert("El mensaje se envio corecctamente");
         window.history.go(-1);
         </script>';
    
} catch (Exception $e) {
     echo  "No se pudo enviar el mensaje. Error de correo:", $mail->ErrorInfo ;
}