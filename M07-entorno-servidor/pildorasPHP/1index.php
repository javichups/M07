<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="style.css">
        <?php
            
            
            
        ?>
    </head>
    <body>
        <h1>Realizar búsqueda</h1>
        <div>
            <?php
                require ("datosbbdd.php");
                $conexionPOO = new conectarBaseDatos();
        
                @$mibusqueda=$_GET["buscar"];
                $mipag=$_SERVER["PHP_SELF"];
                if($mibusqueda!=NULL){
                    $conexionPOO->realizarConsulta($mibusqueda);
                    echo ("<table border=0 align='center'><form method='get' action=''>
                    <button type='submit' name='volver' value='volver'>Volver atrás</button></table>"
                    );
                } else {
                    echo ("<form method='get' action='' border=0 align='center'>
                    <label>Buscar: <input type='text' name='buscar'></label>
                    <button type='submit' name='enviando' value='Buscar'>Buscar</button>"
                    );
                }
            ?>
        </div>
        <br>
        <h1>Añadir registro</h1>
        <div>
            <?php
                echo ("<form name='form1' method='get' action=''>
                    <table border=0 align='center'>
                        <tr>
                            <td>Sección artículo</td>
                            <td><label for='secArt'></label><input type='text' name='secArt' id='secArt'></td>
                        </tr>
                        <tr>
                            <td>Nombre artículo</td>
                            <td><label for='nomArt'></label><input type='text' name='nomArt' id='nomArt'></td>
                        </tr>
                        <tr>
                            <td>Fecha</td>
                            <td><label for='fechArt'></label><input type='date' name='fechArt' id='fechArt'></td>
                        </tr>
                        <tr>
                            <td>País origen</td>
                            <td><label for='paisArt'></label><input type='text' name='paisArt' id='paisArt'></td>
                        </tr>
                        <tr>
                            <td>Precio</td>
                            <td><label for='precioArt'></label><input type='text' name='precioArt' id='precioArt'></td>
                        </tr>
                        
                    </table>
                    <br>
                    <div border=0 align='center'>
                    <button type='submit' name='crear' value='crear'>Crear</button>
                    <button type='submit' name='eliminar' value='eliminar'>Eliminar</button>
                    </div>
                </form>");
                @$seccion = $_GET["secArt"];
                @$nombrearticulo = $_GET["nomArt"];
                @$fecha = $_GET["fechArt"];
                @$paisorigen = $_GET["paisArt"];
                @$precio = $_GET["precioArt"];

                if(isset($_GET["crear"])){
                    $conexionPOO = new conectarBaseDatos();
                    $conexionPOO->insertarRegistro($seccion, $nombrearticulo, $fecha, $paisorigen, $precio);
                }
                
            ?>
        </div>
        <br>
        <h1>Actualizar registro</h1>
        <div>
            <?php
                echo ("<form name='form1' method='get' action=''>
                    <table border=0 align='center'>
                        <tr>
                            <td>Nombre artículo antiguo</td>
                            <td><label for='nombreArticuloAntiguo'></label><input type='text' name='nombreArticuloAntiguo' id='nombreArticuloAntiguo'></td>
                        </tr>
                        <tr>
                            <td>Nombre artículo nuevo</td>
                            <td><label for='nomArt'></label><input type='text' name='nomArt' id='nomArt'></td>
                        </tr>
                    </table>
                    <br>
                    <div border=0 align='center'>
                    <button type='submit' name='actualizar' value='actualizar'>Actualizar</button>
                    </div>
                </form>");
                @$nombreArticuloAntiguo = $_GET["nombreArticuloAntiguo"];
                @$nombrearticulo = $_GET["nomArt"];

                if(isset($_GET["actualizar"])){
                    $conexionPOO = new conectarBaseDatos();
                    $conexionPOO->actualizarRegistro( $nombrearticulo, $nombreArticuloAntiguo);
                }
            ?>
        </div>
        <br>
        <h1>Eliminar registro</h1>
        <div>
            <?php
                echo ("<form name='form1' method='get' action=''>
                    <table border=0 align='center'>
                        <tr>
                            <td>Nombre artículo</td>
                            <td><label for='nomArt'></label><input type='text' name='nomArt' id='nomArt'></td>
                        </tr>
                    </table>
                    <br>
                    <div border=0 align='center'>
                    <button type='submit' name='eliminar' value='eliminar'>Eliminar</button>
                    </div>
                </form>");
                @$nombrearticulo = $_GET["nomArt"];

                if(isset($_GET["eliminar"])){
                    $conexionPOO = new conectarBaseDatos();
                    $conexionPOO->eliminarRegistro($nombrearticulo);
                }
            ?>
        </div>
    </body>
</html>
