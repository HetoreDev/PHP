<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8"/>
        <link rel="stylesheet" href="_css/estilo.css"/>
        <title>Aula 13 - Exercicio 03 - Estrutura Condicional While</title>
    </head>
    <body>
    <div>
        <?php

            $primo = isset($_GET["num"]) ? $_GET["num"] : 1;

            $contador = 0;

            for($i = 1; $i <= $primo; $i++){
                if($primo % $i == 0){
                    $contador++;
                }
            }

            if($contador == 2){
                echo "O número $primo é primo <br/> Quantidade de divisões: $contador  <br/>";

            }else{
                echo "O número $primo não é primo <br/> Quantidade de divisões: $contador <br/>";
            }


        ?>
       <br/><a href="03-exercicio.html">Voltar</a>
    </div>
    </body>
</html>
