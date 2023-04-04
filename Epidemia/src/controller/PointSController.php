<?php

include_once "../entities/PointSurv.php";
include_once "../repository/DB.php";
include_once "../repository/Fonction.php";


if(isset($_POST['submit']))
{
    extract($_POST);

    $pointSurv = new PointSurv;

    $pointSurv->setNomPointS($_POST['nom']);
    
 
    $sdb = new Fonction();

    $sdb->InsertPointSurv($pointSurv);

    header("location:http://localhost:8080/Epidemia/src/views/showPointSurv.php");

}