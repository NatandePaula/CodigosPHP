<?php
    $categoria=[];
    $categoria[] = 'infantil';
    $categoria[] = 'adolescente';
    $categoria[] = 'adulto';

    //print_r($categoria);

    $nome = $_POST['lNome'];//vai recuperar as informaçãoes que vierem pelo post
    $idade =$_POST['lIdade'];
   //var_dump($nome);// retorna o tipo da variavel

    if($idade >=0 && $idade <=12){
        echo "O nadador ".$nome." esta inscrito na categoria ".$categoria[0];
    }else if($idade >12 && $idade <=18){
        echo "O nadador ".$nome." esta inscrito na categoria ".$categoria[1];
    }else{
        echo "O nadador ".$nome." esta inscrito na categoria ".$categoria[2];
    }


?>