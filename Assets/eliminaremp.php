<?php

include 'reg.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["erase"])) {
    $emp = $_POST["erase"];

    
$sqli = "DELETE FROM empleado WHERE emp_id = $emp";
    if (mysqli_query($conn, $sqli)) {
        echo "<script>
        alert('Los datos se han eliminado correctamente');
        window.location = 'empleados.php';
        </script>";
    } 

  else{
    echo "<script>
    alert('Los datos no se pudieron eliminar');
    window.location = 'empleados.php';
    </script>". mysqli_error($conn);
   }
}

?>