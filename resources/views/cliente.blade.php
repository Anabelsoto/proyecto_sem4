<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>
<body>
    <h1>Hola esta es la vista de Clientes</h1>
    <?php
        foreach($clientes as $value){
                echo"Nombres -> " .$value->ape_nom .'<br>';
                echo "sexo -> ".$value->sexo.'<br>'.'<br>';
                
        }
    ?>
    <a class="btn btn-info" href="cliente">Vista cliente</a>
    <a class="btn btn-warning" href="compra_detalle">Vista compraDetalle</a>
    <a class="btn btn-secondary" href="compra">Vista compra</a>
    <br> <br>
    <a class="btn btn-primary" href="producto">Vista producto</a>
    <a class="btn btn-primary" href="proveedor">Vista proveedor</a><br>
    <br> <br>
    <a class="btn btn-success" href="usuario">Vista usuario</a>
    <a class="btn btn-warning" href="venta_detalle">vista VentaDetalle</a>
    <a class="btn btn-secondary" href="venta">Vista  venta </a><br>
</body>
</html>