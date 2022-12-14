<?php
session_start();
if(!isset($_COOKIE["usuario"]))
{
   header("Location: login.php");
   exit();
}
if(!isset($_SESSION["actividades"]))
{
    $_SESSION["actividades"] = array();
}
if(isset($_POST["crearActividad"]))
{
    include "actividad.php";
    $nuevaActividad = new Actividad($_POST["titulo"], $_POST["tipo"], $_POST["fecha"], $_POST["ciudad"], $_POST["precio"]);
    array_push($_SESSION["actividades"], serialize($nuevaActividad));
}
?>