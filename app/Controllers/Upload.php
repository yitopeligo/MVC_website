<?php 

class Upload extends Controller {
	
	
	public static function upload_doc() {
		
		
		define('KB', 1024);
		define('MB', 1048576);
		define('GB', 1073741824);
		define('TB', 1099511627776);
				
		if(isset($_GET['f']) && isset($_GET['v'])){
			
			$fach_id = $_GET['f'];
			$vorlesung = $_GET['v'];
			
			
		
		   if(isset($_FILES['document'])){
			
				
			$errors= array();
			$file_name = $_FILES['document']['name'];
			$file_size = $_FILES['document']['size'];
			$file_tmp = $_FILES['document']['tmp_name'];
			$file_type = $_FILES['document']['type'];
			
			$exploded = explode('.', $file_name);
			$file_ext = strtolower(end($exploded));
			  
			//Allowed extensions
			$extensions= array("pdf");
			  
			if(in_array($file_ext,$extensions)=== false){
			 $errors[]="Sie dürfen nur PDF-Dateien hochladen.";
			}

			if($file_size > 20*MB) {
				$errors[]='Die Dateigröße darf maximal 20 MB betragen.';
			}

			if(empty($errors)==true) {
				move_uploaded_file($file_tmp,"../files/". $fach_id. "/". $vorlesung . "/". $file_name);
				
				require_once('./Views/_header.php');
				require_once('./Views/Upload_Completed.php');
				require_once('./Views/_footer.php');
				//echo "Success";
			}else{
				require_once('./Views/_header.php');
				require_once('./Views/Upload_Error.php');
				require_once('./Views/_footer.php');
			}
		   }
		   else {
			   $errors = array();
			   $errors[]='Die Dateigröße darf maximal 20 MB betragen.';
			   
				require_once('./Views/_header.php');
				require_once('./Views/Upload_Error.php');
				require_once('./Views/_footer.php');
		   }
		   
		}
		else {
			header("Location: index.php");
		}
	}
}


?>