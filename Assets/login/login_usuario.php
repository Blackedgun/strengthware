<?php 

session_start();

if (isset($_SESSION['usuario']) && $_SESSION['usuario'] === true) {
    echo '<script>
    alert ("Hay una sesión en ejecución, por favor cierre sesión para continuar");
   window.location = "Formulario.php";
</script>';
exit;
}

include '../reg.php';


$codigo = $_POST ['codigo'];
$correo = $_POST ['email'];
$password = md5($_POST ['contrasena']);


$validar_login = "SELECT * FROM empleado
WHERE emp_email = '$correo' and emp_password = '$password' and emp_id = '$codigo'";


  
$validar=mysqli_query($conn,$validar_login);


$fire = mysqli_num_rows($validar);


if($fire >0 ){
    $_SESSION['usuario'] = $codigo;


while($filadelfia=mysqli_fetch_array($validar)){



if ($filadelfia['id_cargo']==1){
    header("location: ../Interfaz.php");    
}

elseif($filadelfia['id_cargo']==2){
    header("location: ../Interfazemp.php");
}

elseif($filadelfia['id_cargo']==3){
    header("location: ../Interfazlider.php");
}

elseif($filadelfia['id_cargo']==4){
    header("location: ../pendiente.php");
}

}

}

else{
    echo '<script>
         alert ("El usuario no existe, por favor verifique los datos introducidos");
        window.location = "Formulario.php";
    </script>';
    exit;
}
