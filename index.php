<?php
//include 'PHP/sesion.php';
?>
<html>
    <head>
        <title>Index</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <link rel=StyleSheet href="CSS/base.css" type="text/css" media=screen>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="JS/buscador.js"></script><script src="JS/logueador.js"></script>
        <script>

            /* $(document).ready(function(e) {
             var comp = "<?php echo $comp; ?>";
             if (comp == "yo") {
             $('li').show();
             $('#Acceder').hide();
             $('#Cerrar').show();
             }
             });*/

        </script>

    </head>
    <body>
        <!--  <div id="resp">fg</div>-->
        <div id="login" style="display:none">
            <div id="flotante">
                <button class="cerrar" type="button">x</button>
                <h2>Iniciar Sesión</h2>
                <form action="PHP/login.php" id="formulario" method="post" name="form" enctype="multipart/form-data">
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
                    <img id="foto" src="CSS/img/Batman.jpg"/>
                    <h1 class="info">Ismael</h1>
                </div>
                <div class= "example-content-secondary">
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
                            <a class="nav-link" href="#">Home<span class="sr-only">(current)</span></a>
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
                            <a class="nav-link" href="PHP/pruebas.php">Pruebas</a>
                        </li>
                    </ul>
                </div>
                <input id="search" name="buscador" class="form-control mr-sm-2" type="text" placeholder="Search"/>
                <button id="button" class="btn btn-Dark my-2 my-sm-0" type="submit">Buscar</button>
            </div>
        </nav>

        <!-- </div>-->
        <div id="cuerpo">
            <div id="social">AQUI</div>
            <div id="texto">
                <span id="results"></span>
                <h3>Primero</h3>
                <p>Esta es una pagina dedicada tanto a mi informacion personal como a la profesional, el objetivo principal de esta web es la de poner a prueba los conocimientos que voy adquiriendo a medida que investigo y practico en todo lo relacionado a la programacion, ya sean, simples etiquetas de HTML, estilos CSS o funcionalidades de JavaScript pasando por variados frameworks y/o herramientas que voy descubriendo. En segunda instancia tambien me serviré de esta pagina para demostrar a terceros mis capacidades a modo de CURRICULUM VITAE pues vale mas una imagen que mil palabras, y en este caso una web en la que pueda demostrar todo lo que sé, por último pero no menos importante, pretendo incluir articulos que me parezcan interesantes para el aprendizaje de la programación web, para que otros usuarios puedan servirse de dicha información</p>
                <h3>Segundo</h3>
                <p>Hablaré ahora sobre las pestañas que incluyo, en primer lugar está la pestaña Home, en la cual nos encontramos, que servirá como puede verse a modo de explicación, en ella explico todas las herramientas, lenguajes de programacion, frameworks etc que he utilizado para construrir esta web, a continuacion se encuentra la pestaña Muestras, en ella incluyo todas las webs y/o trabajos que he realizado a lo largo del tiempo, ya hayan sido diseñados por encargo o hayan sido diseñados para interes propio, despues está la pestaña Articulos, en esta pestaña incluyo tanto articulos encontrados por internet que me hayan parecido interesantes como articulos escritos por mi mismo para facilidad de proyectos futuros y para el servicio de personas que puedan servirse de ellos</p>
                <h3>Tercero</h3>
                <p>Feugiat sapien orci ultrices congue augue tortor, libero placerat penatibus at cras quis cubilia, non purus class pulvinar taciti. Parturient vulputate mus fames torquent mollis cras, quam luctus aenean tincidunt lobortis, pellentesque nunc ante dictum enim. Ligula pulvinar donec est ullamcorper posuere justo commodo iaculis lacus ultrices malesuada pellentesque, id enim elementum eros porta felis et dictum sociis potenti sodales.</p>
                <h3>Cuarto</h3>
                <p>Proin class in malesuada montes porta quis orci taciti ut aliquet, eget cursus metus torquent suspendisse purus at rhoncus potenti vel morbi, et ullamcorper habitasse tempor lacus elementum leo vivamus nostra. Vivamus enim pretium tortor metus aenean lobortis et, mi morbi volutpat dui lacinia nullam pulvinar, primis nec tincidunt congue integer litora. Elementum enim curae eu ornare metus hendrerit, rhoncus semper donec mollis mattis etiam, volutpat ullamcorper faucibus nibh dignissim.</p>
            </div>
        </div>
        <div id="pie">

        </div>
    </body>
</html>
