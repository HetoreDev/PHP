<!DOCTYPE html>
<html lang="pt-br">
    <head>		
		<?php
			$n1 = isset($_GET["n1"]) ? $_GET["n1"] : "[Valor não informado]";
			$n2 = isset($_GET["n2"]) ? $_GET["n2"] : "[Valor não informado]";
					
			$media = ($n1 + $n2)/2;
					
			if($media < 5){
				$status = "Reprovado";
				$cor = "#FF0000";
			}elseif($media >= 5 && $media < 7){
				$status = "Recuperação";
				$cor = "#FFD700";
			}else{
				$status = "Aprovado";
				$cor = "#008000";
			}			
		?>
		<style>			
			span.notas{				
                font-weight: bold;
			}
			span.media{
				color: <?php echo $cor; ?>;
				font-weight: bold;				
			}
		</style>
        <meta charset="UTF-8"/>
        <link rel="stylesheet" href="_css/estilo.css"/>
        <title>Aula 9 - Exercicio 03 - Estrutura Condicional</title>
    </head>
    <body>
        <div>					
            <?php				
				echo "A media entre <span class='notas'>$n1</span> e <span class='notas'>$n2</span> é igual a <span class='notas'>$media</span>".
				"<br/> Situação do aluno: <span class='media'>$status</span>";
				
				//#008000 green
				//#FF0000 red
				//#FFFF00 gold				
            ?>			
			<br/><br/><a href="03-exercicio.html">Voltar</a>
        </div>
    </body>
</html>

