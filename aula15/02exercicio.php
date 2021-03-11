<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8"/>
        <link rel="stylesheet" href="_css/estilo.css"/>
        <title>Aula 14 - Exercicio 02 - Funções Importadas com Include e Require</title>
    </head>
    <body>
        <div>
            <?php
                # É possível usar blocos de código/funções de outro arquivo, basta incluir esse arquivo para poder utilizar seus métodos
                include "funcoes.php";
                echo "Testando novas funções <br/>";
                ola();
                mostrarValor(4);
            ?>
            <br/><a href="02-exercicio.html">Voltar</a>
        </div>
    </body>
</html>

<!--
-include: caso o arquivo citado esteja indisponível, o programa continuará a tentar executar a diretiva do arquivo original
-require: caso o arquivo citado esteha indisponívle, o programa finalizará a execução restante da diretiva
-include_once e require_once, irá criar o link com o outro arquivo somente caso ele ainda não tenha sido criado anteriormente
-->