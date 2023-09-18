<?php

include 'reg.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 20px;
        }

        th,
        td {
            border: 0.5px solid #ff7300;
            padding: 8px;
            text-align: center;
        }

        th {
            background-color: #ff7300;
        }

        tr {
            background-color: #707070;
        }

        .header {
            text-align: center;
            font-size: 24px;
            margin-bottom: 20px;
        }

        h1 {
            color: #f2f2f2;
            text-align: center;
        }

        .footer__title {
            display: inline-block;
            background: #fff;
            padding: var(--boton-padding);
            color: var(--color-primary);
            text-decoration: none;
            border-radius: 20px;
            padding: var(--background-padding);
            width: 120px;
            height: 40px;
            font-size: 30px;
            text-align: center;
            align-items: center;
            font-size: 20px;
        }

        .Fetch {
            place-items: center;
            display: grid;
            font-size: 20px;
            text-decoration: none;
            border-radius: 20px;
            background: #fff;
            color: var(--color-primary);
            width: 200px;
            height: 50px;
            margin: auto;
        }

        .header__title {
            width: 400px;
            background: #707070;
            padding: 29px;
            margin: auto;
            margin-top: 100px;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            color: #e9e2e2;
            box-shadow: 7px 13px 37px #000;
            border: 5px solid #ff7300;
            border-radius: 2vh;
            backdrop-filter: blur(15px);
            width: 39%;
        }

        .table__container {
            width: 90%;
            margin: 50px;
            border: 5px solid #ff7300;
            background: rgb(255, 137, 26);
            overflow: hidden;
            max-height: auto;
            border-radius: 1vh;
            display: inline-block;
        }
    </style>
    <title>Inicio de jornada de empleados</title>


</head>

<body style="background:url(img/Backtwo.jpg)">



    <h1>Listado de Ingreso Diario</h1>

    <div>
        <form class="header__title" action="">
            <input type="text" name="busqueda">
            <br>
            <br>
            <input type="submit" name="enviar" value="Buscar">
        </form>
    </div>
    <br>
    <br>
    <div class="table__container">
        <table> 
            <tr>
                <td>
                    <div class="Fetch"><a href="Horarios.php">Regresar</a></div>
                </td>
                <td>
                    <form action="eliminarallent.php" method="POST">
                        <input type="hidden" name="erase" value="">
                        <button type="submit" class="Fetch" onclick="return confirm('¿Estás seguro de que quieres eliminar todo!?')">Eliminar</button>
                    </form>
                </td>
            </tr>
        </table>
    </div>

    <?php
    if (isset($_GET['enviar'])) {
        $busqueda = $_GET['busqueda'];

        $consulta = $conn->query("SELECT * FROM registrohor WHERE emp_id LIKE '%$busqueda%' OR emp_nombre LIKE '%$busqueda%' OR dia LIKE '%$busqueda%'
          OR entrada LIKE '%$busqueda%'");
        while ($row = $consulta->fetch_array()) {
    ?>
            <div class="table__container">
                <table>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Dia</th>
                        <th>Hora de Ingreso</th>
                        <th>Edición</th>
                    </tr>
                    <tr>
                        <td style="color:#f2f2f2;">
                            <?php echo $row['emp_id'] ?>
                        </td>
                        <td style="color:#f2f2f2;">
                            <?php echo $row['emp_nombre'] ?>
                        </td>
                        <td style="color:#f2f2f2;">
                            <?php echo $row['dia'] ?>
                        </td>
                        <td style="color:#f2f2f2;">
                            <?php echo $row['entrada'] ?>
                        </td>
                        <td>
                            <form action="eliminarent.php" method="POST">
                                <input type="hidden" name="erase" value="<?php echo $row['emp_id']; ?>">
                                <button type="submit" class="footer__title" onclick="return confirm('¿Estás seguro de que quieres eliminar este registro?')">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                </table>
            </div>


    <?php
        }
    } else {
    }
    ?>


    <div class="table__container">
        <table>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Dia</th>
                <th>Hora de Ingreso</th>
                <th>Edición</th>
            </tr>

            <?php
            $hor = "SELECT * FROM registrohor";
            $result = mysqli_query($conn, $hor);
            while ($mostrar = mysqli_fetch_array($result)) {
            ?>

                <tr>
                    <td style="color:#f2f2f2;">
                        <?php echo $mostrar['emp_id'] ?>
                    </td>
                    <td style="color:#f2f2f2;">
                        <?php echo $mostrar['emp_nombre'] ?>
                    </td>
                    <td style="color:#f2f2f2;">
                        <?php echo $mostrar['dia'] ?>
                    </td>
                    <td style="color:#f2f2f2;">
                        <?php echo $mostrar['entrada'] ?>
                    </td>
                    <td>
                        <form action="eliminarent.php" method="POST">
                            <input type="hidden" name="erase" value="<?php echo $mostrar['emp_id']; ?>">
                            <button type="submit" class="footer__title" onclick="return confirm('¿Estás seguro de que quieres eliminar este registro?')">Eliminar</button>
                        </form>
                    </td>
                </tr>
            <?php
            }
            ?>
        </table>
    </div>


</body>

</html>