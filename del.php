<?php


require_once('./config/dbconfig.php');
$db = new operations();

if (isset($_GET['D_ID'])) {
        global $db;
        $ID = $_GET['D_ID']; 
        if ($db->deleteRecord($ID)) {
                $db->set_message('<div class="alert alert-success">Message Deleted</div>');
                header("location:view.php");
        }else{
               $db->set_message('<div class="alert alert-success">Something wrong</div>');
   
        } 
}


?>