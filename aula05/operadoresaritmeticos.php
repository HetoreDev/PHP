<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <link rel="stylesheet" href="_css/estilo.css"/>
        <title>Aula 5 - Exercício 01 - Operadores Aritméticas</title>
    </head>
    <body>
        <div>
            <?php
                $n1 = 3;
                $n2 = 2;
                /*
                   URL - http://127.0.0.1/edsa-PHP%20Projects/aula05/somador.php?a=8&b=5
                   $n1 = $_GET["a"];
                   $n1 = $_GET["b"];
                */
                $s = $n1 + $n2;
                $m = ($n1 + $n2) / 2;
                echo "Aula 05<br/><br/>";
                echo "A soma de $n1 + $n2 = $s<br/><br/>";
                echo "<br/>Adição         $n1 + $n2 = ".($n1+$n2);
                echo "<br/>Subtração      $n1 - $n2 = ".($n1-$n2);
                echo "<br/>Multiplicação  $n1 x $n2 = ".($n1*$n2);
                echo "<br/>Divisão        $n1 ÷ $n2 = ".($n1/$n2);
                echo "<br/>Módulo         $n1 e $n2 = ".($n1%$n2);
                echo "<br/>Média          $n1 e $n2 = $m";
            ?>
        </div>
    </body>
</html>