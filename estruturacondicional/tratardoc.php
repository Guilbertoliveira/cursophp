<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meuteste</title>
    <link rel="stylesheet" type="text/css" href="css\estilo.css"> 
</head>


<body>

<h1>Testando aa</h1>
<div>
    <?php

    $ano = isset($_GET["ano"])?$_GET["ano"]:1990;
    echo"você nasceu no ano $ano <br>";

    $i = date("Y") - $ano;

    echo"Você possuí $i anos";
    
    if($i >= 18) {
        $v = "ja pode votar";
        $d = "ja pode dirigir";
    }
    else{
        $v = "você não pode votar";
        $d = "não pode dirigir";
    }

    echo" Com essa idade você $v e também $d";

    
            
   ?>  <a href="pagina.html"> voltar </a>
</div>
    
</body>
</html>