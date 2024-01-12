<?php
	require_once("conexion.php");
    $sql = "SHOW DATABASES LIKE 'escomhub'";
    $stm = $conexion->query($sql);
    if($stm->num_rows == 0){ //Si la base de datos no existe
        require_once("creacionDB.php");
    	require_once("crearTabla.php");
    }else{										
    	require_once("crearTabla.php");
    }
?>