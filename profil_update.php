<?php
	session_start();
	require_once('cnx.php');
?>

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
		
		<div class="body_espace">
		<p class="titre_section">Modification du profil</p>
		<?php
		if(isset($_SESSION['username'])){
		?>
			<?php
								if(isset($_POST['update']))
								{
									if (isset($_SESSION['username']))
									{
										$nom;
										$prenom;
										$date_naiss;
										$username;
										$email;
										$session_username;

										$nom = $_POST['nom'];
										$prenom = $_POST['prenom'];
										$date_naiss1 = $_POST['date_naiss'];
										$date_naiss = date("Y-m-d", strtotime($date_naiss1));
										$session_username=$_SESSION['username'];
													if($nom!="" || $prenom!="" || $date_naiss!="" || $username!="" || $email!="")
													{
													$username = $_POST['username'];
													$email = $_POST['email'];
													$req=$bdd->exec("UPDATE user 
																		SET nom='$nom', prenom='$prenom', date_naiss='$date_naiss', username='$username', email='$email' 
																		WHERE username ='$session_username' ");
													$_SESSION['username'] = $username;	
													$_SESSION['nom'] = $nom;
													$_SESSION['prenom'] = $prenom;
													$_SESSION['date_naiss'] = $date_naiss;													$_SESSION['email'] = $email;

													echo 'Profil mis à jour avec succès';
													}
												else{
													echo 'Erreur...<br>';
													echo 'Vous devez remplir tous les champs !';
												}
									}
								}
			?>
			<?php
				}else{
				?>
				<p>Oups... Il semblerait que vous ne soyez pas connecté(e) !<br> Connectez vous pour pouvoir accéder à cet page.</p>
				<?php
				}
				?>
		</div>
	</body>
</html>
<?php