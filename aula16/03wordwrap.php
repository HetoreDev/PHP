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
                $t = "Aqui temos um texto gigante criado pelo PHP que vai mostrar o funcionamento da função wordwrap";
                $r = wordwrap($t,20, "<br/>\n", false );
                echo $r;
            ?>
            <br/><a href="01-exercicio.html">Voltar</a>
        </div>
    </body>
</html>

<!--

O método wordwrap() contém vários parâmetros para manipular o conteúdo de uma variável do tipo String
(1º $t, 2º 20, 3º "<br/>\n", 4º false)
1º A variável a ser tratada
2º Qual a quantidade de caracteres que haverão para se inserir a quebra de texto
3º A inserção da tag de quebra de texto tanto para o código gerado como para a vizualização do conteúdo
4º Definição de quebra de texto conforme o item 2º, se false, não cortará a palavra no meio, se true, cortará

-->