<?php

$name = $_POST['nombre'];
$mail = $_POST['email'];
$phone = $_POST['telefono'];
$asunt = $_POST['asunto'];
$menssage = $_POST['mensaje'];

$header = 'from:  ' . $mail . "\r\n";
$header .= "X-Mailer: PHP/" . phpversion() . "\r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type:  text/plain";


$menssage = "Este mensaje fue enviado por: " . $name . "\r\n";
$menssage .= "e-mail: " . $mail . "\r\n";
$menssage .= "Telefono: " . $phone . "\r\n";
$menssage .= "Mensaje: " . $menssage ."\r\n";
$menssage .= "Emviado el:" . date('d/m/Y', time());


$para = 'antequeraminerales1@gmail.com';

mail($para, $asunt, utf8_decode($menssage), $header);

header("Location:index.html");

?>