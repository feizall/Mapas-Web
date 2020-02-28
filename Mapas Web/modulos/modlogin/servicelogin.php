
<?php
	
	session_start();

	$idusuario=$_POST['usuariolg'];
	$password=$_POST['passlg'];
	
		  if($password=='12345' && $idusuario=='prueba'){
			 $_SESSION['usuario']=$idusuario;	
			 echo json_encode(array('error' => false)); //devuelve el json para confirmar que no hay errores y que el ajax realice el login
		  }
		  else{
			  echo json_encode(array('error' => true));
		  } 
?>
  
