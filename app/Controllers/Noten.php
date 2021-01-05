<?php 

class Noten extends Controller {
	
	
	
	public static function construct() {
		
		
		if (isset($_GET['fach']) && isset($_GET['v'])){
			
			$fach_id = $_GET['fach'];
			$vorlesung_name = $_GET['v'];
			
			$dload_prefix = '../files/' . $fach_id. '/' . $vorlesung_name . '/';
			
			
			if(self::isVorlesungValid($fach_id, $vorlesung_name)){
				
				$files = self::getAllFiles($fach_id, $vorlesung_name);
				
				//Check size of $files array. If there is no document in folder then size of array will be less than or equal to 2.
				if(count($files) > 2){	 
					$doc_exists = true;
					
					//Shift the array two times to remove first 2 elements of array which are useless folder paths.
					array_shift($files);
					array_shift($files);

				}
				else {
					$doc_exists = false;
				}		
				
			}
			else{
				header("location:index.php");
			}
			
			
			
		}
		
		else{
			header("location:index.php");
		}	
		
		require_once('./Views/Noten.php');
		require_once('./Views/_footer.php');
		
	}
	
	
	//Check if given vorlesung (via GET method) is actually exists.
	private function isVorlesungValid($fach_id, $vorlesung_name){
		
		$vn_upper = strtoupper($vorlesung_name);
		$x = self::query("SELECT * FROM vorlesung WHERE name = '$vorlesung_name' AND fach_id = $fach_id");
		
		if($x){ 
			return true;
		}
		else{
			return false;
		}
	}
	
	private function getAllFiles($fach_id, $vorlesung_name){
		
		$path = '../files/'. $fach_id . '/' . $vorlesung_name;
		
		//Check if folder exist else create
				if (file_exists($path)) {			
					$scan = scandir($path);			
				}
				else {
					mkdir($path, 0777, true);
					$scan = scandir($path);
				}
		
		return $scan;
	}

}
?>