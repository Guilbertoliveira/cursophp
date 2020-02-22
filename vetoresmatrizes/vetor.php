<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meuteste</title>
    <link rel="stylesheet" type="text/css" href="css\estilo.css"> 
</head>


<body>

<h1>Testando aa</h1>
<div>
    <?php

            //vetores no php são dinamicos 

            $n = array(3,5,6,7);
            $n[] = 9; //criando uma nova posicao

            echo"$n[0] <br> $n[1] <br> $n[2] <br> $n[3] <br> $n[4] <br>";
            print_r($n);

            $c = range(5,20,5); //comçea em 5 vai ate 20 pulando de 5 em 5
            print_r($c);

            //chaves personalizadas mudando o numero dos vetores
            echo"<br>";
            $v = array( 
            6=>5, 
            1=>9, 
            2=>8, 
            3=>7);
            $v[] = 100;
            print_r($v);

            echo"<br>";
            unset($v[6]);  //desloca o vetor escolhido
            print_r($v);

            //chaves associativas
            echo"<br>";
            $u = array("nome" => "ana", "idade" =>23, "peso" =>65.4);
            print_r($u);

            //usando foreach
            echo"<br>";
            echo"<br>";
            foreach($u as $campo => $valor){
                echo("no campo $campo o valor e $valor <br>");
            }

            echo("<br><br>");
            echo("o vetor tem "). count($v). " elementos <br>";
            print_r($u);
            echo("<br><br>");
            var_dump($u); //mostrar o vetor mais complexo 

            echo("<br><br>"); 
            $u[] = "joaquina"; //maneira de adicionar no ultimo elementro do vetor
            array_push($u, "creude"); //outra maneira de adicionar no vetor (pilha)
            print_r($u);
            
            array_pop($u); // maneira de remover do vetor (pilha)
            echo("<br><br>");
            print_r($u);




            
   ?> 
</div>
    
</body>
</html>