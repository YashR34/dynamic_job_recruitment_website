<?php

session_start();

error_reporting(E_ALL);

ini_set('display_errors', 1);

ini_set('memory_limit', '-1');

$db_host="localhost";

$db_user='root';

$db_pass='';

$db_name='job';

$conn=mysqli_connect($db_host,$db_user,$db_pass,$db_name);

date_default_timezone_set('Asia/Kolkata');

if(!$conn){

   echo "Not connected";

}


if (isset($_POST['payment'])) {

    $user_id = $_POST['user_id'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $category = $_POST['category'];
    $job = $_POST['job'];
    
    $payid = $_POST['payid'];
    $shot = $_FILES['shot']['name'];
    $temp_shot = $_FILES['shot']['tmp_name'];
    $upload_directory = "uploads/";
 
    move_uploaded_file($temp_shot, $upload_directory . $shot);

 
    $datetime=date('Y-m-d H:i:s');
 
    
 
    $sql_insert = mysqli_query($conn,"INSERT INTO payment( user_id, name, phone, email, category, job, payid, shot, pay_date) 
                                      VALUES ('$user_id','$name','$phone','$email','$category','$job','$payid','$shot','$datetime')");
 
    if ($sql_insert) {
        $_SESSION['submitStatus']= array("code" => 200, "message" => "Successfull");
        header("Location:../payment");
    } else {
        $_SESSION['submitStatus']= array("code" => 201, "message" => "Something Went Wrong");
        
        header("Location:../payment");
    }
 }

if(isset($_REQUEST['apply'])){
	
	$user_id=$_REQUEST['user_id'];
	$name=$_REQUEST['name'];
	$gender=$_REQUEST['gender'];
	$phone=$_REQUEST['phone'];
	$email=$_REQUEST['email'];
	$dob=$_REQUEST['dob'];
	$cv=$_REQUEST['cv'];
	$category=$_REQUEST['category'];
	$job=$_REQUEST['job'];
    $date=date('Y-m-d H:i:s');
    
	$query=mysqli_query($conn,"INSERT INTO apply( user_id, name, gender, phone, email, dob, cv, category, job, a_date, approve_status) 
                               VALUES ('$user_id','$name','$gender','$phone','$email','$dob','$cv','$category','$job','$date','0')");
	if( $query ){
         $_SESSION['submitStatus']= array("code" => 200, "message" => "Applied Successfully");
         header("Location:../apply");
    }else{
         $_SESSION['submitStatus']= array("code" => 201, "message" => "Something Went Wrong");
         header("Location:../apply");
    } 
	

}

if(isset($_REQUEST['contact'])){
	
	$name=$_REQUEST['name'];
	
	$phone=$_REQUEST['phone'];
	$email=$_REQUEST['email'];
	$subject=$_REQUEST['subject'];
	
	$comment=$_REQUEST['comment'];
	$job=$_REQUEST['job'];
    $date=date('Y-m-d H:i:s');
    
	$query=mysqli_query($conn,"INSERT INTO contact( name, phone, email, subject, comment, send_date) 
                               VALUES ('$name','$phone','$email','$subject','$comment','$date')");
	if( $query ){
         $_SESSION['submitStatus']= array("code" => 200, "message" => "Your Message Sent Successfully");
         header("Location:../../contact");
    }else{
         $_SESSION['submitStatus']= array("code" => 201, "message" => "Something Went Wrong");
         header("Location:../../contact");
    } 
	

} 
if (isset($_POST['updatepro'])) {
    $user_id = $_POST['user_id'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    
    $upload_directory = "uploads/";
    
    $photo_name = $_FILES['photo']['name'];
    $photo_temp = $_FILES['photo']['tmp_name'];
    $photo_path = $upload_directory . basename($photo_name);
    
    $cv_name = $_FILES['cv']['name'];
    $cv_temp = $_FILES['cv']['tmp_name'];
    $cv_path = $upload_directory . basename($cv_name);

    // Fetch the current photo and cv from the database
    $current_user_info = mysqli_fetch_array(mysqli_query($conn, "SELECT photo, cv FROM user WHERE user_id='$user_id'"));
    $current_photo = $current_user_info['photo'];
    $current_cv = $current_user_info['cv'];

    // Check if new photo is uploaded, else use the existing photo
    if (!empty($photo_name)) {
        if (!move_uploaded_file($photo_temp, $photo_path)) {
            $_SESSION['submitStatus'] = array("code" => 201, "message" => "Photo Upload Failed");
            header("Location:../profile");
            exit();
        }
    } else {
        $photo_name = $current_photo;
    }

    // Check if new cv is uploaded, else use the existing cv
    if (!empty($cv_name)) {
        if (!move_uploaded_file($cv_temp, $cv_path)) {
            $_SESSION['submitStatus'] = array("code" => 201, "message" => "CV Upload Failed");
            header("Location:../profile");
            exit();
        }
    } else {
        $cv_name = $current_cv;
    }

    // Update the database with the new data
    $query = mysqli_query($conn, "UPDATE user SET email='$email', phone='$phone', address='$address', photo='$photo_name', cv='$cv_name' WHERE user_id='$user_id'");
    
    if ($query) {
        $_SESSION['submitStatus'] = array("code" => 200, "message" => "Profile Updated Successfully");
        header("Location:../profile");
        exit();
    } else {
        $_SESSION['submitStatus'] = array("code" => 201, "message" => "Something Went Wrong");
        header("Location:../profile");
        exit();
    }
}


if (isset($_POST['register'])) {
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $dob = $_POST['dob'];
    $father = $_POST['father'];
    $address = $_POST['address'];
    $pass = $_POST['pass'];
    $c_pass = $_POST['c_pass'];
    $reg_date = date('Y-m-d H:i:s');
    $id = rand(1111111, 9999999);
    $user_id = "A2Z" . $id;
    if ($pass != $c_pass) {
        $_SESSION['submitStatus'] = array("code" => 201, "message" => "Confirm Password Doesn't Match");
        header("Location:../register");
        exit;
    }
    $upload_directory = "uploads/";
    $photo_name = $_FILES['photo']['name'];
    $photo_temp = $_FILES['photo']['tmp_name'];
    $photo_path = $upload_directory . basename($photo_name);
    $cv_name = $_FILES['cv']['name'];
    $cv_temp = $_FILES['cv']['tmp_name'];
    $cv_path = $upload_directory . basename($cv_name);

    if (move_uploaded_file($photo_temp, $photo_path) && move_uploaded_file($cv_temp, $cv_path)) {

        $query = mysqli_query($conn, "INSERT INTO user(user_id, name, gender, email, phone, dob, father, address, photo, cv, pass, reg_date, block_status, job_status) 
                                      VALUES ('$user_id','$name','$gender','$email','$phone','$dob','$father','$address','$photo_name','$cv_name','$c_pass','$reg_date','0','0')");

        if ($query) {
            $_SESSION['userDetails'] = array(
                "user_id" => $user_id,
                "email" => $email,
                "password" => $c_pass
            );
            header("Location:../../credential");
        } else {
            $_SESSION['submitStatus'] = array("code" => 201, "message" => "Something Went Wrong");
            header("Location:../../register");
        }
    } else {
        $_SESSION['submitStatus'] = array("code" => 201, "message" => "File Upload Failed");
        header("Location:../../register");
    }
}

if (isset($_REQUEST['login'])) {
    $user_id = $_REQUEST['user_id'];
    $password = $_REQUEST['password'];
    move_to_dashboard($user_id, $password);
}

function move_to_dashboard($user, $pass) {
    global $conn; // Ensure that $conn is available and properly initialized

    // Escape user inputs for security
    $user_id = $conn->real_escape_string($user);
    $password = $conn->real_escape_string($pass);

    // Perform the queries
    $query = mysqli_query($conn, "SELECT * FROM user WHERE user_id='$user_id' AND pass='$password'  AND block_status='0'");
    
    $query2 = mysqli_query($conn, "SELECT * FROM user WHERE user_id='$user_id' AND pass='$password' AND block_status='1'");

    // Check query results and handle accordingly
    if (mysqli_num_rows($query) == 1) {
        $_SESSION['session_id'] = session_id();
        $_SESSION['user_id'] = $user_id;
        header("Location:../index");
        exit(); // Prevent further script execution
    } elseif (mysqli_num_rows($query2) == 1) {
        $_SESSION['submitStatus'] = array("code" => 201, "message" => "Your account is blocked.");
        header("Location:../../login");
        exit(); // Prevent further script execution
    } else {
        $_SESSION['submitStatus'] = array("code" => 201, "message" => "Your User id Or Password Doesn't Match.");
        header("Location:../../login");
        exit(); // Prevent further script execution
    }
}

?>

