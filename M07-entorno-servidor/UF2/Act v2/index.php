<?php include "actividad.php"; ?>
<?php include "session.php";?>
<?php
if(@$_POST["logout"]){
    return include "logout.php";
}
?>
<html>
    <head>
        <title>Hola!</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384">
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
        <div class="form-group logout">
            <div id="user" class="btn btn-primary">
            <?php echo $_SESSION["usuario"]?>
            </div>
            <form id="exit" role="form" method="post">
                <div class="offset-sm-2 col-sm-10 float-rigth">
                <input type="submit" value="Logout" name="logout" class="btn btn-info">
                </div>
            </form>
        </div>
        <div class="row justify-content-center titulo">
            <div class="card col-10 border-3 border-info mb-3 tit">
            <h1>Formulario</h1>
            </div>
        </div>
        <div class="row justify-content-center formulario">
            <div class="col-5">
                <?php include "requireActividad.php" ?>
            </div> 
            <div class="card col-5 border-3 border-info justify-content-center form">
                <?php include "formulario.html" ?>
            </div> 
        </div>
    </body>
</html>