<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset=https://github.com/twbs/bootstrap/blob/master/LICENSE>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire d'ajout de Personne</title>
<style>
    body {
  background-color: #f5f5f5;
  font-family: Arial, sans-serif;
}

.container {
  max-width: 500px;
  margin: 0 auto;
}

.form-group {
  margin-bottom: 20px;
}

label {
  font-weight: bold;
  display: block;
  margin-bottom: 5px;
}

input[type="text"],
input[type="number"],
select {
  width: 100%;
  padding: 8px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

button[type="submit"],
button[type="reset"] {
  padding: 10px 20px;
  border-radius: 4px;
  border: none;
  color: #fff;
  cursor: pointer;
}

button[type="submit"] {
  background-color: #007bff;
}

button[type="reset"] {
  background-color: #6c757d;
}

</style></head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Formulaire d'ajout de Personne</h1>
        <form action="http://localhost/Epidemia/src/controller/PersonneController.php" method="post" class="border p-4">
            <div class="form-group">
                <label for="nomP">Nom :</label>
                <input type="text" name="nomP" id="nomP" class="form-control" required/>
            </div>
            <div class="form-group">
                <label for="prenomP">Prenom :</label>
                <input type="text" name="prenomP" id="prenomP" class="form-control" required/>
            </div>
            <div class="form-group">
                <label for="numTel">Numero de téléphone :</label>
                <input type="number" name="numTel" id="numTel" class="form-control" required/>
            </div>
            <div class="form-group">
                <label for="adresse">Adresse :</label>
                <input type="text" name="adresse" id="adresse" class="form-control" required/>
            </div>
            <div class="form-group">
                <label for="sexe">Sexe :</label>
                <select type="text" name="sexe" id="sexe" class="form-control" required>
                    <option value="" disabled selected>Choisir une civilité</option>
                    <option value="positive">Monsieur</option>
                    <option value="négative">Madame</option>
                </select>
            </div>
            <div class="form-group">
                <label for="résultat">Résultat :</label>
                <select name="résultat" id="résultat" class="form-control" required>
                    <option value="" disabled selected>Choisir une option</option>
                    <option value="positive">Positive</option>
                    <option value="négative">Négative</option>
                    <option value="symptômatique">Symptômatique</option>
                </select>
            </div>
            <div class="form-group">
                <button type="submit" name="submit" class="btn btn-primary mr-2">Enregistrer</button>
                <button type="reset" name="reset" class="btn btn-secondary">Annuler</button>
            </div>
        </form>
    </div>
</body>
</html>
