<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8"/>
        <link rel="stylesheet" href="_css/estilo.css"/>
        <title>Aula 7 - Exercício 04</title>
    </head>
    <body>
        <div>
            <?php
                $ano = $_GET["an"];
                $idade = 2019 - $ano;

                echo "Quem nasceu em $ano tem idade de $idade anos.";

                $tipo = ($idade >= 18 && $idade <= 65)?"OBRIGATORIO":"FACULTATIVO";

                echo "<br/>É dessa forma o seu voto é $tipo";

                //or = ||; xor = Ou exclusivo; and = &&;

            ?>
        </div>
    </body>
</html>
