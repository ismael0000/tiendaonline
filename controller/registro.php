<?php

$nombre="";
$apellidos="";
$direccion="";
$cp="";
$telefono="";
$email="";
$usuario="";
$contrasenya="";
$userRol = 'cliente';
$localidad = "";
$provincia = "";

if(isset($_POST["nombre"]))
$nombre = $_POST["nombre"];
if(isset($_POST["apellidos"]))
$apellidos = $_POST["apellidos"];
if(isset($_POST["direccion"]))
$direccion = $_POST["direccion"];
if(isset($_POST["cp"]))
$cp = $_POST["cp"];
if(isset($_POST["telefono"]))
$telefono = $_POST["telefono"];
if(isset($_POST["email"]))
$email = $_POST["email"];
if(isset($_POST["usuario"]))
$usuario = $_POST["usuario"];
if(isset($_POST["contrasenya"]))
$contrasenya = md5($_POST["contrasenya"]);
if(isset($_POST["localidad"]))
$localidad = $_POST["localidad"];
if(isset($_POST["provincia"]))
$provincia = $_POST["provincia"];


	//hacemos una instancia de la clase registro pasandole como parametros explicitos las variables recogidas del formulario
	$_page = new registro($usuario,$nombre,$apellidos,$direccion,$cp,$telefono,$localidad,$provincia,$email,$contrasenya,$userRol);
	
	
	class registro{
		private $userUsuario;
		private $userName;
	    private $userApellidos;
		private $userDireccion;
		private $userCP;
		private $userTelefono;
		private $userLocalidad;
		private $userProvincia;
		private $userEmail;
		private $userPassword;
	
		
		public function __construct($userUsuario,$userName,$userApellidos,$userDireccion,$userCP,$userTelefono,$userLocalidad,$userProvincia,$userEmail,$userPassword,$userRol) {
			$this->preLoad($userUsuario,$userName,$userApellidos,$userDireccion,$userCP,$userTelefono,$userLocalidad,$userProvincia,$userEmail,$userPassword,$userRol);
			$this->eventHandler();
			$this->pageLoad();
		}
		
		public function preLoad($userUsuario,$userName,$userApellidos,$userDireccion,$userCP,$userTelefono,$userLocalidad,$userProvincia,$userEmail,$userPassword,$userRol) {
		

			$this->userName= $userName;
			$this->userApellidos = $userApellidos;
			$this->userDireccion = $userDireccion;
			$this->userCP = $userCP;
			$this->userTelefono = $userTelefono;
			$this->userLocalidad = $userLocalidad;
			$this->userProvincia = $userProvincia;
			$this->userEmail = $userEmail;
			$this->userUsuario = $userUsuario;
			$this->userPassword = $userPassword;
			$this->userUsuario = $userUsuario;
			
			
			$userDAO = new userDAO();
			// Aqui controlo los campos obligatorios : Se usara tambien javascript para completar ese control del lado cliente

if($userName != "" and $userApellidos !="" and $userDireccion !="" and $userCP !="" and $userTelefono !="" and $userLocalidad != "" and $userProvincia != null and $userEmail!="" and $userUsuario != "" and $userPassword != ""){
			$userDAO->insertUser(  
									$userUsuario,
								   $userName,
								   $userApellidos,
								   $userDireccion,
								   $userCP,
								   $userTelefono,
								   $userLocalidad,
								   $userProvincia,
								   $userEmail,
								   $userPassword,
								   $userRol); 
					//header location con html
					echo "<meta http-equiv='refresh' content='1;url=\"../viewer/viewerController.php?page=list3&cat=1\"' />";
		}


	}
			
		public function eventHandler() {
			
		}
		
		public function pageLoad() {
			
		}
		
		
	}
?>
