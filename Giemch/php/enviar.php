<?php

$destino = $_POST['guille_luna27@outlook.com'];
// recogeremos los datos del formulario
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$asunto = $_POST['asunto'];
$mensaje = nl2br($_POST['mensaje']);
// dentro de la variable contenido se va a concatenar
$contenido = "Nombre: " . $nombre . "\nCorreo: " . $email . "\nMensaje: " . $mensaje;
// este método mail es para enviar el correo.
mail($destino, $asunto, $contenido);
//método header para redirecciónar a una página.
header("Location: ../index.html")

?>
