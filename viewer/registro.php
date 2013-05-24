<?php
include_once("../controller/registro.php");
?>
	<!-- validamos el formulario de forma nativa con los elementos de html5: 
	required: el campo no puede estar vacío
	pattern: tiene que cumplir un patrón	
	 -->
	<form name="formLogin" class='registro2' method='POST' action='../viewer/viewerController.php?page=registro' onsubmit="return validarFormulario()">
		<input name='page' type='hidden'  value='registro'>	
		<br><br><br>
		<h2>Introduce tus datos:</h2>
		<span class="loginLeft">
			<div><label>Nombre:</label><input name='nombre' type='text' pattern="[a-zA-Z]{3,}"  value='' required></div>
			<div><label>Apellidos:</label><input name='apellidos' type='text' value='' required></div>
			<div><label>Dirección:</label><input name='direccion' type='text'  value='' required></div>
			<div><label>CP:</label><input name='cp' type='text' pattern="[0-9]{5}" value='' required></div>
			<div><label>Teléfono:</label><input name='telefono' type='text' pattern="[0-9]{9}" value='' required></div>
		</span>
		<span class="loginRight">
			<div><label>Localidad:</label><input name='localidad' type='text' value='' required></div>
			<div><label>Provincia:</label><input name='provincia' type='text' value='' required></div>
			<div><label>Email:</label><input name='email' type='email'  value='' pattern="^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$" required></div>
			<div><label>Usuario:</label><input name='usuario' type='text'  value='' required></div>
			<div><label>Contraseña</label><input name='contrasenya' type='password'  value='' required></div>
		</span>
		<div><input name='submit' type='submit' value='Enviar datos'></div>
	</form>

