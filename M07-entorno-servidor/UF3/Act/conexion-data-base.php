<?php
function estableceConexion($sql){
    $base = new mysqli("localhost", "root", "", "ifpdb");
    if($base->connect_errno){
        echo "Ha ocurrido un error: " .  $base->connect_errno . "\n";
    }
    $base->set_charset("utf8");
    $resultado = $base->query($sql);
    if($base->errno){
        die($base->error);
    }
    return $resultado;
    
}

try{
    $base = new PDO ("mysql:host=localhost; dbname=ifpdb", "root", "");
    $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $base->exec("SET CHARACTER SET UTF8");
} catch (Exception $e) {
    die("Ha ocurrido un error: " .  $e->getMessage() . "\n");
}
?>