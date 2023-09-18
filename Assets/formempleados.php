<?php 
  include "reg.php";
?>

<!DOCTYPE html>
<html lang="es">

<head class="Strengthhead">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar usuario</title>
    <link rel="stylesheet" href="css/Style.css">
    <link rel="stylesheet" href="css/normalize.css">
</head>
<body style="background:url(img/Backtwo.jpg)">
    <?php 
    if (isset($_POST['enviar'])){

      $id=$_POST["id"];
      $rot=$_POST["codigoemp"];
      $cod=$_POST["codigo"];
      $nom=$_POST["nombre"];
      $ape=$_POST["apellido"];
      $car=$_POST["cargo"];
      $ema=$_POST["email"];
      $rol=$_POST["rol"];

      $qli="update empleado set emp_id = '".$rot."', emp_cc = '".$cod."',
      emp_nombre = '".$nom."', emp_apellido = '".$ape."', emp_cargo = '".$car."',
      emp_email = '".$ema."', id_cargo = '".$rol."' where emp_id = '".$id."'";
      $resultado=mysqli_query($conn, $qli);

      if($resultado){
        echo "<script language='JavaScript'>
        alert ('Los datos se han actualizado correctamente');
        location.assign ('empleados.php')
        </script>";
      }else{
        echo "<script language='JavaScript'>
        alert ('No se pudieron actualizar los datos');
        location.assign ('empleados.php')
        </script>";
    }
        mysqli_close($conn);
    }

    else {
      $id = $_GET ["id"];
      $sqli = "SELECT * FROM empleado WHERE emp_id='".$id."'";
      $resultado=mysqli_query($conn, $sqli);

      $filas=mysqli_fetch_assoc($resultado);
      $rot=$filas["emp_id"];
      $cod=$filas["emp_cc"];
      $nom=$filas["emp_nombre"];
      $ape=$filas["emp_apellido"];
      $car=$filas["emp_cargo"];
      $ema=$filas["emp_email"];
      $rol=$filas["id_cargo"];

      mysqli_close($conn);
      
    ?>
    <form action="<?=$_SERVER['PHP_SELF']?>" class="form-register" method="POST">
        <h4>Modificación de Usuario</h4>
        <label>Ingrese codigo</label>
        <div><input class="controls" type="number" name="codigoemp" value="<?php echo $rot; ?>" max="20000" ></div>
        <label>Ingrese cédula</label>
        <div><input class="controls" type="number" name="codigo" value="<?php echo $cod; ?>" ></div>
        <label>Ingrese nuevo Nombre</label>
        <div><input class="controls" type="text" name="nombre" value="<?php echo $nom; ?>" ></div>
        <label>Ingrese nuevo Apellido</label>
        <div><input class="controls" type="text" name="apellido" value="<?php echo $ape; ?>" ></div>
        <label>Ingrese el nuevo Cargo</label>
        <div><input class="controls" type="text" name="cargo" value="<?php echo $car; ?>" ></div>
        <label>Ingrese el nuevo Email</label>
        <div><input class="controls" type="text" name="email" value="<?php echo $ema; ?>" ></div>
        <label>Ingrese la interfaz nueva del usuario</label>
        <div><input class="controls" type="number" name="rol" value="<?php echo $rol; ?>" min="1" max="4" ></div>
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <p>___________________________________</p>
        <input class="bottom" type="submit" name="enviar" value="Aceptar">
        <p><a href="Interfaz.php">Regresar</a></p>
    </form>
    <?php 
    }
    ?>
    <script src="js/script.js"></script>
</body>
</html>