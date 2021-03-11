<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8"/>
        <link rel="stylesheet" href="_css/estilo.css"/>
        <title>Aula 13 - Exercicio 02 - Estrutura Condicional While</title>
    </head>
    <body>
        <div>
            <form method="get" action="02exercicio.php">
                Selecione o número da Tabuada<br/>
                <select name="num">
                    <?php
                        for($i=1; $i<=10; $i++){
                            echo "<option>$i</option>";
                        }
                    ?>
                </select>
                <input type="submit" value="Iniciar">
            </form>
        </div>
    </body>
</html>
