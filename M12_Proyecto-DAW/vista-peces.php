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
    $registros=$base->query("SELECT ID, NOMBRE_COMUN, NOMBRE_CIENTIFICO, TIPO_AGUA, TAMANO_ACUARIO FROM listadopecesprovisional")->fetchAll(PDO::FETCH_OBJ);
    if(isset($_POST["crear"])){
        $numeroId = $_POST["numeroId"];
        $nomComunAdd = $_POST["nomComunAdd"];
        $nomCientiAdd = $_POST["nomCientiAdd"];
        $tipoAguaAdd = $_POST["tipoAguaAdd"];
        $tamanoAcuarioAdd = $_POST["tamanoAcuarioAdd"];
        $sql="INSERT INTO listadopecesprovisional (ID, NOMBRE_COMUN, NOMBRE_CIENTIFICO, TIPO_AGUA, TAMANO_ACUARIO) VALUES (:numeroId, :nomComunAdd, :nomCientiAdd, :tipoAguaAdd, :tamanoAcuarioAdd)";
        $resultado=$base->prepare($sql);
        $resultado->execute(array("numeroId"=>$numeroId, ":nomComunAdd"=>$nomComunAdd, ":nomCientiAdd"=>$nomCientiAdd, ":tipoAguaAdd"=>$tipoAguaAdd, ":tamanoAcuarioAdd"=>$tamanoAcuarioAdd));
        header("Location: vista-peces.php");
    }
    ?>
    <table align="center">
        <tr>
            <td class="id">ID</td>
            <td class="nombreComun">Nombre común</td>
            <td class="nombreCientifico">Nombre científico</td>
            <td class="tipoAgua">Tipo de agua</td>
            <td class="tamanoAcuario">Tamaño del acuario</td>
            <td class="sin">&nbsp;</td>
            <td class="sin">&nbsp;</td>
            <td class="sin">&nbsp;</td>
        </tr>
        <?php foreach($registros as $especiePez): ?>
            <?php $numeroId = $especiePez->ID; ?>
        <tr>
            <td><?php echo $especiePez->ID?></td>
            <td><?php echo $especiePez->NOMBRE_COMUN?></td>
            <td><?php echo $especiePez->NOMBRE_CIENTIFICO?></td>
            <td><?php echo $especiePez->TIPO_AGUA?></td>
            <td><?php echo $especiePez->TAMANO_ACUARIO?></td>
            <td class="bot">
                <a href="vista-peces-borrar.php?id=<?php echo $especiePez->ID; ?>">
                    <input type="button" name="del" id="del" value="Borrar">
                </a>
            </td>
            <td class="bot">
                <a href="vista-peces-editar.php?id=<?php echo $especiePez->ID; ?>">
                <input type="button" name="up" id="up" value="Actualizar">
                </a>
            </td>
        </tr>
        <?php endforeach; ?>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <tr>
                <input style="visibility:hidden" type="text" name= "numeroId" value="<?php echo $numeroId+=1; ?>">
                <td><input type="text" name= "numeroIdDisabled" value="<?php echo $numeroId++; ?>" disabled size="1"></td>
                <td><input type="text" name="nomComunAdd"></td>
                <td><input type="text" name="nomCientiAdd"></td>
                <td><input type="text" name="tipoAguaAdd"></td>
                <td><input type="text" name="tamanoAcuarioAdd"></td>
                <td class="bot"><input type="submit" name="crear" id="crear" value="Insertar"></td>
            </tr>
        </form>
    </table>
    <p>&nbsp;</p>
</body>
</html>