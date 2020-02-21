<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meuteste</title>
    <link rel="stylesheet" type="text/css" href="css.css"> 
</head>


<body>

<h1>aprendendo function include</h1>

<div>
    
   
    <?php 
    
        //tem também o include_once e require_once que apenas coloca uma vez no documento o include e o require
    
        // chamando função do function31
        include "function31.php"; // também possui o require no lugar do include
        ola();
        mostraValor(24);
   ?> 

   <br><a href="javascript:history.go(-1)">volta</a>  <!-- voltando pagina com js !-->
</div>
    
</body>
</html>