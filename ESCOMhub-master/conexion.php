<?php
    $servidor = "localhost";
    $nombreusuario = "root";
    $password = "";

    $conexion = new mysqli($servidor, $nombreusuario, $password);

    if($conexion->connect_error){
        die("Conexión fallida: " . $conexion->connect_error);
    }
?>