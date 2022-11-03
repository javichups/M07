<?php
    require "realizarConsulta.php";
    //@$mibusqueda=$_GET["buscar"];
    //$mipag=$_SERVER["PHP_SELF"];
    $buscarProductos = new realizarConsulta();
    $array_productos = $buscarProductos->realizarConsulta();
?>
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
        foreach($array_productos as $elemento)
        {
            var_dump($elemento);
 //var_dump muestra los datos de manera interesante
        }
    ?>
</body>
</html>