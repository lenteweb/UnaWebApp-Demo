<?php
	$mail="lenteweb@gmail.com";
	$nombre = $_POST["nombre"];
	$email = $_POST["email"];
	$mensaje = $_POST["mensaje"];
	$thank="gracias.html";
	$message = "
	nombre:".$nombre."
	email:".$email."
	mensaje:".$mensaje."";
	if (mail ($email , "formulario",$message)) Header ("location: $thank");
	
	?>