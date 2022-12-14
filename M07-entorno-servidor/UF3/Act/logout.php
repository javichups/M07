<?php
    if(!isset($_SESSION)){
        session_start();
    }
    setcookie("usuario", $_SESSION["usuario"], time()-1);
    session_unset();
    session_destroy();
    session_write_close();
    setcookie(session_name(),'',0,'/');
    header("Location: login.php");
?>