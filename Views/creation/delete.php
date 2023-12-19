<?php

$title = 'Mon Portfolio - Supprimer créations';

// var_dump($list);
// die;
?>
<h1>SUPPRIMER UNE CREATION</h1>
<div>
    <h3>Etes vous sûr de vouloir supprimer la création</h3>

    <a href="index.php?controller=creation&action=index">
        <button name="non" type="submit" class="btn btn-primary">NON</button>
    </a>

    <form action="index.php?controller=creation&action=deleteCreation&id_creation=<?php echo $_GET['id_creation'] ?>" method="post">
        <button name="supprimer" type="submit" class="btn btn-outline-danger" for="danger-outlined">
            SUPPRIMER
        </button>
    </form>


</div>