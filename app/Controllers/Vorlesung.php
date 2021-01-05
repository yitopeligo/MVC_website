<?php 

class Vorlesung extends Controller {
	
	
	
	public static function construct() {
		
		//$vorlesung_names = array(' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', )
		
		if (isset($_GET['v'])){
			
			$fach_id = $_GET['v'];
			$vorlesungen = self::getVorlesungen($fach_id);
			
		}
		
		else{
			header("location:index.php");
		}	
		
		require_once('./Views/Vorlesung.php');
		require_once('./Views/_footer.php');
		
	}
	
	private function getVorlesungen($fach_id){
		$x = self::query("SELECT * FROM vorlesung WHERE fach_id = $fach_id");
		return $x;
	}
	
}


?>