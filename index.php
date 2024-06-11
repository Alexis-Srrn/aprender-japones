
<?php
  session_start();
  if(isset($_SESSION['usuario'])){
    header("location: main.php");
  }
 ?>



<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <script src="https://kit.fontawesome.com/c4124a1ff4.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <link rel="stylesheet"  type="text/css" href="css/normalize.css">
    <!--Llamamos a un estilo de fuente de la pagina fonts.google.com-->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

  </head>
  <body>

          <main>
            <div class="contenedor__principal">

                <div Class="caja__trasera">
                    <div class="caja__trasera-login">
                        <h3>¿Ya tienes una cuenta?</h3>
                        <p>Inicia sesión para entrar</p>
                        <button id="btn__iniciar-sesion">Iniciar Sesión</button>
                    </div>
                <div class="caja__trasera-registro">
                        <h3>¿Aún no tienes cuenta?</h3>
                        <p>Registrarse</p>
                        <button id="btn__registrarse">Registrarse</button>
                </div>
                </div>

              <div class="contenedor__login-registro">
                    <form class="formulario__login" action="php/login_usuario_be.php" method="POST">
                              <h2>Iniciar Sesión</h2>
                              <input type="text" placeholder="E-mail" name="correo" required>
                              <input type="password" placeholder="Contraseña" name="password" required>
                              <button>Entrar</button>
                    </form>

                    <form class="formulario__registro" action="php/registro_usuario_be.php" method="POST">
                              <h2>Registrarse</h2>
                              <input type="text" placeholder="Nombre" name="nombre_completo" required>
                              <input type="text" placeholder="E-mail" name="correo" required>
                              <input type="text" placeholder="Usuario" name="usuario" required>
                              <input type="password" placeholder="Contraseña" name="password" required>
                              <button>Registrarse</button>
                    </form>
              </div>
            </div>
          </main>
        <script src="js/script-login.js" type="text/javascript"></script>
  </body>
</html>
