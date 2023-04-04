<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pays</title>
    <style>
        body {
            background-color: pink;
            font-family: Arial, sans-serif;
        }
        form {
            margin: 50px auto;
            width: 400px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0,0,0,0.2);
            padding: 30px;
        }
        label {
            display: block;
            margin-bottom: 10px;
        }
        select, input[type="text"] {
            width: 100%;
            padding: 10px;
            border-radius: 3px;
            border: 1px solid #ccc;
            box-sizing: border-box;
            margin-bottom: 20px;
        }
        select:focus, input[type="text"]:focus {
            outline: none;
            border: 1px solid #0066cc;
        }
        input[type="submit"], input[type="reset"] {
            background-color: #0066cc;
            border: none;
            color: #fff;
            padding: 10px 20px;
            border-radius: 3px;
            cursor: pointer;
            margin-right: 10px;
        }
        input[type="reset"] {
            background-color: #ccc;
            color: #333;
        }
        input[type="reset"]:hover{
            background-color:red;
        }
        input[type="submit"]:hover{
            background-color: green;
        }
    </style>
</head>
<body>
    <form action="http://localhost/Epidemia/src/controller/PaysController.php" method="post">
        <h2 style="text-align: center;">Enregistrer un pays</h2>
        <div>
            <label for="pays">Nom Pays :</label>
            <input type="text" id="nom" name="nom">
            <!-- <select id="nom" name="nom">
                <optgroup label="Afrique">
                    <option value="Algérie">Algérie</option>
                    <option value="Sénégal">Sénégal</option>
                    <option value="Togo">Togo</option> 
                </optgroup>
            </select> -->
        </div>
        <div>
            <label for="population">Population Totale :</label>
            <input type="text" id="population" name="population" />
        </div>
        <div>
            <label for="zone">creer une zones :</label>
            <input type="text" id="listezone" name="listezone">
            <!-- <select id="listezone" name="listezone">
                <option value="Dakar">Dakar</option>
                <option value="Louga">Louga</option>
                <option value="Thiès">Thiès</option> 
            </select> -->
        </div>
        <div>
            <input type="submit" name="submit" value="Enregistrer"/>
            <input type="reset" name="reset" value="Annuler"/>
        </div>
    </form>
</body>
</html>
