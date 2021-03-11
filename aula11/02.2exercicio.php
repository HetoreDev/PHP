<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8"/>
        <link rel="stylesheet" href="_css/estilo.css"/>
        <title>Aula 11 - Exercicio 02 - Estrutura Condicional While</title>
    </head>
    <body>
        <div>
            <?php
                $i = 1;
                while($i <= 5){
                    $v = "num".$i;
                    $url = "v".$i;
                    $$v = isset($_GET[$url]) ? $_GET[$url] : 0;
                    $i++;

                }

                $i = 1;
                while($i <= 5){
                    $v = "num".$i;
                        echo "Valor $i : ".$$v."<br/>";
                        $i++;
                    }          
            ?>
            <br/><a href="02.1exercicio.php">Voltar</a>
        </div>
    </body>
</html>
