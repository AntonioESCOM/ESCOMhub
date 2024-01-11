<?php
	$mensaje = "";
	require 'funcionesPHP.php';
	require_once("conexion2.php");
	session_start();
    $boleta = $_SESSION['boleta_sesion'];
    $tabla_nombre = "vendedor_" . $boleta;
	$sql = "SHOW TABLES LIKE '" . $tabla_nombre . "'";
    $stm = $conexion2->query($sql);

    if($stm->num_rows == 0) { //Si la tabla no existe la creamos
        $sql = sprintf("CREATE TABLE %s(
        	id INT(11) AUTO_INCREMENT PRIMARY KEY,
        	boletavendedor VARCHAR(32) NOT NULL,
        	nombreproducto VARCHAR(32) NOT NULL,
        	descripcion VARCHAR(300) NOT NULL,
        	precio DOUBLE NOT NULL,
        	cantidad INT(11) NOT NULL,
        	categoria VARCHAR(100) NOT NULL,
        	vendidos INT(11) NOT NULL,
        	imagen LONGBLOB NOT NULL,
        	timestamp TIMESTAMP
        )", $tabla_nombre);
        	if($conexion2->query($sql) === false){
            	die("Error al crear tabla: " . $conexion2->error);
        	}
    	}

	if(!empty($_POST["enviarproduc"])){
		if(empty($_POST["nombreproduc"]) or empty($_POST["descproduc"]) or empty($_POST["precioproduc"]) 
			or empty($_POST["cantidadproduc"]) or empty($_FILES['imagenproduc']['tmp_name'])){

			$mensaje = '<div class="alerta">Por favor, completa todos los campos</div>';

		}else{ 
    		require_once("conexion2.php");
			$boletavendedor = $boleta;
			$nombreproducto = $_POST['nombreproduc'];
			$descripcion = $_POST['descproduc'];
			$precio = $_POST['precioproduc'];
			$cantidad = $_POST['cantidadproduc'];
			$categoria = $_POST['categoriaproduc'];
			$vendidos = 0;
			$imagen = addslashes(file_get_contents($_FILES['imagenproduc']['tmp_name']));

			$query = "INSERT INTO " . $tabla_nombre . " (boletavendedor, nombreproducto, descripcion, precio, cantidad, categoria, vendidos ,imagen) VALUES ('$boletavendedor', '$nombreproducto', '$descripcion', '$precio', 
				'$cantidad', '$categoria', $vendidos,'$imagen')";
			$resultado = $conexion2->query($query);

			if($resultado){ 
				echo '<script type="text/javascript">alert("¡Artículo agregado con exito!");
  				window.location.href="catalogov.php";
        		</script>';
			} else {
				$mensaje = '<div class="alerta">¡Error al agregar! Inténtalo de nuevo.</div>';
			}
			$resultado->close();   
			$conexion2->close();
	
		}
	}
?>
