<?php 
  include "reg.php";
?>

<!DOCTYPE html>
<html lang="es">

<head class="Strengthhead">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edición de horarios</title>
    <link rel="stylesheet" href="css/Style.css">
    <link rel="stylesheet" href="css/normalize.css">
</head>
<body style="background:url(img/Backtwo.jpg)">
    <?php 
    if (isset($_POST['enviar'])){

      $id=$_POST["id"];
      $diauno=$_POST["Lunes"];
      $diados=$_POST["Martes"];
      $diatres=$_POST["Miercoles"];
      $diacuatro=$_POST["Jueves"];
      $diacinco=$_POST["Viernes"];

      $qli="update horario set Hor_lunes = '".$diauno."',
      Hor_martes = '".$diados."', Hor_miercoles = '".$diatres."', Hor_jueves = '".$diacuatro."',
      Hor_viernes = '".$diacinco."' where Hor_id = '".$id."'";
      $resultado=mysqli_query($conn, $qli);

      if($resultado){
        echo "<script language='JavaScript'>
        alert ('Los datos se han actualizado correctamente');
        location.assign ('Horarios.php')
        </script>";
      }else{
        echo "<script language='JavaScript'>
        alert ('No se pudieron actualizar los datos');
        location.assign ('Horarios.php')
        </script>";
      }

      mysqli_close($conn);

    }
    else {
      $id = $_GET ["id"];
      $sql = "SELECT * FROM horario WHERE Hor_id='".$id."'";
      $resultado=mysqli_query($conn, $sql);

      $filas=mysqli_fetch_assoc($resultado);
      $diauno=$filas["Hor_lunes"];
      $diados=$filas["Hor_martes"];
      $diatres=$filas["Hor_miercoles"];
      $diacuatro=$filas["Hor_jueves"];
      $diacinco=$filas["Hor_viernes"];

      mysqli_close($conn);
      
    ?>
    <form action="<?=$_SERVER['PHP_SELF']?>" class="form-register" method="POST">
        <h4>Programación semanal</h4>
        <label>Ingrese programación del Lunes</label>
        <div><input class="controls" type="text" name="Lunes" value=" <?php echo $diauno; ?> " required></div>
        <label>Ingrese programación del Martes</label>
        <div><input class="controls" type="text" name="Martes" value="<?php echo $diados; ?>" required></div>
        <label>Ingrese programación del Miércoles</label>
        <div><input class="controls" type="text" name="Miercoles" value="<?php echo $diatres; ?>" required></div>
        <label>Ingrese programación del jueves</label>
        <div><input class="controls" type="text" name="Jueves" value="<?php echo $diacuatro; ?>" required></div>
        <label>Ingrese programación del Viernes</label>
        <div><input class="controls" type="text" name="Viernes" value="<?php echo $diacinco; ?>" required></div>
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <p>___________________________________</p>
        <p>No olvide poner los "Descansos" :D</p>
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