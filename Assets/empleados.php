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
  <title>Empleados</title>
</head>

<body style="background:url(img/Backtwo.jpg)">


  <h1>Datos de Empleados</h1>
  <div>
    <form class="header__title" action="">
      <input type="text" name="busqueda"><br>
      <input type="submit" name="enviar" value="Buscar">
      <div>
        <a style="color:#707070; height:fit-content; font-size:1.1rem; width:60px; margin-left:400px; background-color:lawngreen;" class='footer__title' href="convert/convertocsvemp.php">CSV</a>
      </div>
    </form>
    <br>
    <br>
    <div class="table__container">
      <table>
        <tr>
          <td>
            <div class="Fetch"><a href="Interfaz.php">Regresar</a></div>
          </td>
        </tr>
      </table>
    </div>


    <?php
    if (isset($_GET['enviar'])) {
      $busqueda = $_GET['busqueda'];

      $consulta = $conn->query("SELECT * FROM empleado WHERE emp_id LIKE '%$busqueda%' OR emp_cc LIKE '%$busqueda%' OR emp_nombre LIKE '%$busqueda%'
          OR emp_apellido LIKE '%$busqueda%' OR emp_telefono LIKE '%$busqueda%' OR emp_cargo LIKE '%$busqueda%' OR emp_email LIKE '%$busqueda%'");
      while ($row = $consulta->fetch_array()) {
    ?>
        <div class="table__container">
          <table>
            <tr>
              <th>CC</th>
              <th>ID Empleado</th>
              <th>Nombre</th>
              <th>Apellido</th>
              <th>Teléfono</th>
              <th>Cargo</th>
              <th>Correo</th>
              <th>Rol</th>
              <th>Fecha</th>
              <th>Edición</th>
            </tr>
            <tr>
              <td style="color:#f2f2f2;">
                <?php echo $row['emp_id'] ?>
              </td>
              <td style="color:#f2f2f2;">
                <?php echo $row['emp_cc'] ?>
              </td>
              <td style="color:#f2f2f2;">
                <?php echo $row['emp_nombre'] ?>
              </td>
              <td style="color:#f2f2f2;">
                <?php echo $row['emp_apellido'] ?>
              </td>
              <td style="color:#f2f2f2;">
                <?php echo $row['emp_telefono'] ?>
              </td>
              <td style="color:#f2f2f2;">
                <?php echo $row['emp_cargo'] ?>
              </td>
              <td style="color:#f2f2f2;">
                <?php echo $row['emp_email'] ?>
              </td>
              <td style="color:#f2f2f2;">
                <?php echo $row['id_cargo'] ?>
              </td>
              <td style="color:#f2f2f2;">
                <?php echo $row['fecha_registro'] ?>
              </td>
              <td><a href="formempleados.php?id=<?php echo $row['emp_id']; ?>" class='footer__title'>Modificar</a>
                <br>
                <br>
                <form action="eliminaremp.php" method="POST">
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
    </table>
  </div>



  <div class="table__container">
    <table>
      <tr>
        <th>CC</th>
        <th>ID Empleado</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Teléfono</th>
        <th>Cargo</th>
        <th>Correo</th>
        <th>Rol</th>
        <th>Fecha</th>
        <th>Edición</th>
      </tr>
      <?php
      $emp = "SELECT * FROM empleado";
      $resultado = mysqli_query($conn, $emp);
      while ($mostrarse = mysqli_fetch_array($resultado)) {
      ?>
        <tr>
          <td style="color:#f2f2f2;">
            <?php echo $mostrarse['emp_id'] ?>
          </td>
          <td style="color:#f2f2f2;">
            <?php echo $mostrarse['emp_cc'] ?>
          </td>
          <td style="color:#f2f2f2;">
            <?php echo $mostrarse['emp_nombre'] ?>
          </td>
          <td style="color:#f2f2f2;">
            <?php echo $mostrarse['emp_apellido'] ?>
          </td>
          <td style="color:#f2f2f2;">
            <?php echo $mostrarse['emp_telefono'] ?>
          </td>
          <td style="color:#f2f2f2;">
            <?php echo $mostrarse['emp_cargo'] ?>
          </td>
          <td style="color:#f2f2f2;">
            <?php echo $mostrarse['emp_email'] ?>
          </td>
          <td style="color:#f2f2f2;">
            <?php echo $mostrarse['id_cargo'] ?>
          </td>
          <td style="color:#f2f2f2;">
            <?php echo $mostrarse['fecha_registro'] ?>
          </td>
          <td><a href="formempleados.php?id=<?php echo $mostrarse['emp_id']; ?>" class='footer__title'>Modificar</a>
            <br>
            <br>
            <form action="eliminaremp.php" method="POST">
              <input type="hidden" name="erase" value="<?php echo $mostrarse['emp_id']; ?>">
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