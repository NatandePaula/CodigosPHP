<?php
    if(isset($_POST['ingredientes'])){
        $ingrediente =  $_POST['ingredientes'];

        print_r($ingrediente); 

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkbox</title>
</head>
<body>
    <div>
        <form action="index.php" method="POST"><br>
            <input type="checkbox" name="ingredientes[]" value="tomate">Tomate
            <input type="checkbox" name="ingredientes[]" value="a bobora"> Abobora
            <br>
            <input type="checkbox" name="ingredientes[] " name="alho" >alho <br>
            <input type="submit" value="Enviar">
        </form>
    </div>
    
</body>
</html>
