<?php
    $destinatario = 'mineralesdeantequera@hotmail.com';
// esto es al correo al que se enviara el mensaje
        
        $nombre = $_POST['nombre'];
        $email = $_POST['email'];
        $asunto = $_POST['asunto'];
        $telefono = $_POST['telefono'];
        $mensaje = $_POST['mensaje'];
     

$header = "Enviado desde la página de minerales de antequera";
$mensajeCompleto = $mensaje . "\nAtentamente: " . $nombre . "\nCorreo " . $email . "\nTelefono: " . $telefono ;
    
    mail($destinatario, $asunto, $mensajeCompleto,  $header);
echo  ' <script>
         alert("El mensaje se envio corecctamente");
         window.history.go(-1);
         </script>';


?>