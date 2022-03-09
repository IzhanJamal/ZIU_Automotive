<?php 

session_start();





 if(!isset($_SESSION['is_login']) || $_SESSION['role'] != 'salesmen')
 {  //if not login 
     header('location: login.php');
 }

?>