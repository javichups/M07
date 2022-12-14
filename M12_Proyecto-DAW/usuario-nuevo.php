<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Regristrarse: </h1>
    <!--
    //------------------------------------------------------//
    #Aquí hay un action
    //------------------------------------------------------//
    -->
    <form action="usuario-insertar.php" method="post">
        <table>
            <tr>
                <td>Correo: </td>
                <td><input type="text" name="correo"></td>
            </tr>
            <tr>
                <td>Password: </td>
                <td><input type="password" name="password"></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" name="enviar" value="Crear"></td>
            </tr>
        </table>

    </form>
</body>
</html>