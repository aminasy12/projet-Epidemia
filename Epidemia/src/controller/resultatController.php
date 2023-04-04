<?php

include_once "../views/addPersonne.php";
if(isset($_POST['submit']))
{
    if(isset($_POST['résultat'])){
        extract($_POST);
        if(isset($_POST['pos'])){
            $nbPositive++;
        }elseif(isset($_POST['neg'])){
            $nbNégative++;
        }elseif (isset($_POST['sym'])){
            $nbSymptôme++;
        } 
        header("location:http://localhost/Epidemia/src/controller/PersonneController.php");   
    }

}