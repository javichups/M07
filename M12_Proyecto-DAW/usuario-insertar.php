<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $correo = $_POST["correo"];
    $password = $_POST["password"];
    $passCifrado = password_hash($password, PASSWORD_DEFAULT, array("cost"=>12));
    try{
        //------------------------------------------------------//
        #Aquí hay un action
        //------------------------------------------------------//
        include "conexion-data-base.php";
        $sql="INSERT INTO USUARIO (CORREO, PASSWORD) VALUES (:correo, :password)";
        $resultado=$base->prepare($sql);
        $resultado->execute(array(":correo"=>$correo, ":password"=>$passCifrado));
        echo "Registro insertado";
        $resultado->closeCursor();

    } catch (Exception $e){
        echo "Ha ocurrido un error: ",  $e->getMessage(), "\n";
    } finally {
        $base=null;
    }
    ?>
    
</body>
</html>