<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8"/>
        <link rel="stylesheet" href="_css/estilo.css"/>
        <title>Aula 6 - Exercício 04</title>
    </head>
    <body>
        <div>
            <?php
                $x = "abc";
                $$x = "def";
                echo "O conteúdo da variável X é $x";
                echo "<br/>A variável ABC criada recebeu o valor $abc";
            ?>
        </div>
    </body>
</html>
