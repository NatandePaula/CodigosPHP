<?php
    $categoria=[];
    $categoria[] = 'infantil';
    $categoria[] = 'adolescente';
    $categoria[] = 'adulto';

    //print_r($categoria);

    $nome = 'Eduardo';
    $idade =18;
   // var_dump($nome);// retorna o tipo da variavel

    if($idade >=0 && $idade <=12){
        echo $categoria[0];
    }else if($idade >12 && $idade <=18){
        echo $categoria[1];
    }else{
        echo $categoria[2];
    }


?>