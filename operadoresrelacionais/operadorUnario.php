<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>operacao</title>
    <link rel="stylesheet" type="text/css" href="..\css\estilo.css"> 
</head>


<body>

<h1>Operadores relacionais</h1>
<div>
    <?php
    $n1 = $_GET["a"];
    $n2 = $_GET["b"];
    $tipo = $_GET["op"];
    echo "os valores passados foram $n1 e $n2 <br>";

    $r = ($tipo == "s")?$n1+$n2:$n1*$n2;  //compração?sesim:senao

    echo"<br> o resultado será $r";
        
    

       
        
            
            
   ?> 
</div>
    
</body>
</html>