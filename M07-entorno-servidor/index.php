<p>Esto es un cambio</p>
<!--
<html>
    <head>
        <title>Hola!</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
        <h1>
            <?php
                if(isset($_GET["nombre"]))
                    echo "El nombre recibido es: ".$_GET["nombre"];
                else
                    echo "No se ha recibido el nombre"
            ?>
            <br>
        </h1>
        <script>
            document.writeln("Este es mi primer código javascript")
        </script>
        <div class="col-4 border-3 border-info justify-content-center">
            <?php include "formulario.html"?>
        </div>
        <form role="form" method="post" action="index.php">
            <input type="text" id="inputTitulo" name="titulo" placeholder="Titulo">
            <input type="date" id="inputFecha" name="fecha" placeholder="Fecha">
            <select name="tipo" id="selectTipo">
                <option value="" selected>Selecciona el tipo</option>
                <option value="Música">Música</option>
                <option value="Cine">Cine</option>
                <option value="Comida">Comida</option>
            </select>
            <input type="radio" name="precio" id="precioGratis" value="Gratis" checked>
            <label for="precioGratis">
                Gratis
            </label>
            <input type="radio" name="precio" id="precioDePago" value="De pago">
            <label for="precioDePago">
                De Pago
            </label>
            <input type="submit" value="Crear Actividad" name="crearActividad">
        </form>
        <br>-->
        <?php
            /*if(isset($_POST["crearActividad"]))
            {
                echo $_POST["titulo"]."<br/>";
                echo $_POST["fecha"]."<br/>";
                echo $_POST["tipo"]."<br/>";
                echo $_POST["precio"]."<br/>";
            }*/
        ?><!--
    </body>
</html>
-->
<!DOCTYPE html>
<html>
    <head>
        <title>Actividades</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
        <div class="row justify-content-center">
            <div>
                <title id="titulo">
                    Actividades Culturales Cataluña
                </title>
                <div class="col-4 border-3 border-info justify-content-center">
                    <?php include "formulario.html"?>
                </div>
            </div>
        </div>       
    </body>
</html>