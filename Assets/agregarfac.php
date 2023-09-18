<?php
include "reg.php";
?>

<!DOCTYPE html>
<html lang="es">

<head class="Strengthhead">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Factura</title>
    <link rel="stylesheet" href="css/Style.css">
    <link rel="stylesheet" href="css/normalize.css">
</head>
<body style="background:url(img/Backtwo.jpg)">
    <form action="validarfac.php" class="form-register" method="POST">
        <h4>Agregar factura PAV</h4>
        <div><input class="controls" type="text" name="store" placeholder="Ingrese nombre de tienda" required></div>
        <div><input class="controls" type="text" name="product" placeholder="Ingrese nombre del producto" required></div>
        <div><input class="controls" type="number" name="amount" placeholder="Ingrese la cantidad" required></div>
        <div><input class="controls" type="number" name="unit" placeholder="Ingrese precio unitario" required></div>
        <div><input class="controls" type="text" name="customer" placeholder="Ingrese nombre del cliente" required></div>
        <div><input class="controls" type="text" name="adress" placeholder="Ingrese dirección de domicilio" required></div>
        <div><input class="controls" type="hidden" name="id" value="2134593450"></div>
        <input class="bottom" type="submit" value="Aceptar">
    </form>
</body>
</html>