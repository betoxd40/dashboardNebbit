<?php

	include "conect_datos.php";
  	$conexion= mysqli_connect($servidor, $usuario, $clave , $bd) or die("Error en la conexion");

	$page = isset($_GET['p'])? $_GET['p'] : '' ;
	if($page=='view'){
	     $consultaDatos=mysqli_query($conexion,"SELECT * FROM datos") or die("Error al consultar");     
        while($extraido = mysqli_fetch_array($consultaDatos)){
          echo '<tr>';
            echo '<td>'.$extraido['id'].'</td>';
            echo '<td>'.$extraido['nombre'].'</td>';
            echo '<td>'.$extraido['apellido'].'</td>';
            echo '<td>'.$extraido['ci'].'</td>';
            echo '<td>'.$extraido['nombre_negocio'].'</td>';
            echo '<td>'.$extraido['correo'].'</td>';                                   
          echo '</tr>';
        }
	} else{

	    // Basic example of PHP script to handle with jQuery-Tabledit plug-in.
	    // Note that is just an example. Should take precautions such as filtering the input data.

	    header('Content-Type: application/json');

	    $input = filter_input_array(INPUT_POST);

	    if ($input['action'] == 'edit') {
	        $update=mysqli_query($conexion,"UPDATE datos SET correo='" . $input['correo'] . "' WHERE id='" . $input['id'] . "'") or die("Error al consultar"); 
	    } else if ($input['action'] == 'delete') {
    		$update=mysqli_query($conexion,"DELETE FROM datos WHERE id='" . $input['id'] . "'") or die("Error al delete"); 
		}

	    mysqli_close($mysqli);

	    echo json_encode($input);
	    
	}
?>