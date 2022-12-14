<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $autenticado = false;
    try {
        session_start();
        $login = htmlentities(addslashes($_POST["usuario"]));
        $password = htmlentities(addslashes($_POST["password"]));
        include "conexion-data-base.php";
        $sql = "SELECT * FROM usuarios WHERE nombre = '$login'";
        $resultado = estableceConexion($sql);
        $base = null;
        if($resultado->num_rows >= 1){
            $fila = $resultado->fetch_assoc();
            if ($password == $fila["contraseña"]) {
                if (isset($_COOKIE['usuario'])) {
                    setcookie("usuario", $_POST["usuario"], time()-1);
                }
                setcookie("usuario", $_POST["usuario"], time() + 86400);
                if(isset($_COOKIE["error"])){
                    setcookie("error", $error, time()-1);
                }
                header("Location: index.php");
            } else {
                $error = "El usuario o la contraseña introducidos no son correctos";
                setcookie("error", $error);
                header("location:login.php");
            }
        } else {
            $error = "El usuario o la contraseña introducidos no son correctos";
            setcookie("error", $error);
            header("location:login.php");
        }
    } catch (Exception $e) {
        echo "Ha ocurrido un error: ",  $e->getMessage(), "\n";
    }
    ?>
</body>

</html>