<?php
	session_start();
	require_once('cnx.php');
	$nom_section=$_SESSION['nom_section'];
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
								if(isset($_POST['deleteAccount']))
								{
									if (isset($_SESSION['username']))
									{
										echo '<h2>Etes vous sur de vouloir supprimer votre compte ?</h2>';
										echo '<form action="script_delete_account.php" method="post">
												<input type="submit" name="yes_deleteAccount" class="validDeleteAccount" value="OUI ">												
												</form>'.
										'<form action="mon_espace.php" method="post">
												<input type="submit" name="No_deleteAccount" class="validDeleteAccount" value="NON">																						
												</form>';
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