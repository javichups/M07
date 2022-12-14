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
    $id = $_GET["id"];
    $datos = $base->query("SELECT * FROM listadopecesprovisional WHERE ID = '$id'")->fetchAll(PDO::FETCH_OBJ); 
    ?>
<form action="vista-peces-editado.php" name="actualizarDatos" method="post">
    <table>
        <tr>
            <td>ID:</td>
        </tr>
        <tr>
            <td>
                <label for="id"></label>
                <input type="text" name="muestraTexto" id="muestraTexto" value="<?php echo $datos[0]->ID;?>" disabled>
                <input style="visibility:hidden" type="text" name="id" id="id" value="<?php echo $datos[0]->ID;?>">
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
                <a href="vista-peces-editado.php">
                    <input type="submit" name="actualizar" id="actualizar" value="Actualizar">
            </a>
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