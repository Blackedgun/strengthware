<!DOCTYPE html>
<html lang="es">

<head class="Strengthhead">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Horario</title>
    <link rel="stylesheet" href="css/Style.css">
    <link rel="stylesheet" href="css/normalize.css">
</head>
<body style="background:url(img/Backtwo.jpg)">
    <form action="validarhor.php" class="form-register" method="POST">
        <h4>Agregar horario</h4>
        <div><input class="controls" type="text" name="nombre" placeholder="Ingrese nombre" required></div>
        <div><input class="controls" type="text" name="lunes" placeholder="Ingrese horario del lunes" required></div>
        <div><input class="controls" type="text" name="martes" placeholder="Ingrese horario del martes" required></div>
        <div><input class="controls" type="text" name="miercoles" placeholder="Ingrese horario del miercoles" required></div>
        <div><input class="controls" type="text" name="jueves" placeholder="Ingrese horario del jueves" required></div>
        <div><input class="controls" type="text" name="viernes" placeholder="Ingrese horario del viernes" required></div>
        <input class="bottom" type="submit" value="Aceptar">
    </form>
</body>
</html>