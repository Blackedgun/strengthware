<!DOCTYPE html>
<html lang="es">

<head class="Strengthhead">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Ingreso</title>
    <link rel="stylesheet" href="css/Style.css">
    <link rel="stylesheet" href="css/normalize.css">
</head>

<body style="background:url(img/Backtwo.jpg)">
    <div class="form-register">
        <form action="validar.php" method="POST">
            <h4>Registrarse</h4>
            <div><input class="controls" type="text" name="nombre" placeholder="Ingrese su primer nombre" required></div>
            <div><input class="controls" type="text" name="apellido" placeholder="Ingrese su primer apellido" required></div>
            <div><input class="controls" type="number" name="numberow" placeholder="Ingrese su número de contacto" required minlength="9" maxlength="10"></div>
            <div><input class="controls" type="email" name="email" placeholder="Ingresa tu correo" required></div>
            <div><input class="controls" type="password" name="contrasena" placeholder="Crea una contraseña" required minlength="4" maxlength="40"></div>
            <div><input class="controls" type="hidden" name="rol" value="<?php echo "4"; ?>"></div>
            <p><a href="#">Terminos y Condiciones</a></p>
            <input class="bottom" type="submit" value="Crear cuenta">
            <p><a href="login/Formulario.php">¿Tienes una cuenta? Entrá</a></p>
        </form>
    </div>
    <script src="js/app.js"></script>
</body>

</html>