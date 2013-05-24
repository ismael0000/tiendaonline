<?php
	$_page = new detail();
	class detail {
		
		public $objCategory;
		public $objProduct;
		public $message;
		public $page2;
		public $categoryID;
		public $arrProduct;
		public $objCategory1;
		
		public function __construct() {
			$this->preLoad();
			$this->eventHandler();
			$this->pageLoad();
		}
		
		public function preLoad() {
			//init default default
			$this->objCategory = null;
			$this->objProduct = null;
			$this->page2 = null;
			$this->categoryID = null;
			$this->message = null;
			$this->arrProduct = null;
			$this->objCategory1 = null;
			
			if(isset($_GET["categoryID"])) 
				$categoryID = $_GET["categoryID"];
			else exit();
			
			$categoryDAO = new categoryDAO();
			$arrCategoryTemp = $categoryDAO->getCategories($categoryID,null);
			
			if(count($arrCategoryTemp)>0)
				$this->objCategory1 = $arrCategoryTemp[0];
			
			$productDAO = new productDAO();
			$this->arrProduct = $productDAO->getProducts(  null,
														   null,
														   null,
														   null,
														   null,
														   $categoryID,
														   null); 
			
			if(isset($_GET["page2"])) $this->page2 = $_GET["page2"];
			else exit();
						
			if(isset($_GET["productID"])) $productID = $_GET["productID"];
			else exit();
			
			$productDAO = new productDAO();
			$arrTemp = $productDAO->getProducts($productID,null,null,null,null,null,null);
			if(count($arrTemp)>0)
				$this->objProduct = $arrTemp[0];
			
			$categoryDAO = new categoryDAO();
			$arrTemp = $categoryDAO->getCategories($this->objProduct->getCategoryID(),null);
			if(count($arrTemp)>0)
				$this->objCategory = $arrTemp[0];
			
		}
		
		public function eventHandler() {
			if(isset($_REQUEST["event"])) {
				$eventName = $_REQUEST["event"];
				eval("\$this->$eventName();");
			}
		}
		
		public function pageLoad() {
			
		}
		
		private function orderProduct() {
			$productID = $_POST["productID"];
			$customerName = $_POST["customerName"];
			$customerPhone = $_POST["customerPhone"];
			$customerEmail = $_POST["customerEmail"];
			
			$orderDAO = new orderDAO();
			$orderDAO->insertOrder($productID,
								   $customerName,
								   $customerPhone,
								   $customerEmail);
													 
				$this->message = "Orden realizada con exito,Nos pondremos en contacto contigo lo mas rapidamente posible";
		}
		
	}
?>
