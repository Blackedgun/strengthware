<?php

include 'reg.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["fac_id"])) {
    $fac = $_POST["fac_id"];

    
$sqli = "DELETE FROM factura WHERE fac_id = $fac";
    if (mysqli_query($conn, $sqli)) {
        echo "<script>
        alert('Los datos se han eliminado correctamente');
        window.location = 'facturatable.php';
        </script>";
    } 

  else{
    echo "<script>
    alert('Los datos no se pudieron eliminar');
    window.location = 'facturatable.php';
    </script>". mysqli_error($conn);
   }
}

?>