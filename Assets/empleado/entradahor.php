<?php

include "reg.php";

?>

<!DOCTYPE html>
<html lang="es">

<head class="Strengthhead">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Entrada</title>
    <link rel="stylesheet" href="../css/Style.css">
    <link rel="stylesheet" href="../css/normalize.css">
</head>

<body style="background:url(../img/Backtwo.jpg)">
    <form action="validarhor.php" class="form-register" method="POST">
        <h4>Registro de Entrada</h4>
        <div><input class="controls" type="text" name="email" placeholder="Ingrese su correo" required></div>
        <div><input class="controls" type="password" name="contrasena" placeholder="Ingrese su contraseña" required></div>
        <label for="seleccionarColor">Selecciona el dia:</label>
        <select name="dia" id="" class="controls">
            <option value="Lunes">Lunes</option>
            <option value="Martes">Martes</option>
            <option value="Miercoles">Miercoles</option>
            <option value="Jueves">Jueves</option>
            <option value="Viernes">Viernes</option>
        </select>
        <input class="bottom" type="submit" value="Aceptar">
        <option value=""></option>
    </form>
</body>

</html>