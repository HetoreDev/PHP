<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8"/>
        <link rel="stylesheet" href="_css/estilo.css"/>
        <title>Aula 6 - Exercício 03</title>
    </head>
    <body>
        <div>
            <?php
                $a = 3;
                $b = $a;
                $b += 5;
                echo "A variável A vale $a";
                echo "<br/>A variável B vale $b<br/>";

                $c = 3;
                $d = &$c; //***
                $d += 5;
                echo "<br/>A variável C vale $c";
                echo "<br/>A variável D vale $d<br/>";
                echo "<br/>Diferente da primeira situação, as variáveis C e D estarão ligadas,
                      o que for feito em uma delas, automaticamente será passado para a outra";
            ?>
        </div>
    </body>
</html>

/* ****Diferente da outra situação, aqui ambas as variáveis estarão ligadas
o que for feito em uma delas, automaticamente será passado para a outra.*/
