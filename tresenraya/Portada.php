<?php
    echo '
    <!DOCTYPE HTML>
        <head>
            
		    <meta charset ="UTF-8"/>
		    <title>Juegos Sencillos</title>
		    <meta keywords="   "/>
		    <meta descriptions="   "/>
            <meta author="JPD"/>
            <link rel="stylesheet" href="estilos.css">
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
        </head>
        <body background="fondo.png">
            <div class="container">
                <div class="jumbotron text-center">
                    <h1 class="display-3">❌TRES EN RAYA⭕</h1>
                    <p class="lead">¿Estás listo para jugar? Elige un modo de juego</p>
                    <hr class="my-2"> 
                </div>
            </div>
            <br><br><br><br>
            <div class="container" id="elegir">
                <a href="1vs1.php"> <button type="button" class="btn btn-danger">🧑1 VS 1👩</button></a>
            </div><br><br>
            <div class="container" id="elegir">
                <a href="1vsCom.php"> <button type="button" class="btn btn-danger">🧑1 VS COM💻</button></a>
            </div>    
        </body>
    </html> 
    
    ';

    

?>