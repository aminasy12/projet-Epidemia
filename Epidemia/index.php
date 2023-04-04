<html>
 <head>
 <meta charset="utf-8">
 <!-- importer le fichier de style -->
 <link rel="stylesheet" href="style.css" media="screen" type="text/css" />
 <!-- <style>
    body{
    background: pink;
    
        background-image: url('log/assets/img/sante.jpg');
        /* background-size: cover; */
   

        
      }
      

   #container{
    width:400px;
    margin:0 auto;
    margin-top:10%;
   }
   /* Bordered form */
   form {
    
        width: 100%;
        padding: 30px;
        border: 1px solid #f1f1f1;
        background: rgba(255, 255, 255, 0.7); /* définit une couleur de fond semi-transparente */
        box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
        opacity: 0.7; 
      
      
    width:100%;
    padding: 40px;
    border: 1px solid #510b0c;
    background: #fff;
    box-shadow: 0 0 20px 0 rgba(19, 10, 10, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
   }
   #container h1{
    width: 38%;
    margin: 0 auto;
    padding-bottom: 10px;
   }
   
   /* Full-width inputs */
   input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
   }
   
   /* Set a style for all buttons */
   input[type=submit] {
    background-color: #701d38;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
   }
   input[type=submit]:hover {
    background-color: rgb(215, 59, 194);
    color: #53af57;
    border: 1px solid #53af57;
   }
 </style> -->
 </head>
 <body>
 <div id="container">
 <!-- zone de connexion -->
 
 <form action="verification.php" method="POST">
 <h1>Connexion</h1>
 
 <label><b>Nom d'utilisateur</b></label>
 <input type="text" placeholder="Entrer le nom d'utilisateur" name="username" required>

 <label><b>Mot de passe</b></label>
 <input type="password" placeholder="Entrer le mot de passe" name="password" required>

 <input type="submit" id='submit' value='LOGIN' >
 <?php
 if(isset($_GET['erreur'])){
 $err = $_GET['erreur'];
 if($err==1 || $err==2)
 echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
 }
 ?>
 </form>
 </div>
 </body>
</html>