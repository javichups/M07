<?php
$autenticado = false;
try {
    /*
    include "conexion-data-base.php";
    $stmt = $base->prepare("SELECT * FROM USUARIO WHERE CORREO = ?");
$stmt->execute([$_POST['correo']]);
$user = $stmt->fetch();

if ($user && password_verify($_POST['password'], $user['Password']))
{
    echo "valid!";
} else {
    echo "invalid";
}*/
    
    $correo = htmlentities(addslashes($_POST["correo"]));
    $password = htmlentities(addslashes($_POST["password"]));
    //------------------------------------------------------//
    #Aquí hay un include
    //------------------------------------------------------//
    include "conexion-data-base.php";
    $sql = "SELECT * FROM USUARIO WHERE CORREO = :correo";
    $resultados = $base->prepare($sql);
    $resultados->execute(array(":correo" => $correo));
    $contador = 0;
/*
    $registro = $resultados->fetch(PDO::FETCH_ASSOC);
    $passwordHash = $registro["Password"];
*/
    while ($registro = $resultados->fetch(PDO::FETCH_ASSOC)) {
        echo "wey";
        if (password_verify($password, $registro["Password"])) {
            echo "Wey";
            $contador++;
        }
    }
    if ($contador != 0) {
        $autenticado = true;
        echo "Usuario logeado!";
        if (isset($_POST["recordar"])) {
            setcookie("nombreUsuario", $_POST["correo"], time() + 86400);
        }
        echo "<br>Hola, " .  $_COOKIE["nombreUsuario"] . "<br>";
        //------------------------------------------------------//
        #Aquí hay un href
        //------------------------------------------------------//
        echo "<a href='usuarioExit.php'>Cerrar sesión</a>";
    } else {
        echo "nada";
        /*
        header("location:usuario-login.php");
        /*Falta enviar error: Usuario o contraseña incorrectos*/
    }
} catch (Exception $e) {
    echo "Ha ocurrido un error: ",  $e->getMessage(), "\n";
}
?>