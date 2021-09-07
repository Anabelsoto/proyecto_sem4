<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hola, es la vista de Venta_detalle</h1>
    <?php
        foreach($venta_Anabel as $value){
                echo"IDproducto -> ". $value->idproducto.'<br>';
                echo"Descripcion -> ". $value->descripcion.'<br>'.'<br>';
        }
    ?>
</body>
</html>