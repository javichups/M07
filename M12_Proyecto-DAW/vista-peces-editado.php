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
    include "conexion-data-base.php";
    echo "<h1>Funciona 2</h1>";
    $id = $_POST["id"];
    echo $id;
    $nombreComun = $_POST["nombreComun"];
    $nombreCientifico = $_POST["nombreCientifico"];
    $tipoAgua = $_POST["tipoAgua"];
    $tamanoAcuario = $_POST["tamanoAcuario"];
    $temperamento = $_POST["temperamento"];
    $pH = $_POST["pH"];
    $temperatura = $_POST["temperatura"];
    $dieta = $_POST["dieta"];
    $longitud = $_POST["longitud"];
    //FALTA AÑADIR LA FECHA DE MODIFICACIÓN
    //$fecha = new DataTime();
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
    $datos = $base->query("SELECT * FROM listadopecesprovisional WHERE ID = '$id'")->fetchAll(PDO::FETCH_OBJ);
    header("Location: vista-peces.php");
    ?>
</body>
</html>