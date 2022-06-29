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
    </style>
</head>
<body>
    <div style="text-align: center; margin-top: 100px;">
        <h1>Formulario de inscrição</h1>
        <form id="formulario" action="controlerInscricao.php" method="POST">
            <p>Nome: <input type="text" name="lNome"></p>
            <p>Idade: <input type="text" name="lIdade"> </p>
            <p> <input type="submit" value="Inscrever-se"> </p>
        </form>
    </div>
    
</body>
</html>