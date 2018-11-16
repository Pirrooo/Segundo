$(document).ready(function(e) {
    var respuesta = "no";
    var dato = {"dato": "primero"};
    $.ajax({
        type: "POST",
        url: "/Muestrario/PHP/login.php",
        data: dato,
        success: function(data) {
            $('#resp').html(data);
            respuesta = data;
            if (respuesta == "misesion") {
                $('li').show();
                $('#Acceder').hide();
                $('#Cerrar').show();
                $('#mia').show();
            }
            if (respuesta == "otrasesion") {
                $('#Pruebas').show();
                $('#Acceder').hide();
                $('#Cerrar').show();
                $('#otra').show();
            }
        }
    });
    $("#texto-Personal").mouseover(function() {
        $('#pdf').show();
    });
    $("#texto-Personal").mouseout(function() {
        $('#pdf').hide();
    });
//abrir sesion
    $("#enviar").click(function() {
        if (document.form.contra.value == '123456' && document.form.usuario.value == 'ismael') {
            document.form.submit();
        } else if (document.form.contra.value == '456789' && document.form.usuario.value == 'otro') {
            document.form.submit();
        } else {
            alert('Porfavor ingrese, nombre de usuario y contraseña correctos.');
        }
    });
    //cerrar sesion
    $("#Cerrar").click(function() {
        var confirmar = confirm("¿Desea cerrar la sesión?");
        if (confirmar) {
            /*    $('#Personal').hide();
             $('#Pruebas').hide();
             $('#Cerrar').hide();
             $('#Acceder').show();*/
            var dato = {"dato": "cerrar"};
            $.ajax({
                type: "POST",
                url: "/Muestrario/PHP/login.php",
                data: dato,
                success: function(data) {
                    $('#resp').html(data);
                    window.location.href = "/Muestrario/index.php";
                }
            });
        }
    });


    //pulsar acceder
    $("#Acceder").click(function() {
        $('#flotante').removeClass();
        $('#flotante').addClass('animated slideInUp');
        $('#login').show();
    });
    //cerrar con la X
    $(".cerrar").click(function() {
        setTimeout(function() {
            $('#login').hide();
            $('#registro').hide();
        }, 1000)
        $('#flotante').addClass('animated slideOutDown');
        $('#flotante1').addClass('animated slideOutDown');
    });
    //cerrar pinchando en el fondo
    $(".fondo").click(function() {
        $('#login').hide();
        $('#registro').hide();
    });
    //para registrar
    $("#registrar").click(function() {
        $('#login').hide();
        $('#flotante1').removeClass();
        $('#flotante1').addClass('animated flipInY');
        $('#registro').show();
    });
    //para loguear
    $("#loguear").click(function() {
        $('#registro').hide();
        $('#flotante').removeClass();
        $('#flotante').addClass('animated flipInY');
        $('#login').show();
    });
});