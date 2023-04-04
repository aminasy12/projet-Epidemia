<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Personnes</title>
    <style>
        table {
  font-family: Arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
  margin-top: 20px;
}

th {
  background-color: #F5B7B1 ;
  color: white;
  text-align: left;
  padding: 12px;
  font-size: 18px;
  font-weight: bold;
  border-bottom: 2px solid white;
}

td {
  border: 1px solid #ddd;
  padding: 12px;
  font-size: 16px;
}

tr:nth-child(even) {
  background-color: #FADBD8;
}

tr:hover {
  background-color: #ddd;
}

/* Ajout de styles pour améliorer l'apparence du tableau */
table {
  border: 2px solid #CA6F1E ;
  box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
}

th {
  text-transform: uppercase;
}

td {
  text-align: center;
}

tr:first-child {
  text-align: center;
}

tr:hover td {
  background-color: #EC7063 ;
}

@media screen and (max-width: 600px) {
  table {
    font-size: 12px;
  }
  th {
    font-size: 14px;
  }
}

    </style>
</head>
<body>
    <table >
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Numéro de téléphone</th>
                <th>Adresse</th>
                <th>Sexe</th>
                <th>Résultat</th>    
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php 
                include_once "../repository/Fonction.php";

                $edb = new Fonction();

                $Personne = $edb->GetAllPersonne();

                foreach ($Personne as $personne) 
                {
                    echo "<tr>
                            <td>$personne[0]</td>
                            <td>$personne[1]</td>
                            <td>$personne[2]</td>
                            <td>$personne[3]</td>
                            <td>$personne[4]</td>
                            <td>$personne[5]</td>
                            <td>$personne[6]</td>
                            <td><a href='modifier.php?id=$personne[0]'>Modifier</a></td>
                            <td><a href='supprimer.php?id=$personne[0]'>Supprimer</a></td>
                        </tr>";
                }
            ?>
        </tbody>
        
    </table>
</body>
</html>
