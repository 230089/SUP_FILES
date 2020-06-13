<?php
    session_start();
        if(!isset($_SESSION['id']) || $_SESSION['id']=="")
        {              
            header('location: register_form.php');
        }
        else
        {
        	
        }
?>