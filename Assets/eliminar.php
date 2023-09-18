<?php

include 'reg.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["Hor_id"])) {
    $id = $_POST["Hor_id"];

    
$sql = "DELETE FROM horario WHERE Hor_id = $id";
    if (mysqli_query($conn, $sql)) {
        echo "<script>
        alert('Los datos se han eliminado correctamente');
        window.location = 'Horarios.php';
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