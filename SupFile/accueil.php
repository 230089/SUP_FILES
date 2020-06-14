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
			<p class="titre_section">Accueil</p>
			<div class="body_content">
				<p>Bienvenue sur SUPFILE</p>
				<?php
				if(isset($_SESSION['username'])){
				?>
				<P>Vous avez maintenant accès à toutes les fonctionnalité de SUPFILE.</P>
				<p>Vous pouvez maintenant accéder à votre espace pour consulter et modifier vos informations</p>
				<p>Vous pourrez également conserver vos fichiers gràce à l'outil "drag and drop".</p>
				<P>Bonne visite !</p>
				<?php
				}else{
				?>
				<p>Le modèle commercial de SUPFile Inc consiste à vendre de l'espace de stockage en ligne sur Internet. Deux infrastructures doivent être
				créé. La première infrastructure est un nuage de l'interface web à l'accès aux fichiers. Le second est le stockage.
				Chaque utilisateur a 30Go pour stocker des fichiers. Certains fichiers peuvent être visualisés directement en ligne. Par exemple Films, Photos
				et les fichiers texte.</p>
				<p>Pour accéder à l'ensemble des fonctionnalités du site, veuillez vous connectez sinon inscrivez vous !</p>
				<div class="fb-login-button" data-max-rows="1" data-size="medium" data-button-type="login_with" data-show-faces="false" data-auto-logout-link="true" data-use-continue-as="false"></div>
				<?php
				}
				?>
			</div>
			<div id="photo_accueil"></div>
		</div>
	</body>
</html>