<?php
// Ejemplo de como pasar datos de una tabla a otra por PHP
$servername = "localhost";
$username = "tu_usuario";
$password = "tu_contraseña";
$dbname = "tu_base_de_datos";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Seleccionar los datos de la fila origen
$id_fila_origen = 1; // Supongamos que quieres mover la fila con ID 1
$sql_select = "SELECT * FROM tabla_origen WHERE id = $id_fila_origen";
$resultado_select = $conn->query($sql_select);

if ($resultado_select->num_rows > 0) {
    // Obtener los datos de la fila
    $fila = $resultado_select->fetch_assoc();

    // Insertar los datos en la tabla de destino
    $sql_insert = "INSERT INTO tabla_destino (columna1, columna2, columna3) VALUES ('" . $fila["columna1"] . "', '" . $fila["columna2"] . "', '" . $fila["columna3"] . "')";

    if ($conn->query($sql_insert) === TRUE) {
        echo "Datos insertados en la tabla de destino correctamente.";
        
        // Eliminar la fila de la tabla de origen (opcional)
        $sql_delete = "DELETE FROM tabla_origen WHERE id = $id_fila_origen";
        $conn->query($sql_delete);
    } else {
        echo "Error al insertar datos en la tabla de destino: " . $conn->error;
    }
} else {
    echo "No se encontraron datos en la fila de origen.";
}

// Cerrar la conexión
$conn->close();
?>
