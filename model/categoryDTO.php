<?php
	class categoryDTO {
		private $categoryID;
		private $categoryName;
		
		public function getCategoryID() {
			return $this->categoryID;
		}
		
		public function setCategoryID($categoryID) {
			$this->categoryID = $categoryID;
		}
		
		public function getCategoryName() {
			return $this->categoryName;
		}
		
		public function setCategoryName($categoryName) {
			$this->categoryName = $categoryName;
		}
		
	}
?>
