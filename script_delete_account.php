<?php
	session_start();
	require_once('cnx.php');
	$id_eleve=$_SESSION['id_eleve'];
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
		<p class="titre_section">Suppression du compte</p>
		<?php

		if(isset($_SESSION['username'])){
		?>
			<div id="X">
			<?php
			if(isset($_POST['yes_deleteAccount']))
			{
				if (isset($_SESSION['username']))
				{
					$req=$bdd->exec("DELETE FROM eleve
										WHERE id_eleve = '$id_eleve' ");
						session_unset ();
						session_destroy ();
						header ('location: accueil.php');
					}
			}
			?>

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