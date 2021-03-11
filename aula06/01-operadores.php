<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8"/>
        <link rel="stylesheet" href="_css/estilo.css"/>
        <title>Aula 6 - Exercício 01</title>
    </head>
    <body>
        <div>
            <?php
                $preco = $_GET["p"];
                echo "O preço do produto é R$ $preco";
                //$preco = $preco + ($preco * 0.10);
                $preco += ($preco * 0.10);
                echo "<br/>E o novo preço com 10% de aumento será R$ ".number_format($preco, 2);
                $preco -= ($preco * 0.10);
                echo "<br/>E o novo preço com 10% de desconto será R$ ".number_format($preco, 2);
            ?>
        </div>
    </body>
</html>
