<?php
	$destino ="resumiendoresumenes@gmail.com";
	$nombre = $_POST["nombre"];
	$correo = $_POST["correo"];
	$instagram = $_POST["usuario de instagram"];
	$mensaje = $_POST["mensaje"];
	$contenido = "Nombre: " . $nombre . "\nCorreo" . $correo . "\nInstagram" . $instagram . "\nMensaje" . $mensaje;
	mail($destino, "Contacto", $contenido);
	header("Location:gracias.html");
?>
