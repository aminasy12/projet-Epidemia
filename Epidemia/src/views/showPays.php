<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau des pays</title>
    <style>
        
        table {
            border-collapse: collapse;
            width: 50%;
            margin-bottom: 1rem;
            background-color: #fff;
            box-shadow: 0 0 20px rgba(0,0,0,0.1);
            margin: 50px auto;
        }

        th, td {
            padding: 0.75rem;
            text-align: left;
            vertical-align: top;
            border-top: 1px solid #dee2e6;
        }

        th {
            background-color: #007bff;
            color: #fff;
            border-color: #007bff;
        }

        tbody tr:nth-child(even) {
            background-color: pink;
        }
        h1{
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>Tableau des pays</h1>
    <table>
        <thead>
            <tr>
                <th>Nom du pays</th>
                <th>Population</th>
                <th>Liste des zones</th>
                <th>Modifier</th>
                <th>Supprimer</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                include_once "../repository/Fonction.php";

                $edb = new Fonction();

                $Pays = $edb->getAllPays();

                foreach ($Pays as $pays) {
                    echo "<tr>
                            <td>{$pays[1]}</td>
                            <td>{$pays[2]}</td>
                            <td>{$pays[3]}</td>
                            <td><a href='modifier_Pays.php?id={$pays[0]}'>Modifier</a></td>
                            <td><a href='supprimer_Pays.php?id={$pays[0]}'>Supprimer</a></td>
                        </tr>";
                }
            ?>
        </tbody>
    </table>
</body>
</html>
