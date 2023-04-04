<?php
include_once "DB.php";

class Fonction extends Db
{
    public function __construct()
    {
        parent::__construct();
    }

    public function insertPays($pays)
    {
        $sql = "INSERT INTO pays VALUES(NULL, 
                                             '".$pays->getNomPays()."',
                                              '".$pays->getPopulationTotal()."',
                                              '".$pays->getListeZone()."')";
       return $this->db->exec($sql);
    }
    public function InsertZone($zone)
    {
        $sql = "INSERT INTO zones VALUES(NULL, '".$zone->getNomZone()."',
                                              '".$zone->getNbrPersSynt()."',
                                              '".$zone->getNbrPersPositive()."')";
        return $this->db->exec($sql);
    }
    

    public function InsertPointSurv($pointSurv)
    {
        $sql = "INSERT INTO pointsureveiller VALUES(NULL, '".$pointSurv->getNomPointS()."')";
        return $this->db->exec($sql);
    }
    public function getAllPays()
    {
        $sql = "SELECT * FROM pays";

        return $this->db->query($sql);
    }
    public function InsertPersonne($personne){
        
            $sql = "INSERT INTO personne VALUES(NULL,'".$personne->getNomP()."','".$personne->getPrenomP()."','".$personne->getNumTel()."','".$personne->getAdresse()."','".$personne->getSexe()."','".$personne->getRésultat()."')";

            return $this->db->exec($sql);
    }
    public function GetAllPersonne()
    {
        $sql = "SELECT * FROM personne";
        return $this->db->query($sql);
    }

    public function getAllZone()
    {
        $sql = "SELECT * FROM zones ";

        return $this->db->query($sql);
    }
    public function getAllPointSurv()
    {
        $sql = "SELECT * FROM pointsureveiller ";

        return $this->db->query($sql);
    }
    public function getPaysById($id) {
        $sql = "SELECT * FROM pays WHERE idPays = $id";
        $result = $this->db->query($sql);
        
        if ($result->num_rows == 0) {
            return $result->fetchAll();
        } else {
            return null;
        }
    }
    

    
   
}