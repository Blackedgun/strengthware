<?php 

   include 'reg.php';
   
   $store = $_POST ['store'];
   $prod = $_POST ['product'];
   $cant = $_POST ['amount'];
   $pagunit = $_POST ['unit'];
   $custom = $_POST ['customer'];
   $adress = $_POST ['adress'];
   $port = $_POST ['id'];
   

   

   $query = "INSERT INTO factura (fac_tienda, fac_nombreprod, fac_cantidad, fac_pagunit, fac_nombrecli, fac_direccioncli, cli_cc)
             VALUES ('$store', '$prod', '$cant', '$pagunit', '$custom', '$adress', '$port')";        


   $ejecutar = mysqli_query($conn, $query);         
   
   
   if ($ejecutar){
      echo '<script>
            alert("Se ha completado el registro de factura exitosamente");
            window.location = "facturatable.php";
      </script>';
   }

   else{
      echo '<script>
           alert("Oops algo ha salido mal con el registro");
           window.location = "agregarfac.php";      
      </script>';
   }

   

   mysqli_close($conn);////remember me//

?>