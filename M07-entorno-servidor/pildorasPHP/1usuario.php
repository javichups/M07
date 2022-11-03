<?php
    
    require ("datosbbdd.php");
    $conexionPOO = new conectarBaseDatos();
    $conectar = $conexionPOO->conectar();
        //------------------Proteccion de las variables usuario y contraseña contra inyeccionSQL------------------//
    @$usuario=mysqli_real_escape_string($conectar, $_GET["usu"]);
    @$contraseña=mysqli_real_escape_string($conectar, $_GET["con"]);
?>