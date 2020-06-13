<?php
	session_start();
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
		<div class="body_site">
			<p class="titre_section">Aide</p>
			<div class="body_aide">
				<?php
				if(isset($_SESSION['username'])){
				?>
				<P>Besoin d'aide ?</P>
				<div style="height: 58%; overflow: auto; ">
				<p>Pour vous connecter il suffit de saisir votre email et le mot de passe renseigné lors de votre inscription dans les champs désignés dans les champs de connexion.</p>
				<p>Une fois enregistré et connecté, il sera par la suite possible de modifier ses informations depuis l’onglet « Mon espace ». 
				Il sera également possible de modifier son mot de passe dans ce même onglet.</p>
				<p>Vous pouvez également vous connecter avec votre compte Facebook ou Google</p> 
				<p>Vous pouvez depuis l’onglet « Documents » uploader des fichiers qui seront conservés sur le serveur dans un dossier vous sera attribué et personnalisé dont vous aurez accès en vous connectant avec vos identifiants.</p>
				<p>Si vous n'êtes pas encore inscrit, cliquez sur l'onglet inscription, un formulaire s'affichera et va</p>
				<p>Vous êtes déjà inscrit ? Connecter-vous pour accéder à l'ensemble du site</p>
				<p>Vous pourrez à tout moment supprimer votre compte depuis votre espace via le bouton « Supprimer mon compte ».<br>Cette action sera bien entendu définitive. </p>
				<p>Votre session serra active tant que vous ne serez pas déconnecté, pensez à vous déconnecter pour éviter la subtilisation ou la modification de vos données personnel.</p>
				</div>
				<?php
				}else{
				?>
				<div style="height: 58%; overflow: auto; ">
				<p>Afin d’explorer l’ensemble du site, il faut au préalable s’enregistrer et ensuite se connecter.</p>
				<p>Vous pouvez également vous connecter avec votre compte Facebook ou Google</p> 
				<p>Le formulaire ne pourra être validé uniquement si tous les champs de celui-ci sont complétés. Dès lors que le formulaire est complété et validé,
				 vous pourrez de suite vous connecter à partir de l’outils de connexion prévu à cet effet, à droite, dans la barre de menu.</p>
				<p>Pour vous connecter il suffit de saisir votre email et le mot de passe renseigné lors de votre inscription dans les champs désignés dans les champs de connexion.</p>
				<p>Une fois enregistré et connecté, il sera par la suite possible de modifier ses informations depuis l’onglet « Mon espace ». 
				Il sera également possible de modifier son mot de passe dans ce même onglet.</p>
				<p>Vous pouvez depuis l’onglet « Documents » uploader des fichiers qui seront conservés sur le serveur dans un dossier vous sera attribué et personnalisé dont vous aurez accès en vous connectant avec vos identifiants.</p>
				<p>Si vous n'êtes pas encore inscrit, cliquez sur l'onglet inscription, un formulaire s'affichera et va</p>
				<p>Vous êtes déjà inscrit ? Connecter-vous pour accéder à l'ensemble du site</p>
				<p>Vous pourrez à tout moment supprimer votre compte depuis votre espace via le bouton « Supprimer mon compte ».<br>Cette action sera bien entendu définitive. </p>
				<p>Votre session serra active tant que vous ne serez pas déconnecté, pensez à vous déconnecter pour éviter la subtilisation ou la modification de vos données personnel.</p>
				</div>			
				<?php
				}
				?>
			</div>
			<div id="photo_aide"></div>
		</div>
	</body>
</html>