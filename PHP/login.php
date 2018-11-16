<?php

if (isset($_POST["usuario"])) {
    if ($_POST["usuario"] == 'ismael' && $_POST["contra"] == '123456') {
        session_start();
        $_SESSION["nombre"] = "ismael";
        header('Location: ../index.php');
    } elseif ($_POST["usuario"] == 'otro' && $_POST["contra"] == '456789') {
        session_start();
        $_SESSION["nombre"] = "otro";
        header('Location: ../index.php');
    }
}

if (isset($_POST["dato"])) {
    if ($_POST["dato"] == "primero") {
        session_start();
        //  if (isset($_SESSION["nombre"])) {
        if ($_SESSION["nombre"] == 'ismael') {
            echo "misesion";
        } elseif ($_SESSION["nombre"] == 'otro') {
            //    session_start();
            echo "otrasesion";
        }
    } elseif ($_POST["dato"] == "cerrar") {
        session_start();
        session_destroy();
        //   header('Location: ../index.php');
    }
//}
}
?>