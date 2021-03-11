<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8"/>
        <link rel="stylesheet" href="_css/estilo.css"/>
        <title>Aula 14 - Exercicio 03 - Funções com Return e Laço de Iteração</title>
    </head>
    <body>
        <div>
            <?php
                function soma(...$vetor){

                    //$vetor = func_get_arg();# função do PHP que pega todos os argumentos que são passados para a função e os armaneza em um vetor, porém essa função não funciona mais.
                    $total = func_num_args();# funão do PHP que conta a quantidade de argumetnos que foram enviadas para a função solicitada

                    $resultado = 0;

                    for($i=0; $i < $total; $i++){

                        $resultado += $vetor[$i];

                    }

                    return $resultado;
                }

                $r = soma(3, 5, 2, 8, 9, 4);

                echo "A soma dos valores é $r";

            ?>
            <br/><a href="03-exercicio.html">Voltar</a>
        </div>
    </body>
</html>
