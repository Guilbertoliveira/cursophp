<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meuteste</title>
    <link rel="stylesheet" type="text/css" href="..\css\estilo.css"> 
</head>


<body>

<h1>Testando HTML e PHP 2</h1>
<div>
    <?php



     //realizando verificação se foi recebido os dados necessarios (gambiarra)
     //isset (determina se a variavel foi declarada ou não)   
    $nome = isset($_GET["nom"])?$_GET["nome"]:"[não informado]";
    $ano = isset($_GET["an"])?$_GET["an"]:"[não informado]";
    $sexo = isset($_GET["sex"])?$_GET["sex"]:"[não informado]";
    $idade = date("Y") - $ano;


    //pega o name passado no html
    echo "A nome do cidadão é $nome <br>";
    echo "A sexo do cidadão é $sexo <br>";
    echo "ano de nascimento é $ano <br>";
    echo "A idade do cidadão é $idade";
        
            
            
   ?> 

    <a href="pagina2.html">Voltar</a>
</div>
    
</body>
</html>