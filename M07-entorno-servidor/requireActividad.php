<?php if(isset($actividad)): ?>

<div class="card col-10 border-3 border-info mb-3">
    <img class="card-img-top" src="./images/<?php echo $actividad->tipo?>.jpg">
    <ul class="list-group list-group-flush">
        <li class="list-group-item"><?php echo $actividad->titulo?></li>
        <li class="list-group-item"><?php echo $actividad->ciudad?></li>
        <li class="list-group-item"><?php echo $actividad->fecha?></li>
        <li class="list-group-item"><?php echo $actividad->tipo?></li>
        <li class="list-group-item"><?php echo $actividad->precio?></li>
    </ul>
</div>

<?php endif; ?>