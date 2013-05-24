<?php
class loginDAO {
	
		//si el usuario existe, devuelve sus datos, sino devuelve false
		public function searchLogin($userUsuario, $userPassword)
		{
			$userPassword=md5($userPassword);
			
			$sql = "select * from users where userUsuario like '$userUsuario' and userPassword like '$userPassword';";
		
			$results = Connection::excuteQuery($sql);

       
			while($fila = mysql_fetch_array($results,MYSQL_BOTH)){
				if($userUsuario == $fila['userUsuario'] && $userPassword == $fila['userPassword']){
					return $fila;
				}



			}
			return false;
		}
		
	}

?>
