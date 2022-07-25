<?php

  include('database.php');

if(isset($_POST['name'])) {
  # echo $_POST['name'] . ', ' . $_POST['description'];
  $task_name = $_POST['name'];
  $task_description = $_POST['description'];
  $query = "INSERT into archivos(name, description) VALUES ('$task_name', '$task_description')";
  $result = mysqli_query($connection, $query);

  if (!$result) {
    die('Consulta fallida');
  }

  echo "Tarea agregada con exito";  

}

?>
