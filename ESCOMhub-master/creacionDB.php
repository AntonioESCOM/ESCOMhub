<?php
    require_once("conexion.php");
        $sql = "CREATE DATABASE escomhub";
        if($conexion->query($sql) !== true){
            die("Error al crear base de datos: " . $conexion->error);
        }
?>