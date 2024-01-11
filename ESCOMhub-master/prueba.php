<?php
require_once("conexion2.php");

function obtenerProductoAleatorio($conexion, $tabla_nombre, $productos_impresos)
{
    // Verificar si hay productos impresos
    $productos_impresos_condition = !empty($productos_impresos) ? " AND id NOT IN (" . implode(',', $productos_impresos) . ")" : "";

    // Consulta SQL para obtener un producto aleatorio de la tabla especificada
    $query = "SELECT id AS producto_id, boletavendedor, precio, cantidad
              FROM $tabla_nombre
              WHERE 1 $productos_impresos_condition
              ORDER BY RAND()
              LIMIT 1";

    $result = $conexion->query($query);

    if ($result && $result->num_rows > 0) {
        return $result->fetch_assoc();
    }

    return null;
}

// Almacenar los productos ya impresos para cada vendedor
$productos_impresos_por_vendedor = array();

// Obtener productos de hasta 4 vendedores
for ($intentos = 0; $intentos < 4; $intentos++) {
    // Obtener una muestra aleatoria de 1 vendedor
    $query_vendedor = "SELECT id AS vendedor_id, boleta FROM vendedorestabla ORDER BY RAND() LIMIT 1";
    $result_vendedor = $conexion2->query($query_vendedor);

    if ($result_vendedor && $result_vendedor->num_rows > 0) {
        $row_vendedor = $result_vendedor->fetch_assoc();
        $vendedor_id = $row_vendedor['vendedor_id'];
        $boleta = $row_vendedor['boleta'];

        // Construir el nombre de la tabla
        $tabla_nombre = "vendedor_" . $boleta;

        // Verificar si la tabla existe
        $query_verificar_tabla = "SHOW TABLES LIKE '$tabla_nombre'";
        $result_verificar_tabla = $conexion2->query($query_verificar_tabla);

        if ($result_verificar_tabla && $result_verificar_tabla->num_rows > 0) {
            // Verificar si existe la clave para este vendedor en el array de productos impresos
            if (!isset($productos_impresos_por_vendedor[$vendedor_id])) {
                $productos_impresos_por_vendedor[$vendedor_id] = array();
            }

            // Imprimir hasta 4 productos diferentes
            $productos_impresos_temporales = array();
            for ($i = 0; $i < 4; $i++) {
                // Obtener un producto aleatorio que no haya sido impreso antes
                $producto = obtenerProductoAleatorio($conexion2, $tabla_nombre, array_merge((array)$productos_impresos_por_vendedor[$vendedor_id], $productos_impresos_temporales));

                // Si se obtuvo un producto, imprimirlo y almacenarlo en el arreglo
                if ($producto) {
                    $productos_impresos_temporales[] = $producto['producto_id'];
                    echo '<p>Vendedor ID: ' . $vendedor_id . ', Boleta: ' . $boleta . ', Producto ID: ' . $producto['producto_id'] . ', Boleta del Vendedor: ' . $producto['boletavendedor'] . ', Precio: ' . $producto['precio'] . ', Cantidad: ' . $producto['cantidad'] . '</p>';
                } else {
                    echo '<p>No se encontraron suficientes productos para el vendedor ID: ' . $vendedor_id . '</p>';
                    // Eliminar la tabla del array si no hay suficientes productos
                    unset($productos_impresos_por_vendedor[$vendedor_id]);
                    break; // Salir del bucle for si no se encontraron productos
                }
            }
            // Almacenar productos temporales en el array principal
            $productos_impresos_por_vendedor[$vendedor_id] = array_merge((array)$productos_impresos_por_vendedor[$vendedor_id], $productos_impresos_temporales);
        } else {
            echo '<p>La tabla no existe para el vendedor ID: ' . $vendedor_id . '</p>';
            // Agregamos información de depuración
            echo 'Query: ' . $query_verificar_tabla . '<br>';
            echo 'Error: ' . $conexion2->error . '<br>';
        }
    } else {
        echo '<p>No se encontraron vendedores.</p>';
        // Agregamos información de depuración
        echo 'Query: ' . $query_vendedor . '<br>';
        echo 'Error: ' . $conexion2->error . '<br>';
    }
}

$conexion2->close();
?>
