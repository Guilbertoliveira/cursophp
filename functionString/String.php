<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strings</title>
    <link rel="stylesheet" type="text/css" href="css.css"> 

</head>
<body>
    
    <?php

    $prod = "leite";
    $preco = 4.5;

    // printf (valor decimal %) (valor decimal sem sinal %u) (%f valor real) (string %s)
    printf("o preço do %s custa R$ %.2f", $prod, $preco);

    $x[0]= 4;
    $x[1]= 2;
    $x[2]= 6;

    echo"<br>";

    // print_r mostra posicao de cada vetor e os dados armazenados na mesma
    print_r($x);
    echo"<br>";

    $v2 = array(2,3,4,5);
    print_r($v2);
    echo"<br>";

    var_dump($v2); // mostra o tipo, quantos elementos possui (mais completo)
    

    // wordwrap cria quebra de linhas
    $t = "exemplo para string gigantes que necessitam de quebra de linhaaaas";
    $r = wordwrap($t, 20, "<br>", false); // oarametros : primerio o texto, numero de limitação, tag para quebra de linha visivel, false para quebrar palavras maiores que 20
    echo($r);


    echo"o tamanho e: ". strlen($t); //tamanho das strings (conta os espaços)
    ?>

    
 

</body>
</html>