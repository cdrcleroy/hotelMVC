<?php
namespace Hotel\controllers;

use Hotel\models\HotelModel;

class EditController extends Controller
{
    private $hotel;
            
    public function __construct()
    {

        $this->hotel = new HotelModel();

    }

    public function detailTarif(){
        $id = $_GET['id'];
        
        $tarif = $this->hotel->getTarifById($id);
        $this->adminRender('v_edit', $tarif);

    
    }

    public function updateTarif() {

        $newtarif = $_POST['prix'];
        
        $id = $_POST['id'];
        $this->hotel->setNewTarif($newtarif, $id);
        $this->adminRender('v_admin');
    }

}