
<!DOCTYPE html>
<html>
<head>
	<title>Page d'Administrateur</title>
	<style>
		body {
			background-color: #f2f2f2;
			font-family: Arial, sans-serif;
		}

        section {
			margin: auto;
            margin-top:80px;
			width: 500px;
			padding: 80px;
			background-color: #F0E68C;
			border-radius: 7px;
			box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
		}

		h1 {
			text-align: center;
			margin-top: 50px;
			
		}

		.container {
			margin: 50px auto;
			max-width: 600px;
			display: flex;
			flex-direction: column;
			align-items: center;
		}

		button {
			background-color: #4CAF50;
			color: white;
			padding: 12px 20px;
			border: none;
			border-radius: 4px;
			cursor: pointer;
			margin-bottom: 20px;
			font-size: 16px;
		}

		button:hover {
			background-color: #3e8e41;
		}
		button a{
			text-decoration: none;
			color: white;
		}
	</style>
</head>
<body>
	<h1><marquee behavior="alternate" width="50%">Bienvenue KAF</marquee> </h1>
    <section>
        <div class="container">
            <h2>Que voulez vous faire Maintenant?</h2>
            <a href="addPersonne.php"><button> Ajouter une personne </button></a>
            <a href="addZone.php"><button> Ajouter une zone </button></a>
			
			<a href="addPays.php"> <button> Ajouter un Pays ou une zone</button></a>
            
        </div>
    </section>
	

	
</body>


</html>
