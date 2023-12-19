<?php

class UserModel extends DbConnect
{

    public function findUser(User $affichageUser)
    {
        try {
            $this->request =  $this->connection->prepare("SELECT* FROM user 
            WHERE login_user=:login_user AND password_user=:password_user");
            $this->request->bindValue(':login_user', $affichageUser->getLogin_user());
            $this->request->bindValue(':password_user', $affichageUser->getPassword_user());
            $this->request->execute();

            $list = $this->request->fetch();
            // var_dump($list);
            // die;
            return $list;
        } catch (PDOException $e) {
            echo 'Erreur:' . $e->getMessage();
        }
    }
}
