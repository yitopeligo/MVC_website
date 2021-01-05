<?php 

class Controller extends Model{
	
	public static function CreateView($viewName){
		
		//Create header for all pages first
		require_once("./Views/_header.php");
		
		//Static function for all subclasses
		static::construct();
	} 
	
	public static function FileAccess(){
		
		static::get_file();
		
	} 
	public static function LogOff(){
		
		static::log_out();
		
	}
	public static function Uploader(){
		
		static::upload_doc();
		
	} 
	
	
}


?>