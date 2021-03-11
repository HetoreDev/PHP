<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <?php
            $texto = isset($_GET["t"]) ? $_GET["t"] : "[Texto Genérico]";
            $tamanho = isset($_GET["tam"]) ? $_GET["tam"] : "[12pt]";
            $cor = isset($_GET["cor"]) ? $_GET["cor"] : "[#000000]";
        ?>
        <style>
            span.texto{
                font-size: <?php echo $tamanho; ?>;
                color: <?php echo $cor; ?>;
            }
        </style>
        <meta charset="UTF-8"/>
        <link rel="stylesheet" href="_css/estilo.css"/>
        <title>Aula 8 - Exercício 03 - PHP & CSS</title>
    </head>
    <body>
        <div>
            <?php
                echo "<span class='texto'>$texto</span>";
            ?>
            <br/><br/><a href="03-exercicio.html">VOLTAR</a>
        </div>
    </body>
</html>
