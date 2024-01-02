<?php
    $servidor = "localhost";
    $nombreusuario = "root";
    $password = "";
    $db = "escomhub";

    $conexion2 = new mysqli($servidor, $nombreusuario, $password, $db);
    if($conexion2->connect_error){
        die("Conexión fallida: " . $conexion2->connect_error);
    }
?>