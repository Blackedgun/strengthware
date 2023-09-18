<?php 

include "reg.php";

?>

<!DOCTYPE html>
<html lang="es">

<head class="Strengthhead">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edición de Inventario</title>
    <link rel="stylesheet" href="../css/Style.css">
    <link rel="stylesheet" href="../css/normalize.css">
</head>
<body style="background:url(../img/Backtwo.jpg)">
    <form action="validarinv.php" class="form-register" method="POST">
        <h4>Edición de Inventario</h4>
        <div><input class="controls" type="text" name="producto" placeholder="Ingrese el producto" required></div>
        <div><input class="controls" type="text" name="precio" placeholder="Ingrese el precio" required></div>
        <div><input class="controls" type="text" name="cantidad" placeholder="Ingrese la cantidad" required></div>
        <label>Descripcion</label>
        <div><input style="height:150px;" class="controls" type="textarea" name="descripcion" required></div>
        <div><input class="controls" type="hidden" name="id" value="11115"></div>
        <input class="bottom" type="submit" value="Aceptar">
        <option value=""></option>
    </form>
</body>
</html>