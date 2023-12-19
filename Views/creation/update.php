<?php

$title = 'Mon Portfolio - Modifier créations';


// var_dump($this->request->execute);
// die;
?>
<h1>MODIFIER UNE CREATION</h1>

<form action="index.php?controller=creation&action=updateValidation&id_creation=<?php echo $list->id_creation ?>" method="post">
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Titre</label>
        <input name="title_creation" type="text" class="form-control" value="<?php echo $list->title_creation ?>">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Description</label>
        <input name="description_creation" type="text" class="form-control" value="<?php echo $list->description_creation ?>">
    </div>
    <!-- <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Date</label>
        <input name="date_at" type="date" value="">
    </div> -->

    <!-- <div class="input-group">
        <input name="picture" type="file" class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
        <button class="btn btn-outline-secondary" type="button" id="inputGroupFileAddon04">ok</button>
    </div> -->

    <button name="valider" type="submit" class="btn btn-primary">Modifier</button>


</form>