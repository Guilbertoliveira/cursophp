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
    
          
    $c = range(5,20,5); //comçea em 5 vai ate 20 pulando de 5 em 5
    foreach ($c as $v){
        echo "$v <br>";
    }
    


    $a=10;
$b=2;
$j=$a/2;
for ($i=0;$i<$j;$i++){
    if ($i % $b == 1) 
	echo "$i";
}



$x = 4;
$y = 2;
if($x == $y) 
	comando1;
    comando2;

    $a = 5;
    $b = 3;
    $c = ($a>$b)?true:false;
    echo"$c";



    echo"a somaa e : ". 0%3;
    


   ?> 
</div>
    
</body>
</html>