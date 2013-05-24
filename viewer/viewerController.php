<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<?php
//include("../model/cartDTO.php");

	
		$dir = opendir("../model");
		while(($file = readdir($dir)) !== false) {
			if($file != "." && $file != "..")
				include_once("../model/$file");
			}
		closedir($dir);

	
session_start(); 
// iniciamos el array $_SESSION['carts'] donde vamos a guardar los productos en el carrito 
if(!isset($_SESSION['carts']))
$_SESSION['carts']=null;
	include_once("../sql/config.php");
	$page=$_GET['page'];
	$carpeta= '../controller';
	$directorio=opendir($carpeta); 

//buscamos dentro de la carpeta controller si existe una pagina que se llame 
//como $page.php sabemos que hay que instanciar al controlador para realizar
// la conexion con el modelo y hacemos include, sino nada

while ($archivo = readdir($directorio)){

	if( $archivo == $page.".php" ){
		include_once("../controller/$page.php"); 
	}
  }

	//include_once("../controller/$page.php");         //     esto instancia el controlador page, el que controla la pagina
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Mis Cositas</title>
<link href="../styles/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="../lib/zoomit/zoomIt.css" />
<script language="javascript" type="text/javascript" src="../lib/zoomit/script/jquery-v1.7.2.js"></script>
<script language="javascript" type="text/javascript" src="../lib/zoomit/script/jquery-ui-1.8.12.custom.min.js"></script>
<script language="javascript" type="text/javascript" src="../lib/zoomit/script/zoomit.jquery.js"></script>
<script type="text/javascript" src="../js/funciones.js"></script>


</head>



<script type="text/javascript">
// use load event on window to start the script
	jQuery(window).load(function(){		
		jQuery('.zoom').jqZoomIt();
		
	});
</script>




<header>
		<div class="topMenu">
			<div class="buscador">
				<form name="buscador" method = "POST" action = "viewerController.php?page=search">
					<input name="nd" type="text" />
					<input type="submit" value="buscar" id="buscar" name="buscar"/>
				</form>
			</div>
			<div class="carrito">
				<form name="carrito" method = "POST" action = "../viewer/viewerController.php?page=ViewOrder&event=view">
					<div class="carritoLeft"> <img src="../images/carrito.png"/></a></div>
					<div class="carritoRight"><input type="submit" value="Ver carrito" name="carrito"/></div>
				</form>
			</div>
			<div class="entrar">


         				<form name="registro" method = "POST" action = "../viewer/viewerController.php?page=registro&cat=3">
					<div class="registro"><input type="submit" value="Registro" name="registro"/></div>
				</form>



<?php

           	if(isset($_SESSION['logged'])){
				if($_SESSION['logged']== true){

			//si esta logeado que muestre opción logout
			 echo("
				<form name=\"login\" method = \"POST\" action = \"../viewer/viewerController.php?page=logout\">
					<div class=\"login\"><input type=\"submit\" value=\"Logout\" name=\"logout\"/></div>
				</form>
				");
           
 	}
	}
		else{
			//si no esta logeado que muestre opcion para login
             echo("
				<form name=\"login\" method = \"POST\" action = \"../viewer/viewerController.php?page=login&cat=3\">
					<div class=\"login\"><input type=\"submit\" value=\"Login\" name=\"login\"/></div>
				</form>");
        }

?>				

			</div>

			<?php

			if(isset($_SESSION['logged'])){
				if($_SESSION['logged']== true){
			//si esta logeado que muestre el mensaje:
			echo "Bienvenido ".$_SESSION['userName']." ".$_SESSION['userApellidos'];
 	}
	}
		else{
			//si no esta logeado que muestre el mensaje:
             echo "Bienvenido invitado";
		}
			?>
		</div> <!-- end topMenu -->
		
		<div class="logo"><a href="#"><img src="../images/logo.png" width="380" height="150"/></a></div>
	</header>
	<body>
	<nav class="menu">

		<ul class="nav">
			<li>
				<a href="..">Inicio<span class="flecha">&#9660;</span></a>
			</li>
			<li><a href="#">Muñecas goma eva<span class="flecha">&#9660;</span></a>
				<ul>
					<li><a href="../viewer/viewerController.php?page=list3&cat=1">Muñecas tipo</a></li>
					<li><a href="../viewer/viewerController.php?page=list4&cat=2">Muñecas personalizadas</a></li>
					<li><a href="../viewer/viewerController.php?page=list3&cat=3">Kit de muñecas goma eva</a></li>
				</ul>
			</li>
				<li><a href="#">Decoraciones varias<span class="flecha">&#9660;</span></a>
				<ul>
					<li><a href="../viewer/viewerController.php?page=list3&cat=4">Detalles escolares</a></li> <!-- lápices, libretas -->
					<li><a href="../viewer/viewerController.php?page=list3&cat=5">Cajas</a></li>
					<li><a href="../viewer/viewerController.php?page=list3&cat=6">Detalles comuniones</a></li>
					<li><a href="../viewer/viewerController.php?page=list3&cat=7">Complementos</a></li> <!--diademas -->
					<li><a href="../viewer/viewerController.php?page=list3&cat=8">Otros</a></li>
				</ul>
			</a></li>
			<li><a href="#">Goma eva<span class="flecha">&#9660;</span></a>
				<ul>
					<li><a href="../viewer/viewerController.php?page=list3&cat=9">Colores lisos</a></li>
					<li><a href="../viewer/viewerController.php?page=list3&cat=10">Estampados</a></li>
					<li><a href="../viewer/viewerController.php?page=list3&cat=11">Con texturas</a></li>
				</ul>
			</li>
			<li><a href="#">Material<span class="flecha">&#9660;</span></a>
				<ul>
					<li><a href="../viewer/viewerController.php?page=list3&cat=12">Herramientas</a></li> <!-- palillos, temperas, rotuladores, pistola silicona, barra silicona, pegamento instantáneo, pegamento goma eva, cuter, tijeras normales, tijeras formas, ceras colores, pinceles, papel calcar, stencil bocas, stencil ojos -->
					<li><a href="../viewer/viewerController.php?page=list3&cat=13">Complementos</a></li> <!-- cintas decoradas, pompones, abalorios, pegatinas -->
				</ul>
			</li>
		</ul>
	</nav>

<div class="body2">
	<div class="maintop2"></div>
	<div class="main">
   	  <div class="main_header"></div>	
   	  		<div style='position:relative;float:left;width:120px'>&nbsp;</div>
        <div class="main_wrapper">
             <!-- importante el controlador que cambia el contenido de las paginas -->     
              </div>
                <div class="main_right">
				<?php
				if(isset($_POST['nd']))	$nd = $_POST['nd'];
				if(isset($_GET['page1']))	$page1 = $_GET['page1'];
				if(isset($_GET['cat'])) $cat = $_GET['cat'];

					include_once("../viewer/$page.php");
				?>
                
				<?php 
					if(isset($list_page))
					{
						echo("<div align='right'>{$list_page}</div><br/>");
					}
				?>
				</div> <!--end main_right-->
				<div id='right'>
					
                    <div class="tit_bot">
						<div><img class="chat" align="baseline" src="../images/chatonline.jpg" alt="Chat Online"></div>
					</div>
					<div id="fotosLateral">
						<?php
								include_once("../controller/sildebanchay.php");
								include_once("../viewer/sildebanchay.php");
						?>
					</div>
				</div>
      	</div>  <!--end main_wrapper-->
  </div> <!-- end main -->
  	
</div>





	<span class="footer2">

		<div class="footerIz">
			<ul>
				<li><a href="../viewer/viewerController.php?page=nosotros&cat=3">Acerca de Nosotros</a></li>
				<li><a href="../viewer/viewerController.php?page=TerminosLegales&cat=3">Términos Legales</a></li>
				<li><a href="../viewer/viewerController.php?page=preguntasFrecuentes&cat=3">Preguntas Frecuentes</a></li>
				<li><a href="../viewer/viewerController.php?page=contacta">Contacta</a></li>
			</ul>
		</div>

		<div class="footerCopy">&copy; Copyright 2013</div>
		<div class="footerSocial">
			<ul>
				<li><a href="https://www.facebook.com/pages/Mis-Cositas/123594457829670?skip_nax_wizard=true"><span class="soc1"><img src="../images/social/facebook.png"/></span></a></li>
				<li><a href="https://twitter.com/welcome/recommendations""><span class="soc2"><img src="../images/social/twitter.png"/></span></a></li>
				<!--<li><a href="http://www.youtube.com/channel/UCDrA_QjD_mJ2otFspmQFshA/videos?view=1&feature=guide"><span class="soc4"><img src="../images/social/youtube.png"/></span></a></li>-->
			</ul>
		</div>
	</span>
</body>
</html>
