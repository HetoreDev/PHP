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
                $produto = "Leite";
                $preco = 4.5;

                echo "O $produto custa R$ ".number_format($preco,2)."<br/>";

                printf("O %s custa R$ %.2f", $produto, $preco);

            ?>
            <br/><a href="01-exercicio.html">Voltar</a>
        </div>
    </body>
</html>

<!--

%d - Espaço reservado para apresentar uma variável do tipo Inteiro
%u - Espaço reservado para apresentar uma variável do tipo Inteiro sem + ou -
%s - Espaço reservado para apresentar uma variável do tipo String
%f - Espaço reservado para apresentar uma variável do tipo Float
%.2f - Limita a saída da variável Float em duas casas decimais após a vírgula

Método number_format($variável, 2), o 2 se refere a quantidade de casas decimais desejadas

-->