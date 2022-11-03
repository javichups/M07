<?php
session_start();
if(!isset($_SESSION["usuario"]))
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
    $nuevaActividad = new Actividad($_POST["titulo"], $_POST["tipo"], $_POST["fecha"], $_POST["ciudad"], $_POST["precio"]);
    array_push($_SESSION["actividades"], serialize($nuevaActividad));
}
?>