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
		<p class="titre_section">Mon profil</p>
		<?php
		if(isset($_SESSION['username'])){
		$date_inscription_O=$_SESSION['date_inscription'];
		$date_inscription = date('d-m-Y à H:i:s', strtotime($date_inscription_O));
		?>
			<div id="update_profil">
				<form action="profil_update.php" method="post">
					<input type="text" name="nom" placeholder="Nom" class="champs" value="<?php echo $_SESSION['nom'] ?>" >
					<input type="text" name="prenom" placeholder="Prénom"  class="champs" value="<?php echo $_SESSION['prenom'] ?>"><br>
					<input type="date" name="date_naiss"  class="champs"  value="<?php echo $_SESSION['date_naiss'] ?>"><br>
					<input type="text" name="username" placeholder="Pseudo" class="champs" value="<?php echo $_SESSION['username'] ?>"><br>					
					<input type="text" name="email" placeholder="E-mail"  class="champs" value="<?php echo $_SESSION['email'] ?>"><br>
					<input type="submit" name="update" id="regis_submit" value="Mettre à jour mon profil"><br>
					<p>Modifier mon mot de passe :</p>
				</form>
				<form action="password_update.php" method="post" id="newPassword">
					<input type="password" name="oldPassword" placeholder="Ancien mot de passe"  class="champs"><br>
					<input type="password" name="NewPassword" placeholder="Nouveau mot de passe"  class="champs">
					<input type="password" name="repeatpassword" placeholder="Confirmez le mot de passe" class="champs"><br>
					<input type="submit" name="updateMDP" id="regis_submit" value="Modifer mon mot de passe">
				</form>
			</div>
			<div id="profil">
				<h2><?php echo $_SESSION['prenom'].' '.$_SESSION['nom']?></h2>
				<p>Date d'inscription : <?php echo 'Le ' .$date_inscription ?></p>
				<div id="photo_espace"></div>
				<div>
				<form action="deleteAccount.php" method="post">
					<input type="submit" name="deleteAccount" id="deleteAccount" value="Supprimer mon compte">
				</form>
				</div>
			</div>
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