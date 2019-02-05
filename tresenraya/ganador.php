<?php
session_name('juego');
session_start();
if ($_SESSION['PJ1']['ganador'] == true && $_SESSION['PJ2']['ganador'] == false) {
    $ganador = "HA GANADO EL JUGADOR 1";
} elseif ($_SESSION['PJ1']['ganador'] == false && $_SESSION['PJ2']['ganador'] == true) {
    $ganador = "HA GANADO EL JUGADOR 2";
} elseif ($_SESSION['PJ1']['ganador'] == false && $_SESSION['PJ2']['ganador'] == false) {
    $ganador = "LA PARTIDA HA ACABADO EN EMPATE";
}
session_destroy();
?>

<!doctype html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="STYLESHEET" type="text/css" href="estilos.css">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
        <title><?php echo $ganador; ?></title>
    </head>
    <body style="background-image:url('fondo1vs1.jpg')">
        <h1>
            <?php
                echo $ganador;
            ?>
        </h1>
        <a href="portada.php" style="text-align=center"><br><br><br><br>
            <input class="volver" type="button" value="Volver">
        </a>
    </body>
</html>