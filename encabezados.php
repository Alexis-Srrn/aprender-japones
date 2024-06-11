<?php
session_start();
if(!isset($_SESSION['usuario'])){
  echo '
      <script>
        window.location = "index.php";
      </script>
  ';
  session_destroy();
  die();
}


 ?>



<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <script src="https://kit.fontawesome.com/c4124a1ff4.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="css/main.css">
  <link rel="stylesheet" type="text/css" href="css/encabezados.css">
  <link rel="stylesheet" type="text/css" href="css/articulos.css">
  <link rel="stylesheet"  type="text/css" href="css/normalize.css">

  <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700;1,900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">


  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

    <header id="header">
      <div class="container__header">
              <div class="logo">
                    <img src="img/logo-ajatt.png" alt="">
              </div>
              <div class="container__nav">
                      <nav id="nav">
                        <ul>
                          <li> <?php echo "Bienvenido: "; echo $_SESSION['usuario']; ?></li>
                          <li><a href="main.php" class="select">INICIO</a></li>
                          <li><a href="#">ACERCA DE NOSOTROS</a></li>
                          <li><a href="ajatt.php">¿QUÉ ES AJATT?</a></li>
                          <li><a href="php/cerrar_sesion.php">CERRAR SESIÓN</a></li>
                        </ul>
                      </nav>
                                  </div>
      </div>
    </header>

    <div class="container-cover">
          <div class="container-info-cover">
                <h1>AJATT</h1>
                <p>All Japanese All The Time</p>
          </div>
    </div>

    </html>
