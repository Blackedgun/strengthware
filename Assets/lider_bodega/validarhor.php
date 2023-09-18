<?php
include 'reg.php';

$correo_ingresado = $_POST['email'];
$contrasena_ingresada = $_POST['contrasena'];
$dia = $_POST['dia'];

$encript = md5($contrasena_ingresada);


$sql = "SELECT emp_id, emp_nombre FROM empleado WHERE emp_password = '$encript' AND emp_email = '$correo_ingresado'";

$result = $conn->query($sql);

if (mysqli_num_rows($result) > 0) {

    $row = $result->fetch_object();
    $emp_id = $row->emp_id;
    $name_id = $row->emp_nombre;

    $sql = "INSERT INTO registrohor (emp_id, emp_nombre, dia) VALUES ('$emp_id', '$name_id', '$dia')";

    if ($conn->query($sql) === TRUE) {
        echo '<script>
       alert("Registro de entrada exitoso");
       window.location = "Horarios.php";
       </script>';
    } else {
        echo "Error al insertar en el registro: " . $conn->error;
    }
} else {
    echo "Datos Erróneos";
}

$conn->close();
