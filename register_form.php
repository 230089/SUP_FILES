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
		<div class="body_regis">
			<p class="titre_connex_regis">Inscription</p>
			<div id="regis_form">
				<form action="script_register.php" method="post">
					<input type="text" name="nom" placeholder="Nom" class="champs">
					<input type="text" name="prenom" placeholder="Prénom"  class="champs"><br>
					<input type="date" name="date_naiss"  class="champs"><br>
					<input type="text" name="username" placeholder="Pseudo"  class="champs"><br>
					<input type="password" name="password" placeholder="Mot de passe"  class="champs">
					<input type="password" name="repeatpassword" placeholder="Confirmez le mot de passe" class="champs"><br>
					<input type="text" name="email" placeholder="E-mail"  class="champs"><br>
					<input type="submit" name="submit" id="regis_submit">
				</form>
			</div>
			<div id="photo_regis"></div>
		</div>
	</body>
</html>