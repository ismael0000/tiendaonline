<?php 
	 class userDTO {
		public function __construct(){
		}
		public function getUserUsuario(){
			return   $this->userUsuario ;
		}
		public function setUserUsuario($userUsuario){
			 $this->userUsuario = $userUsuario;
		}
		public function getUserName(){
			return   $this->userName ;
		}
		public function setUserName($userName){
			 $this->userName = $userName;
		}
		public function getUserApellidos(){
			return   $this->userApellidos ;
		}
		public function setUserApellidos($userApellidos){
			 $this->userApellidos = $userApellidos;
		}
		public function getUserDireccion(){
			return   $this->userDireccion ;
		}
		public function setUserDireccion($userDireccion){
			 $this->userDireccion = $userDireccion;
		}
		public function getUserCP(){
			return   $this->userCP ;
		}
		public function setUserCP($userCP){
			 $this->userCP = $userCP;
		}
		public function getUserTelefono(){
			return   $this->userTelefono ;
		}
		public function setUserTelefono($userTelefono){
			 $this->userTelefono = $userTelefono;
		}
		public function getUserLocalidad(){
			return   $this->userLocalidad ;
		}
		public function setUserLocalidad($userLocalidad){
			 $this->userLocalidad = $userLocalidad;
		}
		public function getUserProvincia(){
			return   $this->userProvincia ;
		}
		public function setUserProvincia($userProvincia){
			 $this->userProvincia = $userProvincia;
		}
		public function getUserEmail(){
			return   $this->userEmail ;
		}
		public function setUserEmail($userEmail){
			 $this->userEmail = $userEmail;
		}
		
		public function getUserPassword(){
			return   $this->userPassword ;
		}
		public function setUserPassword($userPassword){
			 $this->userPassword = $userPassword;
		}
		public function getUserRol(){
			return   $this->userRol ;
		}
		public function setUserRol($userRol){
			 $this->userRol = $userRol;
		}
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
	 }
?>
