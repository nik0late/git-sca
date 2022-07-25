<?php

$connection = mysqli_connect(
  'localhost', 'root', '12345678', 'sca'
);

// for testing connection
#if($connection) {
#  echo 'La base de datos se ha conectado';
#}

?>
