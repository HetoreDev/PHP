<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8"/>
        <link rel="stylesheet" href="_css/estilo.css"/>
        <title>Aula 14 - Exercicio 01 - Funções com Referência</title>
    </head>
    <body>
        <div>
            <pre>
                <table border="1"><tr>
                    <?php

                        $c = range(5,20,2);

                        foreach($c as $v){
                            echo "<td>$v ";
                        }

                    ?>
                </table>
            </pre>
            <br/><a href="01-exercicio.html">Voltar</a>
        </div>
    </body>
</html>

<!--

-O método range() cria um vetor dinamicamente onde o 1º parâmetro indica o 1º valor da 1ª posição do vetor, o 2º parâmetro indica o último valor da última posição, e o 3º parâmetro indica o passo

-->