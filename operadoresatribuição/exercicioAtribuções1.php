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
        $preco = $_GET["p"];
        echo" o preço recebido é $preco";

        $preco += ($preco*10/100);
        echo "<br/> o novo preco atualizado com aumento 10% a + e: ". number_format($preco, 2);
        

        $preco -= ($preco*10/100);
        echo "<br/> o novo preco atualizado com desconto 10% a + e: ". number_format($preco, 2);






        
      
    ?>

</div>
</body>
</html>