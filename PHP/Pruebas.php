<?php
session_start();
$nombre = $_SESSION["nombre"];
//echo $nombre;
//$comp = false;
if ($nombre == 'ismael') {
    $comp = true;
}
?>
<html>
    <head>
        <title>Index</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <link rel=StyleSheet href="../CSS/base.css" type="text/css" media=screen>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="../JS/buscador.js"></script><script src="../JS/logueador.js"></script>
        <script>

            $(document).ready(function(e) {
                var comp =<?php echo $comp ?>;
                if (comp) {
                    $('li').show();
                    $('#Acceder').hide();
                    $('#Cerrar').show();
                }
            });

        </script>

    </head>
    <body>
        <!--   <div id="resp">D</div>-->

        <div id="login" style="display:none">
            <div id="flotante">
                <button class="cerrar" type="button">x</button>
                <h2>Iniciar Sesión</h2>
                <form action="login.php" id="formulario" method="post" name="form" enctype="multipart/form-data">
                    <h4>Usuario: *</h4>
                    <input type="text" name="usuario" id="usuario" size="40" required><br>
                    <h4>Constraseña: *</h4>
                    <input type="password" name="contra" size="40" required><br>
                    <input id="enviar" type="button" class="btn btn-dark btn-lg btn-block disabled" value="Enviar">
                </form>
                <button id="registrar" type="button">Registrar</button>
            </div>
            <div class="fondo"></div>
        </div>

        <div id="registro" style="display:none">
            <div id="flotante1">
                <button class="cerrar" type="button">x</button>
                <h2>Registrar</h2>
                <form>
                    <h4>E-mail: *</h4>
                    <input type="text" name="usuario" size="40" required><br>
                    <h4>Usuario: *</h4>
                    <input type="text" name="usuario" size="40" required><br>
                    <h4>Constraseña: *</h4>
                    <input type="password" name="contraseña" size="40" required><br>
                    <input type="submit" class="btn btn-dark btn-lg btn-block disabled" value="Enviar">
                </form>
                <button id="loguear" type="button">Loguear</button>
            </div>
            <div class="fondo"></div>
        </div>


        <div class= "example-container" >
            <div class= "example-row" >
                <div class= "example-content-main" >
                    <img id="foto" src="../CSS/img/Batman.jpg"/>
                    <h1 class="info">Ismael</h1>
                </div>
                <div class= "example-content-secondary">
                    <button id="Acceder" type="button" class="btn btn-outline-info">Acceder</button>
                    <button id="Cerrar" type="button" class="btn btn-outline-info" style="display: none">Cerrar</button>
                </div>
            </div>
        </div>
        <nav id="navbar" class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark">
            <div class= "container" >
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="../index.php">Home<span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Muestras</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Articulos</a>
                        </li>
                        <li class="nav-item" id="Personal" style="display: none">
                            <a class="nav-link" href="#">Personal</a>
                        </li>
                        <li class="nav-item" id="Pruebas" style="display: none">
                            <a class="nav-link" href="pruebas.php">Pruebas</a>
                        </li>
                    </ul>
                </div>
                <input id="search" name="buscador" class="form-control mr-sm-2" type="text" placeholder="Search"/>
                <button id="button" class="btn btn-Dark my-2 my-sm-0" type="submit">Buscar</button>
            </div>
        </nav>
</html>
$(document).ready(function(e) {
$("#enviar").click(function() {

if (document.form.contra.value == '123456' && document.form.usuario.value == 'ismael') {
//  document.form.submit();
$.ajax({
type: "POST",
url: "login.php",
data: $("#formulario").serialize(),
success: function(data)
{
$('#login').hide();
if (data == "correcto") {
$('li').show();
$('#Acceder').hide();
$('#Cerrar').show();
}
$('#resp').html(data);
}
});
} else {
alert('Porfavor ingrese, nombre de usuario y contraseña correctos.');
}
});
});