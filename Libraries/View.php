<?php

class View
{

    function __construct()
    {

    }

    public function render($name)
    {
        //Učitava samo prosleđeni view

        require 'Views/header.php';
        require 'Views/' . $name . '.php';
        require 'Views/footer.php';
    }
}