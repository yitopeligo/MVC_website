<?php 

class Profil extends Controller {
	
	
	
	public static function construct() {
		
		include('user/session.php');
		$aktualisiert = false;
		$error = false;
		
		if(isset($_POST['password']) && isset($_POST['mail'])){
			
			$pass = $_POST['password'];
			$mail = $_POST['mail'];
			
			
			$x = self::updateUser($user_check, $mail, $pass);
			
			if($x){
				$aktualisiert = true;
			}
			else {
				$error = true;
			}
			
			
		}

		require_once('./Views/Profil.php');
		require_once('./Views/_footer.php');	
		
	}

	private function updateUser($user_check, $mail, $pass){
		

		$a = preg_match('/^\w+@stud\.tau\.edu\.tr$/i', $mail) > 0;
		$b = preg_match('/^\w+@tau\.edu\.tr$/i', $mail) > 0;

		
		if($a or $b){
			$x = self::query2("UPDATE users SET password ='$pass', mail='$mail' WHERE mail='$user_check'");
			return $x;
		}
			return false;
		
	}
	
}


?>