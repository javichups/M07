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
    include "conexion-data-base.php";
    if(!isset($_POST["actualizar"])){
        echo "<h1>Funciona 1</h1>";
        $id = $_GET["id"];
        $datos = $base->query("SELECT * FROM listadopecesprovisional WHERE ID = '$id'")->fetchAll(PDO::FETCH_OBJ); 
    }else{
        if(isset($_POST["id"])){
        echo "<h1>Funciona 2</h1>";
        $id = $_POST["id"];
        $nombreComun = $_POST["nombreComun"];
        $nombreCientifico = $_POST["nombreCientifico"];
        $tipoAgua = $_POST["tipoAgua"];
        $tamanoAcuario = $_POST["tamanoAcuario"];
        $temperamento = $_POST["temperamento"];
        $pH = $_POST["pH"];
        $temperatura = $_POST["temperatura"];
        $dieta = $_POST["dieta"];
        $longitud = $_POST["longitud"];
        echo "<h1>Funciona 3</h1>";
        $sql = "UPDATE listadopecesprovisional SET 
                    ID=:id, NOMBRE_COMUN=:nombreComun, NOMBRE_CIENTIFICO=:nombreCientifico, TIPO_AGUA=:tipoAgua, 
                    TAMANO_ACUARIO=:tamanoAcuario, TEMPERAMENTO=:temperamento, MEDIDAS_PH=:pH, 
                    TEMPERATURA=:temperatura, DIETA=:dieta, LONGITUD=:longitud 
                    WHERE ID = :id";
        $resultado = $base->prepare($sql);
        $resultado->execute(array(":id"=>$id,
                                    ":nombreComun"=>$nombreComun,
                                    ":nombreCientifico"=>$nombreCientifico,
                                    ":tipoAgua"=>$tipoAgua,
                                    ":tamanoAcuario"=>$tamanoAcuario,
                                    ":temperamento"=>$temperamento,
                                    ":pH"=>$pH,
                                    ":temperatura"=>$temperatura,
                                    ":dieta"=>$dieta,
                                    ":longitud"=>$longitud));
        echo "<h1>Funciona 4</h1>";
        $datos = $base->query("SELECT * FROM listadopecesprovisional WHERE ID = '$id'")->fetchAll(PDO::FETCH_OBJ);
        echo "<h1>Funciona 5</h1>"; 
        } else {
            echo "<h1>No funciona 1</h1>";
            $id = $_GET["id"];
            echo $id;
        }
    }
    
    ?>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" name="actualizarDatos" method="POST">
    <table>
        <tr>
            <td>ID:</td>
        </tr>
        <tr>
            <td>
                <label for="id"></label>
                <input type="text" name="id" id="id" value="<?php echo $datos[0]->ID;?>" disabled>
            </td>
        </tr>
        <tr>
            <td>Nombre común:</td>
        </tr>
        <tr>
            <td>
                <label for="nombreComun"></label>
                <input type="text" name="nombreComun" id="nombreComun" value="<?php echo $datos[0]->NOMBRE_COMUN;?>">
            </td>
        </tr>

        <tr>
            <td>Nombre científico:</td>
        </tr>
        <tr>
            <td>
                <label for="nombreCientifico"></label>
                <input type="text" name="nombreCientifico" id="nombreCientifico" value="<?php echo $datos[0]->NOMBRE_CIENTIFICO;?>">
            </td>
        </tr>

        <tr>
            <td>Tipo de agua:</td>
        </tr>
        <tr>
            <td>
                <label for="tipoAgua"></label>
                <input type="text" name="tipoAgua" id="tipoAgua" value="<?php echo $datos[0]->TIPO_AGUA;?>">
            </td>
        </tr>

        <tr>
            <td>Tamaño de acuario ideal:</td>
        </tr>
        <tr>
            <td>
                <label for="tamanoAcuario"></label>
                <input type="text" name="tamanoAcuario" id="tamanoAcuario" value="<?php echo $datos[0]->TAMANO_ACUARIO;?>">
            </td>
        </tr>

        <tr>
            <td>Temperamento:</td>
        </tr>
        <tr>
            <td>
                <label for="temperamento"></label>
                <input type="text" name="temperamento" id="temperamento" value="<?php echo $datos[0]->TEMPERAMENTO;?>">
            </td>
        </tr>

        <tr>
            <td>Medidas pH:</td>
        </tr>
        <tr>
            <td>
                <label for="pH"></label>
                <input type="text" name="pH" id="pH" value="<?php echo $datos[0]->MEDIDAS_PH;?>">
            </td>
        </tr>

        <tr>
            <td>Temperatura:</td>
        </tr>
        <tr>
            <td>
                <label for="temperatura"></label>
                <input type="text" name="temperatura" id="temperatura" value="<?php echo $datos[0]->TEMPERATURA;?>">
            </td>
        </tr>

        <tr>
            <td>Dieta:</td>
        </tr>
        <tr>
            <td>
                <label for="dieta"></label>
                <input type="text" name="dieta" id="dieta" value="<?php echo $datos[0]->DIETA;?>">
            </td>
        </tr>

        <tr>
            <td>Longitud:</td>
        </tr>
        <tr>
            <td>
                <label for="longitud"></label>
                <input type="text" name="longitud" id="longitud" value="<?php echo $datos[0]->LONGITUD;?>">
            </td>
        </tr>
        <tr>
            <td class="bot">
                <input type="submit" name="actualizar" id="actualizar" value="Actualizar">
            </td>
            <td class="bot">
                <a href="vista-peces.php">
                    <input type="button" name="cancel" id="cancel" value="Cancelar">
                </a>
            </td>
        </tr>
    </table>
    <br>
    
</form>
</body>
</html>