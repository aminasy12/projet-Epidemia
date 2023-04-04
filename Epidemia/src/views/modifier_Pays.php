<?php
    include_once "../repository/Fonction.php";

    if (isset($_POST['submit'])) {
        $edb = new Fonction();
        $nom = $_POST['nom'];
        $population = $_POST['population'];
        $zones = $_POST['zones'];
        $id = $_POST['idPays'];

        $result = $edb->updatePays($idPays, $nom, $population, $zones);

        if ($result) {
            echo "<p>Le pays a été modifié avec succès !</p>";
            echo "<a href='showPays.php'>Retourner au tableau des pays</a>";
        } else {
            echo "<p>Une erreur est survenue lors de la modification du pays.</p>";
        }
    } else {
        if (isset($_GET['id'])) {
            $idPays = $_GET['id'];
            $edb = new Fonction();
            $pays = $edb->getPaysById($idPays);

            if ($pays) {
                $nom = $pays[0];
                $population = $pays[0];
                $zones = $pays[0];
            } else {
                echo "<p>Le pays que vous souhaitez modifier n'existe pas.</p>";
                echo "<a href='showPays.php'>Retourner au tableau des pays</a>";
                exit();
            }
        } else {
            echo "<p>Vous devez sélectionner un pays à modifier.</p>";
            echo "<a href='showPays.php'>Retourner au tableau des pays</a>";
            exit();
        }
    }
?>

<h1>Modifier un pays</h1>

<form method="post">
    <input type="hidden" name="idPays" value="<?php echo $id ?>">
    <label for="nom">Nom du pays :</label>
    <input type="text" name="nom" id="nom" value="<?php echo $nom ?>" required>
    <br>
    <label for="population">Population :</label>
    <input type="number" name="population" id="population" value="<?php echo $population ?>" required>
    <br>
    <label for="zones">Liste des zones :</label>
    <input type="text" name="zones" id="zones" value="<?php echo $zones ?>" required>
    <br>
    <button type="submit" name="submit">Modifier</button>
    <a href='index.php'>Annuler</a>
</form>

</body>
</html>
