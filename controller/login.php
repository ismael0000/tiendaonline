<?php
$userUsuario="";
$userPassword="";
if(isset($_POST["usuario"]))
$userUsuario = $_POST["usuario"];
if(isset($_POST["contrasenya"]))
$userPassword = $_POST["contrasenya"];

if($userUsuario!="" and $userPassword!="")
$_page = new login($userUsuario,$userPassword);

	class login {
		public $userUsuario;
		public $userName;
	    public $userApellidos;
		public $userDireccion;
		public $userCP;
		public $userTelefono;
		public $userEmail;
		public $userPassword;

		
		public function __construct($userUsuario,$userPassword){
			//session_start();
			$this->preLoad($userUsuario,$userPassword);
			$this->eventHandler();
			$this->pageLoad();	
			
		}
		public function preLoad($userUsuario,$userPassword) {
				
			
				
			$loginDAO = new loginDAO();
			
			if($loginDAO->searchLogin($userUsuario, $userPassword)){
				$datos = $loginDAO->searchLogin($userUsuario, $userPassword);
				$_SESSION['logged'] = true;

				$_SESSION['userUsuario'] = $datos['userUsuario'];
				$_SESSION['userName'] = $datos['userName'];
				$_SESSION['userApellidos'] = $datos['userApellidos'];
				$_SESSION['userDireccion'] = $datos['userDireccion'];
				$_SESSION['userCP'] = $datos['userCP'];
				$_SESSION['userTelefono'] = $datos['userTelefono'];
                $_SESSION['userEmail'] = $datos['userEmail'];
                $_SESSION['userPassword'] = $datos['userPassword'];
                $_SESSION['userRol'] = $datos['userRol'];
                
                echo "<meta http-equiv='refresh' content='1;url=\"../viewer/viewerController.php?page=list3&cat=1\"' />";
			}
			else 
				session_destroy();

}
					//header("Location: index.php");
			
		
	
		public function eventHandler() {
		
		}
		
		public function pageLoad() {
			
		}
		
		public function addToCart($item)
		{			
		}
		public function cart(){}
		public function delete(){}
	}
?>
