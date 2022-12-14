<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
include "conexion-data-base.php";
$sql = "SELECT * FROM actividades";
$resultado = estableceConexion($sql);
while($fila=$resultado->fetch_assoc()):?>
    <div class="card col-10 border-3 border-info mb-3">
        <img class="card-img-top" src="./images/<?php echo $fila["tipo"]?>.jpg">
        <ul class="list-group list-group-flush">
            <li class="list-group-item"><?php echo $fila["titulo"]?></li>
            <li class="list-group-item"><?php echo $fila["ciudad"]?></li>
            <li class="list-group-item"><?php echo $fila["fecha"]?></li>
            <li class="list-group-item"><?php echo $fila["tipo"]?></li>
            <li class="list-group-item"><?php $precio = $fila["gratis"];
                                              $precioGratis = "1";
                                              $precioPago = "2";
                                        if($precio=="1"){
                                            $precioValor = "Gratis";
                                        } elseif($precio=="2") {
                                            $precioValor = "De pago";
                                        } else {
                                            $precio=null;
                                        }
                                        echo $precioValor;?>
            </li>
            <li class="list-group-item"><?php echo $fila["usuario"]?></li>
        </ul>
    </div>
<?php endwhile; ?>
</body>
</html>

