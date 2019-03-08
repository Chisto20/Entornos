<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "https://www.w3.org/TR/html4/loose.dtd">
<html>
    <head>
        <title>Loteria</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    </head>
    <body style="background-color: lightyellow;">

    <?php

    if ($_SERVER['REQUEST_METHOD']=='POST')
    {
        $numero_ingresado_1 = intval ($_POST['numero_ingresado_1']);
        $numero_ingresado_2 = intval ($_POST['numero_ingresado_2']);
        $numero_ingresado_3 = intval ($_POST['numero_ingresado_3']);
        $aleatorio_1=rand(0,10);
        $aleatorio_2=rand(0,10);
        $aleatorio_3=rand(0,10);
        $aciertos=0;
        $premio=0;
        if($numero_ingresado_1==$aleatorio_1||$numero_ingresado_1==$aleatorio_2||$numero_ingresado_1==$aleatorio_3)
            $aciertos=$aciertos+1;
        if($numero_ingresado_2==$aleatorio_1||$numero_ingresado_2==$aleatorio_2||$numero_ingresado_2==$aleatorio_3)
            $aciertos=$aciertos+1;
        if($numero_ingresado_3==$aleatorio_1||$numero_ingresado_3==$aleatorio_2||$numero_ingresado_3==$aleatorio_3)
            $aciertos=$aciertos+1;
        if($aciertos==1)
            $premio=100;
        if($aciertos==2)
            $premio=450;
        if($aciertos==3)
            $premio=2000;

        echo '<center><h3>Los resultados de tu loteria.</h3><br>';
        echo '<strong>Valor de aciertos: ' . $aciertos . "<br/>\n</strong>";
        echo 'Valor de aleatorio 1: ' . $aleatorio_1 . "<br/>\n";
        echo 'Valor de aleatorio 2: ' . $aleatorio_2 . "<br/>\n";
        echo 'Valor de aleatorio 3: ' . $aleatorio_3 . "<br/>\n";
        echo 'Valor de premio: ' . $premio . "<br/>\n</center>";
    }
    
    ?>
        <form method="post">
            <center><h1>LOTERÍA</h1></center>
            <table style="text-align: left; margin-left: auto; margin-right: auto;" border="1" cellpadding="1" cellspacing="1">
                <tbody style="background-color:darkgoldenrod;">
                    <tr>
                        <td>
                            <label for="numero_ingresado_1">Primer numero</label>
                        </td>
                        <td>
                            <input name="numero_ingresado_1" required="required" step="1" type="number" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="numero_ingresado_2">Segundo numero</label>
                        </td>
                        <td>
                            <input name="numero_ingresado_2" required="required" step="1" type="number" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="numero_ingresado_3">Tercer numero</label>
                        </td>
                        <td>
                            <input name="numero_ingresado_3" required="required" step="1" type="number" />
                        </td>
                    </tr>
                    <tr align="center">
                        <td colspan="2" rowspan="1">
                            <input value="Procesar" type="submit" />
                        </td>
                    </tr>
                </tbody>
            </table>
        </form>
    </body>
</html>