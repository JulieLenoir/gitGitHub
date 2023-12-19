<?php
$title = 'Mon Portfolio - Identification' ?>

<form action="index.php?controller=user&action=identification" method="post">
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Nom</label>
        <input name="login" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Mot de passe</label>
        <input name="password" type="password" class="form-control" id="exampleInputPassword1">
    </div>

    <button name="valider" type="submit" class="btn btn-primary">Submit</button>
</form>