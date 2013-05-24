<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>sin título</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 1.22" />
	
</head>

<body>
	<?php

$destinatario = "ismael.el.haloui@gmail.com";
$asunto = "Consulta TiendaOnLine: miscositas";
if(isset($_POST['nombre']))
$nombre = $_POST['nombre'];
if(isset($_POST['email']))
$remitente = $_POST['email'];
if(isset($_POST['texto']))
$texto = $_POST['texto'];
$headers = " ";
if (isset($_POST['texto']) or isset($_POST['email']) or isset($_POST['nombre']) ){
$mensaje = "\n Nombre: ".$nombre."\n Asunto: ".$asunto."\n Email remitente: ".$remitente."\n Consulta: ".$texto;
mail($destinatario, $asunto, $mensaje);
}

?>


	<form name="form" class='contacto' method='POST' action='$_SERVER[PHP_SELF]?page=contacta' enctype="multipart/form-data">
			<div><label>Nombre:</label><input name='nombre' type='text'  value=''></div>
            <div><label>Email:</label><input name='email' type='text'  value=''></div>
            <div><label>Escribe tu consulta aquí:</label><textarea name='texto' rows="15"  value=''></textarea></div>
            <div><input name='submit' type='submit' value='Envia Mensaje'></div>
        </form>
</body>

</html>
