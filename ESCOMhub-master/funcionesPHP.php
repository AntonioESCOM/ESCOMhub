<?php 

function boletaclExiste($boletacl, $conexion2){
	$sql = $conexion2->prepare("SELECT id FROM clientestabla WHERE boleta LIKE ? LIMIT 1");
    $sql->bind_param("s", $boletacl);
    $sql->execute();
    $sql->bind_result($resultado);  // Vincula la columna a una variable
    if($sql->fetch()){  // Utiliza fetch() para obtener el resultado
        return true;
    }
	return false;
}

function correoclExiste($correocl, $conexion2){
	$sql = $conexion2->prepare("SELECT id FROM clientestabla WHERE correo LIKE ? LIMIT 1");
    $sql->bind_param("s", $correocl);
    $sql->execute();
    $sql->bind_result($resultado);  // Vincula la columna a una variable
    if($sql->fetch()){  // Utiliza fetch() para obtener el resultado
        return true;
    }
	return false;
}

function boletavExiste($boletav, $conexion2){
    $sql = $conexion2->prepare("SELECT id FROM vendedorestabla WHERE boleta LIKE ? LIMIT 1");
    $sql->bind_param("s", $boletav);
    $sql->execute();
    $sql->bind_result($resultado);  // Vincula la columna a una variable
    if($sql->fetch()){  // Utiliza fetch() para obtener el resultado
        return true;
    }
    return false;
}

function correovExiste($correov, $conexion2){
	$sql = $conexion2->prepare("SELECT id FROM vendedorestabla WHERE correo LIKE ? LIMIT 1");
    $sql->bind_param("s", $correov);
    $sql->execute();
    $sql->bind_result($resultado);  // Vincula la columna a una variable
    if($sql->fetch()){  // Utiliza fetch() para obtener el resultado
        return true;
    }
	return false;
}

 ?>