<?php
	class productDAO {
		public function getProducts($productID,
								   $productName,
								   $productPrice,
								   $productDetails,
								   $productManual,
								   $categoryID,
								   $productImage) {
			$sql = "select * from product where ";
			
			
			if($productID!=null)
				$sql .= "productID = $productID and ";
			if($productName!=null)
				$sql .= "productName = $productName and ";
			if($productPrice!=null)
				$sql .= "productPrice = $productPrice and ";
			if($productDetails!=null)
				$sql .= "productDetails = $productDetails and ";
			if($productManual!=null)
				$sql .= "productManual = $productManual and ";
			if($categoryID!=null)
				$sql .= "categoryID = $categoryID and ";
			if($productImage!=null)
				$sql .= "productImage = $productImage and ";
			$sql .= "1=1";
			
			$results = Connection::excuteQuery($sql);
			
			while($object = mysql_fetch_object($results, 'productDTO')) {
				$arrProducts[] = $object;
			}
			
			return $arrProducts;
		}
		
		public function getRandom($limit) {
			
			$sql = "select * from product order by RAND() ";
			if($limit >0)
				$sql .= "Limit $limit";
			$results = Connection::excuteQuery($sql);
			
			while($object = mysql_fetch_object($results, 'productDTO')) {
				$arrProducts[] = $object;
			}
			
			return $arrProducts;
		}
		
		public function insertProduct( $productName,
									   $productPrice,
									   $productDetails,
									   $productManual,
									   $categoryID,
									   $productImage) {
			$sql = "insert into product values (null,
												'$productName',
											    $productPrice,
											    '$productDetails',
												'$productManual',
											    $categoryID,
											    '$productImage')";
			Connection::excuteQuery($sql);
		}
		
		public function updateProduct( $productID,
									   $productName,
									   $productPrice,
									   $productDetails,
									   $productManual,
									   $categoryID,
									   $productImage) {
			$sql = "update product set 
										productName = '$productName'
										,productPrice = $productPrice
										,productDetails = '$productDetails'
										,productManual = '$productManual'
										,categoryID = $categoryID,
										,productImage = '$productImage'
					where productID = $productID";
			Connection::excuteQuery($sql);
		}
		
		public function deleteProduct($productID) {
			$sql = "delete from product where productID = $productID";
			Connection::excuteQuery($sql);
		}
		
		public function searchProduct($nd)
		{
			$sql = "select * from product where productDetails like '%$nd%' and 1=1";
			$results = Connection::excuteQuery($sql);
			
			while($object = mysql_fetch_object($results, 'productDTO')) {
				$arrProducts[] = $object;
			}
			
			return $arrProducts;
		}
	}
?>
