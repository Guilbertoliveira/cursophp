<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meuteste</title>
    <link rel="stylesheet" type="text/css" href="css.css"> 
</head>


<body>

<h1>aprendendo function retornando variaveis</h1>

<div>
   
    <?php

    // nao altera a variavel, fica apenas dentro da função
    function soma($x){
        $x += 2;
        echo "o valor de x e $x";
    }

    //altera a variavel fora da função
    function somb(&$x){
        $x += 2;
        echo "o valor de x e $x <br>";
    }


    $a = 3;

    soma($a);
    echo " <p> o valor de a e $a </p>";
    somb($a);
    echo " <p> o valor de a e $a </p>";

   ?> 

   <br><a href="javascript:history.go(-1)">volta</a>  <!-- voltando pagina com js !-->
</div>
    
</body>
</html>