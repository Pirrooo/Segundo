
<html>
    <head>
        <title>Personal</title>
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
                    <h3 class='usuario' id='mia' style="display: none">Mi Sesi&oacute;n</h3>
                    <h3 class='usuario' id='otra' style="display: none">Otra</h3>
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
                            <a class="nav-link" href="Muestras.php">Muestras</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Articulos.php">Articulos</a>
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

        <div id="cuerpo">
            <form id="pdf" action="generar-pdf.php" style="display: none">
                <input type="submit" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" value="Crear PDF">
            </form>
            <div id="social">
                <table cellpadding="0" cellspacing="0">
                    <tr><td><img class="redes" id="facebook" src="../CSS/img/facebook.png"/></td></tr>
                    <tr><td><img class="redes" id="linkedin" src="../CSS/img/linkedin.png"/></td></tr>
                    <tr><td><img class="redes" id="twitter" src="../CSS/img/twitter.png"/></td></tr>
                </table>
            </div>
            <div id="texto-Personal">
                <div id="presentacion">
                    <img id="foto" src="../CSS/img/Batman.jpg"/>
                    <p>Ismael Mart&iacute;nez L&oacute;pez<p>
                </div>
                <div id="contacto">
                    <div class="row">

                        <div class="img"><img src="../CSS/img/001-mail.png"></div>
                        <div class="col" id="e-mail">
                            <b><p class="tit">Email:</p></b>
                            <p class="resp">Ismael_rafal@hotmail.com</p>
                        </div>

                        <div class="img"><img src="../CSS/img/002-phone.png"></div>
                        <div class="col" id="telefono">
                            <b><p class="tit">Telefono:</p></b>
                            <p class="resp">695754946</p>
                        </div>

                        <div class="w-100"></div>

                        <div class="img"><img src="../CSS/img/003-map.png"></div>
                        <div class="col" id="Direccion">
                            <b><p class="tit">Direcci&oacute;n:</p></b>
                            <p class="resp">Avda. de la Paz, N.16</p>
                        </div>

                        <div class="img"><img src="../CSS/img/004-earth.png"></div>
                        <div class="col" id="web">
                            <b><p class="tit">Web Personal:</p></b>
                            <p class="resp">Ismael.net</p>
                        </div>

                        <div class="w-100"></div>

                        <div class="img"><img src="../CSS/img/005-linkedin.png"></div>
                        <div class="col" id="linkedin">
                            <b><p class="tit">Linkedin:</p></b>
                            <p class="resp">Ismael tal tal</p>
                        </div>

                        <div class="img"><img src="../CSS/img/006-skype.png"></div>
                        <div class="col" id="skype">
                            <b><p class="tit">Skype:</p></b>
                            <p class="resp">Ismael tal tal</p>
                        </div>
                    </div>
                </div>
                <div id="importante">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <b><img src="../CSS/img/002-portfolio.png">Experiencia Laboral</b><hr>
                                <div class="contenedor"><div class="flecha">2015</div></div> <b><h6>Algo por aqui</h6></b><br><p>Nombre Empresa</p><p>Wget cursus metus torquent suspendisse purus at rhoncus potenti vel morbi metus torquent suspendisse</p>
                                <div class="contenedor"><div class="flecha">2015</div></div> <b><h6>Algo por aqui</h6></b><br><p>Nombre Empresa</p><p>Wget cursus metus torquent suspendisse purus at rhoncus potenti vel morbi metus torquent suspendisse</p>
                                <div class="contenedor"><div class="flecha">2015</div></div> <b><h6>Algo por aqui</h6></b><br><p>Nombre Empresa</p><p>Wget cursus metus torquent suspendisse purus at rhoncus potenti vel morbi metus torquent suspendisse</p>
                            </div>
                            <div class="w-100"></div>
                            <div class="col">
                                <b><img src="../CSS/img/001-notebook.png">Formaci&oacute;n Academica</b><hr>
                                <div class="contenedor"><div class="flecha">2015</div></div> <b><h6>Algo por aqui</h6></b><br><p>Nombre Instituto</p><p>Wget cursus metus torquent suspendisse purus at rhoncus potenti vel morbi metus torquent suspendisse</p>
                                <div class="contenedor"><div class="flecha">2015</div></div> <b><h6>Algo por aqui</h6></b><br><p>Nombre Instituto</p><p>Wget cursus metus torquent suspendisse purus at rhoncus potenti vel morbi metus torquent suspendisse</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="complementario">
                    <div class="continfo">
                        <p class="titulos">INFORMACION PERSONAL</p>
                        <hr> <b><p>Nacimiento</p></b> <div class="contestacion"><p>28/12/1992</p></div>
                        <hr> <b><p>Residencia</p></b> <div class="contestacion"><p>Rafal (Alicante)</p></div>
                        <hr> <b><p>Nacionalidad</p></b> <div class="contestacion"><p>Espa&ntilde;ola</p></div>
                        <hr> <b><p>Estado civil</p></b> <div class="contestacion"><p>soltero</p></div>
                        <hr>
                    </div>
                    <div class="continfo">
                        <p class="titulos">COMPLEMENTARIA</p>
                        <hr> <b><p>Nacimiento</p></b> <div class="contestacion"><p>28/12/1992</p></div>
                        <hr> <b><p>Residencia</p></b> <div class="contestacion"><p>Rafal (Alicante)</p></div>
                        <hr> <b><p>Nacionalidad</p></b> <div class="contestacion"><p>Espa&ntilde;ola</p></div>
                        <hr> <b><p>Estado civil</p></b> <div class="contestacion"><p>soltero</p></div>
                        <hr>
                    </div>
                    <div class="continfo">
                        <p class="titulos">HABILIDADES</p>
                        <hr> <b><p>Nacimiento</p></b> <div class="contestacion"><p>28/12/1992</p></div>
                        <hr> <b><p>Residencia</p></b> <div class="contestacion"><p>Rafal (Alicante)</p></div>
                        <hr> <b><p>Nacionalidad</p></b> <div class="contestacion"><p>Espa&ntilde;ola</p></div>
                        <hr> <b><p>Estado civil</p></b> <div class="contestacion"><p>soltero</p></div>
                        <hr>
                    </div>
                </div>
            </div>
        </div>

        <div id="pie">

        </div>

    </body>
</html>