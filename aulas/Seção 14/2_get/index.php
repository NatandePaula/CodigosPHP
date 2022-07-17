<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="processamento.php" method=GET"> <!-- action é o endereçao
     para qual pagina os dados serão mandados para serem processados --> 
        <div> 
            <input type="text" name="nome" placeholder="Informe o seu nome">
            <br>
            <input type="text" name="idade" placeholder="Informe a sua idade">
        </div>  
        <div>  
            <input type="submit" value="Enviar">
        </div>  
    </form>
    
</body>
</html>