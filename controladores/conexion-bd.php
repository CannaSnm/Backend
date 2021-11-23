<?php

$enlace = mysqli_connect("localhost", "root", "", "e-shop");


if (!$enlace) {
  echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
  echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
  echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
  exit;
}

?>