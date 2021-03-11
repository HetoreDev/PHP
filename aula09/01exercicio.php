<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8"/>
        <link rel="stylesheet" href="_css/estilo.css"/>
        <title>Aula 9 - Exercicio 01 - Estrutura Condicional</title>
    </head>
    <body>
        <div>
            <?php
				$a = isset($_GET["ano"])?$_GET["ano"]:1900;
				$i = date("Y") - $a;
				//Método date("Y"), pega a data atual do sistema automacimente, e o argumento passado "Y" pegará os quatro dígitos deste ano
				echo "Você nasceu em $a e tem $i anos.";
				if($i >= 18){
					$v = "já pode votar";
					$d = "já pode dirigir";
				}else{
					$v = "não pode votar";
					$d = "não pode dirigir";					
				}
				echo "<br/>Com essa idade você $v e também $d";
            ?>
        </div>
    </body>
</html>
