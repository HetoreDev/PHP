<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8"/>
        <link rel="stylesheet" href="_css/estilo.css"/>
        <title>Aula 14 - Exercicio 01 - Funções com Referência</title>
    </head>
    <body>
        <div>
            <pre><!-- Essa TAG carrega algumas pré-formatações nos conteúdos, tal como a apresentação dos vetores abaixo -->
                <?php

                    $v = array("A","J","M","X","K");
                    print_r($v);
                    array_unshift($v,"O"); # Possibilita a inclusão de mais um elemento no vetor na primeira posição do índice
                    print_r($v);
                    array_shift($v); # Possibilita a exclusão do primeiro elemento do vetor
                    print_r($v);
                ?>
            </pre>
            <br/><a href="01-exercicio.html">Voltar</a>
        </div>
    </body>
</html>

<!--

-O método

-->