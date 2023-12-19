<?php

// execute des requètes : communique avec la Base de données
// on créé un model par table 
// 
include '../Core/DbConnect.php';

class CreationModel extends DbConnect
{
    public function findAll()
    {
        try {
            $this->request = "SELECT* FROM creation";
            $result = $this->connection->query($this->request);
            $list = $result->fetchAll();

            // fetchAll - tableau d'oblet car ds DbConnect fectch_Obj forcé

            return $list;

            // impt de return pour réutilisé dans les vus pas de foreach dans le modèle
        } catch (PDOException $e) {
            echo 'Erreur:' . $e->getMessage();
        }
    }

    public function add(Creation $creationAjout)
    // tt ce qui concerne la class est devenu un objet. c'est instancié
    {

        $title_creation = $creationAjout->getTitle_creation();
        $date_at = $creationAjout->getDate_at();
        $description_creation = $creationAjout->getDescription_creation();
        $picture = $creationAjout->getPicture();
        $this->request = "INSERT INTO 
            creation VALUES (NULL, '$title_creation', '$description_creation', '$date_at', '$picture')";

        $resultat = $this->connection->exec($this->request);
        return $resultat;
    }


    //METHODE POUR RECUPERER CAHQUE FICHE EN FCT DE L'ID 
    // UTILISER AUSSI POUR FORMULAIRE DE MODIF REQUETE SELECT EN FONCTION DE L'ID
    public function illustration(Creation $affichageCreation)

    {
        try {
            $id_creation = $affichageCreation->getId_creation();
            $this->request = "SELECT* FROM creation 
            WHERE id_creation='$id_creation'";

            $result = $this->connection->query($this->request);
            $list = $result->fetch();
            // var_dump($list);
            // die;
            return $list;
        } catch (PDOException $e) {
            echo 'Erreur:' . $e->getMessage();
        }
    }

    public function updateCreation(Creation $updateCreation)
    {
        try {
            $this->request =  $this->connection->prepare("UPDATE creation
            SET  id_creation=:id_creation, 
            title_creation=:title_creation, 
            description_creation=:description_creation 
            WHERE id_creation=:id_creation");
            $this->request->bindValue(':id_creation', $updateCreation->getId_creation());
            $this->request->bindValue('title_creation', $updateCreation->getTitle_creation());
            $this->request->bindValue('description_creation', $updateCreation->getDescription_creation());
            $listUpdate = $this->request->execute();

            return $listUpdate;
        } catch (PDOException $e) {
            echo 'Erreur:' . $e->getMessage();
        }
    }





    public function deleteCreation(Creation $creationDelete)
    {
        try {


            $this->request =  $this->connection->prepare("DELETE FROM creation 
        WHERE id_creation=:id_creation");
            $this->request->bindValue(':id_creation', $creationDelete->getId_creation());

            $this->request->execute();
        } catch (PDOException $e) {
            echo 'Erreur:' . $e->getMessage();
        }
    }
}
