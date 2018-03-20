<?php

	include "conect_datos.php";
	include 'security.php';

  	$conexion= mysqli_connect($servidor, $usuario, $clave , $bd) or die("Error en la conexion");
	$page = isset($_GET['p'])? $_GET['p'] : '' ;
	$key = "1234567891234567";

	if($page=='view'){
	     $consultaDatos=mysqli_query($conexion,"SELECT * FROM claves") or die("Error al consultar");     
        while($extraido = mysqli_fetch_array($consultaDatos)){
        	$fecha_ini = Security::decrypt($extraido['fecha_ini'], $key);
        	$fecha_fin = Security::decrypt($extraido['fecha_fin'], $key);
        	$serial = Security::decrypt($extraido['serial'], $key);
          echo '<tr>';
            echo '<td>'.$extraido['id'].'</td>';
            echo '<td>'.$extraido['id_datos'].'</td>';
            echo '<td>'.$extraido['clave'].'</td>';
            echo '<td>'.$fecha_ini.'</td>';
            echo '<td>'.$fecha_fin.'</td>';
            echo '<td>'.$serial.'</td>';
            echo '<td>'.$extraido['version'].'</td>';
            echo '<td>'.$extraido['backup'].'</td>';                                   
          echo '</tr>';
        }
	} else{

	    // Basic example of PHP script to handle with jQuery-Tabledit plug-in.
	    // Note that is just an example. Should take precautions such as filtering the input data.

	    header('Content-Type: application/json');

	    $input = filter_input_array(INPUT_POST);
	    echo '<script> alert("Usuario o contraseña incorrectos.");</script>';
	    if ($input['action'] == 'edit') {

	        $update=mysqli_query($conexion,"UPDATE claves SET clave='" . $input['clave'] . "', fecha_ini='" .Security::encrypt($input['fecha_ini'], $key). "',  fecha_fin='" .Security::encrypt($input['fecha_fin'], $key). "', serial='" .Security::encrypt($input['serial'], $key). "', version='" . $input['version'] . "',backup='" . $input['backup'] . "' WHERE id='" . $input['id'] . "'") or die("Error al consultar"); 
	    } else if ($input['action'] == 'delete') {
    		$delete=mysqli_query($conexion,"DELETE FROM datos WHERE id='" . $input['id'] . "'") or die("Error al delete"); 
		}

	    mysqli_close($mysqli);

	    echo json_encode($input);
	    
	}




?>