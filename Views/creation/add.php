<?php



$title = 'Mon Portfolio - Mes créations';
?>

<h1>Ajout de Création</h1>

<form action="#" method="POST" enctype="multipart/form-data">
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Titre</label>
        <input name="title_creation" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Description</label>
        <input name="description_creation" type="text" class="form-control" id="exampleInputPassword1">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Date</label>
        <input name="date_at" type="date" class="form-control" id="exampleInputPassword1">
    </div>

    <div class="input-group">
        <input name="picture" type="file" class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload">

    </div>
    <div>
        <input name="token" type="hidden" id="token" value="<?php echo (isset($_SESSION['token'])) ? ($_SESSION['token']) : NULL; ?>">
    </div>
    <button name="ajouterCrea" type="submit" class="btn btn-primary ">Ajouter</button>

</form>