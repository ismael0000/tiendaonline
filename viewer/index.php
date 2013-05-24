<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Mis Cositas</title>
<!-- Importamos nuestros estilos generales-->
<link href="styles/style.css" rel="stylesheet" type="text/css" /> 
<!-- Importamos la libreria de jquery -->
<script language="javascript" type="text/javascript" src="../lib/zoomit/script/jquery-ui-1.8.12.custom.min.js"></script>
<!-- Este fichero de jquery es esclusivo del manejo de flash de esta pagina -->
<script src="jquery/AC_RunActiveContent.js" type="text/javascript"></script>

</head>
<body>

	<header>
		<div class="topMenu">
			<div class="buscador">
				<form name="buscador" method = "POST" action = "viewer/viewerController.php?page=search">
					<input name="nd" type="text" />
					<input type="submit" value="buscar" id="buscar" name="buscar"/>
				</form>
			</div>
			<div class="carrito">
				<form name="carrito" method = "POST" action = "viewer/viewerController.php?page=ViewOrder&event=view">
					<div class="carritoLeft"><img src="images/carrito.png"/></a></div>
					<div class="carritoRight"><input type="submit" value="Ver carrito" name="carrito"/></div>
				</form>
			</div>
			<div class="entrar">


         				<form name="registro" method = "POST" action = "viewer/viewerController.php?page=registro&cat=3">
					<div class="registro"><input type="submit" value="Registro" name="registro"/></div>
				</form>



<?php

           	if(isset($_SESSION['logged'])){
				if($_SESSION['logged']== true){


			 echo("
				<form name=\"login\" method = \"POST\" action = \"viewer/viewerController.php?page=logout\">
					<div class=\"login\"><input type=\"submit\" value=\"Logout\" name=\"logout\"/></div>
				</form>
				");
           
 	}
	}
		else{

             echo("
				<form name=\"login\" method = \"POST\" action = \"viewer/viewerController.php?page=login&cat=3\">
					<div class=\"login\"><input type=\"submit\" value=\"Login\" name=\"login\"/></div>
				</form>");
        }

?>				

			</div>

			<?php

			if(isset($_SESSION['logged'])){
				if($_SESSION['logged']== true){

			echo "Bienvenido ".$_SESSION['userName']." ".$_SESSION['userApellidos'];
 	}
	}
		else{
	
             echo "Bienvenido invitado";
		}
			?>
		</div> <!-- end topMenu -->
		<!--
		<div class="banderas">
			<span class="banderaCatalana"><a href="#"><img src="../images/banderaCatalana.png"/></a></span>
			<span class="banderaEspanola"><a href="#"><img src="../images/banderaEspanola.png"/></a></span>
		</div>
		-->
		<div class="logo"><a href="#"><img src="images/logo.png" width="380" height="150"/></a></div>
	</header>
	<body>
	<nav class="menu">

		<ul class="nav">
			<li>
				<a href=".">Inicio<span class="flecha">&#9660;</span></a>
			</li>
			<li><a href="#">Muñecas goma eva<span class="flecha">&#9660;</span></a>
				<ul>     <!-- pasamos al contralador de vistas la forma de listar y la categoria segun producto -->
					<li><a href="viewer/viewerController.php?page=list3&cat=1">Muñecas tipo</a></li>
					<li><a href="viewer/viewerController.php?page=list4&cat=2">Muñecas personalizadas</a></li>
					<li><a href="viewer/viewerController.php?page=listKit&cat=3">Kit de muñecas goma eva</a></li>
				</ul>
			</li>
				<li><a href="#">Decoraciones varias<span class="flecha">&#9660;</span></a>
				<ul>
					<li><a href="viewer/viewerController.php?page=list3&cat=4">Detalles escolares</a></li> <!-- lápices, libretas -->
					<li><a href="viewer/viewerController.php?page=list3&cat=5">Cajas</a></li>
					<li><a href="viewer/viewerController.php?page=list3&cat=6">Detalles comunión</a></li>
					<li><a href="viewer/viewerController.php?page=list3&cat=7">Complementos</a></li> <!--diademas -->
					<li><a href="viewer/viewerController.php?page=list3&cat=8">Otros</a></li>
				</ul>
			</a></li>
			<li><a href="#">Goma eva<span class="flecha">&#9660;</span></a>
				<ul>
					<li><a href="viewer/viewerController.php?page=list3&cat=9">Colores lisos</a></li>
					<li><a href="viewer/viewerController.php?page=list3&cat=10">Estampados</a></li>
					<li><a href="viewer/viewerController.php?page=list3&cat=11">Con texturas</a></li>
				</ul>
			</li>
			<li><a href="#">Material<span class="flecha">&#9660;</span></a>
				<ul>
					<li><a href="viewer/viewerController.php?page=list3&cat=12">Herramientas</a></li> <!-- palillos, temperas, rotuladores, pistola silicona, barra silicona, pegamento instantáneo, pegamento goma eva, cuter, tijeras normales, tijeras formas, ceras colores, pinceles, papel calcar, stencil bocas, stencil ojos -->
					<li><a href="viewer/viewerController.php?page=list3&cat=13">Complementos</a></li> <!-- cintas decoradas, pompones, abalorios, pegatinas -->
				</ul>
			</li>
		</ul>
	</nav>
	<!-- Ejecutamos el fichero de Flash como intro -->
    <section class="carrusel">
		<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=10,0,0,0" width="970" height="420" id="main_flash" align="middle">
		<param name="allowScriptAccess" value="sameDomain" />
		<param name="allowFullScreen" value="false" />
		<param name="movie" value="flash/carrusel.swf" /><param name="quality" value="high" /><param name="wmode" value="transparent" /><param name="bgcolor" value="#FFFFFF" />	<embed src="flash/carrusel.swf" quality="high" wmode="transparent" bgcolor="#FFFFFF" width="970" height="420" name="principal" align="middle" allowScriptAccess="sameDomain" allowFullScreen="false" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
    </section>
	<!-- El pie de la pagina -->
<span class="footer">

		<div class="footerIz">
			<ul>

				<li><a href="./viewer/viewerController.php?page=nosotros&cat=3">Acerca de Nosotros</a></li>
				<li><a href="./viewer/viewerController.php?page=TerminosLegales&cat=3">Términos Legales</a></li>
				<li><a href="./viewer/viewerController.php?page=preguntasFrecuentes&cat=3">Preguntas Frecuentes</a></li>
				<li><a href="./viewer/viewerController.php?page=contacta">Contacta</a></li>
			</ul>
		</div>

		<div class="footerCopy">&copy; Copyright 2013</div>
		<div class="footerSocial">
			<ul>
				<li><a href="https://www.facebook.com/pages/Mis-Cositas/123594457829670?skip_nax_wizard=true"><span class="soc1"><img src="images/social/facebook.png"/></span></a></li>
				<li><a href="https://twitter.com/welcome/recommendations"><span class="soc2"><img src="images/social/twitter.png"/></span></a></li>
				<!--<li><a href="http://www.youtube.com/channel/UCDrA_QjD_mJ2otFspmQFshA/videos?view=1&feature=guide"><span class="soc4"><img src="images/social/youtube.png"/></span></a></li>-->
			</ul>
		</div>
	</span>

</body>
</html>
