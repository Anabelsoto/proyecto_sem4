<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hola, esta es la vista de productos</h1>
    <?php
    foreach($productos as $value){
            echo "Marca -> ". $value->marca.'<br>';
            echo "precio -> ". $value->precio.'<br>'.'<br>';
    }
    ?>
</body>
</html>