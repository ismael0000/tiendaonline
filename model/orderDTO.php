<?php
	 class orderDTO {
		public function __construct(){
		}
		public function getOrderID(){
			return   $this->orderID ;
		}
		public function setOrderID($orderID){
			 $this->orderID = $orderID;
		}
		public function getProductID(){
			return   $this->productID ;
		}
		public function setProductID($productID){
			 $this->productID = $productID;
		}
		public function getName(){
			return   $this->name ;
		}
		public function setName($name){
			 $this->name = $name;
		}
		public function getPrice(){
			return   $this->price ;
		}
		public function setPrice($price){
			 $this->price = $price;
		}
		public function getQuantity(){
			return   $this->quantity ;
		}
		public function setQuantity($quantity){
			 $this->quantity = $quantity;
		}
		public function getsubtotal(){
			return   $this->subtotal ;
		}
		public function setsubtotal($subtotal){
			 $this->subtotal = $subtotal;
		}
		public function getUserUsuario(){
			return   $this->userUsuario ;
		}
		public function setUserUsuario($userUsuario){
			 $this->userUsuario = $userUsuario;
		}
		public function getFecha(){
			return   $this->fecha ;
		}
		public function setFecha($fecha){
			 $this->fecha = $fecha;
		}
		private $orderID;
		private $productID;
		private $name;
		private $price;
		private $quantity;
		private $subtotal;
		private $userUsuario;
		private $fecha;
	}
?>
