<?php
try{
    $base = new PDO ("mysql:host=localhost; dbname=pecera", "root", "");
    $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $base->exec("SET CHARACTER SET UTF8");
} catch (Exception $e) {
    die("Ha ocurrido un error: " .  $e->getMessage() . "\n");
}
?>