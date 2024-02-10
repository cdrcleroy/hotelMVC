<?php
namespace Hotel\controllers;

use Hotel\models\HotelModel;

class AdminController extends Controller
{
    private $hotel;
            
    public function __construct()
    {

        $this->hotel = new HotelModel();

    }

    public function listeTarifs(){

        return $this->hotel->getTarifs();
    }

    public function index()
    {
        $tarifs = $this->listeTarifs();
        $this->adminRender('v_admin', $tarifs);

    }  
    
}