<?php
	session_start();
	include 'conect.php';
	$conexion = mysqli_connect($servidor,$usuario,$clave,$bd) or die("error en la bd");	
	if (isset($_POST['entrar'])){
		
		$peticion = mysqli_query($conexion,"SELECT * FROM datos where usuario='".$_POST['usuario']."' AND  password='".$_POST['password']."'") or die("Error al consultar");
		if (mysqli_num_rows($peticion)>0) {
					$extraido = mysqli_fetch_array($peticion);
					$datosArray=array($extraido['nombre'], $extraido['apellido'], $extraido['cargo']);
					$_SESSION["session_admin"] = $datosArray; 
					echo '<p> Inicio de sesion exitoso. </p>';
					echo '<script> setTimeout(function(){location.href="../index.php"} , 2000)</script>';   
					//echo '<script> window.location="../index.php"; </script>';
				}
				else{
					echo '<script> alert("Usuario o contraseña incorrectos.");</script>';
					echo '<script> window.location="../login.php"; </script>';
				}
	}
	
?>
