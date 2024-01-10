<?php
    $servidor = "localhost:3307";
    $nombreusuario = "root";
    $password = "";

    $conexion = new mysqli($servidor, $nombreusuario, $password);

    if($conexion->connect_error){
        die("Conexión fallida: " . $conexion->connect_error);
    }
?>