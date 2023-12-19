<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="styles.css" rel="stylesheet" />
    <title><?= $title ?> </title>
</head>

<body>
    <header>
        <h1 class='text-center'>MON PORTFOLIO</h1>

    </header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid"> <a class="navbar-brand" href="#">
                <img src="../public/images/magus_no_bg.png alt=" Bootstrap" width="30" height="24">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php?controller=home&action=index">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?controller=creation&action=index">Mes Créations</a>
                    </li>
                    <li class=" nav-item">
                        <a class="nav-link" href="index.php?controller=user&action=login">Me connecter</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main>
        <?php if (isset($_SESSION['acces'])) {
            echo 'Bonjour ' . $_SESSION['acces'];
        ?><button type="button" class="btn btn-outline-success"><a href="index.php?controller=user&action=logout"> Se deconnecter</button></a><?php

                                                                                                                                            } ?>
        <?= $content ?>
    </main>


    <footer>
        <h6 class="text-center">Mon Portfolio Copiright © 2023</h6>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>