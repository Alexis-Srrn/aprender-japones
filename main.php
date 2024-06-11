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
  <title>Principal</title>
  <link rel="stylesheet" type="text/css" href="css/main.css">
  <link rel="stylesheet"  type="text/css" href="css/normalize.css">
  <link rel="stylesheet"  type="text/css" href="css/encabezados.css">
  <link rel="stylesheet"  type="text/css" href="css/articulos.css">

  <!--Llamamos a un estilo de fuente de la pagina fonts.google.com-->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/c4124a1ff4.js" crossorigin="anonymous"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>


  <body>
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


    <div class="container__all" id="container_all">
      <div class="cover">
      <div class="container__cover">
              <div class="container__info">
                  <h1>Bienvenido</h1>
                  <h2>¿Listo para aprender japonés?</h2>
                  <p> Nuestro objetivo es dar a conocer el método AJATT, con el cual podrás
                      mejorar tus resultados en el aprendizaje de este idioma. Ya verás que no es
                      tan complicado como puede parecerlo en un principio.
                  </p>
                    <a href="ajatt.php"><input type="button" value="¿Por dónde comenzar?"></a>
              </div>
            <div class="container__vector">
                <img src="img/imagen-main.jpg" alt="">
            </div>

    </div>
      </div>
  </div>



  <div class="container__all" id="container_all">
    <div class="cover">
    <div class="container__cover-2">
            <div class="container__info-1">
                <h1>Escritura</h1>
                <a href="kana.php"><img src="img/hiragana.png" alt="Kana" ></a>
            </div>
          <div class="container__info-1">
            <h1>Kanji</h1>
            <a href="kanji.php"><img src="img/kanji-main.jpg" alt="Kanji" ></a>
          </div>

  </div>
    </div>
</div>


<div class="container__all" id="container_all">
  <div class="cover">
  <div class="container__cover-2">
          <div class="container__info-1">
              <h1>Grámatica</h1>
              <a href="Lecciones/Grama_basica/gramatica_basica.php"><img src="img/gramatica-basica.jpg" alt="Grámatica Básica" ></a>
          </div>
        <div class="container__info-1">
          <h1>Ejercicios</h1>
          <a href="Lecciones/Grama_basica/ejercicios/lista-ejercicios.php"><img src="img/grama-basica.webp" alt="Ejercicios" ></a>
        </div>

</div>
  </div>
</div>
<div class="container-footer">
    <footer>
      <div class="logo-footer">
          <img src="img/logo-ajatt.png" alt="">
      </div>

      <div class="redes-footer">
            <a href="#"><i class="fab fa-facebook-f icon-redes-footer"></i></a>
            <a href="#"><i class="fab fa-google-plus-g icon-redes-footer"></i></a>
            <a href="#"><i class="fab fa-instagram icon-redes-footer"></i></a>
      </div>

      <hr>
      <h4>@ 2021 Alexis Serrano Guirao Buap -- Ninguna imagen aquí mostrada es de autoría propia</h4>

    </footer>
</div>


    <script src="js/script-main.js"></script>
  </body>
</html>
