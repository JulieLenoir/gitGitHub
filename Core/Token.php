<?php

class Token
{

    public static function tokenGenerate()
    {
        if (!isset($_SESSION['token'])) {

            $_SESSION['token'] = bin2hex(openssl_random_pseudo_bytes(32));
        }
    }

    public static function validateToken()
    {
        //Si le jeton est présent dans la session et dans le formulaire
        if (isset($_SESSION['token'])) {
            //Si le jeton de la session correspond à celui du formulaire
            if ($_SESSION['token'] == $_POST['token']) {

                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }
}
