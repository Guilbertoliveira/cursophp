<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>operacao</title>
    <link rel="stylesheet" type="text/css" href="..\css\estilo.css"> 
</head>


<body>

<h1>Operadores logico</h1>
<div>
    <?php
   
    $ano = $_GET["an"];
    $idade = 2020 - $ano;
    echo"Quem nasceu em ano de $ano tem idade de $idade anos";
    //operador logico &&, ||, !
    $tipo = ($idade >= 18 && $idade <=65)?"OBRIGATORIO":"NAO OBRIGATORIO";
    echo" <BR> E DESSA FORMA SEU VOTO E: $tipo";
       
        
            
            
   ?> 
</div>
    
</body>
</html>