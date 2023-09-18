<?php 

include '../reg.php';

$hor = "SELECT * FROM empleado";

$query = $conn->query($hor);

if($query){
    echo  "I.D,";
    echo  "Cédula,";
    echo  "Nombre,";
    echo  "Apellido,";
    echo  "Cargo,";
    echo  "Correo,";
    echo  "Contraseña,";
    echo  "Rol,";
    echo  "Fecha Registro \n";

   while($grab = $query->fetch_object()){
         echo $grab->emp_id. ",";
         echo $grab->emp_cc. ",";
         echo $grab->emp_nombre. ",";
         echo $grab->emp_apellido. ",";
         echo $grab->emp_cargo. ",";
         echo $grab->emp_email. ",";
         echo $grab->emp_password. ",";
         echo $grab->id_cargo. ",";
         echo $grab->fecha_registro. "\n";
   }
}

header('Content-Type: text/csv');
header('Content-Disposition: attachment; filename="Empleados.csv";');

?>