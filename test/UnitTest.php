<?php
require 'vendor/autoload.php';

use PHPUnit\Framework\TestCase;

class MyClassTest extends TestCase {
	
     public function test_LoginUC1() {
		 
		 
		$_SERVER["REQUEST_METHOD"] = "POST";
		$_POST['mail'] = 'yigit@stud.tau.edu.tr';
		$_POST['password'] = '240398';
		session_start();
		
		
        require '../login.php';
	
		
		$this->assertEquals(1, checkUser('yigit@stud.tau.edu.tr', '240398'));
     }
	 public function test_Model() {
		 
        require '../app/classes/Model.php';
		
		$model = new Model;
	
		
		$this->assertEquals(1, $model->query('SELECT * FROM users'));
     }
}
?>