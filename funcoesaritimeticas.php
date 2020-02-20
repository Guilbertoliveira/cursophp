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

        $v1 = $_GET["x"];
        $v2 = $_GET["y"];

        echo "<h2>valores recebidos $v1 e $v2 <h2/><br/>";
        echo"<br/><h2> o valor absoluto de $v2 e <h2/>" . abs($v2);  // abs é o valor absoluto retirando o sinal negativo e considerar apenas o valor
        echo"<br/><h2>o valor de $v1<sup>$v2<sup> e <h2/>" . pow($v1, $v2); //potencialização
        echo"<br/><h2> a raiz de $v2 e <h2/>" . sqrt($v1); //raiz
        echo"<br/><h2> o valor de $v2 arredondado e <h2/>" . round($v2); //aredondando cell(arredonda pra cima) floor(arredondaprabaixo)
        echo"<br/<h2> a parte inteira da variavel é $v2 <h2/>". intval($v2);
        echo"<br/<h2> o valor de $v1 em moeda e <h2/>". number_format($v1, 2, ",", ".");
    ?>

</div>
</body>
</html>