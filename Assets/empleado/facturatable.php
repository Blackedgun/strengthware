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
  <title>Facturas</title>
</head>

<body style="background:url(../img/Backtwo.jpg)">


  <h1>Facturas PAV</h1>
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
            <div class="Fetch"><a href="../Interfazemp.php">Regresar</a></div>
          </td>
        </tr>
      </table>
    </div>


    <?php
    if (isset($_GET['enviar'])) {
      $busqueda = $_GET['busqueda'];

      $consulta = $conn->query("SELECT * FROM factura WHERE fac_id LIKE '%$busqueda%' OR fac_tienda LIKE '%$busqueda%'
      OR fac_nombreprod LIKE '%$busqueda%' OR fac_cantidad LIKE '%$busqueda%' OR fac_pagunit LIKE '%$busqueda%'
      OR fac_pagototal LIKE '%$busqueda%' OR fac_nombrecli LIKE '%$busqueda%' OR fac_direccioncli LIKE '%$busqueda%'
      OR fac_fecha LIKE '%$busqueda%'");
      while ($row = $consulta->fetch_array()) {
    ?>
        <div class="table__container">
          <table>
            <tr>
              <th>ID</th>
              <th>Tienda UP</th>
              <th>Producto</th>
              <th>Cantidad</th>
              <th>Pago unidad</th>
              <th>Pago Total</th>
              <th>Cliente</th>
              <th>Dirección</th>
              <th>Fecha</th>
            </tr>
            <tr>
              <td style="color:#f2f2f2;"><?php echo $row['fac_id'] . '<br>' ?></td>
              <td style="color:#f2f2f2;"><?php echo $row['fac_tienda'] . '<br>' ?></td>
              <td style="color:#f2f2f2;"><?php echo $row['fac_nombreprod'] . '<br>' ?></td>
              <td style="color:#f2f2f2;"><?php echo $row['fac_cantidad'] . '<br>' ?></td>
              <td style="color:#f2f2f2;"><?php echo $row['fac_pagunit'] . '<br>' ?></td>
              <td style="color:#f2f2f2;"><?php echo $row['fac_pagototal'] . '<br>' ?></td>
              <td style="color:#f2f2f2;"><?php echo $row['fac_nombrecli'] . '<br>' ?></td>
              <td style="color:#f2f2f2;"><?php echo $row['fac_direccioncli'] . '<br>' ?></td>
              <td style="color:#f2f2f2;"><?php echo $row['fac_fecha'] . '<br>' ?></td>
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
          <th>Tienda UP</th>
          <th>Producto</th>
          <th>Cantidad</th>
          <th>Pago Total</th>
          <th>Cliente</th>
          <th>Dirección</th>
          <th>Fecha</th>
        </tr>
        <?php
        $emp = "SELECT * FROM factura";
        $resultado = mysqli_query($conn, $emp);
        while ($mostrarse = mysqli_fetch_array($resultado)) {
        ?>
          <tr>
            <td style="color:#f2f2f2;"><?php echo $mostrarse['fac_id'] ?></td>
            <td style="color:#f2f2f2;"><?php echo $mostrarse['fac_tienda'] ?></td>
            <td style="color:#f2f2f2;"><?php echo $mostrarse['fac_nombreprod'] ?></td>
            <td style="color:#f2f2f2;"><?php echo $mostrarse['fac_cantidad'] ?></td>
            <td style="color:#f2f2f2;"><?php echo $mostrarse['fac_pagototal'] ?></td>
            <td style="color:#f2f2f2;"><?php echo $mostrarse['fac_nombrecli'] ?></td>
            <td style="color:#f2f2f2;"><?php echo $mostrarse['fac_direccioncli'] ?></td>
            <td style="color:#f2f2f2;"><?php echo $mostrarse['fac_fecha'] ?></td>
          </tr>
        <?php
        }
        ?>
      </table>
    </div>
</body>

</html>