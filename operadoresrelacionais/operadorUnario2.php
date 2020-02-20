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
    $a = 3;
    $b = "3";

    echo "valores passados $a e $b";
    
    $r = ($a === $b)?"sim":"não";  // === é identico ? igual e do mesmo tipo 

    echo"<br> as variaveis a e b são identicas? $r";
        
    $r = ($a == $b)?"sim":"não";  // == elas são iguais

    echo"<br> as variaveis a e b são iguais? $r";


       
        
            
            
   ?> 
</div>
    
</body>
</html>