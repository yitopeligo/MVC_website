<?php 

class Route {
	
	
	public static $validRoutes = array("index.php", "fach", "vorlesung", "noten", "access", "logout", "upload", "profil");
	
	
	public static function set($route, $function){
			
		$url = $_GET['url'];
		
		if (in_array($url, self::$validRoutes, TRUE)){
		
			if ($url == $route) {
				$function->__invoke();
			}
		}
		else { 
			require_once('./Views/Unvalid.php');
		}
		
	}
	
}

?>