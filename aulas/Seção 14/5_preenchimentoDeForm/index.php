<?php
    $usuario=[
        'nome'=> 'Natan',
        'idade'=> '22',
        'curso'=> 'Sistemas de Informação'
    ];

    if($usuario){
        $nome=$usuario['nome'];
        $idade = $usuario['idade'];
        $curso = $usuario['curso'];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Preenchimento de formulario</title>
</head>
<body>
    <form action="">
        <input type="text" name="nome" placeholder="Digite seu nome" value="<?= $nome?>">
        <br>
        <input type="text" name="idade" placeholder="Informe a sua idade" value="<?= $idade ?>">
        <br>
        <input type="text" name="curso" placeholder="Digite o nome do seu curso" value="<?= $curso?>">
    </form>
</body>
</html>