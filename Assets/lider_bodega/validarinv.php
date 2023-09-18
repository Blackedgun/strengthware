<?php

include 'reg.php';


$prod = $_POST['producto'];
$price = $_POST['precio'];
$quantity = $_POST['cantidad'];
$descrip = $_POST['descripcion'];
$need = $_POST ['id'];

$connect = $conn->query("INSERT INTO inventario (inv_producto, inv_precio, inv_cantidad, inv_descripcion, emp_id)
VALUES ('$prod', '$price', '$quantity', '$descrip', '$need')");


if ($connect){

   echo '<script>
         alert("Se ha completado el registro exitosamente");
         window.location = "inventario.php";
   </script>';
}

else{
   echo '<script>
        alert("Oops algo ha salido mal con el registro");
        window.location = "agregarhor.php";      
   </script>';
}



mysqli_close($conn);////remember me//

?>