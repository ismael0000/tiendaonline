<?php
	$_page = new Cart();

	class Cart {
		public $carts;
		public $test;
		public $proId;
		public function __construct() {
			//session_start();
			$this->preLoad();
			$this->eventHandler();
			$this->pageLoad();	
		}
		public function preLoad() {
			//$this->carts = null;			
			$this->carts = $_SESSION['carts'];
			if(isset($_REQUEST["event"])){
				if($_REQUEST["event"]=='cart')
				{
					$id = $_POST["id"];
					$name = $_POST["name"];
					$price = $_POST["price"];
					$quantity = $_POST["quantity"];
				
						if($quantity == null || $quantity == "" )
					{
						$quantity = 1;
					}
				if($id != null     and       $id != ""   and  is_numeric($quantity))    {
					$item1=new CartDTO($id, $name, $price, $quantity);//esto es un producto pedido
					$this->addToCart($item1);
				}
					
					$_SESSION['carts'] = $this->carts;
					
			echo "<meta http-equiv='refresh' content='1;url=\"../viewer/viewerController.php?page=list3&cat=1\"' />";
				}
				
			}
		}	
		public function eventHandler() {
			if(isset($_REQUEST["event"])) {
				$eventName = $_REQUEST["event"];
			}
		}
		
		public function pageLoad() {
			
		}
		public function addToCart($item)
		{
			if(count($this->carts)>0)
			{
				$flag = false;
				for($i = 0; $i < count($this->carts); $i++)
				{
					$cart = $this->carts[$i];
					if($cart->getId() == $item->getId())
					{
						$quantity = $cart->getQuantity() + $item->getQuantity();
						$cart->setQuantity($quantity);
						$flag = true;
						return;
					}else{
						$flag = false;
					}
				}
				if($flag == false){
					$this->carts[] = $item;
				}
			}else{
				$this->carts[]=$item;
			}
		}
		public function cart(){}
		public function delete(){}
	}
?>
