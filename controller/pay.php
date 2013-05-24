<?php
	session_start();
	$sum =  $_SESSION["sum"];
	$selected_course_list = $_SESSION["selected_course_list"]
?>


<!DOCTYPE html>
<html lang="es">
<head>
	<title>areafp | matricularse fp a distancia </title>
	<meta charset="utf-8">
	  <meta name="Keywords" content="formacion profesional a distancia.cursos a distancia,elearning, centro de estudios, pruebas de acceso mayores de 25 años,pruebas de acceso mayores de 45 años, cursos, cursos formacion profesional, fp, cfgm,cfgs, acceso a universidad" />
  <meta name="Description" content="Cursos a distancia y Cursos online para aprobar por libre formacion profesional y pruebas de acceso. Especialistas en formación porfesional grado superior a distancia y en formación porfesional grado superior a distancia. Descubre todos los cursos online y a distancia que ofrecemos para mejorar tu futuro laboral." />
  <meta http-equiv="Content-Style-Type" content="text/css" />
	<link rel="stylesheet" href="../css/reset.css" type="text/css" media="all">
	<link rel="stylesheet" href="../css/grid.css" type="text/css" media="all">
	<link rel="stylesheet" href="../css/style.css" type="text/css" media="all">
	<link rel="stylesheet" href="../css/jquery-ui-1.8.5.custom.css" type="text/css" media="all">
	<script type="text/javascript" src="../js/jquery-1.4.2.min.js" ></script>
	<script type="text/javascript" src="../js/jquery.cycle.all.js"></script>
	<script type="text/javascript" src="../js/jquery-ui-1.8.5.custom.min.js"></script>
	<!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js" type="text/javascript"></script>-->
	<script src="../js/jquery.timer.js" type="text/javascript"></script>
	<script src="../js/jquery.easing.1.3.js" type="text/javascript"></script>
	<script src="../js/jquery.dwdinanews.0.1.js" type="text/javascript"></script>
<style>
	
	body{
		color:black;
	}
</style>

	<!--[if lt IE 9]>
		<script type="text/javascript" src="js/html5.js"></script>
	<![endif]-->
</head>

<body>
	<header>
		<nav>
			<div class="container">
				<div class="wrapper">
					<h1><a href="../"><strong>AreaFP</strong>.com</a></h1>
					<ul>
						<li><a href="../">FP</a></li>
						<li><a href="../formacion-profesional-desde-casa">POR QUÉ AREAFP?</a></li>
						<li><a href="../cursos-formacion-profesional">fp a distancia</a></li>
						<li><a href="../pruebas-de-acceso-45-25-fp">pruebas de acceso</a></li>
						<li><a href="../secretaria-area-formacion-profesional">secretaria</a></li>
						<li><a href="../webinar-formacion-profesional">Acceso clases</a></li>
						<li><a href="../campus-virtual-areafp">Acceso campus</a></li>
					</ul>
				</div>
			</div>
		</nav>
		<section class="adv-content">
			<div class="container">
				<ul class="breadcrumbs">
					<li>Matricula</li>
				</ul>
				<form action="" id="search-form">
					<fieldset>
						<input type="text" value=""><input type="submit" value="">
					</fieldset>
				</form>
			</div>
		</section><div class="ic">Matricula</div>
	</header>
	<section id="content">
		<div class="top">
			<div class="container">
				<div class="clearfix">
					
				

					



	

<div  id="form-container" style="margin-right: 300 px;background-color:#2E9AFE;color:black;padding:25px;">
	<h2>Confirmar pago</h2><br><br><br>
	<h3>Estás a punto de matricularte en los siguientes cursos: </h3>
	<?php echo $selected_course_list; ?>
	
	<h3>Importe Total: <?php echo $sum." Eur" ?></h3>
	
	<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
		<input type="hidden" name="cmd" value="_xclick">
		<input type="hidden" name="business" value="xavierresa@gmail.com">
		<input type="hidden" name="lc" value="ES">
		<input type="hidden" name="item_name" value="AreaFP.com">
		<input type="hidden" name="amount" value="<?php echo $sum; ?>">
		<input type="hidden" name="currency_code" value="EUR">
		<input type="hidden" name="button_subtype" value="services">
		<input type="hidden" name="no_note" value="0">
		<br><br><br>
		<input type="hidden" name="bn" value="PP-BuyNowBF:btn_buynowCC_LG.gif:NonHostedGuest">
		<input type="image" src="https://www.paypalobjects.com/es_ES/ES/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
		<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
		<br><br><br>
		</form>

</div>
<br><br><br>

					
				</div>
			</div>
		</div>
	<div class="bottom">
			<div class="container">
				<div class="wrapper">
					<div class="grid4 first">
						<h3>Bolsa de trabajo</h3>
						<ul class="list1">
							<li><a href="../campus-virtual-areafp">Bolsa de practicas</a></li>
							<li><a href="../campus-virtual-areafp">Bolsa de trabajo</a></li>
							<li><a href="../acuerdos-y-colaboraciones/index.php#acuerdos-con-universidades">Acuerdos con universidades</a></li>
							<li><a href="../acuerdos-y-colaboraciones/index.php#empresas-colaboradoras">Empresas colaboradoras</a></li>
							<li><a href="../acuerdos-y-colaboraciones/index.php#acreditaciones">Acreditaciones</a></li>
						</ul>
					</div>
					<div class="grid4">
						<h3>Enlaces rápidos</h3>
						<ul class="list2">
							<li><a href="../campus-virtual-areafp">Campus virtual</a></li>
							<li><a href="../webinar-formacion-profesional">Clases online</a></li>
							<li><a href="../cursos-formacion-profesional">Ciclos formativos CFGM-CFGS</a></li>
							<li><a href="../pruebas-de-acceso-45-25-fp">Pruebas de acceso</a></li>
						</ul>
					</div>
					<div class="grid4">
						<h3>Webs amigas</h3>
						<ul class="list2">
							<li><a href="https://www.upc.edu/?set_language=es">Universitat Politècnica de Catalunya</a></li>
							<li><a href="http://www.mediterraneanuniversity.com">Mediterranean Internacional Wellness University</a></li>
							<li><a href="http://www.cresca.upc.edu/">Centre de Recerca en Seguretat i Control Alimentari</a></li>
							<li><a href="http://www.gencat.cat/">Generalitat de Catalunya</a></li>
						</ul>
		
			</div>
		</div>
	</section>
	<footer>
		<div class="container">
			<div class="wrapper">
				<div class="copy">AreaFP (c) 2013	|	<a href="../politica-privacidad-area-fp">Política de privacidad de datos</a></div>
				<address class="phone">
					Servicio Información Telefonica: Horario de Lunes a Viernes de 9:00 a 14:00 . <strong>902 000 000 </strong>
				</address>
			</div>

			
		</div>
	</footer>
</body>
</html>
