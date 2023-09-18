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
  <title>Inventario</title>
</head>

<body style="background:url(../img/Backtwo.jpg)">


  <div>
    <h1>Inventario</h1>
  </div>


  <div>
    <form class="header__title" action="">
      <input type="text" name="busqueda"><br>
      <input type="submit" name="enviar" value="Buscar">
    </form>
    <br>
    <br>
    <div class="table__container">
      <table>
        <tr>
          <td>
            <div class="Fetch"><a href="../Interfazemp.php" class='footer__title'>Regresar</a></div>
          </td>
        </tr>
      </table>
    </div>


    <?php
    if (isset($_GET['enviar'])) {
      $busqueda = $_GET['busqueda'];

      $consulta = $conn->query("SELECT * FROM inventario WHERE inv_id LIKE '%$busqueda%' OR inv_producto LIKE '%$busqueda%' OR inv_precio LIKE '%$busqueda%'
    OR inv_cantidad LIKE '%$busqueda%' OR inv_descripcion LIKE '%$busqueda%'");
      while ($row = $consulta->fetch_array()) {
    ?>
        <div class="table__container">
          <table>
            <tr>
              <th>ID</th>
              <th>Tipo de producto</th>
              <th>Precio</th>
              <th>Cantidad</th>
              <th>Descripción</th>
            </tr>
            <tr>
              <td style="color:#f2f2f2;">
                <?php echo $row['inv_id'] ?>
              </td>
              <td style="color:#f2f2f2;">
                <?php echo $row['inv_producto'] ?>
              </td>
              <td style="color:#f2f2f2;">
                <?php echo $row['inv_precio'] ?>
              </td>
              <td style="color:#f2f2f2;">
                <?php echo $row['inv_cantidad'] ?>
              </td>
              <td style="color:#f2f2f2;">
                <?php echo $row['inv_descripcion'] ?>
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
          <th>Tipo de producto</th>
          <th>Precio</th>
          <th>Cantidad</th>
          <th>Descripción</th>
        </tr>
        <?php
        $inv = "SELECT * FROM inventario";
        $resulta = mysqli_query($conn, $inv);
        while ($mostrar = mysqli_fetch_array($resulta)) {
        ?>
          <tr>
            <td style="color:#f2f2f2;">
              <?php echo $mostrar['inv_id'] ?>
            </td>
            <td style="color:#f2f2f2;">
              <?php echo $mostrar['inv_producto'] ?>
            </td>
            <td style="color:#f2f2f2;">
              <?php echo $mostrar['inv_precio'] ?>
            </td>
            <td style="color:#f2f2f2;">
              <?php echo $mostrar['inv_cantidad'] ?>
            </td>
            <td style="color:#f2f2f2;">
              <?php echo $mostrar['inv_descripcion'] ?>
            </td>
          </tr>
        <?php
        }
        ?>
      </table>
    </div>
</body>

</html>