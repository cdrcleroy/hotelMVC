<?php
namespace Hotel\controllers;

use Hotel\models\HotelModel;

class TourismeController extends Controller
{
    private $hotel;
            
    public function __construct()
    {

        $this->hotel = new HotelModel();

    }

    public function listeSorties(){

        return $this->hotel->getSorties();
    }

    public function listeMonuments(){

        return $this->hotel->getMonuments();
    }

    public function listeVilles(){

        return $this->hotel->getVilles();
    }

    public function index()
    {

        $sorties = $this->listeSorties();
        $monuments = $this->listeMonuments();
        $villes = $this->listeVilles();
        $data = compact('sorties', 'monuments', 'villes');
        $this->render('v_tourisme', $data);

    }
    
}