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
                $frase = "Eu estou aprendendo PHP no Curso em Vídeo de PHP";
                printf("$frase <br/>");
                $contador = substr_count($frase, "PHP");
                printf("A string PHP foi encontrada $contador vezes");
            ?>
            <br/><a href="02-exercicio.html">Voltar</a>
        </div>
    </body>
</html>

<!--

-O método 

-->