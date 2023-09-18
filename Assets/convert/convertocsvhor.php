<?php 

include '../reg.php';

$hor = "SELECT * FROM horario";

$query = $conn->query($hor);

if($query){
    echo  "Id Horario,";
    echo  "Nombre,";
    echo  "Lunes,";
    echo  "Martes,";
    echo  "Miercoles,";
    echo  "Jueves,";
    echo  "Viernes,";
    echo  "Id Empleado \n";

   while($grab = $query->fetch_object()){
         echo $grab->Hor_id. ",";
         echo $grab->Hor_name. ",";
         echo $grab->Hor_lunes. ",";
         echo $grab->Hor_martes. ",";
         echo $grab->Hor_miercoles. ",";
         echo $grab->Hor_jueves. ",";
         echo $grab->Hor_viernes. ",";
         echo $grab->emp_id. "\n";
   }
}

header('Content-Type: text/csv');
header('Content-Disposition: attachment; filename="Horarios.csv";');


?>
