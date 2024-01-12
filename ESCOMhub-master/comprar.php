<?php
    require_once("conexion2.php");

    $id = $_GET["id"];

    $sqlSelect = $conexion2->prepare("SELECT * FROM productos WHERE id=?");
    $sqlSelect->bind_param("i", $id);
    $sqlSelect->execute();
    $result = $sqlSelect->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        $vendidos = $row['vendidos']+1;
        $cantidad = $row['cantidad']-1;

        $sqlUpdate = $conexion2->prepare("UPDATE productos SET cantidad=?, vendidos=? WHERE id=?");
        $sqlUpdate->bind_param("iii", $cantidad, $vendidos, $id);
        $sqlUpdate->execute();
    }
?>
