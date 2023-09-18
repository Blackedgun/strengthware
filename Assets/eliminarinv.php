<?php

include 'reg.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["del"])) {
    $id = $_POST["del"];

    
$sql = "DELETE FROM inventario WHERE inv_id = $id";
    if (mysqli_query($conn, $sql)) {
        echo "<script>
        alert('Los datos se han eliminado correctamente');
        window.location = 'inventario.php';
        </script>";
    } 

  else{
    echo "<script>
    alert('Los datos no se pudieron eliminar');
    window.location = 'inventario.php';
    </script>". mysqli_error($conn);
   }
}

?>