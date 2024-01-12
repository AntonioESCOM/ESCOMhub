<?php
    require_once("conexion2.php");

    $sql = "SHOW TABLES LIKE 'clientestabla'";
    $stm = $conexion2->query($sql);
    if($stm->num_rows == 0) { //Si la tabla no existe la creamos
        $sql = "CREATE TABLE clientestabla(
        id INT(11) AUTO_INCREMENT PRIMARY KEY,
        nombre VARCHAR(100) NOT NULL,
        apellido VARCHAR(100) NOT NULL,
        boleta VARCHAR(100) NOT NULL,
        correo VARCHAR(100) NOT NULL,
        password VARCHAR(100) NOT NULL,
        telefono VARCHAR(100) NOT NULL,
        redsocial VARCHAR(100) NOT NULL,
        timestamp TIMESTAMP
        )";

        if($conexion2->query($sql) === false){
            die("Error al crear tabla: " . $conexion2->error);
        }
    }

    $sql = "SHOW TABLES LIKE 'vendedorestabla'";
    $stm = $conexion2->query($sql);
    if($stm->num_rows == 0) { //Si la tabla no existe la creamos
        $sql = "CREATE TABLE vendedorestabla(
        id INT(11) AUTO_INCREMENT PRIMARY KEY,
        nombre VARCHAR(100) NOT NULL,
        apellido VARCHAR(100) NOT NULL,
        boleta VARCHAR(100) NOT NULL,
        nomusuario VARCHAR(100) NOT NULL,
        correo VARCHAR(100) NOT NULL,
        password VARCHAR(100) NOT NULL,
        telefono VARCHAR(100) NOT NULL,
        redsocial VARCHAR(100) NOT NULL,
        comida_preparada text NOT NULL,
        golosinas_frituras text NOT NULL,
        electronica text NOT NULL,
        papeleria text NOT NULL,
        servicios text NOT NULL,
        ropa_accesorios text NOT NULL,
        videojuegos_juguetes text NOT NULL,
        libros_material text NOT NULL,
        postres text NOT NULL,
        bebidas text NOT NULL,
        hora_inicio TIME NOT NULL,
        hora_fin TIME NOT NULL
        )";

        if($conexion2->query($sql) === false){
            die("Error al crear tabla: " . $conexion2->error);
        }
    }

        $sql = "SHOW TABLES LIKE 'productos'";
        $stm = $conexion2->query($sql);
    if($stm->num_rows == 0) { //Si la tabla no existe la creamos
        $sql = "CREATE TABLE productos(
        id INT(11) AUTO_INCREMENT PRIMARY KEY,
          boletavendedor VARCHAR(32) NOT NULL,
          nombreproducto VARCHAR(32) NOT NULL,
          descripcion VARCHAR(300) NOT NULL,
          precio DOUBLE NOT NULL,
          cantidad INT(11) NOT NULL,
          categoria VARCHAR(100) NOT NULL,
          vendidos INT(11) NOT NULL,
          imagen LONGBLOB NOT NULL,
          comentarios TEXT,
          timestamp TIMESTAMP
        )";

        if($conexion2->query($sql) === false){
            die("Error al crear tabla: " . $conexion2->error);
        }
    }

?>