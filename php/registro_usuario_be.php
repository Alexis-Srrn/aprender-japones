<?php

    include 'conexion_be.php';


    $nombre_completo = $_POST['nombre_completo'];
    $correo = $_POST['correo'];
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];
    $password = hash('sha512',$password);//encriptar password






    if(empty($nombre_completo) || empty($correo) || empty($usuario) || empty($password)){
      echo '
          <script>
                alert("Uno de los campos está vacio");
                window.location = "../index.php";
          </script>
      ';
      mysqli_close($conexion);
      exit();
    }


    $query = "INSERT INTO usuarios(nombre,correo,usuario,password)
    VALUES('$nombre_completo', '$correo', '$usuario', '$password')";

    //Verificar correo no repetido en BD
    $verificar_correo = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$correo' ");
    if(mysqli_num_rows($verificar_correo) > 0){
      echo '
          <script>
                alert("El correo ya existe");
                window.location = "../index.php";
          </script>
      ';
      mysqli_close($conexion);
      exit();
    }

    //Verificar usuario no repetido en BD
    $verificar_usuario = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario='$usuario' ");
    if(mysqli_num_rows($verificar_usuario) > 0){
      echo '
          <script>
                alert("El usuario ya existe");
                window.location = "../index.php";
          </script>
      ';
      mysqli_close($conexion);
      exit();
    }




    $ejecutar = mysqli_query($conexion, $query) or trigger_error("Query Failed! SQL: $sql - Error: ".mysqli_error($conexion), E_USER_ERROR);

    if($ejecutar){
      echo '
          <script>
            alert("Te has registrado exitosamente!!")
            window.location = "../index.php";
            </script>
      ';
    }else{
      '
        <script>
        alert("Error al ingresar, intentalo de nuevo")
        window.location = "../index.php";
        </script>
        ';
    }

  mysqli_close($conexion);
 ?>
