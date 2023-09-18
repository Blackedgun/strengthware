<?php 

   include 'reg.php';
   
   $name = $_POST ['nombre'];
   $monday = $_POST ['lunes'];
   $tuesday = $_POST ['martes'];
   $wednesday = $_POST ['miercoles'];
   $thursday = $_POST ['jueves'];
   $friday = $_POST ['viernes'];
   

   $query = "INSERT INTO horario (Hor_name, Hor_lunes, Hor_martes, Hor_miercoles, Hor_jueves, Hor_viernes)
             VALUES ('$name', '$monday', '$tuesday', '$wednesday', '$thursday', '$friday')";        


   $ejecutar = mysqli_query($conn, $query);         
   
   
   if ($ejecutar){
      echo '<script>
            alert("Se ha completado el registro de horario exitosamente");
            window.location = "Horarios.php";
      </script>';
   }

   else{
      echo '<script>
           alert("Oops algo ha salido mal con el registro de horario");
           window.location = "agregarhor.php";      
      </script>';
   }

   

   mysqli_close($conn);////remember me//

?>