<?php 

class LogOut extends Controller {
	
	
	public static function log_out() {
		session_start();
   
	   if(session_destroy()) {
		  header("Location: ../");
	   }
	}
}


?>