<?php
	class orderDAO {
		public function getOrders($orderID,
								   $productID,
								   $name,
								   $price,
								   $quantity,
								   $subtotal,
								   $userUsuario,
								   $fecha) {
			$sql = "select * from orders where ";
			
			
			if($orderID!=null)
				$sql .= "orderID = $orderID and ";
			if($productID!=null)
				$sql .= "productID = $productID and ";
			if($name!=null)
				$sql .= "name = $name and ";
			if($price!=null)
				$sql .= "price = $price and ";
			if($quantity!=null)
				$sql .= "quantity = $quantity and ";
			if($categoryID!=null)
				$sql .= "subtotal = $subtotal and ";
			if($userUsuario!=null)
				$sql .= "userUsuario = $userUsuario and ";
			if($fecha!=null)
				$sql .= "fecha = $fecha and ";
			$sql .= "1=1";
			
			$results = Connection::excuteQuery($sql);
			
			while($object = mysql_fetch_object($results, 'orderDTO')) {
				$arrOrders[] = $object;
			}
			
			return $arrOrders;
		}
		
		public function getRandom($limit) {
			
			$sql = "select * from orders order by RAND() ";
			if($limit >0)
				$sql .= "Limit $limit";
			$results = Connection::excuteQuery($sql);
			
			while($object = mysql_fetch_object($results, 'orderDTO')) {
				$arrOrders[] = $object;
			}
			
			return $arrOrders;
		}
		
		public function insertOrder( 
										$orderID,
										$productID,
									   $name,
									   $price,
									   $quantity,
									   $subtotal,
									   $userUsuario
									   ) {
			$sql = "insert into orders(orderID,productID,name,price,quantity,subtotal,userUsuario) values (
												$orderID,
											    $productID,
											    '$name',
											    $price,
												$quantity,
											    $subtotal,
											    '$userUsuario'
											    )";
											    
			Connection::excuteQuery($sql);
		}
		
		public function generarIDcarrito(){
			
			$sql = "select max(orderID) from orders";
			$results = Connection::excuteQuery($sql);
			 $arr_id = mysql_fetch_array($results);
			 return $arr_id[0]+1;
		 }
		 
		 
		public function updateOrder( $orderID,
									   $productID,
									   $name,
									   $price,
									   $quantity,
									   $subtotal,
									   $userUsuario
									   ) {
			$sql = "update product set 
										orderID = '$orderID'
										,productID = '$productID'
										,name = $name
										,price = '$price'
										,quantity = '$quantity'
										,subtotal = $subtotal
										,userUsuario = '$userUsuario'
										
					where orderID = $orderID and name = $name";
			Connection::excuteQuery($sql);
		}
		
		public function deleteOrder($orderID) {
			$sql = "delete from orders where orderID = $orderID and name = $name";
			Connection::excuteQuery($sql);
		}
		
		public function searchOrder($nd)
		{
			$sql = "select * from orders where userUsuario like '$nd'";
			$results = Connection::excuteQuery($sql);
			
			while($object = mysql_fetch_object($results, 'orderDTO')) {
				$arrOrders[] = $object;
			}
			
			return $arrOrders;
		}
	}
?>
