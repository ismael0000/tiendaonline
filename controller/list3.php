<?php
	$_page = new _list2();
	class _list2 {
		
		public $arrProduct;
		public $objCategory;
		
		public function __construct() {
			$this->preLoad();
			$this->eventHandler();
			$this->pageLoad();
		}
		
		public function preLoad() {
			//init default default
			$this->arrProduct = null;
			$this->objCategory = null;
			
			if(isset($_GET["cat"])) $categoryID = $_GET["cat"];
			else exit();
			
			$categoryDAO = new categoryDAO();
			$arrCategoryTemp = $categoryDAO->getCategories($categoryID,null);
			
			if(count($arrCategoryTemp)>0)
				$this->objCategory = $arrCategoryTemp[0];
			
			$productDAO = new productDAO();
			$this->arrProduct = $productDAO->getProducts(  null,
														   null,
														   null,
														   null,
														   null,
														   $categoryID,
														   null); 
		}
		
		public function eventHandler() {
			
		}
		
		public function pageLoad() {
			
		}
		
		
	}
?>
