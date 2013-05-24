<?php
							  
	$_page = new order();
	class Order 
	{
		public $carts;
		public function __construct() 
		{
			//session_start();
			$this->preLoad();
			//$this->eventHandler();
			$this->pageLoad();
		}
		public function preLoad() {
			//init default default
			$this->carts = null;
			//echo(count($_SESSION['carts']));
			$this->carts = $_SESSION['carts'];
			$orderDAO = new orderDAO();
			
			$idCarrito =  $orderDAO->generarIDcarrito();
			foreach($this->carts as $item){
				
				$productID = $item->getID();
				$name = $item->getName();
				$price = $item->getPrice();
				$quantity = $item->getQuantity();
				$subtotal = $item->getPrice() * $item->getQuantity();
				$userUsuario = $_SESSION['userUsuario'];
				
				$orderDAO->insertOrder($idCarrito,$productID,$name,$price,$quantity,$subtotal,$userUsuario);
			
		}

	}
			public function pageLoad(){}
		public function view(){}
}
?>
