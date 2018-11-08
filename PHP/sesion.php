<?php

/* $usuario = $_SESSION["usuario"];
  if ($_SESSION["usuario"]) {
  echo $usuario;
  } else {
  echo "no";
  } */
session_start();
$nombre = $_SESSION["nombre"];
//echo $nombre;

if ($nombre == 'ismael') {
    if ($_POST["dato"] == "primero") {
        echo "yo";
        /* } elseif ($_POST["dato"] == "segundo") {
          echo "segundo"; */
    }
}
?>