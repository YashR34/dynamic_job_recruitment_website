<?php

 session_start();
 error_reporting(E_ALL);
 ini_set('display_errors', 1);
 ini_set('memory_limit', '-1');
 include("../config/connection.php");


 if(isset($_SESSION['session_id']) && isset($_SESSION['user_id'])){
    $my_id=$_SESSION['user_id'];
 }
 else{
    header("Location:../index");
 }
 
 
?>