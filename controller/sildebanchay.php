<?php
	$_page = new slideBC();
	class slideBC
	{
		public $arrProductRandom;
		public $a;
		
		public function __construct() {
			$this->preLoad();
			$this->eventHandler();
			$this->pageLoad();
		}
		
		public function preLoad() {
			//init default como null
			$this->arrProductRandom = null;
			$productDAO = new productDAO();
			$this->arrProductRandom = $productDAO->getRandom(6);
		}
		
		public function eventHandler() {
			
		}
		
		public function pageLoad() {
			
			
		}
	}
?>
