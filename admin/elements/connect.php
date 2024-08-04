<?php

 session_start();
 error_reporting(E_ALL);
 ini_set('display_errors', 1);
 ini_set('memory_limit', '-1');
 require "../config/connection.php"; 

 $data=mysqli_fetch_array(mysqli_query($conn,"SELECT username FROM admin ")); 
 if(isset($_SESSION['session_id']) && isset($_SESSION['user_id'] )){
    $my_id=$_SESSION['user_id'];
    if($my_id !=$data['username']){
      header("Location:../index");

    }
 }
 else{
 	header("Location:../index");
 }
 
 
?>