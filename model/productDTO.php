<?php 
	 class productDTO {
		public function __construct(){
		}
		public function getProductID(){
			return   $this->productID ;
		}
		public function setProductID($productID){
			 $this->productID = $productID;
		}
		public function getProductName(){
			return   $this->productName ;
		}
		public function setProductName($productName){
			 $this->productName = $productName;
		}
		public function getProductPrice(){
			return   $this->productPrice ;
		}
		public function setProductPrice($productPrice){
			 $this->productPrice = $productPrice;
		}
		public function getProductDetails(){
			return   $this->productDetails ;
		}
		
		//resumen de detalles por si no cabe (200 primeros caracteres)
		public function getProductDetails2(){
			$a = $this->productDetails ;
			$a = substr($a, 0 , 200)."...";
			return $a;
		}
		public function setProductDetails($productDetails){
			 $this->productDetails = $productDetails;
		}
		public function getProductManual(){
			return   $this->productManual ;
		}
		public function setProductManual($productManual){
			 $this->productManual = $productManual;
		}
		public function getCategoryID(){
			return   $this->categoryID ;
		}
		public function setCategoryID($categoryID){
			 $this->categoryID = $categoryID;
		}
		public function getProductImage(){
			return   $this->productImage ;
		}
		public function setProductImage($productImage){
			 $this->productImage = $productImage;
		}
		private $productID;
		private $productName;
		private $productPrice;
		private $productDetails;
		private $productManual;
		private $categoryID;
		private $productImage;
		
	 }
?>
