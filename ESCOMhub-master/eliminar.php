<?php  
	session_start();
    $boleta = $_SESSION['boleta_sesion'];
    $tabla_nombre = "vendedor_" . $boleta;

    require_once("conexion2.php");
	$sql = $conexion2->prepare("DELETE  FROM " . $tabla_nombre . " WHERE id=?");  
	$sql->bind_param("i", $_GET["id"]); 
			
		if($sql->execute()){ 
        	echo'<script type="text/javascript">alert("Producto eliminado");
        	window.location.href="catalogov.php";
        	</script>';
    	}else{
        	echo'<script type="text/javascript">alert("Error al eliminar vuelve a intertarlo");
        	window.location.href="catalogov.php";
        	</script>';
    	}

?>