<?php

include 'reg.php';

$name = $_POST['nombre'];
$surname = $_POST['apellido'];
$number = $_POST['numberow'];
$correo = $_POST['email'];
$password = md5($_POST['contrasena']);
$rol = $_POST['rol'];

//Encriptación de clave//

$query  = "INSERT INTO empleado(emp_nombre, emp_apellido, emp_telefono, emp_email, emp_password, id_cargo)
              VALUES ('$name', '$surname' , '$number', '$correo','$password','$rol')";



//Estos valores de aquí no se repetiran//

$verificacion_correo = mysqli_query($conn, "SELECT * FROM empleado WHERE emp_email = '$correo'");

if (mysqli_num_rows($verificacion_correo) > 0) {
   echo '<script>
             alert ("Este correo ya se encuentra en uso, intentalo de nuevo");
             window.location = "Registro.php"    
      </script>';

   exit();
}

$ejecutar = mysqli_query($conn, $query);


if ($ejecutar) {
   echo '<script>
            alert("Se ha completado el registro exitosamente");
            window.location = "Registro.php";
      </script>';
} else {
   echo '<script>
           alert("Oops algo ha salido mal con el registro");
           window.location = "Registro.php";      
      </script>';
}



mysqli_close($conn);////remember me//
