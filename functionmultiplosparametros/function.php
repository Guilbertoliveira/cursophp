<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meuteste</title>
    <link rel="stylesheet" type="text/css" href="css.css"> 
</head>


<body>

<h1>aprendendo function return</h1>

<div>
   
    <?php
        function soma()
        {
            $p = func_get_args(); // pega os argumentos
            $t = func_num_args(); // pega a quantidade total de argumentos passados
            $s = 0;

            for($i = 0; $i<$t; $i++){
                $s += $p[$i];
            }

            return $s;
        }


        $r = soma(2,3,4);

        echo" o resultado final é: $r";
    ?> 

   <br><a href="javascript:history.go(-1)">volta</a>  <!-- voltando pagina com js !-->
</div>
    
</body>
</html>