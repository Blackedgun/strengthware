<?php 

include '../reg.php';

$hor = "SELECT * FROM factura";

$query = $conn->query($hor);

if($query){
    echo  "I.D,";
    echo  "Tienda UP,";
    echo  "Producto,";
    echo  "Cantidad,";
    echo  "Pago unidad,";
    echo  "Pago Total,";
    echo  "Cliente,";
    echo  "Dirección,";
    echo  "Fecha Registro \n";

   while($grab = $query->fetch_object()){
         echo $grab->fac_id. ",";
         echo $grab->fac_tienda. ",";
         echo $grab->fac_nombreprod. ",";
         echo $grab->fac_cantidad. ",";
         echo $grab->fac_pagunit. ",";
         echo $grab->fac_pagototal. ",";
         echo $grab->fac_nombrecli. ",";
         echo $grab->fac_direccioncli. ",";
         echo $grab->fac_fecha. "\n";
   }
}

header('Content-Type: text/csv');
header('Content-Disposition: attachment; filename="Facturas.csv";');

?>