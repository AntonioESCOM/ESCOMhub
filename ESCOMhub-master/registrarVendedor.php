<?php
	require 'funcionesPHP.php';
	require_once("conexion2.php");
	$mensaje = "";
	if(!empty($_POST["registrar"])){

		if(empty($_POST["nombrev"]) or empty($_POST["apellidov"]) or empty($_POST["boletav"]) or empty($_POST["userv"]) or
			empty($_POST["correov"]) or empty($_POST["passwordv"]) or empty($_POST["pass2"]) or 
			empty($_POST["telefonov"]) or empty($_POST["redsocialv"]) or empty($_POST["comida"]) or empty($_POST["golosinas"]) or empty($_POST["electronicaR"]) or empty($_POST["papeleriaR"]) or empty($_POST["serviciosR"]) or empty($_POST["ropa"]) or empty($_POST["videojuegos"]) or empty($_POST["libros"]) or empty($_POST["postresR"]) or empty($_POST["bebidasR"]) or empty($_POST["horaIn"]) or empty($_POST["horaFin"])){

			$mensaje = '<div class="alerta">Por favor, completa todos los campos</div>';

		}elseif(boletavExiste($_POST["boletav"],$conexion2)){
			$mensaje = '<div class="alerta">El número de boleta ya se encuentra registrado.</div>';
		}elseif(correovExiste($_POST["correov"],$conexion2)){
			$mensaje = '<div class="alerta">El correo ya se encuentra registrado.</div>';
		}elseif ($_POST["passwordv"] == $_POST["pass2"]){ 
    		require_once("conexion2.php");
			$sql = $conexion2->prepare("INSERT INTO vendedorestabla (nombre,apellido,boleta, nomusuario,correo,password,telefono,redsocial, comida_preparada, golosinas_frituras, electronica, papeleria, servicios, ropa_accesorios, videojuegos_juguetes, libros_material, postres, bebidas,hora_inicio, hora_fin) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
	
			$nombre=$_POST['nombrev'];
			$apellido=$_POST['apellidov'];
			$boleta=$_POST['boletav'];
			$nomusuario=$_POST['userv'];
			$correo = $_POST['correov'];
			$password = $_POST['passwordv'];
			$telefono = $_POST['telefonov'];
			$redsocial = $_POST['redsocialv'];
			$comida_preparada = $_POST['comida'];
			$golosinas_frituras = $_POST['golosinas'];
			$electronica = $_POST['electronicaR'];
			$papeleria = $_POST['papeleriaR'];
			$servicios = $_POST['serviciosR'];
			$ropa_accesorios = $_POST['ropa'];
			$videojuegos_juguetes = $_POST['videojuegos'];
			$libros_material = $_POST['libros'];
			$postres = $_POST['postresR'];
			$bebidas = $_POST['bebidasR'];
			$hora_inicio = $_POST['horaIn'];
			$hora_fin = $_POST['horaFin'];


			$sql->bind_param("ssssssssssssssssssss", $nombre, $apellido, $boleta, $nomusuario, $correo, $password, $telefono, $redsocial, $comida_preparada, $golosinas_frituras, $electronica, $papeleria, $servicios, $ropa_accesorios, $videojuegos_juguetes, $postres,$bebidas,$libros_material, $hora_inicio, $hora_fin);

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