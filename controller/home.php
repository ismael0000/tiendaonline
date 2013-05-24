<?php
	$page = new home();
	class home {
		
		public $arrProductRandom;
		
		public function __construct() {
			$this->preLoad();
			$this->eventHandler();
			$this->pageLoad();
		}
		
		public function preLoad() {

			$this->arrProductRandom = null;
			
			$productDAO = new productDAO();
			$this->arrProduct = $productDAO->getRandom(6);
		}
		
		public function eventHandler() {
			
		}
		
		public function pageLoad() {
			
		}
		
	}
?>
