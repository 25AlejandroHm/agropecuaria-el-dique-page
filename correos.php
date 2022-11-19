<?php 
$destinatario = '1alejandrohm25@gmail.com'; //esto es para ti (tu correo)

$nombre =   $_POST['nombre'];
$asunto =   $_POST['asunto'];
$mensaje =  $_POST['mensaje'];
$email = $_POST['email'];

$header = "Enviado desde la página agropecuaria el dique";
$mensajeCompleto = $mensaje . "\nAtentamente: " . $nombre;

mail($destinatario, $asunto, $mensajeCompleto, $header);
echo "<script>alert('correo enviado exitosamente')</script>";   
echo "<script>setTimeout(\"location.href='index.html'\",1000)</script>";
?>