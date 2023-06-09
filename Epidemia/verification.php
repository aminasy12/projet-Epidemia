<?php
include_once "../repository/Fonction.php";
session_start();
if(isset($_POST['username']) && isset($_POST['password']))
{
  // connexion à la base de données
  $db_username = 'root';
  $db_password = '';
  $db_name = 'bdEpidemia';
  $db_host = 'localhost';
  $db= new PDO('mysql:host=localhost;dbname=bdEpidemia', $db_username, $db_password);

  // on applique les deux fonctions mysqli_real_escape_string et htmlspecialchars
  // pour éliminer toute attaque de type injection SQL et XSS
  //$username = mysqli_real_escape_string($db,htmlspecialchars($_POST['username'])); 
  //$password = mysqli_real_escape_string($db,htmlspecialchars($_POST['password']));
 
  if($username !== "" && $password !== "")
  {
    $requete = "SELECT count(*) FROM utilisateur WHERE login = 'root' AND password = 'passer'";
    $resultat = $db->query($requete);
    $count = $resultat->fetchColumn();
    if($count != 0) // nom d'utilisateur et mot de passe correctes
    {
      $_SESSION['username'] = $username;
      header('location: http://localhost/Epidemia/src/views/admin.php');
    }
    else
    {
      header('Location: login.php?erreur=1'); // utilisateur ou mot de passe incorrect
    }
  }
  else
  {
    header('Location: login.php?erreur=2'); // utilisateur ou mot de passe vide
  }
}
else
{
  header('Location: login.php');
}
$db = null; // fermer la connexion PDO
?>
