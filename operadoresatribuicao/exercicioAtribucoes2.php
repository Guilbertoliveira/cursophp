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
        $atual = $_GET["aaaa"];
        echo "<br> O ano atual e $atual e o ano anterior é ". --$atual; //posdecremento
        echo "<br> O ano atual e $atual e o ano anterior é ". $atual--; //predecremento
        echo "<br> O ano atual e $atual e o ano sequente é ". $atual++; //posdecremento
        echo "<br> O ano atual e $atual e o ano sequente é ". ++$atual; //posdecremento


 




        
      
    ?>

</div>
</body>
</html>