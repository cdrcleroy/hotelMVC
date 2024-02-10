<?php
namespace Hotel\controllers;

use Hotel\models\HotelModel;

class GalerieController extends Controller
{
    private $hotel;
            
    public function __construct()
    {

        $this->hotel = new HotelModel();

    }

    public function listePhotos(){

        return $this->hotel->getPhotos();
    }

    public function index()
    {

        $photos = $this->listePhotos();
        $this->render('v_galerie', $photos);

    }
    
}