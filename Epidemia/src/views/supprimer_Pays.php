<?php 
    include_once "../repository/Fonction.php";

    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        $edb = new Fonction();
        $Pays = $edb->getPaysById($id);

        if ($Pays) {
            $delete = $edb->deletePays($id);

            if ($delete) {
                header('Location: tableau_pays.php');
                exit();
            } else {
                echo "Erreur lors de la suppression du pays.";
            }
        } else {
            echo "Pays non trouvé.";
        }
    } else {
        echo "ID non spécifié.";
    }
?>
