<?php
namespace src\repositories;
use src\repositories\Db;

include_once "Db.php";

class ZoneRepository extends Db
{
    public function __construct()
    {
        parent::__construct();
    }

    public function insertZone($zone)
    {
        $sql = "INSERT INTO zone VALUES(NULL, '".$zone->getNomZone()."', 
                                                    '".$zone->getPvivant()."',
                                                     '".$zone->getPsymptomatique()."',
                                                    '".$zone->getPpositive()."',
                                                     '".$zone->getCouleur()."')";
       return $this->db->exec($sql);
    }

    public function listeZones()
    {
        $sql = "SELECT * FROM zone";

        return $this->db->query($sql);
    }
    
    public function identify($zone)
    {
        if 0.05('".$zone->getPvivant()."') > '".$zone->getPpositive()."' {
            '".$zone->getCouleur()."' => "verte";
        }else

        if ('".$zone->getPpositive()."') >  0.05('".$zone->getPvivant()."')  && 0.15('".$zone->getPvivant()."') > '".$zone->getPpositive()."') {
            '".$zone->getCouleur()."' => "orange";
        }else

        if '".$zone->getPpositive()."' >  0.15('".$zone->getPvivant()."') {
            '".$zone->getCouleur()."' => "rouge";
    }

}
