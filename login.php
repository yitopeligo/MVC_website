<?php
  if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
	  
	  $post_mail = $_POST['mail'];
	  $post_pw = $_POST['password'];
	  
	  
	  $count = checkUser($post_mail, $post_pw);  
	  
	  echo $count;
      
      // If result matched $mymail and $mypassword, table row must be 1 row
      if($count == 1) {
		 session_start();
         $_SESSION['login_user'] = $post_mail;
         
         header("location: app/");
		 
      }
	  else {
         header("location: index.html");
      }
   }
   
   /* Da diese Anmelde-Index-Seite einfach und von der App getrennt werden sollte,
	wird die MVC-Architektur für diese Codeseiten nicht verwendet*/
   
   function checkUser($post_mail, $post_pw) {
	   
	   define('DB_SERVER', 'localhost:3306');
	   define('DB_USERNAME', 'root');
	   define('DB_PASSWORD', '');
	   define('DB_DATABASE', 'soft_projekt');
	   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
	   
	  $mymail = mysqli_real_escape_string($db, $post_mail);
	  $mypassword = mysqli_real_escape_string($db, $post_pw); 
	  
	  $sql = "SELECT id FROM users WHERE mail = '$mymail' and password = '$mypassword'";
	  $result = mysqli_query($db,$sql);
	  $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
	  $active = $row['active'];
	  
	  $count = mysqli_num_rows($result);
	  
	  return $count;
	   
   }
?>













