<?php
/* Para cuando se marca el checkbox de RECORDAR USUARIO.*/
if($autenticado==false){
    if(!isset($_COOKIE["nombreUsuario"])){
        include("login.php");
    }
}
//Para cuando queramos dar acceso a alguna funcionalidad/página a un usuario logeado o con la cookie de usuario
if($autentificado==true || isset($_COOKIE["nombreUsuario"])){
}
?>