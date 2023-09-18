<?php 

include "reg.php";

session_start();
if(empty($_SESSION['usuario'])){
  header('location: Strengthware.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Interfaz</title>
  <link rel="stylesheet" href="css/dash.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
</head>
<body style="background:url(img/Backtwo.jpg)">

<style>
  .container .main .content-2{
  width: 100%;
  padding: 15px;
  cursor: pointer;
  display: flex;
  border-radius: 10px;
  background: #fff;
  margin-bottom: 15px;
  justify-content: space-between;
  border: 2px solid rgb(190, 190, 190);
  box-shadow: 0 20px 30px rgba(0, 0, 0, 0.1);
  min-height: 60vh;
  align-items: start;
  flex-wrap: wrap;
   
}

.container .main .content-2 .job_salario{
  text-align: right;
  color: rgb(54, 54, 54);
}

.container .main .content-2 .zzzz{
    background: rgb(255, 140, 0);
    margin-top: 50px;
    text-decoration: none;
    border-radius: 10px;
    width: 150px;
    height: 150px;
    font-size: 30px;
    align-items: left;
    align-content: left;
}

.container .main .content-2 .pagos_recientes {
  min-height: 50vh;
  background: white;
  margin: 0 25px 25px 25px;
}
</style>

  <div class="container">
    <nav>
      <div class="navbar">
        <div class="logo">
          <img src="https://logopond.com/logos/58fef5b7f302e7d32bfc17a21f56b008.png" alt="">
          <h1>Strength</h1>
        </div>
        <ul>
          <li><a href="#">
            <i class="fas fa-user"></i>
            <span class="nav-item">Mi Cuenta</span>
          </a>
          </li>
          <li><a href="#">
            <i class="fas fa-chart-bar"></i>
            <a href="lider_bodega/Horarios.php"><span class="nav-item">Horario</span></a>
          </a>
          </li>
          <li><a href="#">
            <i class="fas fa-tasks"></i>
            <span class="nav-item">Tareas</span>
          </a>
          </li>
          <li><a href="#">
            <i class="fab fa-dochub"></i>
            <span class="nav-item">Inventario</span>
          </a>
          </li>
          <li><a href="#">
            <i class="fas fa-cog"></i>
            <span class="nav-item">Confuguración</span>
          </a>
          </li>
          <li><a href="#">
            <i class="fas fa-question-circle"></i>
            <span class="nav-item">Ayuda</span>
          </a>
          </li>
          <li><a href="login/logout_usuario.php" class="logout">
            <i class="fas fa-sign-out-alt"></i>
            <span class="nav-item">Cerrar Sesión</span>
          </a>
          </li>
        </ul>
      </div>
    </nav>

    <section class="main">
      <div class="main-top">
      <h1>BIENVENIDO A STRENGTHWARE!</h1>
      </div>
      <div class="main-body">
        <br>
        <br>
      
      <div class="search_bar">
        <p style="color: #00e1ff; font-size: 1.38rem;">Verificar novedades según categoría</p>
        <select name="" id="">
          <option placeholder="Categoría">Tipo de novedades</option>
          <option>Empleados</option>
          <option>Horarios</option>
          <option>PQRS</option>
          <option>Inventario</option>
          <option>Tiendas</option>
          <option>Domicilios</option>
        </select>

        <input class="filter" type="submit" value="Buscar"></input>
        
      </div>
      <br>
      <br>
      
      <a href="lider_bodega/Horarios.php"><div class="job_card">
        <div class="job_details">
          <div class="img">
            <img class="zzz" src="https://cdn-icons-png.flaticon.com/512/2693/2693507.png" alt="">
          </div>
          <div class="text">
            <h2 style="color:#ff9100">Tu Horario</h2>
            <span>Consulta los horarios</span>
          </div>
        </div>
        <div class="job_salary">
          <h4>Semanal</h4>
          <span>Hace 1 día</span>
        </div>
      </div></a>
      
      <a href="lider_bodega/inventario.php"><div class="job_card">
        <div class="job_details">
          <div class="img">
            <img class="zzz" src="https://cdn-icons-png.flaticon.com/512/2400/2400072.png" alt="">
          </div>
          <div class="text">
            <h2 style="color:#ff9100">Verifica el Inventario</h2>
            <span>Inventario</span>
          </div>
        </div>
        <div class="job_salary">
          <h4>Semanalmente</h4>
          <span>Desde el Domingo</span>
        </div>
      </div></a>

      <div class="job_card">
        <div class="job_details">
          <div class="img">
            <img class="zzz" src="img/pngegg2.png" alt="">
          </div>
          <div class="text">
            <h2>Pedir Envio</h2>
            <span>Domicilio</span>
          </div>
        </div>
        <div class="job_salary">
          <h4>Contraentrega</h4>
          <span>Tarjeta</span>
        </div>
      </div>

      <div class="job_card">
        <div class="job_details">
          <div class="img">
            <img class="zzz" src="img/pngegg.png" alt="">
          </div>
          <div class="text">
            <h2>Pedir Asesoría</h2>
            <span>Ayuda</span>
          </div>
        </div>
        <div class="job_salary">
          <h4>Enviar PQRS</h4>
          <span>Enviar felicitación</span>
        </div>
      </div>

      <a href="lider_bodega/facturatable.php"><section class="main">
      <div style="height: 400px; border-radius:2vh;" class="main-top">
      <div><h1 style="color:Black; font-family:Georgia, 'Times New Roman', Times, serif; text-align: center; margin: auto; background:#ff9100; border-radius:2vh; padding:5px;
      ">Vistazo de Facturas</h1></div>
      <marquee style="color:black;" behavior="scroll" direction="up"><?php
      $inv="SELECT * FROM factura";
      $resultadito=mysqli_query($conn, $inv);
      while($mostrara=mysqli_fetch_array($resultadito)){
      ?>
      <tr>
      <td><?php echo $mostrara ['fac_id']?></td>
      <span>||</span>
      <td><?php echo $mostrara ['fac_tienda']?></td>
      <span>||</span>
      <td><?php echo $mostrara ['fac_nombreprod']?></td>
      <span>||</span>
      <td><?php echo $mostrara ['fac_cantidad']?></td>
      <span>||</span>
      <td><?php echo $mostrara ['fac_pagototal']?></td>
      <span>||</span>
      <td><?php echo $mostrara ['fac_nombrecli']?></td>
      <span>||</span>
      <td><?php echo $mostrara ['fac_direccioncli']?></td>
      </tr>
      <?php
      }
      ?>
      </marquee></a>
      </div>

    </section>
  </div>

</body>
</html>