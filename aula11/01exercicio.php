<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8"/>
        <link rel="stylesheet" href="_css/estilo.css"/>
        <title>Aula 11 - Exercicio 01 - Estrutura Condicional While</title>
    </head>
    <body>
        <div>
            <?php
                $contador = 1;
                while($contador <= 10){
                    echo "$contador <br/>";
                    $contador++;
                }

                echo "<br/>";

                $contador = 10;
                while($contador >= 1){
                    echo"$contador <br/>";
                    $contador--;
                }
            ?>
            <br/><a href="01-exercicio.html">Voltar</a>
        </div>
    </body>
</html>
