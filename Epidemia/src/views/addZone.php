<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        form {
  margin: 20px auto;
  padding: 20px;
  width: 400px;
  border: 1px solid #ccc;
  border-radius: 5px;
  background-color: #f4f4f4;
}

label {
  display: block;
  margin-bottom: 5px;
  font-weight: bold;
}

input[type="text"],
input[type="submit"],
input[type="reset"] {
  width: 400px;
  margin-bottom: 10px;
  padding: 5px;
  border: 1px solid #ccc;
  border-radius: 3px;
  font-size: 16px;
}

input[type="submit"],
input[type="reset"] {
  width: 100px;
  cursor: pointer;
  background-color: #007bff;
  color: #fff;
  border: none;
}

input[type="submit"]:hover{
  background-color:green;
}
input[type="reset"]:hover {
  background-color: red;
}
body{
  background-color: pink;
}

    </style>
</head>
<body>
    <form action="http://localhost/Epidemia/src/controller/ZoneController.php" method="post">
        <div>
            <label for="">Nom Zone : </label>
            <input type="text" name="nom"/>
        </div>
        <div>
            <label for="">Nombre PersonneSyntome : </label>
            <input type="text" name="nombreps" />
        </div>
        <div>
            <label for="">Nombre PersonnePositive : </label>
            <input type="text" name="nombrepp"/>
        </div>
       
        <div>
            <input type="submit" name="submit" value="Register"/>
            <input type="reset" name="reset" value="Cancel"/>
        </div>
    </form>
</body>
</html>