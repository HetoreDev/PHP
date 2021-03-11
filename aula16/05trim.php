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

                $nome = "   José da Silva   ";
                echo "|".$nome."|"."<br/>";
                echo strlen($nome)."<br/>";
                $novo = trim($nome);
                echo $novo."<br/>";
                echo strlen($novo)."<br/>";

                echo "<br/>".strlen(trim($nome))."<br/>";

            ?>
            <br/><a href="01-exercicio.html">Voltar</a>
        </div>
    </body>
</html>

<!--

O método trim() elimina os espaços em branco antes e depois do começo e fim da String

-->