<?php
	$mensaje = "";
	require 'funcionesPHP.php';
	require_once("conexion2.php");
	session_start();
    $boleta = $_SESSION['boleta_sesion'];

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

			$query = "INSERT INTO productos (boletavendedor, nombreproducto, descripcion, precio, cantidad, categoria, vendidos ,imagen) VALUES ('$boletavendedor', '$nombreproducto', '$descripcion', '$precio', 
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