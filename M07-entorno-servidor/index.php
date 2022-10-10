<?php require "actividad.php"; ?>
<?php
if(isset($_POST["crearActividad"]) ||
$_SERVER["REQUEST_METHOD"] == "POST")
{
    $actividad = new Actividad($_POST["titulo"], 
                                $_POST["tipo"], 
                                $_POST["fecha"], 
                                $_POST["ciudad"], 
                                $_POST["precio"]);
}

?>
<html>
    <head>
        <title>Hola!</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384">
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
        <div class="row justify-content-center titulo">
            <div class="card col-10 border-3 border-info mb-3 tit">
            <h1>Formulario</h1>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-5">
                <?php include "requireActividad.php" ?>
            </div> 
            <div class="card col-5 border-3 border-info justify-content-center">
                <?php include "formulario.html" ?>
            </div> 
        </div>
              
    </body>
</html>