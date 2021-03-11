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
                    arsort($v); # Ordena o vetor de forma decrescente porém mantém os índices originais
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