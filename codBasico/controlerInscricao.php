<?php
    session_start();

    $categoria=[];
    $categoria[] = 'infantil';
    $categoria[] = 'adolescente';
    $categoria[] = 'adulto';

    //print_r($categoria);

    $nome = $_POST['lNome'];//vai recuperar as informaçãoes que vierem pelo post
    $idade =$_POST['lIdade'];
   //var_dump($nome);// retorna o tipo da variavel

   $_SESSION['mensagem-de-erro']='';
   $_SESSION['mensagem-de-erro-idade']='';
   if(empty($nome)){
       $_SESSION['mensagem-de-erro']=  '<b>O campo nome não deve ser vazio</b>';
       if(!is_numeric($idade)) {
            $_SESSION['mensagem-de-erro-idade']= '<b>Favor inserir uma idade valida</b>';
       }
       header('location:index.php');
       return;
   
   }else if(strlen($nome) < 3) {
        $_SESSION['mensagem-de-erro']= '<b>O nome deve ser composto por no minimo 3 letras</b>';
        if(!is_numeric($idade)) {
            $_SESSION['mensagem-de-erro-idade']= '<b>Favor inserir uma idade valida</b>';
       }
        header('location:index.php');
        return;

    }else if(strlen($nome) > 40) {
        $_SESSION['mensagem-de-erro']= '<b>O nome não deve conter mais de 40 letras</b>';
        if(!is_numeric($idade)) {
            $_SESSION['mensagem-de-erro-idade']= '<b>Favor inserir uma idade valida</b>';
       }
        header('location:index.php');
        return;

    }
    
    if(is_numeric($idade)) {
        if($idade >=0 && $idade <=12){
            echo "O nadador ".$nome." esta inscrito na categoria ".$categoria[0];
        }else if($idade >12 && $idade <=18){
            echo "O nadador ".$nome." esta inscrito na categoria ".$categoria[1];
        }else{
            echo "O nadador ".$nome." esta inscrito na categoria ".$categoria[2];
        }
   }else{
        $_SESSION['mensagem-de-erro-idade']= '<b>Favor inserir uma idade valida</b>';
        header('location:index.php');
        return;
   }



    

?>