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
                $v[0] = 4;
                $v[1] = 8;
                $v[2] = 3;

                print_r($v); echo "<br/>";

                $v2 = array(3, 7, 6, 2, 1, 9);

                print_r($v2);
            ?>
            <br/><a href="01-exercicio.html">Voltar</a>
        </div>
    </body>
</html>

<!--

print_r() é um método utilizado para vizualizar o conteúdo de um array, seus índice e as suas respectivas valorizações
var_dump() e var_export() são métodos com funcionalidades semelhantes ao print_r()

-->