<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
  border-collapse: collapse;
  width: 100%;
  max-width: 800px;
  margin: 0 auto;
}

th, td {
  text-align: left;
  padding: 8px;
  border: 1px solid #ddd;
}

th {
  background-color: #4CAF50;
  color: white;
}
  
tr:nth-child(even) {
  background-color: #f2f2f2;
}

tr:hover {
  background-color: #ddd;
}

    </style>
</head>
<body>
    <table>
        <tr>
            <th>Nom PointSurv :</th>
                 
        </tr>
        <?php 
            include_once "../repository/Fonction.php";

            $edb = new Fonction();

            $PointSurv = $edb->getAllPointSurv();

            foreach ($PointSurv as $pointSurv) 
            {
                echo "<tr>
                        <td>$pointSurv[1]</td>
                    </tr>";
            }
        ?>
    </table>
</body>
</html>