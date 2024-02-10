<?php
namespace Hotel\controllers;

class Erreur404Controller extends Controller
{
    public function index()
    {
       $this->render('v_erreur404');

    }
    
}