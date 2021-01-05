<?php
if(!empty($_GET['fach']) && !empty($_GET['v']) && !empty($_GET['name']))
{
	
  // actually islogged()?    
  if( True )
  {
	$file_name = $_GET['name'];
	$path = $_GET['fach'] . '/' . $_GET['v']
	
    $file = "{$_SERVER['DOCUMENT_ROOT']}/files/". $path ."/{$file_name}";
	echo($file);
    if( file_exists( $file ) )
    {
      header( 'Cache-Control: public' );
      header( 'Content-Description: File Transfer' );
      header( "Content-Disposition: attachment; filename={$file}" );
      header( 'Content-Type: application/pdf' );
      header( 'Content-Transfer-Encoding: binary' );
      readfile( $file );
      exit;
    }
  }
}
else {
	header("location: ../index.php");
}
?>