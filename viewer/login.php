


	<form name="formLogin" class='contacto' method='POST' action='../viewer/viewerController.php?page=login'>
		<div><label>Usuario:</label><input name='usuario' type='text' required></div>
        <div><label>Contraseña</label><input name='contrasenya' type='password' required></div>
        <div><input name='submit' type='submit' value='Envia Mensaje'></div>
    </form>

<div id="mensajeLogin">
<?php
if( !isset($_SESSION['logged'])   and    isset($_POST['usuario'])     and     isset($_POST['contrasenya'])   ){
				echo "mmm .. este usuario no lo tenemos en  miscositas!!";				
			}
?>
</div>
