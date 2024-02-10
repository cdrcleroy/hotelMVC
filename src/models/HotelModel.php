<?php
namespace Hotel\models;

use App\Database;

class HotelModel
{

    protected $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getSorties()
    {

        return $this->db->query('SELECT id, nom, description, image, lien FROM sorties')->fetchAll();

    }

    public function getMonuments()
    {

        return $this->db->query('SELECT id, nom, description, image, lien FROM monuments')->fetchAll();

    }

    public function getVilles()
    {

        return $this->db->query('SELECT id, nom, image, lien FROM villes')->fetchAll();

    }
    
    public function getPhotos()
    {

        return $this->db->query('SELECT id, image, alt FROM galerie')->fetchAll();

    }

    public function getTarifs()
    {

        return $this->db->query('SELECT id, item, prix FROM tarifs')->fetchAll();

    }

    public function getTarifById($id)
    {
        
        // return $this->db->query("SELECT id, item, prix FROM tarifs WHERE id=$id")->fetch();
        return $this->db->query('SELECT id, item, prix FROM tarifs WHERE id=?',[$id])->fetch();
    }

    public function setNewTarif($newtarif, $id)
    {
        return $this->db->query('UPDATE tarifs SET prix =? WHERE id=?', [$newtarif,$id]);
    }
}