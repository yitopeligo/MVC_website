<?php 
error_reporting(0);
include('user/session.php'); //Kontrolliert ob den User eingeloggt ist.
/**
 * Sınıfların include edecek metot.
 */
function autoload($class_name)
{
	$dir 		= './classes/';
	$classPath 	= $dir.$class_name.'.php';

	if(file_exists($classPath)){
		require_once $classPath;
	}
}
function autoload_controllers($class_name)
{
	$dir 		= './Controllers/';
	$classPath 	= $dir.$class_name.'.php';
	if(file_exists($classPath)){
		require_once($classPath);
	}
}
//Sınıfımızı arayıp bulacak olan metotu belirliyoruz.
spl_autoload_register('autoload');
spl_autoload_register('autoload_controllers');

require_once("Routes.php");
?>