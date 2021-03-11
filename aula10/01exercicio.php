<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8"/>
        <link rel="stylesheet" href="_css/estilo.css"/>
        <title>Aula 10 - Exercicio 01 - Estrutura Condicional Switch</title>
    </head>
    <body>
        <div>
            <?php
            $numero = isset($_GET["num"]) ? $_GET["num"] : 0;
            $operacao = isset($_GET["oper"]) ? $_GET["oper"] : 1;

            switch ($operacao){
                case 1:{
                    $resultado = $numero * 2;
                    break;}
                case 2:{
                    $resultado = pow($numero,3);
                    break;}
                case 3:{
                    $resultado = sqrt($numero);# Posso usar potência com o expoente em 1/2 para calcular a raiz quadrada
                    break;}
               }
               echo "O resultado da operação $operacao solicitada foi <span class='foco'>$resultado</span>."
            ?>
            <br/><br/><a href="01-exercicio.html" class="botao">Voltar</a>
        </div>
    </body>
</html>
