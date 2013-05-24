<?php

// la linea siguiente es para instanciar esa clase automaticamentecuando se incluye en el controllerviewer o en cualquier otra pagina
// Esa instancia se llamar $_page y estara siempre ahi !

	$_page = new home();
	class home {
		
		public $arrProductRandom;
		
		public function __construct() {
			$this->preLoad();
			$this->eventHandler();
			$this->pageLoad();
		}
		
		public function preLoad() {
			
			//iniciamos por defecto null
			
			$this->arrProductRandom = null;
			
			$productDAO = new productDAO();
			$this->arrProduct = $productDAO->getRandom(2);
		}
		
		public function eventHandler() {
			
		}
		
		public function pageLoad() {
			
		}
		
	}
?>
