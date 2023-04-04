<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        <style>
    table {
        border-collapse: collapse;
            width: 50%;
            margin-bottom: 1rem;
            background-color: #fff;
            box-shadow: 0 0 20px rgba(0,0,0,0.1);
            margin: 50px auto;
        }

    th {
        background-color: #008080;
        color: #fff;
        font-weight: bold;
        text-align: left;
        padding: 12px;
        border: 1px solid #ddd;
    }

    td {
        padding: 12px;
        border: 1px solid #ddd;
        text-align: left;
        vertical-align: middle;
    }

    tr:nth-child(even) {
        background-color: pink;
    }

    @media only screen and (max-width: 600px) {
        table, thead, tbody, th, td, tr {
            display: block;
        }

        th {
            position: absolute;
            top: -9999px;
            left: -9999px;
        }

        tr {
            border: 1px solid #ccc;
        }

        td {
            border: none;
            border-bottom: 1px solid #ccc;
            position: relative;
            padding-left: 50%;
        }

        td:before {
            position: absolute;
            top: 6px;
            left: 6px;
            width: 45%;
            padding-right: 10px;
            white-space: nowrap;
            content: attr(data-column);
            color: #000;
            font-weight: bold;
        }
    }
</style>

    </style>
</head>
<body>
    <h1>Tableau de Zones</h1>
    <table>
        <tr>
            <th>Nom Zone : </th>
            <th>Nombre de personne avec symptome : </th>
            <th>Nombre de personne positive : </th>
         
        </tr>
        <?php 
            include_once "../repository/Fonction.php";

            $edb = new Fonction();

            $Zone = $edb->getAllZone();

            foreach ($Zone as $zone) 
            {
                echo "<tr>
                        <td>$zone[1]</td>
                        <td>$zone[2]</td>
                        <td>$zone[3]</td>
                        
                    </tr>";
                    
            }
        ?>
    </table>
</body>
</html>