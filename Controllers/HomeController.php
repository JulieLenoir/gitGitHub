<?php

class HomeController extends Controller
{


    public function index()
    {

        $this->render('home/index');
    }
    // URL d'acces http://localhost:8888/Cours_MVC/public/index.php?controller=home&action=index
}
