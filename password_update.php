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
		<p class="titre_section">Modification du mot de passe</p>
		<?php
			if(isset($_SESSION['username']))
			{
			?>
			<?php

					if(isset($_POST['updateMDP']))
					{
						if (isset($_SESSION['username']))
						{
							$actuelPassword=$_SESSION['password'];
							$oldPassword;
							$NewPassword;
							$repeatpassword;
							$session_username=$_SESSION['username'];

							$oldPassword = $_POST['oldPassword'];
							$oldPassword = sha1($oldPassword);
							$NewPassword = $_POST['NewPassword'];
							$NewPassword = sha1($NewPassword);
							$repeatpassword = $_POST['repeatpassword'];
							$repeatpassword = sha1($repeatpassword);
							if($NewPassword!=""||$repeatpassword!="")
							{
								if($oldPassword==$actuelPassword)
								{
									if($NewPassword==$repeatpassword)
									{
										if($oldPassword!=$NewPassword)
										{
											$req=$bdd->exec("UPDATE eleve
								 								SET password='$NewPassword' 
								 								WHERE username=='$session_username' ");										
											$_SESSION['password']=$NewPassword;
								 			echo 'Mot de passe mis à jour avec succès';															
										}
										else{
											echo 'Erreur...<br>';
											echo 'Le nouveau mot de passe est identique à l\'ancien mot de passe !';
											}									
									}
									else{
										echo 'Erreur...<br>';
										echo 'Les mots de passe ne sont pas identiques !';
										}
								}
								else{
									echo 'Erreur...<br>';
									echo 'Votre mot de passe actuel ne correspond pas à l\'ancien mot de passe !';
									}	
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