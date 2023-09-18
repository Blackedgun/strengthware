<?php 
  include "reg.php";
?>

<!DOCTYPE html>
<html lang="es">

<head class="Strengthhead">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edición de inventario</title>
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

      $qli="update inventario set inv_producto = '".$diauno."',
      inv_precio = '".$diados."', inv_cantidad = '".$diatres."', inv_descripcion = '".$diacuatro."'
      where inv_id = '".$id."'";
      $resultado=mysqli_query($conn, $qli);

      if($resultado){
        echo "<script language='JavaScript'>
        alert ('Los datos se han actualizado correctamente');
        location.assign ('inventario.php')
        </script>";
      }else{
        echo "<script language='JavaScript'>
        alert ('No se pudieron actualizar los datos');
        location.assign ('inventario.php')
        </script>";
      }

      mysqli_close($conn);

    }
    else {
      $id = $_GET ["id"];
      $sql = "SELECT * FROM inventario WHERE inv_id='".$id."'";
      $resultado=mysqli_query($conn, $sql);

      $filas=mysqli_fetch_assoc($resultado);
      $diauno=$filas["inv_producto"];
      $diados=$filas["inv_precio"];
      $diatres=$filas["inv_cantidad"];
      $diacuatro=$filas["inv_descripcion"];

      mysqli_close($conn);
      
    ?>
    <form action="<?=$_SERVER['PHP_SELF']?>" class="form-register" method="POST">
        <h4>Edición de producto</h4>
        <label>Ingrese nuevo nombre del producto</label>
        <div><input class="controls" type="text" name="Lunes" value=" <?php echo $diauno; ?> " required></div>
        <label>Ingrese ingrese el precio</label>
        <div><input class="controls" type="text" name="Martes" value="<?php echo $diados; ?>" required></div>
        <label>Ingrese la cantidad</label>
        <div><input class="controls" type="text" name="Miercoles" value="<?php echo $diatres; ?>" required></div>
        <label>Ingrese una descripción</label>
        <div><input class="controls" type="text" name="Jueves" value="<?php echo $diacuatro; ?>" required></div>
        <br>
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