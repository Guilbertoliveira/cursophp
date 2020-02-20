<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php  // pode colocar o php em cima também
        $texto = isset($_GET["t"])?$_GET["t"]:"texto genetico";

        $tamanho = isset($_GET["tam"])?$_GET["tam"]:"12pt";

        $cor = isset($_GET["cor"])?$_GET["cor"]:"#0000000";
    ?>


    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 3</title>
    <style>
        span.textu{
            font-size: <?php echo $tamanho; ?>;
            color: <?php echo $cor; ?>;
        }

    </style>
    <link rel="stylesheet" type="text/css" href="..\css\estilo.css"> 
</head>


<body>

<h1>Testando HTML e PHP 2</h1>
<div>
    <?php

    echo" <span class = 'textu'>$texto</span>"
    
        
            
            
   ?> 

    <a href="pagina3.html">Voltar</a>
</div>
    
</body>
</html>