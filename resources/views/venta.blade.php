<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hola, esta es la vista de Ventas</h1>
    <?php
    foreach($ventas as $value){
            echo"serie -> ". $value->serie.'<br>';
            echo"fecha de emisión -> ". $value->fecha_emi.'<br>';
            echo"monto total -> ". $value->total.'<br>'.'<br>';
    }
    ?>
</body>
</html>