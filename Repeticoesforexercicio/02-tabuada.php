<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meuteste</title>
    <link rel="stylesheet" type="text/css" href="css.css"> 
</head>


<body>

<h1>REPETICOES TABUADA (FOR)</h1>

<div>
   
    <?php
 $n = isset($_GET["num"])?$_GET["num"]:1;

    for ($o=1; $o<=10; $o++)
    
    
    echo"<br> a tabuda e ". $n * $o;
  
   ?> 

   <br><a href="javascript:history.go(-1)">volta</a>  <!-- voltando pagina com js !-->
</div>
    
</body>
</html>