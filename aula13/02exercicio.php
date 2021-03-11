<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8"/>
        <link rel="stylesheet" href="_css/estilo.css"/>
        <title>Aula 13 - Exercicio 02 - Estrutura Condicional While</title>
    </head>
    <body>
        <div>
            <?php
            $numero = isset($_GET["num"]) ? $_GET["num"] : 1;

            echo "Tabuada do $numero <br/><br/>";

            for($i=1; $i<=10; $i++){
                echo "$i x $numero = ".($i * $numero)."<br/>";
            }

            ?>
            <br/><br/><a href="02-exercicio.php">Voltar</a>
        </div>
    </body>
</html>
