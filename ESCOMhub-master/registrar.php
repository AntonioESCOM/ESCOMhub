<?php
	require_once("conexion2.php");
	require 'funcionesPHP.php';
	$mensaje = "";

	if(!empty($_POST["registrar"])){
		if(empty($_POST["nombrecl"]) or empty($_POST["apellidocl"]) or empty($_POST["boletacl"]) or 
			empty($_POST["correocl"]) or empty($_POST["passwordcl"]) or empty($_POST["pass2"]) or 
			empty($_POST["telefonocl"]) or empty($_POST["redsocialcl"])){
			$mensaje = '<div class="alerta">Por favor, completa todos los campos</div>';
		}elseif(boletaclExiste($_POST["boletacl"],$conexion2)){
			$mensaje = '<div class="alerta">El número de boleta ya se encuentra registrado.</div>';
		}elseif(correoclExiste($_POST["correocl"],$conexion2)){
			$mensaje = '<div class="alerta">El correo ya se encuentra registrado.</div>';
		}elseif ($_POST["passwordcl"] == $_POST["pass2"]){ 
    		require_once("conexion2.php");
			$sql = $conexion2->prepare("INSERT INTO clientestabla (nombre,apellido,boleta,correo,password,telefono,redsocial) VALUES (?, ?, ?, ?, ?, ?, ?)");
	
			$nombre=$_POST['nombrecl'];
			$apellido=$_POST['apellidocl'];
			$boleta=$_POST['boletacl'];
			$correo = $_POST['correocl'];
			$password = $_POST['passwordcl'];
			$telefono = $_POST['telefonocl'];
			$redsocial = $_POST['redsocialcl'];

			$sql->bind_param("sssssss", $nombre, $apellido, $boleta, $correo, $password, $telefono, $redsocial);

			if($sql->execute()) { 
				echo '<script type="text/javascript">alert("¡Registro exitoso!");
  				window.location.href="login.php";
        </script>';
			} else {
				$mensaje = '<div class="alerta">¡Error al registrar! Inténtalo de nuevo.</div>';
			}
			$sql->close();   
			$conexion2->close();
		}else{
			$mensaje = '<div class="alerta">¡Las contraseñas no coinciden! Verifica e intenta de nuevo.</div>';
		}
	}
?>