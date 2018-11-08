<?php

if ($_POST["usuario"] == 'ismael' && $_POST["contra"] == '123456') {
    session_start();
    $_SESSION["nombre"] = "ismael";
    header('Location: ../index.php');
} elseif ($_POST["usuario"] == 'otro' && $_POST["contra"] == '456789') {
    session_start();
    $_SESSION["nombre"] = "otro";
    header('Location: ../index.php');
} elseif ($_POST["dato"] == "cerrar") {
    session_start();
    session_destroy();
    header('Location: ../index.php');
}



if ($_POST["dato"] == "primero") {
    session_start();
    $nombre = $_SESSION["nombre"];
    if ($nombre == 'ismael') {
        echo "misesion";
    } elseif ($nombre == 'otro') {
        echo "otrasesion";
    }
}

/* if ($_POST["dato"] == "primero") {
  session_start();
  $_SESSION['usuario'] = "ismael";
  echo "correcto";
  } elseif ($_POST["dato"] == "segundo") {
  session_destroy();
  echo "segundo";
  } */
?>