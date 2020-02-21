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

    ?>
 

</body>
</html>