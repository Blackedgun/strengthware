<?php

include 'reg.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["erase"])) {
    $id = $_POST["erase"];

    
$sql = "DELETE FROM registrosal WHERE emp_id = $id";
    if (mysqli_query($conn, $sql)) {
        echo "<script>
        alert('Los datos se han eliminado correctamente');
        window.location = 'salida.php';
        </script>";
    } 

  else{
    echo "<script>
    alert('Los datos no se pudieron eliminar');
    window.location = 'Horarios.php';
    </script>". mysqli_error($conn);
   }
}

?>