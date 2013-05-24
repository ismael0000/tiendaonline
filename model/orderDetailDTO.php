<?php
	 class orderDetailDTO {
		public function __construct(){
		}
		public function getOrderId(){
			return   $this->orderId ;
		}
		public function setOrderId($orderId){
			 $this->orderId = $orderId;
		}
		public function getProductId(){
			return   $this->productId ;
		}
		public function setProductId($productId){
			 $this->productId = $productId;
		}
		public function getName(){
			return   $this->name ;
		}
		public function setName($name){
			 $this->name = $name;
		}
		public function getQuantity(){
			return   $this->quantity ;
		}
		public function setQuantity($quantity){
			 $this->quantity = $quantity;
		}
		public function getPrice(){
			return   $this->price ;
		}
		public function setPrice($price){
			 $this->price = $price;
		}
		
		private $orderId;
		private $productId;
		private $name;
		private $quantity;
		private $price;
		private $userUsuario;
	}
?>
