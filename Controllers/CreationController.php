<?php
include '../Models/CreationModel.php';
// contient la class qui comprend les méthodes de requetes
include '../Entities/Creation.php';
include '../Core/Token.php';

// ON RENVOIT TOUJOURS VERS UNE VUE AVEC &this->render
class CreationController extends Controller
{

    // METHODE POUR AFFICHER TOUTES LES CREATIONS
    public function index()
    {
        $model = new CreationModel();
        $list = $model->findAll();
        // PENSER A STOCKER LA METHODE DANS UNE VARIABLE
        // var_dump($list);
        $this->render('creation/index', ['list' => $list]);
        // méthode render qui est expliqué dans le controller 
        // : lié au include 
        // include dirname(__DIR__) . '/Views/' . $path . '.php';
        // $content = ob_get_clean();
        // ob_get_clean - libère les datas stockées 
        // include dirname(__DIR__) . '/Views/base.php';
        // donc render au même niveau 
    }


    // METHODE POUR AFFICHAGE ET TRAITEMENT DU FORMULAIRE 
    public function add()
    {

        Token::tokenGenerate();
        // $token = new Token;
        // $token->tokenGenerate();
        // var_dump($_SESSION['token']);

        // RECUPERATION EN POST DES DONNEES DU FORMULAIRE VIEWS/ADD
        $title_creation = ($_POST['title_creation']) ?? '';
        $description_creation = ($_POST['description_creation']) ?? '';
        // reprend l'objet de la classe mère 
        $date_at = ($_POST['date_at']) ?? '';
        $validerCrea = isset($_POST['ajouterCrea']);
        // $token = isset($_POST['token']);

        // CONDITION SI VAR PAS VIDE ALORS J'ALIMENT LES PROPRIETES POUR ENSUITE.... (1)
        if ($validerCrea) {
            // var_dump($_POST['token']);
            // var_dump($_SESSION['token']);
            // die;
            if (Token::validateToken() == true) {
                $creation = new Creation();
                move_uploaded_file($_FILES['picture']['tmp_name'], 'images/' . $_FILES['picture']['name']);
                $picture = 'images/' . $_FILES['picture']['name'];
                $creation->setTitle_creation($this->protectedValues($title_creation));
                $creation->setDescription_creation($description_creation);
                $creation->setDate_at($date_at);
                $creation->setPicture($picture);

                // ... APPELER METHODE ADD QUI EST DANS CREATION MODELE = REQUETE AJOUT 
                $creationAjout = new CreationModel();
                $creationAjout->add($creation);
                // on fait passer l'objet que l'on a alimenté avec les setters

                // var_dump($creationAjout->add($creation));
                // die;

                // $this->render('creation/index');
                $this->render('creation/add');
            } else {

                echo 'recommence';
            }
            // var_dump($creation);
        } else {
            $this->render('creation/add');
        }
    }


    // METHODE POUR AFFICHAGE DUNE CREATION 
    public function illustration()
    {
        $id_creation = $_GET['id_creation'] ?? '';


        // var_dump($id_creation);
        // die;

        $creation = new Creation();
        $creation->setId_creation($id_creation);


        // var_dump($creation);
        // die;

        $creationAjout = new CreationModel();
        $affichageCreation = $creationAjout->illustration($creation);


        $this->render('creation/illustration', ['list' => $affichageCreation]);
    }

    // METHODE POUR AFFICHER LE FORMULAIRE EN FCT DE L'ID PUIS MODIFIER UNE CREATION 
    public function update()
    {

        // RECUPERATION EN POST DES DONNEES DU FORMULAIRE VIEWS/ADD
        $id_creation = $_GET['id_creation'] ?? '';
        $creation = new Creation();
        $creation->setId_creation($id_creation);


        $affichageUpdate = new CreationModel();
        $affichageUpdateCreation = $affichageUpdate->illustration($creation);
        $this->render('creation/update', ['list' => $affichageUpdateCreation]);

        // var_dump($_POST);
        // die;

        // } else {
        // $affichageUpdate = $updateCreation->illustration($creation);
        // $this->render('creation/update', ['list' => $affichageUpdate]);
        // 1 RECUPERATION ID EN GET POUR AFFICHER FORMULAIRE DE UPDATE REUTILISATION DE LA METHODE ILLUSTRATION
        // QUI UTILISE REQUETE AFFICHAGE
    }


    public function updateValidation()
    {


        $id_creation = $_GET['id_creation'] ?? '';

        // var_dump($id_creation);
        // die;
        // $delete = $_POST['valider'] ?? '';
        $title_creation = $_POST['title_creation'] ?? '';
        $description_creation = $_POST['description_creation'] ?? '';
        // var_dump($title_creation);
        // die;

        $creation = new Creation();
        $creation->setId_creation($id_creation);
        $creation->setTitle_creation($title_creation);
        $creation->setDescription_creation($description_creation);


        $updateCreation = new CreationModel();
        $updateCreation->updateCreation($creation);

        $this->render('creation/updateValidation');
        // $affichageUpdate = new CreationModel();
        // $affichageUpdateCreation = $affichageUpdate->illustration($creation);
        // $this->render('creation/update', ['list' => $affichageUpdateCreation]);

    }
    public function delete()

    {
        $id_creation = $_GET['id_creation'] ?? '';

        $this->render('creation/delete');
    }

    public function deleteCreation()
    {

        $id_creation = $_GET['id_creation'] ?? '';

        // var_dump($_GET['id_creation']);
        // die;

        $creation = new Creation();
        $creation->setId_creation($id_creation);


        $delete = new CreationModel();
        $delete->deleteCreation($creation);


        $this->render('creation/deleteCreation');
    }
}
// il faut relier le controller à la vu - inclure la vu dans le controller