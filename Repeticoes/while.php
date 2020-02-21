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


   $c = 1;
   while ($c <= 10)
   {
       echo "$c"."<br>";
       $c++;
   }
   

   $c = 10;
   while ($c > 0)
   {
       echo "$c"."<br>";
       $c -= 2;
   }
   
   
   ?> 

   <br><a href="javascript:history.go(-1)">volta</a>  <!-- voltando pagina com js !-->
</div>
    
</body>
</html>