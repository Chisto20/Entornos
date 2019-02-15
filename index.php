<?php
// Elegimos modo de juego al presionar jugadorVSjugador o jugadorVSordenador
if (isset($_POST['tresenraya'])) {
    header('Location: tresenraya/Portada.php', true, 302);
}
if (isset($_POST['loteria'])) {
    header('Location: loteria.php', true, 302);
}
if (isset($_POST['paint'])) {
    header('Location: paint.html', true, 302);
}
if (isset($_POST['doblar'])) {
    header('Location: juago.php', true, 302);
}
?>


<!DOCTYPE HTML>  
<html lang="es">
    <head>
        <title>MINJUEGOS</title>
        <meta charset="UTF-8">
        <meta author="STT"/>
        <link rel="icon" href="imagenes/minijuegos.png">
        <meta name="viewport"
            content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" type="text/css" href="estilos.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    </head>
    <body> 
        <div class="container">
            <header class="jumbotron text-center" style="background: url('imagenes/minijuegos.jpg') no-repeat center center /cover">
                <h1 class="display-2" style="font-family: arial"><strong>MINIJUEGOS</strong>🎮</H1>
                <hr class="my-2">
            </header>
            <div class="text-center">
            <form method="post" action="index.php">
                <input class="btn col-2" name="tresenraya" type="submit" value="" style="background:url('imagenes/ter.jpg') no-repeat; width:200px; height:200px; border: solid 1px black;">
                <input class="btn col-2" name="loteria" type="submit" value="" style="background:url('imagenes/loteria.jpg') no-repeat; width:200px; height:200px; margin-left:2%; border: solid 1px black;">
                <input class="btn col-2" name="paint" type="submit" value="" style="background:url('imagenes/paint.jpg') no-repeat; width:200px; height:200px; margin-left:2%; border: solid 1px black;">
                <input class="btn col-2" name="doblar" type="submit" value="" style="background:url('imagenes/yes.jpg') no-repeat; width:200px; height:200px; margin-left:2%; border: solid 1px black;">
            </form>
        </div>
    </body>
</html>