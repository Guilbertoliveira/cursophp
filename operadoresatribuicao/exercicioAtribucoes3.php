<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>funcoesmatematicas</title>
    <link rel="stylesheet" type="text/css" href="css\estilo.css"> 

    <style>
        h2{
            font: 12pt Arial;
            color: red;
            bold: 15pt;
        }
    </style>
</head>
<body>
<div>
    <?php

        $a = 3;
        $b = &$a; //criando referencia de b e em a
        $b += 5;
        echo"<br> a variavel a vale $a";
        echo"<br> a variavel b vale $b";

       




        
      
    ?>

</div>
</body>
</html>