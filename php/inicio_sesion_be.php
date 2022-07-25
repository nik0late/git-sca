<?php

    include('conexion_be.php');

    $correo=$_POST['correo'];
    $contrasena=$_POST['contrasena'];


    $consulta = "SELECT* FROM usuarios where correo = '$correo' and contrasena='$contrasena'";
    $resultado= mysqli_query($conexion, $consulta);

    $filas = mysqli_num_rows($resultado);
    if($filas){
        header("location:inicio.html");

    }else{
          echo '
           <script>
              alert("Intentalo de nuevo, usuario no alamacenado");
              window.location = "../index.php";
           </script>  
        ';
      }
mysqli_close($conexion);
?>