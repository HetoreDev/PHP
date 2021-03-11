<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8"/>
        <link rel="stylesheet" href="_css/estilo.css"/>
        <title>Aula 12 - Exercicio 03 - Estrutura Condicional While</title>
    </head>
    <body>
    <div>
        <?php
        $numero = isset($_GET["tab"]) ? $_GET["tab"] : 1;

        $contador = 1;

        do{
            echo "$numero x $contador = ".($numero*$contador)."<br/>";

            $contador++;
        }while($contador <= 10);

        ?>
       <br/><a href="03-exercicio.html">Voltar</a>
    </div>
    </body>
</html>
