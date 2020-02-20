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

        
    

        $n = 4;
        $no = "guilbert";

        $n1 = $_GET["a"];  /* pegando os valores passado pelo usuario*/
        $n2 = $_GET["b"]; 

        echo"valores recebidos $n1 e $n2";

        $m = ($n1 + $n2) /2;


        echo "<br/> a soma é ". ($n1+$n2);
        echo "<br/> a subtração é ".($n1-$n2);
        echo "<br/> a divisão é ". ($n1/$n2);
        echo "<br/> a multiplicação é ". ($n1*$n2);
        echo"a media é $m";
        
            
            
   ?> 
</div>
    
</body>
</html>