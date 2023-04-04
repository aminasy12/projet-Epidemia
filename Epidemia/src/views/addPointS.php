<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Point de surveillance Registration</title>
    <style>
       
        body {
            background-color: #f2f2f2;
            font-family: Arial, sans-serif;
            color: #333;
            padding: 20px;
        }
        form {
            max-width: 500px;
            margin: 0 auto;
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 20px;
        }
        label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
        }
        input[type="text"] {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-bottom: 20px;
            width: 100%;
            box-sizing: border-box;
        }
        input[type="submit"], input[type="reset"] {
            background-color: #4CAF50;
            border: none;
            color: #fff;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }
        input[type="submit"]:hover, input[type="reset"]:hover {
            background-color: #3e8e41;
        }
    </style>
</head>
<body>
    <form action="http://localhost/Epidemia/src/views/showPointSurv.php" method="post">
        <div>
            <label for="">Nom PointS :</label>
            <input type="text" name="nom"/>
        </div>
        
        <div>
            <input type="submit" name="submit" value="Register"/>
            <input type="reset" name="reset" value="Cancel"/>
        </div>
    </form>
</body>
</html>

   