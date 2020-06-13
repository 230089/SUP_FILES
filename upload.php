<?php

session_start();

$ds          = DIRECTORY_SEPARATOR;  

  //Variable qui contient le nom du dossier et sous dossier utilisateur qui comportera son id.
 //Son nom et son prénom peuvent être modifiés donc le dossier le sera.
//On créer le dossier s'il n'exista pas
$userFolder = 'uploads'.$ds.'user_id_'.$_SESSION['id'];
if (!is_dir($userFolder)) {
mkdir($userFolder,0777);
}

$storeFolder = $userFolder;
 
if (!empty($_FILES)) {
     
    $tempFile = $_FILES['file']['tmp_name'];                    
      
    $targetPath = dirname( __FILE__ ) . $ds. $storeFolder . $ds;  
     
    $targetFile =  $targetPath. $_FILES['file']['name'];  
 
    move_uploaded_file($tempFile,$targetFile); 
     
} else {                                                           
    $result  = array();
 
    $files = scandir($storeFolder);                 
    if ( false!==$files ) {
        foreach ( $files as $file ) {
            if ( '.'!=$file && '..'!=$file) {       
                $obj['name'] = $file;
                $obj['size'] = filesize($storeFolder.$ds.$file);
                $result[] = $obj;
            }
        }
    }
     
    header('Content-type: text/json');              
    header('Content-type: application/json');
    echo json_encode($result);
}
?>