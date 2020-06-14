<?php
	session_start();
?>

<html>
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" charset="utf-8">
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/dropzone.css">
		<script src="scripts/dropzone.js"></script>
		<script src=""></script>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script>
		Dropzone.options.myDropzone = {
		    init: function() {
		        thisDropzone = this;
		        $.get('upload.php', function(data) {
		 
		            $.each(data, function(key,value){
		                 
		                var mockFile = { name: value.name, size: value.size };
		                 
		                thisDropzone.options.addedfile.call(thisDropzone, mockFile);
		 
		                thisDropzone.options.thumbnail.call(thisDropzone, mockFile, "uploads/"+value.name);
		                 
		            });
		             
		        });
		    }
		};
	</script>
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
		<div class="body_docs">
			<p class="titre_section">Documents</p>
			<?php
			if(isset($_SESSION['username'])){
			?>

      		<form action="upload.php" class="dropzone" id="my-dropzone">
			  <div class="fallback">
			    <input name="file" type="file" multiple />
			  </div>
			</form>
			<div>
				<?php
					$ds = DIRECTORY_SEPARATOR; 
					$userFolder = 'uploads'.$ds.'user_id_'.$_SESSION['id'];
					$filesListe = "";
					if($handle = opendir($userFolder)){
					while (false !== ($file = readdir($handle)))
					{
					if (($file != ".")
					&& ($file != ".."))
					{
					$filesListe .= '<li><a href="'.$userFolder.$ds.$file.'">'.$file.'</a></li>';
					}
					}
					closedir($handle);
					}
				?>

				<ul>
				<p><?php echo $filesListe ?></p>
				</ul>
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
