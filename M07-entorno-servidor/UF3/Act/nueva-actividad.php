<?php
try{
    $titulo = htmlentities(addslashes($_POST["titulo"]));
    echo $titulo;
    $fecha = htmlentities(addslashes($_POST["fecha"]));
    echo $fecha;
    $ciudad = htmlentities(addslashes($_POST["ciudad"]));
    echo $ciudad;
    $tipo = htmlentities(addslashes($_POST["tipo"]));
    echo $tipo;
    $precio = htmlentities(addslashes($_POST["precio"]));
    echo $precio;
    /*$price;
    if ($precio=0){
        $price = "Gratis";
    } elseif ($precio=1){
        $price = "De pago";
    } */
    $usuario = htmlentities(addslashes($_COOKIE["usuario"]));
    echo $usuario;
    include "conexion-data-base.php";
    $sql = "INSERT INTO actividades (titulo, ciudad, tipo, fecha, gratis, usuario) VALUES ('$titulo', '$ciudad', '$tipo', '$fecha', $precio, '$usuario')";
    $insert = estableceConexion($sql);
/*
    $resultado->bindValue(":titulo", $titulo);
    $resultado->bindValue(":ciudad", $ciudad);
    $resultado->bindValue(":tipo", $tipo);
    $resultado->bindValue(":fecha", $fecha);
    $resultado->bindValue(":precio", $precio);
    $resultado->bindValue(":usuario", $usuario);
    $resultado->execute();*/
    $base = null;
    header("Location: index.php");
} catch (Exception $e) {
    die("Ha ocurrido un error: " .  $e->getMessage() . "\n");
}
?>-->