<?php
//$_SESSION['boleta_sesion'] = "";
$mensaje = "";
require_once("conexion2.php");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(empty($_POST["boletaI"]) or empty($_POST["passwordI"])) {
        $mensaje = '<div class="alerta">LOS CAMPOS ESTAN VACIOS</div>';
    }else{
    $username = $_POST['boletaI'];  
    $password = $_POST['passwordI']; 

    $stmt = $conexion2->prepare("SELECT * FROM clientestabla WHERE boleta = ? AND  password = ?");
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        session_start();
        $stmt = $conexion2->prepare("SELECT nombre FROM clientestabla WHERE boleta = ?");
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $resultNombre = $stmt->get_result();
        $row = $resultNombre->fetch_assoc();
        $_SESSION['usuario_sesion'] = $row['nombre'];
        $_SESSION['boleta_sesion'] = $username;
        header("Location: index.php");
        exit();
    }

    $stmt = $conexion2->prepare("SELECT * FROM vendedorestabla WHERE boleta = ? AND  password = ?");
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        session_start();
        $stmt = $conexion2->prepare("SELECT nomusuario FROM vendedorestabla WHERE boleta = ?");
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $resultNombre = $stmt->get_result();
        $row = $resultNombre->fetch_assoc();
        $_SESSION['usuario_sesion'] = $row['nomusuario'];
        $_SESSION['boleta_sesion'] = $username;
        header("Location: producto.php");
        exit();
    }
    $mensaje = '<div class="alerta">Credenciales incorrectas</div>';
}
}
?>