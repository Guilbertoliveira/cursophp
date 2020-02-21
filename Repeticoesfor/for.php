<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meuteste</title>
    <link rel="stylesheet" type="text/css" href="css.css"> 
</head>


<body>

<h1>REPETICOES</h1>

<div>
    <?php

    for ($i=0; $i <= 10; $i++)
    {
        echo"$i";
    }
        echo"<br>";
    for($i=10; $i >=0; $i--)
    {
        echo"$i";
    }
    echo"<br>";
    for($i=0; $i<=100; $i+=5)
    {
        echo"$i";
    }
    echo"<br>";
    for ($i=30; $i>=10; $i-=2)
    {
        echo"$i";
    }
   
   ?> 

   <br><a href="javascript:history.go(-1)">volta</a>  <!-- voltando pagina com js !-->
</div>
    
</body>
</html>