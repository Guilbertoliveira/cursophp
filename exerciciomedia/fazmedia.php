<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medias</title>
    <link rel="stylesheet" type="text/css" href="css.css"> 

    <style>
        h1{
            font-size: 30px;
        }
    </style>
    <link rel="stylesheet" type="text/css" href="css\estilo.css"> 
</head>


<body>

<h1>Medias</h1>
<div>
    <?php

        $notaone = isset($_GET["media1"])?$_GET["media1"]:"nãotemmedia" ;
        $notatwo = isset($_GET["media2"])?$_GET["media2"]:"naotemmedia2";

        echo"Primeira nota: $notaone <br> Segunda nota: $notatwo <br>";

        $media = ($notaone + $notatwo)/2;

        echo"a media final foi $media";
        
        if($media < 6)
        {
            echo"<br> aluno reprovou";
        }
        else
        {
            echo"<br> aluno passou";
        }
    
            
   ?>  <a href="paginamedia.html"> voltar </a>
</div>
    
</body>
</html>