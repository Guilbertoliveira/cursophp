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

            //vetores no php são dinamicos 

            $n = array(3,5,6,7);
            $n[] = 9; //criando uma nova posicao

            echo"$n[0] <br> $n[1] <br> $n[2] <br> $n[3] <br> $n[4] <br>";
            print_r($n);

            $c = range(5,20,5); //comçea em 5 vai ate 20 pulando de 5 em 5
            print_r($c);


            
   ?> 
</div>
    
</body>
</html>