<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8"/>
        <link rel="stylesheet" href="_css/estilo.css"/>
        <title>Aula 7 - Exercício 02</title>
    </head>
    <body>
        <div>
            <?php
                $a = 3;
                $b = "3";

                echo "Valor de A: $a, tipo Inteiro";
                echo "<br/>Valor de B: $b, tipo String<br/>";

                $r = ($a == $b) ? "Sim" : "Não";

                echo "<br/>As variáveis A e B são iguais? $r";

                $r = ($a === $b) ? "Sim" : "Não";

                echo "<br/>As variáveis A e B são idênticas? $r";

                /*
                Neste exercício nós podemos perceber a diferença entre Igual ou Idêntico
                para comparar apenas o conteúdos de duas variáveis utilizamos o "=="
                agora se queremos testar além do conteúdo se elas são exatamente do mesmo tipo, String, Int e etc, utilizamos "==="
                */

            ?>
        </div>
    </body>
</html>
