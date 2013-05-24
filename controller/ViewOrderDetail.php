<?php
	$_page = new ViewOrderDetail();
	class ViewOrderDetail{
		public function __construct() {
			//session_start();
			$this->preLoad();
			$this->eventHandler();
			$this->pageLoad();
		}
		
		public function preLoad() {
			//init default default
			
		}
		public function eventHandler() {
			if(isset($_REQUEST["event"])) {
				$eventName = $_REQUEST["event"];
				//evaluar
			}
		}
		
		public function pageLoad() {
			
		}
		public function saveCart(){
			
			$name = $_REQUEST['name'];
			$phone = $_REQUEST['phone'];
			$mobile = $_REQUEST['mobile'];
			$email = $_REQUEST['email'];
			$address = $_REQUEST['address'];
			$totalPrice = $_REQUEST['totalPrice'];
				// volveremos 
			header ("Location: ../index.php");
			
		}
	}
?> 
