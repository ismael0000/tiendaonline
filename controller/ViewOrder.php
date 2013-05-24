<?php
	$_page = new ViewOrder();
	class ViewOrder 
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
			
			if(isset($_REQUEST["event"]))
			{
				if($_REQUEST["event"]=='delete')
				{
					$_SESSION['carts'] = null;
					$this->carts = null;
					//header("Location: ../index.php");
					//echo "<meta http-equiv='refresh' content='0;url=\"../templates/viewerController.php?page=list3&cat=1\"' />";
				}
				if($_REQUEST["event"]=='order')
				{
					$this->carts = $_SESSION['carts'];
					//header('Location: ?page=Order');
					//echo "<meta http-equiv='refresh' content='0;url=\"../templates/viewerController.php?page=Order\"' />";
				}
			}
		}
		/*
		public function eventHandler() 
		{
			if(isset($_REQUEST["event"])) 
			{
				$eventName = $_REQUEST["event"];
				//evaluar
			}
		}*/
		
		public function pageLoad(){}
		public function view(){}
	}
?>