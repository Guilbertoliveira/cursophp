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

    //função trim  retira os espaços a mais
    //função ltrim (retiraria apenas os espacos do inicio)
    //rtrim (retiraria apenas os espacos do fim)
    // no exemplo foi utilizado o trim
    echo"<br>";
    $nome = "   jose da silva   ";
    echo"<br> $nome";
    echo"<br> antes: ". strlen($nome);

    $novo = trim($nome);
    echo"<br> $novo";
    echo"<br> depois: ". strlen($novo);


    //função str_word_count (mostra quantas palavras possuí)
    echo"<br><br>Eu vou estudar php <br>";
    $frase = "eu vou estudar php";
    $cont = str_word_count($frase, 0); // 0, 1, 2 , 0 = simplesmente conta, 1 = gera vetor, 2 = vetor mantendo posicionamento de cada string
    echo"$cont";


    // função explode (separa as palavras por espaço)
    echo"<br><br>";
    $site = "aaaaa aaa aaa";
    $vetor = explode(" ", $site);
    print_r($vetor);

    // separa as palavras em cada vetor
    echo"<br><br>";
    $string = "maria";
    $vetor = str_split($string);
    print_r($vetor);

    //function implode (coloca espacos ou outros caracteres no lugar dos espacos)
    echo"<br><br>";
    $vet[0] = "aaa";
    $vet[1] = "bbb";
    $vet[2] = "ccc";
    $texto = implode("#", $vet);
    print($texto);

    //function chr (para achar a letra pelo numero dela)
    $letra = chr(67);
    echo"<br><br>";
    echo" a letra de codigo 67 e $letra";

    //function ord (para achar o numero atraves da letra)
    $letra = "c";
    echo"<br><br>";
    $cod = ord($letra);
    echo"$cod";

    //strtolower letras minúscula

        $nome = "GUILBERT OLIVEIRA";
        $nome2 = strtolower($nome);
        echo "seu nome e $nome2";

    //strtoupper faz o oposto do strtolower
    $nome = "GUILBERT oliveira";
        $nome2 = strtoupper($nome);
        echo "seu nome e $nome2";

    //ucfirst colocar a primeira letra maiúscula

    //ucwords colocar a primeira letra maiúscula de todas palavras

    //strrev palavra ao contrario

    // strpos verifica em qual uma palavra se encontra em uma frase

    //stripos verifica em qual uma palavra se encontra em uma frase maiusculo e minusculo

    //substr_count encontra quantas vezes a palavra foi encontrada na frase

    //substr você escolhe uma parte da frase para pegar

    //str_pad completa a quantidade de caracters com espaço 

    //str_repeat repete caracteres ou palavras necessarias

    //str_replace troca palavras por outras palavras de sua escolha


    ?>

    
 

</body>
</html>