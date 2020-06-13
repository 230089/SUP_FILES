<?php
session_start();
/*include 'cnx.php';*/
$ds         = DIRECTORY_SEPARATOR; 
$userFolder = 'uploads'.$ds.$_SESSION['id'];
$upload_dir = $userFolder;
$targetPath = dirname( __FILE__ ) . $ds . $upload_dir . $ds;
unlink($targetPath.$_GET['fid']);
$obj=new DB();
$sql = "DELETE FROM file_upload WHERE f_name='".$_GET['fid']."'";
$retval = mysqli_query($obj->connection(),$sql);
print_r("Fichier supprimé avec succès !");
?>