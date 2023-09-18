<!DOCTYPE html>
<html lang="es">

<head class="Strengthhead">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Ingreso</title>
    <link rel="stylesheet" href="../css/Style.css">
    <link rel="stylesheet" href="../css/normalize.css">
</head>
<body style="background:url(../img/Backtwo.jpg)">
    <form action="login_usuario.php" class="form-register" method="POST">
        <h4>Iniciar Sesión</h4>
        <div><input class="controls" type="text" name="codigo" id="codigo" placeholder="Codigo de empleado" required></div>
        <div><input class="controls" type="email" name="email" id="email" placeholder="Ingrese su correo" required></div>
        <div><input class="controls" type="password" name="contrasena" id="contrasena" placeholder="Ingrese su Constraseña" required></div>
        <p><a href="">Olvide mi contraseña</a></p>
        <input class="bottom" type="submit" value="Ingresar">
        <p><a href="Registro.php">No tengo cuenta</a></p>
    </form>
</body>
</html>

