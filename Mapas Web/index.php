<?php
	session_start();
	if (isset($_SESSION['usuario'])){		
		header('Location:index2.php');
	}
?>

<!DOCTYPE html>

<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Login</title>

	<link rel="stylesheet" href="css/main.css">
	<script src="js/jquery31min.js"> </script>

</head>

<body>

	<div class="error">
		<span> Datos no validos, intentalo denuevo</span>
	</div>
	
	<div class="main">
		 <img style="position:relative; padding-bottom:5px;"; src="img/icono_login.png" alt="Smiley face" height="118" width="120" >  

			<form action="" id="formlg">
				<input type="text" name="usuariolg" pattern="[A-Za-z0-9_-]{1,15}" required placeholder="Usuario" >
				<input type="password" name="passlg" pattern="[A-Za-z0-9_-]{1,15}" required placeholder="Password" >
				<input type="submit" name="boton" id="botonlg"  value="Iniciar Sesion">	
			</form>
	</div>
	


</body>

</html>

<script>
jQuery(document).on('submit','#formlg', function(event){
	event.preventDefault();

		jQuery.ajax({
			url: 'modulos/modlogin/servicelogin.php',
			type: 'POST',
			dataType: 'json',
			data: $(this).serialize(),
			beforeSend: function(){
				$('#botonlg').val('Validando..');			
			} 		
		}).done(function(data){			
			console.log(data);				
				if(!data.error){
					location.href='index2.php';			
				}		
				else{					
						$('.error').slideDown('slow');
						setTimeout(function(){
							$('.error').slideUp('slow');
						},3000);
						$('#botonlg').val('Iniciar Sesion');
				}
			
		}).fail(function(data){
			
			console.log(data.responseText);
			
		}).always(function(){
			
				console.log("complete");
			});
});			

</script>
