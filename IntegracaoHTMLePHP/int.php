<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meuteste</title>
    <link rel="stylesheet" type="text/css" href="..\css\estilo.css"> 
</head>


<body>

<h1>Testando HTML e PHP </h1>
<div>
    <?php

        
    $valor = $_GET["v"];
    

    $rq = sqrt($valor);
    echo"A raiz de $valor e igual a ". number_format($rq, 2);
        
            
            
   ?> 

    <a href="pagina.html">Voltar</a>
</div>
    
</body>
</html>