<?php
namespace Hotel\controllers;

abstract class Controller
{

    public function render(string $view, $data=[])
    {
        ob_start();

        extract($data);

        require('../views/'.$view.'.php');

        $contenu = ob_get_clean();

        require('../views/template/template.php');

    }

    public function adminRender(string $view, $data=[])
    {
        ob_start();

        extract($data);

        $contenu = ob_get_clean();

        require('../views/'.$view.'.php');
    }

}
