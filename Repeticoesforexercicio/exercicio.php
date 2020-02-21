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
    <form action="02-tabuada.php" method="get">
        <select name="num" >
            <?php 
                for($i=1; $i<=10; $i++)
                {
                    echo"<option>$i</option>";
                }
            ?>
        </select>
        <input type="submit" value="enviar">
    </form>
    <?php

  
   ?> 

   <br><a href="javascript:history.go(-1)">volta</a>  <!-- voltando pagina com js !-->
</div>
    
</body>
</html>