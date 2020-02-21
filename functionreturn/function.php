<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meuteste</title>
    <link rel="stylesheet" type="text/css" href="css.css"> 
</head>


<body>

<h1>aprendendo function return</h1>

<div>
   
    <?php

  // modo 1 
function soma($a, $b)
{
    $s = $a + $b;
    return $s;
    
}

 //modo 2
function soma2($a, $b)
{
    return $a + $b;
    
}



$r = soma(3, 3);
echo"a soma é $r";

$r = soma2(3, 4);
echo"<br> a soma é $r";
  
    
   ?> 

   <br><a href="javascript:history.go(-1)">volta</a>  <!-- voltando pagina com js !-->
</div>
    
</body>
</html>