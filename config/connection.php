<?php
 
 $db_host="localhost";
 $db_user='root';
 $db_pass='';
 $db_name='job';
 $conn=mysqli_connect($db_host,$db_user,$db_pass,$db_name);
 date_default_timezone_set('Asia/Kolkata');
 if(!$conn){
   echo "Not connected";
 }  
 


 
?>