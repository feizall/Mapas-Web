<?php	
session_start();

if (isset($_SESSION['usuario'])){

	$modulo="clientmap";	
	if(isset($_GET["mod"])){
		$modulo=$_GET["mod"];
	}
	require_once("modulos/inicio.modulo.php");
	
}else{
	
	header('Location:index.php');
}	
?>