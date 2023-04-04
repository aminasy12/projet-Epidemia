<?php

include_once "../entities/Pays.php";
include_once "../repository/DB.php";
include_once "../repository/Fonction.php";


if(isset($_POST['submit']))
{
    extract($_POST);

    $pays = new Pays;

    $pays->setNomPays($_POST['nom']);
    $pays->setPopulationTotal($_POST['population']);
    $pays->setListeZone($_POST['listezone']);
 
    $sdb = new Fonction();

    $sdb->insertPays($pays);

    header("location:http://localhost/Epidemia/src/views/showPays.php");


}
public function edit()
{
    // Récupération de l'ID du pays à modifier
    $idPays = $_GET['id'];

    // Récupération des détails du pays à modifier
    $pays = new Fonction();
    $pays = $pays->getPaysById($idPays);

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Récupération des données saisies dans le formulaire
        $nom = $_POST['nom'];
        $population = $_POST['population'];

        // Validation des données
        // ...

        // Mise à jour du pays dans la base de données
        $pays = new Fonction();
        if ($pays->updatePays($idPays, $nom, $population,  $zones)) {
            header('Location: showPays.php');
            exit;
        }
    } else {
        // Affichage du formulaire de modification de pays
        include 'view/pays/modification.php';
    }
}
