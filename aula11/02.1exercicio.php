<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8"/>
        <link rel="stylesheet" href="_css/estilo.css"/>
        <title>Aula 11 - Exercicio 02 - Estrutura Condicional While</title>
    </head>
    <body>
        <div>
            <form method="get" action="02.2exercicio.php">
                <?php
                $c = 1;
                while($c <= 5) {
                    echo "valor $c: <input type ='number' name ='v$c' max ='100' min ='0' value ='0' /><br/>";
                    $c++;
                }
                #no campo "name='v$c' do input que está dentro do laço, foi colocado o contador para justamente poder mudar o nome da "variável" também
                ?>
                <input type="submit" value="Enviar"/>
            </form>
        </div>
    </body>
</html>
