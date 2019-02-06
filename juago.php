<!DOCTYPE html>
<html>
    <head>
        <title>Juego  Dinero</title> 
        <style type="text/css">
            * { font-family: arial; }
            h1 { text-align: center; } 
            h4 { padding: 0.2em 2em ; }
            p { padding: 0.1em 2em ; }
            [type~=submit]  { font-size: 1.1em; }
        </style>
    </head>
    <body>
        <div style="text-align: center;">
            <h1>Juego aleatorio</h1>
            <h4>Dispones de un saldo virtual inicial de 2000 €, Debes acertar un número del 1 al 3, si lo
            aciertas tu saldo se duplica, si no lo aciertas este se reduce a la mitad. Si no eliges 
            ningún número el número por defecto es el 1.</h4>
            <form action="#" method="post">
                <p>Elige un número: 
                    <input type="radio" name="num" value="1" checked="checked" /> 1 ...
                    <input type="radio" name="num" value="2" /> 2 ...
                    <input type="radio" name="num" value="3" /> 3 ...
                </p>
                <p><input type="submit" value="Jugar" /></p>
                <?php  
                    $num=$_POST["num"];
                    $modo=$_POST["modo"];
                    if ($modo=="") {
                        $saldo=2000;
                    }else {
                        $saldo=$_POST["saldo"];
                    }
                    $z=mt_rand(1,3);
                    if ($modo=="1") {
                    echo "<p>Dinero apostado: <b>$saldo €</b>.</p>";
                    echo "<p>Tu has elegido el <b>$num</b></p>";
                    echo "<p>Numero premiado: <b>$z</b> .</p>";
                        if ($num==$z) {
                            echo "<p>Enhorabuena, tu dinero se ha duplicado.</p>";
                            $saldo=$saldo*2;
                            }else {
                            echo "<p>Lo siento, has perdido. Tu saldo se reduce a la mitad.</p>";
                            $saldo=$saldo/2;
                            }
                            echo "<p>Ahora tienes <b>$saldo €</b>.</p>"; 
                        }else {
                            echo "<p>Dispones de la siguiente cantidad de dinero inicial : <b>$saldo €</b>.</p>
                                <p>Elige un número y pulsa en jugar para iniciar el juego.";
                        }
                        $modo=1; 
                        echo "<input type='hidden' name='saldo' value='$saldo' >";
                        echo "<input type='hidden' name='modo' value='$modo' >";
                ?>	 
            </form>
            </div>
    </body>
</html>