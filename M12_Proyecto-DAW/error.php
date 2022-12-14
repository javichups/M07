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
    date_default_timezone_set('Europe/Madrid');
    $horaActual = getdate();
    print_r ($horaActual);
    /*
    $array = [$horaActual["wday"], $horaActual["mon"], $horaActual["year"]];
    $fecha = $horaActual["mday"] . $horaActual["mon"] . $horaActual["year"];
    
    print_r($array);
    */
    $fecha = $horaActual[0];

    $date = new DateTime();
    $estedia = $date->setTimestamp($fecha);
    echo $estedia;
    date_parse($timeArray);


    $timeArray = array($horaActual["wday"], $horaActual["mon"], $horaActual["year"]);
    $dateTime = new DateTime(printf( "%d-%d-%d", $timeArray[0],$timeArray[1],$timeArray[2] ));
    echo $dateTime->format('Y-m-d');


    
    /*// get raw date
    $date = get_field('event_date', false, false);
// make date object
    $date = new DateTime($date);
    echo $date->format('M');
    echo "<br>";
    $date = new DateTime("d-m-y h:i:s");
    echo $date;*/
    ?>
</body>
</html>