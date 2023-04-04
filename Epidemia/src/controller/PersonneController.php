<?php


include_once "../entities/Personne.php";
include_once "../repository/DB.php";
include_once "../repository/Fonction.php";

$population = isset($_POST['population']) ? (int)$_POST['population'] : 0;
$nbPositives = 0;

if(isset($_POST['submit']))
{
    extract($_POST);

    $personne = new Personne;

    $personne->setNomP($_POST['nomP']);
    $personne->setPrenomP($_POST['prenomP']);
    $personne->setNumTel($_POST['numTel']);
    $personne->setAdresse($_POST['adresse']);
    $personne->setSexe($_POST['sexe']);
    $personne->setRésultat($_POST['résultat']);

    if(isset($_POST['submit']))
    {
        $nbPositives++;
    }

    if($population != 0) {
        $pourcentage = ($nbPositives / $population) * 100;

        if($pourcentage < 5) {
            $bgColor = "green";
        } elseif($pourcentage < 15) {
            $bgColor = "orange";
        } else {
            $bgColor = "red";
        }
    } else {
        // gérer l'erreur, par exemple :
        $bgColor = "gray";
    }
    $sdb = new Fonction();
    $sdb->insertPersonne($personne);
    header("location:http://localhost/Epidemia/src/views/showPersonne.php");
}
