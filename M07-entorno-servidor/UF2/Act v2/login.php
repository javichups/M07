<!DOCTYPE html>
<?php
session_start();
$error = "";
if(isset($_POST["login"]))
{
    if($_POST["usuario"] == "ifp" && $_POST["password"] == "2021")
    {
        $_SESSION["usuario"] = $_POST["usuario"];
        header("Location: index.php");
        exit();
    }
    else
    {
        $error = "El usuario o la contraseña no son correctos";
    }
}
?>
<html lang="es">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384">
    <link rel="stylesheet" href="styles.css">
    <title>Login</title>
</head>
<body>
    <div class="row justify-content-center formulario">
        <div class="card col-5 border-3 border-info mb-3 tit" style="width: 20px; padding-top: 60px;">
            <form role="form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
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
                        <input type="submit" value="Entrar" name="login" class="btn btn-info">
                    </div>
                </div>
            </form>
            <div>
                <?php echo $error; ?>
            </div>
        </div>
    </div>
</body>
</html>