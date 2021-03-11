<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8"/>
        <link rel="stylesheet" href="_css/estilo.css"/>
        <title>Aula 10 - Exercicio 03 - Estrutura Condicional Switch</title>
    </head>
    <body>
        <div>
            <?php
            $estado = isset($_GET["Estado"]) ? $_GET["Estado"] : ["Opção Inválida"];

            switch ($estado){

                case "AC" :
                case "AP" :
                case "AM" :
                case "PA" :
                case "RO" :
                case "RR" :
                case "TO" :
                    echo "Você selecionou o estado $estado que está no Norte ";
                    break;

                case "AL" :
                case "BA" :
                case "CE" :
                case "MA" :
                case "PB" :
                case "PE" :
                case "PI" :
                case "RN" :
                case "SE" :
                    echo "Você selecionou o estado $estado que está no Nordeste ";
                    break;

                case "DF" :
                case "GO" :
                case "MS" :
                case "MT" :
                    echo "Você selecionou o estado $estado que está no Centro-Oeste ";
                    break;

                case "ES" :
                case "MG" :
                case "RJ" :
                case "SP" :
                    echo "Você selecionou o estado $estado que está no Sudeste ";
                    break;

                case "PR" :
                case "RS" :
                case "SC" :
                    echo "Você selecionou o estado $estado que está no Sul ";
                    break;

                default : echo "Estado não encontrado";
            }
            ?>
            <br/><br/><a href="03-exercicio.html">Voltar<a/>
        </div>
    </body>
</html>
