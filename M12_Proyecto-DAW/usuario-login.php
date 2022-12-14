<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Intoduce tus datos</h1>
    <!--
    //------------------------------------------------------//
    #Aquí hay un action
    //------------------------------------------------------//
    -->
    <form action="usuario-acceso.php" method="post">
        <table>
            <tr>
                <td for="correo" class="izq"> Correo: </td>
                <td class="der"><input type="text" name="correo" id="correo"></td>
            </tr>
            <tr>
                <td for="password" class="izq"> Contraseña: </td>
                <td class="der"><input type="password" name="password" id="password"></td>
            </tr>
            <tr>
                <td for="recordar" class="izq"> Recordar Usuario: </td>
                <td class="der"><input type="checkbox" name="recordar" id="recordar"></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" name="enviar" value="Login"></td>
            </tr>
        </table>
    </form>
</body>
</html>