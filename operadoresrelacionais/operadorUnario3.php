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
   
    $nota1 = $_GET["n1"];
    $nota2 = $_GET["n2"];

    $m = ($nota1+$nota2)/2;
    echo"<br> A media entre $nota1 e $nota2 e $m";

    
    echo"<br> situação do aluno é ". (($m<6)?"recuperação":"aprovado");

       
        
            
            
   ?> 
</div>
    
</body>
</html>