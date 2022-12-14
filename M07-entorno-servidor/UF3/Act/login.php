<!DOCTYPE html>
<?php
if(isset($_SESSION["usuario"])){
    header("Location: index.php");
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
            <form role="form" method="post" action="usuario-acceso.php">
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
                <div class="form-group row" style="width: 100%; text-align: center; ">
                    <div class="offset-sm-2 col-sm-9">
                        <input type="submit" value="Entrar" name="login" class="btn btn-info">
                    </div>
                </div>
            </form>
            <?php if(isset($_COOKIE["error"])): ?>
                <div class="errorLogin">
                    <?php echo $_COOKIE["error"]; ?>
                    <hr/>
                </div>
            <?php endif; ?>
            <form action="crear-usuario.php" method="post">
                <div class="form-group row" style="width: 100%; text-align: center; ">
                    <div class="offset-sm-2 col-sm-9">
                        <p>¿Todavía no estás registrado?:</p>
                        <input type="submit" value="Registrarse" name="registrarse" class="btn btn-info">
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>