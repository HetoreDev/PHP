<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8"/>
        <link rel="stylesheet" href="_css/estilo.css"/>
        <title>Aula 14 - Exercicio 01 - Funções com Referência</title>
    </head>
    <body>
        <div>
            <?php

                $v = array(3=>5, 1=>9, 0=>8, 7=>7);
                print_r($v);

                echo "<br/>Com o método unset() é possível eliminar um índice do vetor<br/>";

                unset($v[0]);# Método para eliminar uma posição do índice
                print_r($v);

            ?>
            <br/><a href="01-exercicio.html">Voltar</a>
        </div>
    </body>
</html>

<!--

-O método range() cria um vetor dinamicamente onde o 1º parâmetro indica o 1º valor da 1ª posição do vetor, o 2º parâmetro indica o último valor da última posição, e o 3º parâmetro indica o passo

-->