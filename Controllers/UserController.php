<?php
include '../Models/UserModel.php';
// contient la class qui comprend les méthodes de requetes
include '../Entities/User.php';


// ON RENVOIT TOUJOURS VERS UNE VUE AVEC &this->render
class UserController extends Controller
{

    public function index()
    {
        $this->render('user/index');
    }

    public function identification()
    {
        $login_user = password_hash($_POST['login'], PASSWORD_DEFAULT) ?? '';
        $password_user = $_POST['password'] ?? '';
        // var_dump($_POST);
        // die;
        //  // ok;

        $user = new User;
        // instanciation class User
        $user->setLogin_user($login_user);
        $user->setPassword_user($password_user);


        $identificationValider = new UserModel;
        $identificationUser = $identificationValider->findUser($user);

        if ($identificationUser == FALSE) {
            $this->render('user/index');
        } else {
            $_SESSION['login'] = $_POST['login'];
            $this->render('user/identification', ['list' => $identificationUser]);
            // var_dump($_SESSION);
            // die;
        }
    }
}
