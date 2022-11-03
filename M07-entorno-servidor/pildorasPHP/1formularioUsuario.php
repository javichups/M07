<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        require ("usuario.php");
        @$mibusqueda=$_GET["eliminar"];
        $mipag=$_SERVER["PHP_SELF"];
        if($mibusqueda!=NULL){
            $conexionPOO->eliminarUsuario($usuario,$contraseña);
            echo ("<table border=0 align='center'><form method='get' action=''>
            <button type='submit' name='volver' value='volver'>Volver atrás</button></table>"
            );
        } else {
            echo ("<form method='get' action='' border=0 align='center'>
            <label>Nombre: <input type='text' name='usu'></label>
            <label>Contraseña: <input type='text' name='con'></label><br><br>
            <button type='submit' name='eliminar' value='eliminar'>Buscar</button>"
            );
        }
    ?>
</body>
</html>