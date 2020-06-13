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
			<h1>Inscription</h1>
			<div id="script_register">
				<?php 
					require_once('cnx.php');
					//Inscription 
					if(isset($_POST['submit']))
					{
						$nom = $_POST['nom'];
						$prenom = $_POST['prenom'];
						$date_naiss1 = $_POST['date_naiss'];
						$date_naiss = date("Y-m-d", strtotime($date_naiss1));
						$username = $_POST['username'];
						$password = $_POST['password'];
						$repeatpassword = $_POST['repeatpassword'];
						$email = $_POST['email'];


						if ($nom && $prenom && $date_naiss && $username && $password && $repeatpassword && $email)
						{
							if(strlen($nom) >= 3)
							{
								if(strlen($prenom) >= 3)
								{
										if (strlen($password) >= 6)
										{
											if($password == $repeatpassword)
											{
													$password = sha1($password);
													$req = $bdd->prepare('INSERT INTO user(nom, prenom, date_naiss, username, password, email) VALUES(:nom, :prenom, :date_naiss, :username, :password, :email)');
													$req->execute(array(
													'nom' => $nom,
													'prenom' => $prenom,
													'date_naiss' => $date_naiss,
													'username' => $username,
													'password' => $password,
													'email' => $email
													));
													die('Inscription terminée ! Vous pouvez désormais vous connecter<br> <a href="accueil.php"> Retour à l\'accueil</a>.');
											} 
												else echo "Les mots de passe ne sont pas identiques";
										} 
											else echo "Votre mot de passe doit contenir au moins 6 caractères";
								} 
									else echo "Votre prenom doit contenir au moins 3 caractères";
							} 
								else echo "Votre nom doit contenir au moins 3 caractères";
						} 
							else echo "Vous devez remplir tous les champs !";
					}
				?>
			</div>
			<input type="button" value="Retour" OnClick="window.location.href='register_form.php'" id="b_retour_form">
		</div>
	</body>
</html>


