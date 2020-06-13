<!doctype html>
<html>
	<head>
	   <meta charset='utf-8'>
	   <meta http-equiv="X-UA-Compatible" content="IE=edge">
	   <meta name="viewport" content="width=device-width, initial-scale=1">
	   <link rel="stylesheet" href="css/menu_styles.css">
	</head>
	<body>
		<div id='cssmenu'>
			<ul>
				<?php if(strstr($_SERVER["REQUEST_URI"],'accueil')){ ?>
			   <li class='active'><a href='../accueil.php'><span>Accueil</span></a></li>
				<?php } else{ ?>
				<li><a href='../accueil.php'><span>Accueil</span></a></li>
				<?php } ?>

				<?php
			   if(isset($_SESSION['username']))
			   {
			   	?>

				<?php if(strstr($_SERVER["REQUEST_URI"],'documents')){ ?>
			   <li class='active'><a href='../documents.php'><span>Documents</span></a></li>
			   <?php } else{ ?>
			   <li><a href='../documents.php'><span>Documents</span></a></li>
			   <?php } ?>

			   <?php if(strstr($_SERVER["REQUEST_URI"],'mon_espace')){ ?>
			   <li class='active'><a href='../mon_espace.php'><span>Mon espace</span></a></li>
			   <?php } else{ ?>
			   <li><a href='../mon_espace.php'><span>Mon espace</span></a></li>
			   <?php } ?>
			   
			   <!--<?php if(strstr($_SERVER["REQUEST_URI"],'forum')){ ?>
			   <li class='active'><a href='forum.php'><span>Forum</span></a></li>
			   <?php } else{ ?>
			   <li><a href='forum.php'><span>Forum</span></a></li>
			   <?php } ?>-->
			   
				<?php
				}
				?>

			   <?php if(strstr($_SERVER["REQUEST_URI"],'contacts')){ ?>
			   <li class='active'><a href='../contacts.php'><span>Contact</span></a></li>
			   <?php } else{ ?>
			   <li class='last'><a href='../contacts.php'><span>Contact</span></a></li>
			   <?php } ?>

			   <?php if(strstr($_SERVER["REQUEST_URI"],'aide')){ ?>
			   <li class='active'><a href='../aide.php'><span>Aide</span></a></li>
			   <?php } else{ ?>
			   <li><a href='../aide.php'><span>Aide</span></a></li>
			   <?php } ?>
			   	

			   <ul id="bande_connexion">
			   <?php
			   if(!isset($_SESSION['username']))
			   {
			   	?>
			   		<?php if(strstr($_SERVER["REQUEST_URI"],'register_form')){ ?>
			   		<li class='active'><a href='../register_form.php'><span>Inscription</span></a></li>
			   		<?php } else{ ?>
			   		<li class='last'><a href='../register_form.php'><span>Inscription</span></a></li>
			   		<?php } ?>
			   		<li class='form_connexion'>
						<form class="form_connexion" action='../script_login.php' method="post">
							<input class="item_connexion" type="submit" name="submit" value="Connexion">
							<input class="item_connexion" type="text" name="username" placeholder="Login">
							<input class="item_connexion" type="password" name="password" placeholder="Mot de passe">
						</form> 
					</li>
				<?php
				}else{
				?>
					<li> <div id="welcome_user"><?php echo 'Bienvenue ' .$_SESSION['username']. ' ';?></div> </li>
					<li> <a href='../logout.php'> Déconnexion </a>
				<?php
				}
				?>
				</ul>
			</ul>
		</div>
	</body>
</html>