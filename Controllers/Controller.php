<?php
abstract class Controller
{
    protected function render(string $path, array $data = [])
    {
        // permet d'extraire les donnnées recuperées sous forme de variable
        extract($data);

        // On créer le buffer de sortie
        ob_start();

        // Cree le chemin  et inclut le fichier de la vue souhaitée
        include dirname(__DIR__) . '/Views/' . $path . '.php';

        // On vide le buffer dans les variable $title et $content. 
        $content = ob_get_clean();
        // on fabrique le template.
        include dirname(__DIR__) . '/Views/base.php';
    }

    // ------------------------ MÉTHODE À APPLIQUER SUR LES $POST $GET ($SESSION) -------------
    // ------------------------pour empêcher l'injection de script js ou html --------------
    protected function protectedValues($value)
    {
        $value = trim($value);
        $value = stripslashes($value);
        $value = htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
        return $value;
    }
}
