<?php 
include("elements/connect.php");

if(isset($_REQUEST['adelete'])){
    $package_id=$_REQUEST['adelete'];
    $response='Something went gone wrong';
    $s=mysqli_query($conn,"DELETE FROM administrative_popjob WHERE id='$package_id'");
    if($s){
      $response='Job Role deleted successfully';
    }
    echo $response;
    die;
  }

  if(isset($_REQUEST['cdelete'])){
    $package_id=$_REQUEST['cdelete'];
    $response='Something went gone wrong';
    $s=mysqli_query($conn,"DELETE FROM construction_popjob WHERE id='$package_id'");
    if($s){
      $response='Job Role deleted successfully';
    }
    echo $response;
    die;
  }

  if(isset($_REQUEST['csdelete'])){
    $package_id=$_REQUEST['csdelete'];
    $response='Something went gone wrong';
    $s=mysqli_query($conn,"DELETE FROM customer_service_popjob WHERE id='$package_id'");
    if($s){
      $response='Job Role deleted successfully';
    }
    echo $response;
    die;
  }

  if(isset($_REQUEST['edelete'])){
    $package_id=$_REQUEST['edelete'];
    $response='Something went gone wrong';
    $s=mysqli_query($conn,"DELETE FROM education_popjob WHERE id='$package_id'");
    if($s){
      $response='Job Role deleted successfully';
    }
    echo $response;
    die;
  }

  if(isset($_REQUEST['fdelete'])){
    $package_id=$_REQUEST['fdelete'];
    $response='Something went gone wrong';
    $s=mysqli_query($conn,"DELETE FROM finance_popjob WHERE id='$package_id'");
    if($s){
      $response='Job Role deleted successfully';
    }
    echo $response;
    die;
  }

  if(isset($_REQUEST['hdelete'])){
    $package_id=$_REQUEST['hdelete'];
    $response='Something went gone wrong';
    $s=mysqli_query($conn,"DELETE FROM healthcare_popjob WHERE id='$package_id'");
    if($s){
      $response='Job Role deleted successfully';
    }
    echo $response;
    die;
  }

  if(isset($_REQUEST['hrdelete'])){
    $package_id=$_REQUEST['hrdelete'];
    $response='Something went gone wrong';
    $s=mysqli_query($conn,"DELETE FROM hr_popjob WHERE id='$package_id'");
    if($s){
      $response='Job Role deleted successfully';
    }
    echo $response;
    die;
  }

  if(isset($_REQUEST['mdelete'])){
    $package_id=$_REQUEST['mdelete'];
    $response='Something went gone wrong';
    $s=mysqli_query($conn,"DELETE FROM marketing_popjob WHERE id='$package_id'");
    if($s){
      $response='Job Role deleted successfully';
    }
    echo $response;
    die;
  }

  if(isset($_REQUEST['rdelete'])){
    $package_id=$_REQUEST['rdelete'];
    $response='Something went gone wrong';
    $s=mysqli_query($conn,"DELETE FROM retail_popjob WHERE id='$package_id'");
    if($s){
      $response='Job Role deleted successfully';
    }
    echo $response;
    die;
  }

  if(isset($_REQUEST['tdelete'])){
    $package_id=$_REQUEST['tdelete'];
    $response='Something went gone wrong';
    $s=mysqli_query($conn,"DELETE FROM hospitality_popjob WHERE id='$package_id'");
    if($s){
      $response='Job Role deleted successfully';
    }
    echo $response;
    die;
  }

  


?>