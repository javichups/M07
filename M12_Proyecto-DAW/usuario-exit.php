<?php
session_start();
session_destroy();
    //------------------------------------------------------//
    #Aquí hay un location
    //------------------------------------------------------//
header("location:usuario-login.php");
?>