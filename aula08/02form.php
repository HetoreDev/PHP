<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8"/>
        <link rel="stylesheet" href="_css/estilo.css"/>
        <title>Aula 8 - Exercício 02 - Forms</title>
    </head>
    <body>
        <div>
            <?php
                $nome = isset($_GET["nome"]) ? $_GET["nome"] : "[Não informado]";
                $ano = isset($_GET["ano"]) ? $_GET["ano"] : 0;
                $sexo = isset($_GET["sexo"]) ? $_GET["sexo"] : "[Sem sexo]";

                $idade = date("Y") - $ano; // Y maiúsculo retorna o ano inteiro, y minúsculo retorna reduzido apenas para dois dígitos.

                echo "$nome é $sexo e tem $idade anos";
            ?>
           <br/><br/><a href="02-exercicio.html">VOLTAR</a>
        </div>
    </body>
</html>
