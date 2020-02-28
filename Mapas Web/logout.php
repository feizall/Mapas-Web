<?php	
	session_start();

	//Destruimos la sesion
	session_destroy();
	
	//regresamos al Index
	header('location: index.php');
	
?>