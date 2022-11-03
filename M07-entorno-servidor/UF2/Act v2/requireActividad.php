<?php foreach($_SESSION["actividades"] as $nuevaActividad):
$actividadUnserialize = unserialize($nuevaActividad); ?>

<div class="card col-10 border-3 border-info mb-3">
    <img class="card-img-top" src="./images/<?php echo $actividadUnserialize->tipo?>.jpg">
    <ul class="list-group list-group-flush">
        <li class="list-group-item"><?php echo $actividadUnserialize->titulo?></li>
        <li class="list-group-item"><?php echo $actividadUnserialize->ciudad?></li>
        <li class="list-group-item"><?php echo $actividadUnserialize->fecha?></li>
        <li class="list-group-item"><?php echo $actividadUnserialize->tipo?></li>
        <li class="list-group-item"><?php echo $actividadUnserialize->precio?></li>
    </ul>
</div>
<?php endforeach; ?>