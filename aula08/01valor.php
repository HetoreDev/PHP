<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8"/>
        <link rel="stylesheet" href="_css/estilo.css"/>
        <title>Aula 8 - Exercício 01 - PHP & Forms</title>
    </head>
    <body>
        <div>
            <?php
                $valor = $_GET["v"];

                echo "O valor enviado foi $valor";

                $valorRaiz = sqrt($valor);

                echo "<br/>E a raiz quadrada de $valor é ".number_format($valorRaiz, 2);

                echo "<br/><br/><a href=\"01-exercicio.html\" id=\"Voltar\">VOLTAR</a>";

            ?>
        </div>
    </body>
</html>
