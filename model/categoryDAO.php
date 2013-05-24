<?php	
	class categoryDAO {
		public function getCategories($categoryID,
						     $categoryName) {
			$sql = "select * from category where ";
			
			if($categoryID!=null)
				$sql .= "categoryID = $categoryID and ";
			if($categoryName!=null)
				$sql .= "categoryName = '$categoryName' and ";
			
			$sql .= "1=1";
			
			$results = Connection::excuteQuery($sql);
			
			while($object = mysql_fetch_object($results, 'categoryDTO')) {
				$arrCategories[] = $object;
			}

			return $arrCategories;
		}
		
		public function insertCategory($categoryName) {
			$sql = "insert into category values ('$categoryName')";
												
			Connection::excuteQuery($sql);
		}
		
		public function updateCategory($categoryID,
						     $categoryName) {
			$sql = "update category set categoryName = '$categoryName'
					where categoryID = $categoryID";
												
			Connection::excuteQuery($sql);
		}
		
		public function deleteProduct($categoryID) {
			$sql = "delete from category where categoryID = $categoryID";
			Connection::excuteQuery($sql);
		}
		
	}
?>
