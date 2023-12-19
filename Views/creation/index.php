<?php
// index.php - porte le nom de la méthode index dans CreationController
// var_dump($list);


$title = 'Mon Portfolio - Mes créations';
?>

<h1>Liste de mes créations</h1>

<a href="index.php?controller=creation&action=add"><button type="button" class="btn btn-primary">Ajouter une création</button></a>
<table class="table">

    <tr>
        <th scope="col">#</th>
        <th scope="col">Title</th>
        <th scope="col">Description</th>
        <th scope="col">Date</th>
        <th scope="col">picture</th>

    </tr>



    <?php
    foreach ($list as $value) {
        // var_dump($list);
        // die;
    ?>
        <tr>
            <td><?php echo $value->id_creation ?> </td>
            <td><?php echo $value->title_creation ?> </td>
            <td><?php echo $value->description_creation ?></td>
            <td><?php echo $value->date_at ?></td>
            <td><?php echo $value->picture ?></td>

            <td>
                <a href="index.php?controller=creation&action=illustration&id_creation=<?php echo $value->id_creation ?>">
                    <i class="bi bi-eye-fill"></i>
                </a>
            </td>


            <td>
                <a href="index.php?controller=creation&action=update&id_creation=<?php echo $value->id_creation ?>">
                    <i class="bi bi-pencil-fill"></i>
                </a>
            </td>


            <td>
                <a href="index.php?controller=creation&action=delete&id_creation=<?php echo $value->id_creation ?>">
                    <i class="bi bi-trash3-fill"></i>
                </a>
            </td>

        </tr>

    <?php
    } ?>
</table>