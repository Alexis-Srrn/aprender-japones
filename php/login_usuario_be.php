<?php

  session_start();

  include 'conexion_be.php';

  $correo = $_POST['correo'];
  $password = $_POST['password'];
  $password = hash('sha512', $password);



  if(empty($correo) || empty($password)){
    echo '
        <script>
              alert("Uno de los campos está vacio");
              window.location = "../index.php";
        </script>
    ';
    mysqli_close($conexion);
    exit();
  }


  $validar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE
     correo='$correo' and password='$password'") ;

     if(mysqli_num_rows($validar_login) > 0){
          $_SESSION['usuario'] = $correo;
          header("location: ../main.php");
          exit();
     }else{
       echo '
        <script>
          alert ("Usuario no existe, por favor verifique sus datos");
          window.location = "../index.php";
        </script>
       ';
       mysqli_close($conexion);
       exit();
     }




 ?>
