<?php

class AppController
{

    public static function index()
    {
        echo "je suis bien dans la page d'accueil<br>";

        App::showArray(["obj1", "obj2"]);

        include VIEWS . "app/home.php";
    }



}