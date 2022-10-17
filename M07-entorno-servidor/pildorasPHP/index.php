<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="style.css">
        <?php
            require ("datosbbdd.php");
            new conectarBaseDatos;
                function realizarConsulta($datos){
                    
                    conectar("localhost","prueba","root","");
                    realizarConsulta($datos);
                }
                function borrarbusqueda(){

                }
        ?>
    </head>
    <body>
        <h1>Realizar búsqueda</h1>
        <div>
            <?php
                @$mibusqueda=$_GET["buscar"];
                $mipag=$_SERVER["PHP_SELF"];
                if($mibusqueda!=NULL){
                    realizarConsulta($mibusqueda);
                    echo ("<form method='get' action=''>
                    <button type='submit' name='volver' value='volver'>Volver atrás</button>"
                    );
                } else {
                    echo ("<form method='get' action=''>
                    <label>Buscar: <input type='text' name='buscar'></label>
                    <button type='submit' name='enviando' value='Buscar'>Buscar</button>"
                    );
                }
            ?>
        </div>
        <br>
        <h1>Añadir registro</h1>
        <div>
            
        </div>
        <br>
    </body>
</html>
