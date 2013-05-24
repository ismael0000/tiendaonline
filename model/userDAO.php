<?php
	class userDAO {
		public function getUsers(
								   $userUsuario,
								   $userName,
								   $userApellidos,
								   $userDireccion,
								   $userCP,
								   $userTelefono,
								   $userLocalidad,
								   $userProvincia,
								   $userEmail,
								   $userPassword,
								   $userRol) {
			$sql = "select * from product where ";
			
			

			if($userName!=null)
				$sql .= "userName = $userName and ";
			if($userApellidos!=null)
				$sql .= "userApellidos = $userApellidos and ";
			if($userDireccion!=null)
				$sql .= "userDireccion = $userDireccion and ";
			if($userCP!=null)
				$sql .= "userCP = $userCP and ";
			if($userTelefono!=null)
				$sql .= "userTelefono = $userTelefono and ";
			if($userLocalidad!=null)
				$sql .= "userLocalidad = $userLocalidad and ";
			if($userProvincia!=null)
				$sql .= "userProvincia = $userProvincia and ";
			if($userEmail!=null)
				$sql .= "userEmail = $userEmail and ";
			if($userUsuario!=null)
				$sql .= "userUsuario = $userUsuario and ";
			if($userPassword!=null)
				$sql .= "userPassword = $userPassword and ";
			if($userRol!=null)
				$sql .= "userRol = $userRol and ";
			$sql .= "1=1";
			
			$results = Connection::excuteQuery($sql);
			
			while($object = mysql_fetch_object($results, 'userDTO')) {
				$arrusuarios[] = $object;
			}
			
			return $arrusuarios;
		}
		
		public function getRandom($limit) {
			
			$sql = "select * from users order by RAND() ";
			if($limit >0)
				$sql .= "Limit $limit";
			$results = Connection::excuteQuery($sql);
			
			while($object = mysql_fetch_object($results, 'userDTO')) {
				$arrUsuarios[] = $object;
			}
			
			return $arrUsuarios;
		}
		
		public function insertUser( 
									   $userUsuario,
									   $userName,
									   $userApellidos,
									   $userDireccion,
									   $userCP,
									   $userTelefono,
									   $userLocalidad,
									   $userProvincia,
									   $userEmail,
									   $userPassword,
									   $userRol) {
			$sql = "insert into users values (
												'$userUsuario',
												'$userName',
											    '$userApellidos',
											    '$userDireccion',
											    '$userCP',
											    '$userTelefono',
											    '$userLocalidad',
												'$userProvincia',
											    '$userEmail',
											    '$userPassword',
											    '$userRol')";

			Connection::excuteQuery($sql);
		}
		
		public function updateUser( 
									   $userUsuario,
									   $userName,
									   $userApellidos,
									   $userDireccion,
									   $userCP,
									   $userTelefono,
									   $userLocalidad,
									   $userProvincia,
									   $userEmail,
									   $userPassword,
									   $userRol) {
			$sql = "update users set 
										,'userUsuario' = '$userUsuario'
										,'userApellidos' = '$userApellidos'
										,userDireccion = '$userDireccion'
										,userCP = '$userCP'
										,'userTelefono' = '$userTelefono'
										,'userLocalidad' = '$userLocaliad'
										,'userProvincia' = '$userProvincia'
										,'userEmail' = '$userEmail'
										,'userPassword' = '$userPassword'
										,'userRol' = '$userRol'
										
					where userUsuario = $userUsuario";
			Connection::excuteQuery($sql);
		}
		
		public function deleteUser($userID) {
			$sql = "delete from users where userUsuario = $userUsuario";
			Connection::excuteQuery($sql);
		}
		
		public function searchUser($nd)
		{
			$sql = "select * from user where userUsuario like '%$nd%' ";
			$results = Connection::excuteQuery($sql);
			
			while($object = mysql_fetch_object($results, 'userDTO')) {
				$arrusuarios[] = $object;
			}
			
			return $arrusuarios;
		}
	}
?>
