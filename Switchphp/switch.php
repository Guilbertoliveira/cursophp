<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meuteste</title>
    <link rel="stylesheet" type="text/css" href="css.css"> 
</head>


<body>

<h1>SWITCH TESTE PHP</h1>

<div>
    <?php

          $n = isset($_GET["num"])?$_GET["num"]:0;
          $o = isset($_GET["radium"])?$_GET["radium"]:1;

          switch($o)
          {
              case 1: //dpbro
                    $r = $n * 2;
              break;
              case 2:  //ao cubo
                    $r = $n ^ 3;
              break;
              case 3: // raiz
                    $r = sqrt($n);
              break;

          }

          echo"o resultado da operacao solicitada foi $r";
            
   ?> 

   <a href="switch.html">volta</a>
</div>
    
</body>
</html>