
<html>
    <head>
        <title>Articulos</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <link rel=StyleSheet href="../CSS/base.css" type="text/css" media=screen>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="../JS/buscador.js"></script><script src="../JS/logueador.js"></script>
    </head>
    <body>
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
                    <h3 class='usuario' id='mia' style="display: none">Ismael</h3>
                    <h3 class='usuario' id='otra' style="display: none">Otra</h3>
                    <button id="Acceder" type="button" class="btn btn-outline-info">Acceder</button>
                    <!--<a href="PHP/login.php" class="btn btn-outline-info" id="Cerrar" style="display:none">Cerrar</a>-->
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
                            <a class="nav-link" href="Muestras.php">Muestras</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Art�culos.php">Articulos</a>
                        </li>
                        <li class="nav-item" id="Personal" style="display: none">
                            <a class="nav-link" href="Personal.php">Personal</a>
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

        <!-- </div>-->
        <div id="cuerpo">
            <div id="social">
                <table cellpadding="0" cellspacing="0">
                    <tr><td><img class="redes" id="facebook" src="../CSS/img/facebook.png"/></td></tr>
                    <tr><td><img class="redes" id="linkedin" src="../CSS/img/linkedin.png"/></td></tr>
                    <tr><td><img class="redes" id="twitter" src="../CSS/img/twitter.png"/></td></tr>

                </table>
            </div>
        </div>
        <div id="pie">

        </div>
    </body>
</html>