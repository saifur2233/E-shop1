<?php
error_reporting(0);
session_start();
require_once('../config.php');
function get_header(){
  require_once('includes/header.php');
}
 function get_footer(){
   require_once('includes/footer.php');
 }
 function getLoggedID(){
     return $_SESSION['admin_id'] ? true:false;
 }

 function needLogged(){
     $check=getLoggedID();
     if(!$check){
         header('Location: login.php');
     }
 }
 ?>
