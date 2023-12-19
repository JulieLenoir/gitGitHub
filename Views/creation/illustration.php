<?php

$title = 'Mon Portfolio - Affichage créations';

// var_dump($list);
// die;
?>
<h1 style="text-align:center">AFFICHAGE DES CREATIONS</h1>

<div class="d-flex justify-content-center">
    <div class="card text-center" style="width: 18rem;">
        <img src="<?php echo $list->picture ?>" class="card-img-top" alt="">
        <div class="card-body">
            <h5 class="card-title"><?php echo $list->title_creation ?></h5>
            <p class="card-text"><?php echo $list->description_creation ?>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item"><?php echo $list->date_at ?></li>

        </ul>

    </div>
</div>