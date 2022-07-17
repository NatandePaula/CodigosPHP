<?php 
    $method= $_SERVER['REQUEST_METHOD'];

    if(isset($_POST['nome']) ){
        $nome= $_POST['nome'];
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autoprocessamento</title>
</head>
<body>
    <?php
        if($method=='GET'):
    ?>
        <div>
            <form action="index.php" method="POST">
                <DIV>
                    <input type="text" name="nome" placeholder="Digite seu nome aqui">
                </DIV>
                <div>
                    <input type="submit" value="Enviar">
                </div>
            </form>
        </div>
    <?php
        else:
    ?> 
        <h1>Seu nome é <?= $nome?></h1>
    <?php
        endif;
    ?>
</body>
</html>