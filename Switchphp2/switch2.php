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

        $d = isset($_GET["ds"])?$_GET["ds"]:0;

        switch ($d){
              case 2:
              case 3:
              case 4:
              case 5:
              case 6:
                  echo"levanta a vai estudar";
              break;
              case 7:
              case 8:
                  echo"descanse";
              break;
              default:
              echo"invalido";
            break;
        }
            
   ?> 

   <br><a href="javascript:history.go(-1)">volta</a>  <!-- voltando pagina com js !-->
</div>
    
</body>
</html>