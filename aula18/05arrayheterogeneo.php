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

                $cad = array("nome"=>"Ana", "idade"=>23, "peso"=>65.5);
                print_r($cad);

                $cad["fuma"] = true;

                echo"<br/>";
                foreach ($cad as $campo=>$valor){
                    echo "O campo $campo possui o conteúdo $valor"."<br/>";
                }

            ?>
            <br/><a href="01-exercicio.html">Voltar</a>
        </div>
    </body>
</html>

<!--

-O método range()

-->