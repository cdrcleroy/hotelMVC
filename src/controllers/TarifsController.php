<?php
namespace Hotel\controllers;

use Hotel\models\HotelModel;

class TarifsController extends Controller
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
        $this->render('v_tarifs', $tarifs);

    }   
    
}