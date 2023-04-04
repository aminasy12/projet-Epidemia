<?php

include_once "../entities/Zone.php";
include_once "../repository/DB.php";
include_once "../repository/Fonction.php";


if(isset($_POST['submit']))
{
    extract($_POST);

    $zone = new Zone;

    $zone->setNomZone($_POST['nom']);
    $zone->setNbrPersSynt($_POST['nombreps']);
    $zone->setNbrPersPositive($_POST['nombrepp']);
 
    $sdb = new Fonction();

    $sdb->InsertZone($zone);

    header("location:http://localhost/Epidemia/src/views/showZone.php");

}