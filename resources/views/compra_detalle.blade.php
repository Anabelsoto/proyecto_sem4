<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>hola es la sección del detalle de Compra</h2>
    <?php
   foreach($compraAna as $value){
        echo $value->cantidad.'<br>';
    }
    ?>
</body>
</html>