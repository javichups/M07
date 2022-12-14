<!DOCTYPE html>
<?php
include "conexion-data-base.php";
$error="";
if(isset($_POST["registro"])){
    try{
        $nombre = $_POST["nombre"];
        $correo = $_POST["correo"];
        $usuario = $_POST["usuario"];
        $password = $_POST["password"];
        $passCifrado = password_hash($password, PASSWORD_DEFAULT, array("cost"=>12));
        $sql="INSERT INTO usuarios (ID, NOMBRE, CONTRASEÑA, CORREO) VALUES (:usuario, :nombre, :correo,  :password)";
        $resultado=$base->prepare($sql);
        $resultado->execute(array("usuario"=>$usuario, ":nombre"=>$nombre, ":correo"=>$correo, ":password"=>$passCifrado));
        $_SESSION["usuario"] = $_POST["usuario"];
        setcookie("usuario", $_POST["usuario"], time()+(84600*30));
        header("Location: index.php");
    } catch (Exception $e) {
        $error="Ha ocurrido un error: " .  $e->getMessage() . "\n";
    }
}

if(isset($_COOKIE["usuario"])){
    header("Location: index.php");
} else {
    session_start();
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384">
    <link rel="stylesheet" href="styles.css">
    <title>Nuevo usuario</title>
</head>
<body>
    <div class="row justify-content-center formulario">
        <div class="card col-5 border-3 border-info mb-3 tit" style="width: 20px; padding-top: 60px;">
            <form role="form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                <div class="form-group row">
                    <label for="inputNombre" class="col-sm-3 col-form-label">Nombre</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" placeholder="Nombre" id="inputNombre" name="nombre">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputCorreo" class="col-sm-3 col-form-label">Correo</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" placeholder="Correo" id="inputCorreo" name="correo">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputUsuario" class="col-sm-3 col-form-label">Usuario</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" placeholder="Usuario" id="inputUsuario" name="usuario">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-3 col-form-label">Contraseña</label>
                    <div class="col-sm-8">
                        <input type="password" class="form-control" placeholder="Contraseña" id="inputPassword" name="password">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="offset-sm-2 col-sm-9">
                        <input type="submit" value="Registrarse" name="registro" class="btn btn-info">
                    </div>
                </div>
            </form>
            <div>
                <?php echo $error; ?>
            </div>
            <form action="login.php" method="post">
                <div class="form-group row">
                    <div class="offset-sm-2 col-sm-9">
                        <p>¿Ya estás registrado?:</p>
                        <input type="submit" value="Entrar" name="logearse" class="btn btn-info">
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>