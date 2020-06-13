<html>
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" charset="utf-8">
		<link rel="stylesheet" href="css/style.css">
		</head>		
	<body>
		<div>
			<?php include('header.php'); ?>
		</div>
		<div>
			<?php include('bande_menu.php'); ?>			
		</div>
		<div>
			<?php include('footer.php'); ?>
		</div>
		<div class="body_site">
			<h1>Oups... Connexion impossible !</h1>
			<div id="script_register">
				<?php			
					include('cnx.php');
				
					$email=$_POST['email'];
					$password=$_POST['password'];
					$password=sha1($password);
								
					if(!isset($_POST['email']) OR empty($_POST['email']) OR !isset($_POST['password']) OR empty($_POST['password']))
					{
						echo 'Veuillez remplir tous les champs !';						
					}
											
					else
					{
						$req=$bdd->query("SELECT password, id, nom, prenom, date_naiss, username, email, date_inscription FROM user WHERE email = '$email'");						
						$donnees = $req->fetch();
						$password=($donnees[0]);
						$id=($donnees[1]);
						$nom = ($donnees[2]);
						$prenom = ($donnees[3]);
						$date_naiss = ($donnees[4]);
						$username = ($donnees[5]);
						$email = ($donnees[6]);
						$date_inscription = ($donnees[7]);
										
						if($password != $password) 
						{
							echo "L'email ou le mot de passe est incorrect !";								
						}
										
						else
						{
							session_start();
							$_SESSION['username'] = $username;	
							$_SESSION['id'] = $id;
							$_SESSION['nom'] = $nom;
							$_SESSION['prenom'] = $prenom;
							$_SESSION['date_naiss'] = $date_naiss;
							$_SESSION['email'] = $email;
							$_SESSION['password']=$password;
							$_SESSION['date_inscription']=$date_inscription;

							header('location: accueil.php');	
						}    	
					}					
				?>
			</div>
			<input type="button" value="Retour à l'accueil" OnClick="window.location.href='accueil.php'" id="b_retour_form">
		</div>
	</body>
</html>