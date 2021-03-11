<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8"/>
        <link rel="stylesheet" href="_css/estilo.css"/>
        <title>Aula 11 - Exercicio 03 - Estrutura Condicional While</title>
    </head>
    <body>
        <div>
            <?php
            $i = isset($_GET["inicio"]) ? $_GET["inicio"] : 0;
            $f = isset($_GET["fim"]) ? $_GET["fim"] : 1;
            $p = isset($_GET["passo"]) ? $_GET["passo"] : 1;

            if($i < $f){
                while($i <=$f){
                    echo $i."<br/>";
                    $i+=$p;
                }
            }else{
                while($i >=$f){
                    echo $i."<br/>";
                    $i-=$p;
                }
            }
            ?>
            <br/><a href="03-exercicio.html">Voltar</a>
        </div>
    </body>
</html>
