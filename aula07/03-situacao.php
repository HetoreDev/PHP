<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8"/>
        <link rel="stylesheet" href="_css/estilo.css"/>
        <title>Aula 7 - Exercício 03</title>
    </head>
    <body>
        <div>
            <?php
                $nota1 = $_GET["n1"];
                $nota2 = $_GET["n2"];
                $media = ($nota1 + $nota2) / 2;

                echo "A media entre $nota1 e $nota2 é $media <br/>";

                #$resultado = ($media < 6) ? "REPROVADO" : "APROVADO";

                echo "<br/>O aluno está ".(($media < 6) ? "REPROVADO" : "APROVADO");
            ?>
        </div>
    </body>
</html>
