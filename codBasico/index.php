<?php
    session_start();// inicia a seção php
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formalario de inscrição de competidores</title>
    <style>
        #formulario{
            font-size: 25px;
        }
        .mensErro{
            font-size: 18px;
            color:#ff4d4d;
            padding: top 0;;
            
        }
    </style>
</head>
<body>
    <div style="text-align: center; margin-top: 100px;">
        <h1>Formulario de inscrição</h1>
        <form id="formulario" action="controlerInscricao.php" method="POST">
            <p>Nome: <input type="text" name="lNome"></p>
            <div class="mensErro">
                <?php
                    $mensagemDeErro = isset($_SESSION['mensagem-de-erro']) ? $_SESSION['mensagem-de-erro']: '';
                    if(!empty($mensagemDeErro)){
                        echo $mensagemDeErro;
                    }
                ?>
            </div>
            <p>Idade: <input type="text" name="lIdade"> </p>
            <div class="mensErro">
                <?php
                    $mensagemDeErroIdade = isset($_SESSION['mensagem-de-erro-idade']) ? $_SESSION['mensagem-de-erro-idade']:' ';
                    if(!empty($mensagemDeErroIdade)){
                        echo $mensagemDeErroIdade;
                    }
                ?>
            </div>
            <p> <input type="submit" value="Inscrever-se"> </p>
        </form>
    </div>
    
</body>
</html>