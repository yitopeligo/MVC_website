<?php 

class Fach extends Controller {
	
	
	
	public static function construct() {
		
		if (isset($_GET['f'])){
			
			$fak = $_GET['f'];
			
			if($fak == 'natur'){
				$fachs = self::getFach('natur');
				$card_type = 'success';		
			}
			elseif($fak == 'ingenieur'){
				$fachs = self::getFach('ingenieur');
				$card_type = 'info';
							
			}
			elseif($fak == 'rechts'){
				$fachs = self::getFach('rechts');
				$card_type = 'danger';
				
			}
			elseif($fak == 'verwaltung'){
				$fachs = self::getFach('verwaltung');
				$card_type = 'warning';
			}
			elseif($fak == 'kultur'){
				$fachs = self::getFach('kultur');
				$card_type = 'primary';
			}
			else{
				header("location:index.php");
			}			
			
			
		}
		else {
			header("location:index.php");
		}
		
		require_once('./Views/Fach.php');
		require_once('./Views/_footer.php');
		
	}
	
	private function getFach($fak){
		$x = self::query("SELECT * FROM fach WHERE fakultaet = '$fak'");
		return $x;
	}
	
	
}


?>