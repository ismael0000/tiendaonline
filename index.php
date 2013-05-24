<?php
	session_start();
	/* Cargamos todos los ficheros de la carpeta model */
		$dir = opendir("model");
		while(($file = readdir($dir)) !== false) {
			if($file != "." && $file != "..")
				include_once("model/$file");
		}
		closedir($dir);
	
	/* Cargamos la configuracion de la base de datos  */
		include_once("sql/config.php");

		
	//Cargamos categorias
	$_categoryDAO = new categoryDAO();
	$_arrCategory = $_categoryDAO->getCategories(null,null);
	$_categoryDAO = null;
	// llamamos a la vista del inicio
   include("viewer/index.php");

?>
