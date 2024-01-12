<?php
// Paso 1: Conectarse a la base de datos
require_once("conexion2.php"); // Asegúrate de tener el archivo de conexión adecuado

// Paso 2: Realizar las operaciones 4 veces
for ($i = 1; $i <= 4; $i++) {
    // Paso 3: Generar un número aleatorio desde 1 hasta el número máximo de la tabla 1
    $query1 = "SELECT MAX(id) AS max_id FROM vendedorestabla";
    $result1 = $conexion2->query($query1);
    $row1 = $result1->fetch_assoc();
    $max_id = $row1['max_id'];
    $random_id_tabla1 = rand(1, $max_id);

    // Paso 4: Obtener el número de boleta según la ID obtenida en el paso 3
    $query2 = "SELECT boleta FROM vendedorestabla WHERE id = '$random_id_tabla1'";
    $result2 = $conexion2->query($query2);
    $row2 = $result2->fetch_assoc();
    $boleta = $row2['boleta'];

    // Paso 5: Operar en la tabla vendedor_$boleta
    $tabla_nombre = "vendedor_" . $boleta;

    // Utilizar un arreglo para almacenar las IDs generadas y verificar si ya han sido utilizadas
    $ids_generadas = array();
    do {
        $random_id_vendedor = rand(1, $max_id); // Asumo que la tabla vendedor_$boleta tiene el mismo rango de IDs que tabla1

        // Verificar si la ID ya ha sido utilizada
        if (!in_array($random_id_vendedor, $ids_generadas)) {
            $ids_generadas[] = $random_id_vendedor; // Almacenar la ID generada
            break; // Salir del bucle do-while
        }
    } while (true);

    // Imprimir HTML mostrando el nombre y precio del registro con la ID generada en el paso 4
    $query4 = "SELECT boletavendedor, precio FROM $tabla_nombre WHERE id = '$random_id_vendedor'";
    $result4 = $conexion2->query($query4);

    if ($result4->num_rows > 0) {
        $row4 = $result4->fetch_assoc();
        echo '<p>Nombre: ' . $row4['boletavendedor'] . ', Precio: ' . $row4['precio'] . '</p>';
    } 
}

// Paso 6: Cerrar la conexión a la base de datos
$conexion2->close();
?>
