<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hola esta es la vista de Clientes</h1>
    <?php
        foreach($clientes as $value){
                echo $value->sexo.'<br>';
        }
    ?>
</body>
</html>