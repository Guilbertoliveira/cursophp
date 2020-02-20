<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meuteste</title>
    <link rel="stylesheet" type="text/css" href="css\estilo.css"> 
</head>


<body>

<h1>Exercicio estrutura condicional</h1>
<div>
    <?php

    $ano = isset($_GET["ano"])?$_GET["ano"]:1990;
    echo"você nasceu no ano $ano <br>";

    $i = date("Y") - $ano;

    echo"Você possuí $i anos <br>";
    if($i >=65){
        $v="voto opcional";
        $d="pode mas não deveria dirigir";

    }
    elseif($i >= 18 && $i < 65) {
        $v = "voto obrigatorio";
        $d = "ja pode dirigir";
    }
        elseif($i >= 16 && $i< 18){
            $v="voto opcional";
            $d="não pode dirigir";
            }
            else{
            $v = " não pode votar";
            $d = "não pode dirigir";
            }
        
            

    echo" Com essa idade você $v e também $d";

    
            
   ?>  <a href="pagina.html"> voltar </a>
</div>
    
</body>
</html>