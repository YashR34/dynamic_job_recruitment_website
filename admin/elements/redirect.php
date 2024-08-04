<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);
ini_set('memory_limit', '-1');

include("../../config/connection.php");


if(isset($_REQUEST['company_name'])){
	$id=$_REQUEST['id'];
	$comp_name=$_REQUEST['comp_name'];
	
	
	$query=mysqli_query($conn,"UPDATE apply SET company_name='$comp_name' WHERE id='$id'");
	if( $query ){
         $_SESSION['submitStatus']= array("code" => 200, "message" => " Success");
         header("Location:../user-company-info?myid=$id");
    }else{
         $_SESSION['submitStatus']= array("code" => 201, "message" => "Something Went Wrong");
         header("Location:../user-company-info?myid=$id");
    } 
	

}

if(isset($_REQUEST['company_contact'])){
	
	
	$email=$_REQUEST['email'];
	$phone=$_REQUEST['phone'];
	
	$address=$_REQUEST['address'];
	
    
	$query=mysqli_query($conn,"UPDATE company_contact SET `address`='$address',`phone`='$phone',`email`='$email' ");
	if( $query ){
         $_SESSION['submitStatus']= array("code" => 200, "message" => "Updated Successfully");
         header("Location:../company-contact");
    }else{
         $_SESSION['submitStatus']= array("code" => 201, "message" => "Something Went Wrong");
         header("Location:../company-contact");
    } 
	

} 

if(isset($_REQUEST['homepopular'])){
	$pop_one=$_REQUEST['pop_one'];
	$pop_two=$_REQUEST['pop_two'];
	$pop_three=$_REQUEST['pop_three'];
	$pop_four=$_REQUEST['pop_four'];
	$pop_five=$_REQUEST['pop_five'];
	$pop_six=$_REQUEST['pop_six'];
	
	$query=mysqli_query($conn,"UPDATE index_pop SET pop_one='$pop_one',pop_two='$pop_two',pop_three='$pop_three',pop_four='$pop_four',pop_five='$pop_five',pop_six ='$pop_six'");
	if( $query ){
         $_SESSION['submitStatus']= array("code" => 200, "message" => "Updated Successfully");
         header("Location:../pop-search");
    }else{
         $_SESSION['submitStatus']= array("code" => 201, "message" => "Something Went Wrong");
         header("Location:../pop-search");
    } 
	

}

if (isset($_POST['hometrending'])) {

    $id= $_POST['id'];
    $job_name = $_POST['job_name'];
    
    
    $job_icon = $_FILES['job_icon']['name'];
    
    $temp_job_icon = $_FILES['job_icon']['tmp_name'];
    
    $upload_directory = "uploads/";

    $sql_fetch = "SELECT 
                 job_icon 
                 FROM index_trend WHERE id = '$id'";
                 
    $result = $conn->query($sql_fetch);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $default_job_icon = $row['job_icon'];
           
    } else {
        
        $_SESSION['submitStatus'] = array("code" => 201, "message" => "Invalid record ID");
        header("Location:../trending-category-form?myid=$id");
        exit;
    }

    
    if (!empty($job_icon)) {
        move_uploaded_file($temp_job_icon, $upload_directory . $job_icon);
        $job_icon =  $job_icon;
    } else {
        $job_icon = $default_job_icon;
    }

    $sql_update = "UPDATE index_trend SET job_icon='$job_icon',`job_name`='$job_name' WHERE id='$id'";

    if ($conn->query($sql_update) === TRUE) {
        $_SESSION['submitStatus'] = array("code" => 200, "message" => "Updated Successfully");
        header("Location:../trending-category-form?myid=$id");
    } else {
        $_SESSION['submitStatus'] = array("code" => 201, "message" => "Something Went Wrong");
        header("Location:../trending-category-form?myid=?$id");
    }
}

if (isset($_POST['homepopjob'])) {

    $id= $_POST['id'];
    $job_name = $_POST['job_name'];
    $job_by=$_POST['job_by'];
    $job_loc=$_POST['job_loc'];
    $job_tag_one=$_POST['job_tag_one'];
    $job_tag_two=$_POST['job_tag_two'];
    $job_tag_three=$_POST['job_tag_three'];
    $salary =$_POST['salary'];
    
    $job_icon = $_FILES['job_icon']['name'];
    
    $temp_job_icon = $_FILES['job_icon']['tmp_name'];
    
    $upload_directory = "uploads/";

    $sql_fetch = "SELECT 
                 job_icon 
                 FROM index_popjob WHERE id = '$id'";
                 
    $result = $conn->query($sql_fetch);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $default_job_icon = $row['job_icon'];
           
    } else {
        
        $_SESSION['submitStatus'] = array("code" => 201, "message" => "Invalid record ID");
        header("Location:../pop-job-form?myid=$id");
        exit;
    }

    
    if (!empty($job_icon)) {
        move_uploaded_file($temp_job_icon, $upload_directory . $job_icon);
        $job_icon =  $job_icon;
    } else {
        $job_icon = $default_job_icon;
    }

    $sql_update = "UPDATE index_popjob SET job_icon='$job_icon',job_name='$job_name',job_by='$job_by',job_loc='$job_loc',job_tag_one='$job_tag_one',job_tag_two='$job_tag_two',job_tag_three='$job_tag_three',salary='$salary' WHERE id='$id'";

    if ($conn->query($sql_update) === TRUE) {
        $_SESSION['submitStatus'] = array("code" => 200, "message" => "Updated Successfully");
        header("Location:../pop-job-form?myid=$id");
    } else {
        $_SESSION['submitStatus'] = array("code" => 201, "message" => "Something Went Wrong");
        header("Location:../pop-job-form?myid=?$id");
    }
}

if (isset($_POST['homecompany'])) {

    $id= $_POST['id'];

    $comp = $_POST['comp'];

    $company = $_FILES['company']['name'];
    
    $temp_company = $_FILES['company']['tmp_name'];
    
    $upload_directory = "uploads/";

    $sql_fetch = "SELECT 
                 company 
                 FROM index_company WHERE id = '$id'";
                 
    $result = $conn->query($sql_fetch);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $default_company = $row['company'];
           
    } else {
        
        $_SESSION['submitStatus'] = array("code" => 201, "message" => "Invalid record ID");
        header("Location:../company-form?myid=$id");
        exit;
    }

    
    if (!empty($company)) {
        move_uploaded_file($temp_company, $upload_directory . $company);
        $company =  $company;
    } else {
        $company = $default_company;
    }

    $sql_update = "UPDATE index_company SET comp='$comp',company='$company' WHERE id='$id'";

    if ($conn->query($sql_update) === TRUE) {
        $_SESSION['submitStatus'] = array("code" => 200, "message" => "Updated Successfully");
        header("Location:../company-form?myid=$id");
    } else {
        $_SESSION['submitStatus'] = array("code" => 201, "message" => "Something Went Wrong");
        header("Location:../company-form?myid=?$id");
    }
}

if (isset($_POST['homereview'])) {

    $id= $_POST['id'];

    $customer_name = $_POST['customer_name'];

    $review = $_POST['review'];

    $customer_img = $_FILES['customer_img']['name'];
    
    $temp_customer_img = $_FILES['customer_img']['tmp_name'];
    
    $upload_directory = "uploads/";

    $sql_fetch = "SELECT 
                 customer_img 
                 FROM index_review WHERE id = '$id'";
                 
    $result = $conn->query($sql_fetch);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $default_customer_img = $row['customer_img'];
           
    } else {
        
        $_SESSION['submitStatus'] = array("code" => 201, "message" => "Invalid record ID");
        header("Location:../review-form?myid=$id");
        exit;
    }

    
    if (!empty($customer_img)) {
        move_uploaded_file($temp_customer_img, $upload_directory . $customer_img);
        $customer_img =  $customer_img;
    } else {
        $customer_img = $default_customer_img;
    }

    $sql_update = "UPDATE index_review SET customer_img='$customer_img',customer_name='$customer_name',review='$review' WHERE id='$id'";

    if ($conn->query($sql_update) === TRUE) {
        $_SESSION['submitStatus'] = array("code" => 200, "message" => "Updated Successfully");
        header("Location:../review-form?myid=$id");
    } else {
        $_SESSION['submitStatus'] = array("code" => 201, "message" => "Something Went Wrong");
        header("Location:../review-form?myid=?$id");
    }
}

if (isset($_POST['adminadd'])) {

    $id= $_POST['id'];
    $job_name = $_POST['job_name'];
    $job_by=$_POST['job_by'];
    $job_loc=$_POST['job_loc'];
    $job_tag_one=$_POST['job_tag_one'];
    $job_tag_two=$_POST['job_tag_two'];
    $job_tag_three=$_POST['job_tag_three'];
    $salary =$_POST['salary'];
    
    $job_icon = $_FILES['job_icon']['name'];
    
    $temp_job_icon = $_FILES['job_icon']['tmp_name'];
    
    $upload_directory = "uploads/";

    move_uploaded_file($temp_job_icon, $upload_directory . $job_icon);

    $sql_update = "INSERT INTO administrative_popjob( job_icon, job_name, job_by, job_loc, job_tag_one, job_tag_two, job_tag_three, salary) 
                   VALUES ('$job_icon','$job_name','$job_by','$job_loc','$job_tag_one','$job_tag_two','$job_tag_three','$salary')";

    if ($conn->query($sql_update) === TRUE) {
        $_SESSION['submitStatus'] = array("code" => 200, "message" => "Inserted Successfully");
        header("Location:../administrative");
    } else {
        $_SESSION['submitStatus'] = array("code" => 201, "message" => "Something Went Wrong");
        header("Location:../administrative");
    }
}

if (isset($_POST['adminpopjob'])) {

    $id= $_POST['id'];
    $job_name = $_POST['job_name'];
    $job_by=$_POST['job_by'];
    $job_loc=$_POST['job_loc'];
    $job_tag_one=$_POST['job_tag_one'];
    $job_tag_two=$_POST['job_tag_two'];
    $job_tag_three=$_POST['job_tag_three'];
    $salary =$_POST['salary'];
    
    $job_icon = $_FILES['job_icon']['name'];
    
    $temp_job_icon = $_FILES['job_icon']['tmp_name'];
    
    $upload_directory = "uploads/";

    $sql_fetch = "SELECT 
                 job_icon 
                 FROM administrative_popjob WHERE id = '$id'";
                 
    $result = $conn->query($sql_fetch);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $default_job_icon = $row['job_icon'];
           
    } else {
        
        $_SESSION['submitStatus'] = array("code" => 201, "message" => "Invalid record ID");
        header("Location:../administrative-update-form?myid=$id");
        exit;
    }

    
    if (!empty($job_icon)) {
        move_uploaded_file($temp_job_icon, $upload_directory . $job_icon);
        $job_icon =  $job_icon;
    } else {
        $job_icon = $default_job_icon;
    }

    $sql_update = "UPDATE administrative_popjob SET job_icon='$job_icon',job_name='$job_name',job_by='$job_by',job_loc='$job_loc',job_tag_one='$job_tag_one',job_tag_two='$job_tag_two',job_tag_three='$job_tag_three',salary='$salary' WHERE id='$id'";

    if ($conn->query($sql_update) === TRUE) {
        $_SESSION['submitStatus'] = array("code" => 200, "message" => "Updated Successfully");
        header("Location:../administrative-update-form?myid=$id");
    } else {
        $_SESSION['submitStatus'] = array("code" => 201, "message" => "Something Went Wrong");
        header("Location:../administrative-update-form?myid=?$id");
    }
}

if (isset($_POST['constructadd'])) {

    $id= $_POST['id'];
    $job_name = $_POST['job_name'];
    $job_by=$_POST['job_by'];
    $job_loc=$_POST['job_loc'];
    $job_tag_one=$_POST['job_tag_one'];
    $job_tag_two=$_POST['job_tag_two'];
    $job_tag_three=$_POST['job_tag_three'];
    $salary =$_POST['salary'];
    
    $job_icon = $_FILES['job_icon']['name'];
    
    $temp_job_icon = $_FILES['job_icon']['tmp_name'];
    
    $upload_directory = "uploads/";

    move_uploaded_file($temp_job_icon, $upload_directory . $job_icon);

    $sql_update = "INSERT INTO construction_popjob( job_icon, job_name, job_by, job_loc, job_tag_one, job_tag_two, job_tag_three, salary) 
                   VALUES ('$job_icon','$job_name','$job_by','$job_loc','$job_tag_one','$job_tag_two','$job_tag_three','$salary')";

    if ($conn->query($sql_update) === TRUE) {
        $_SESSION['submitStatus'] = array("code" => 200, "message" => "Inserted Successfully");
        header("Location:../construction");
    } else {
        $_SESSION['submitStatus'] = array("code" => 201, "message" => "Something Went Wrong");
        header("Location:../construction");
    }
}

if (isset($_POST['constructpopjob'])) {

    $id= $_POST['id'];
    $job_name = $_POST['job_name'];
    $job_by=$_POST['job_by'];
    $job_loc=$_POST['job_loc'];
    $job_tag_one=$_POST['job_tag_one'];
    $job_tag_two=$_POST['job_tag_two'];
    $job_tag_three=$_POST['job_tag_three'];
    $salary =$_POST['salary'];
    
    $job_icon = $_FILES['job_icon']['name'];
    
    $temp_job_icon = $_FILES['job_icon']['tmp_name'];
    
    $upload_directory = "uploads/";

    $sql_fetch = "SELECT 
                 job_icon 
                 FROM construction_popjob WHERE id = '$id'";
                 
    $result = $conn->query($sql_fetch);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $default_job_icon = $row['job_icon'];
           
    } else {
        
        $_SESSION['submitStatus'] = array("code" => 201, "message" => "Invalid record ID");
        header("Location:../construction-update-form?myid=$id");
        exit;
    }

    
    if (!empty($job_icon)) {
        move_uploaded_file($temp_job_icon, $upload_directory . $job_icon);
        $job_icon =  $job_icon;
    } else {
        $job_icon = $default_job_icon;
    }

    $sql_update = "UPDATE construction_popjob SET job_icon='$job_icon',job_name='$job_name',job_by='$job_by',job_loc='$job_loc',job_tag_one='$job_tag_one',job_tag_two='$job_tag_two',job_tag_three='$job_tag_three',salary='$salary' WHERE id='$id'";

    if ($conn->query($sql_update) === TRUE) {
        $_SESSION['submitStatus'] = array("code" => 200, "message" => "Updated Successfully");
        header("Location:../construction-update-form?myid=$id");
    } else {
        $_SESSION['submitStatus'] = array("code" => 201, "message" => "Something Went Wrong");
        header("Location:../construction-update-form?myid=?$id");
    }
}

if (isset($_POST['csadd'])) {

    $id= $_POST['id'];
    $job_name = $_POST['job_name'];
    $job_by=$_POST['job_by'];
    $job_loc=$_POST['job_loc'];
    $job_tag_one=$_POST['job_tag_one'];
    $job_tag_two=$_POST['job_tag_two'];
    $job_tag_three=$_POST['job_tag_three'];
    $salary =$_POST['salary'];
    
    $job_icon = $_FILES['job_icon']['name'];
    
    $temp_job_icon = $_FILES['job_icon']['tmp_name'];
    
    $upload_directory = "uploads/";

    move_uploaded_file($temp_job_icon, $upload_directory . $job_icon);

    $sql_update = "INSERT INTO customer_service_popjob( job_icon, job_name, job_by, job_loc, job_tag_one, job_tag_two, job_tag_three, salary) 
                   VALUES ('$job_icon','$job_name','$job_by','$job_loc','$job_tag_one','$job_tag_two','$job_tag_three','$salary')";

    if ($conn->query($sql_update) === TRUE) {
        $_SESSION['submitStatus'] = array("code" => 200, "message" => "Inserted Successfully");
        header("Location:../customer-service");
    } else {
        $_SESSION['submitStatus'] = array("code" => 201, "message" => "Something Went Wrong");
        header("Location:../customer-service");
    }
}

if (isset($_POST['cspopjob'])) {

    $id= $_POST['id'];
    $job_name = $_POST['job_name'];
    $job_by=$_POST['job_by'];
    $job_loc=$_POST['job_loc'];
    $job_tag_one=$_POST['job_tag_one'];
    $job_tag_two=$_POST['job_tag_two'];
    $job_tag_three=$_POST['job_tag_three'];
    $salary =$_POST['salary'];
    
    $job_icon = $_FILES['job_icon']['name'];
    
    $temp_job_icon = $_FILES['job_icon']['tmp_name'];
    
    $upload_directory = "uploads/";

    $sql_fetch = "SELECT 
                 job_icon 
                 FROM customer_service_popjob WHERE id = '$id'";
                 
    $result = $conn->query($sql_fetch);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $default_job_icon = $row['job_icon'];
           
    } else {
        
        $_SESSION['submitStatus'] = array("code" => 201, "message" => "Invalid record ID");
        header("Location:../customer-service-update-form?myid=$id");
        exit;
    }

    
    if (!empty($job_icon)) {
        move_uploaded_file($temp_job_icon, $upload_directory . $job_icon);
        $job_icon =  $job_icon;
    } else {
        $job_icon = $default_job_icon;
    }

    $sql_update = "UPDATE customer_service_popjob SET job_icon='$job_icon',job_name='$job_name',job_by='$job_by',job_loc='$job_loc',job_tag_one='$job_tag_one',job_tag_two='$job_tag_two',job_tag_three='$job_tag_three',salary='$salary' WHERE id='$id'";

    if ($conn->query($sql_update) === TRUE) {
        $_SESSION['submitStatus'] = array("code" => 200, "message" => "Updated Successfully");
        header("Location:../customer-service-update-form?myid=$id");
    } else {
        $_SESSION['submitStatus'] = array("code" => 201, "message" => "Something Went Wrong");
        header("Location:../customer-service-update-form?myid=?$id");
    }
}

if (isset($_POST['eduadd'])) {

    $id= $_POST['id'];
    $job_name = $_POST['job_name'];
    $job_by=$_POST['job_by'];
    $job_loc=$_POST['job_loc'];
    $job_tag_one=$_POST['job_tag_one'];
    $job_tag_two=$_POST['job_tag_two'];
    $job_tag_three=$_POST['job_tag_three'];
    $salary =$_POST['salary'];
    
    $job_icon = $_FILES['job_icon']['name'];
    
    $temp_job_icon = $_FILES['job_icon']['tmp_name'];
    
    $upload_directory = "uploads/";

    move_uploaded_file($temp_job_icon, $upload_directory . $job_icon);

    $sql_update = "INSERT INTO education_popjob( job_icon, job_name, job_by, job_loc, job_tag_one, job_tag_two, job_tag_three, salary) 
                   VALUES ('$job_icon','$job_name','$job_by','$job_loc','$job_tag_one','$job_tag_two','$job_tag_three','$salary')";

    if ($conn->query($sql_update) === TRUE) {
        $_SESSION['submitStatus'] = array("code" => 200, "message" => "Inserted Successfully");
        header("Location:../education");
    } else {
        $_SESSION['submitStatus'] = array("code" => 201, "message" => "Something Went Wrong");
        header("Location:../education");
    }
}

if (isset($_POST['edupopjob'])) {

    $id= $_POST['id'];
    $job_name = $_POST['job_name'];
    $job_by=$_POST['job_by'];
    $job_loc=$_POST['job_loc'];
    $job_tag_one=$_POST['job_tag_one'];
    $job_tag_two=$_POST['job_tag_two'];
    $job_tag_three=$_POST['job_tag_three'];
    $salary =$_POST['salary'];
    
    $job_icon = $_FILES['job_icon']['name'];
    
    $temp_job_icon = $_FILES['job_icon']['tmp_name'];
    
    $upload_directory = "uploads/";

    $sql_fetch = "SELECT 
                 job_icon 
                 FROM education_popjob WHERE id = '$id'";
                 
    $result = $conn->query($sql_fetch);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $default_job_icon = $row['job_icon'];
           
    } else {
        
        $_SESSION['submitStatus'] = array("code" => 201, "message" => "Invalid record ID");
        header("Location:../education-update-form?myid=$id");
        exit;
    }

    
    if (!empty($job_icon)) {
        move_uploaded_file($temp_job_icon, $upload_directory . $job_icon);
        $job_icon =  $job_icon;
    } else {
        $job_icon = $default_job_icon;
    }

    $sql_update = "UPDATE education_popjob SET job_icon='$job_icon',job_name='$job_name',job_by='$job_by',job_loc='$job_loc',job_tag_one='$job_tag_one',job_tag_two='$job_tag_two',job_tag_three='$job_tag_three',salary='$salary' WHERE id='$id'";

    if ($conn->query($sql_update) === TRUE) {
        $_SESSION['submitStatus'] = array("code" => 200, "message" => "Updated Successfully");
        header("Location:../education-update-form?myid=$id");
    } else {
        $_SESSION['submitStatus'] = array("code" => 201, "message" => "Something Went Wrong");
        header("Location:../education-update-form?myid=?$id");
    }
} 

if (isset($_POST['finadd'])) {

    $id= $_POST['id'];
    $job_name = $_POST['job_name'];
    $job_by=$_POST['job_by'];
    $job_loc=$_POST['job_loc'];
    $job_tag_one=$_POST['job_tag_one'];
    $job_tag_two=$_POST['job_tag_two'];
    $job_tag_three=$_POST['job_tag_three'];
    $salary =$_POST['salary'];
    
    $job_icon = $_FILES['job_icon']['name'];
    
    $temp_job_icon = $_FILES['job_icon']['tmp_name'];
    
    $upload_directory = "uploads/";

    move_uploaded_file($temp_job_icon, $upload_directory . $job_icon);

    $sql_update = "INSERT INTO finance_popjob( job_icon, job_name, job_by, job_loc, job_tag_one, job_tag_two, job_tag_three, salary) 
                   VALUES ('$job_icon','$job_name','$job_by','$job_loc','$job_tag_one','$job_tag_two','$job_tag_three','$salary')";

    if ($conn->query($sql_update) === TRUE) {
        $_SESSION['submitStatus'] = array("code" => 200, "message" => "Inserted Successfully");
        header("Location:../finance");
    } else {
        $_SESSION['submitStatus'] = array("code" => 201, "message" => "Something Went Wrong");
        header("Location:../finance");
    }
}

if (isset($_POST['finpopjob'])) {

    $id= $_POST['id'];
    $job_name = $_POST['job_name'];
    $job_by=$_POST['job_by'];
    $job_loc=$_POST['job_loc'];
    $job_tag_one=$_POST['job_tag_one'];
    $job_tag_two=$_POST['job_tag_two'];
    $job_tag_three=$_POST['job_tag_three'];
    $salary =$_POST['salary'];
    
    $job_icon = $_FILES['job_icon']['name'];
    
    $temp_job_icon = $_FILES['job_icon']['tmp_name'];
    
    $upload_directory = "uploads/";

    $sql_fetch = "SELECT 
                 job_icon 
                 FROM finance_popjob WHERE id = '$id'";
                 
    $result = $conn->query($sql_fetch);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $default_job_icon = $row['job_icon'];
           
    } else {
        
        $_SESSION['submitStatus'] = array("code" => 201, "message" => "Invalid record ID");
        header("Location:../finance-update-form?myid=$id");
        exit;
    }

    
    if (!empty($job_icon)) {
        move_uploaded_file($temp_job_icon, $upload_directory . $job_icon);
        $job_icon =  $job_icon;
    } else {
        $job_icon = $default_job_icon;
    }

    $sql_update = "UPDATE finance_popjob SET job_icon='$job_icon',job_name='$job_name',job_by='$job_by',job_loc='$job_loc',job_tag_one='$job_tag_one',job_tag_two='$job_tag_two',job_tag_three='$job_tag_three',salary='$salary' WHERE id='$id'";

    if ($conn->query($sql_update) === TRUE) {
        $_SESSION['submitStatus'] = array("code" => 200, "message" => "Updated Successfully");
        header("Location:../finance-update-form?myid=$id");
    } else {
        $_SESSION['submitStatus'] = array("code" => 201, "message" => "Something Went Wrong");
        header("Location:../finance-update-form?myid=?$id");
    }
}

if (isset($_POST['hcadd'])) {

    $id= $_POST['id'];
    $job_name = $_POST['job_name'];
    $job_by=$_POST['job_by'];
    $job_loc=$_POST['job_loc'];
    $job_tag_one=$_POST['job_tag_one'];
    $job_tag_two=$_POST['job_tag_two'];
    $job_tag_three=$_POST['job_tag_three'];
    $salary =$_POST['salary'];
    
    $job_icon = $_FILES['job_icon']['name'];
    
    $temp_job_icon = $_FILES['job_icon']['tmp_name'];
    
    $upload_directory = "uploads/";

    move_uploaded_file($temp_job_icon, $upload_directory . $job_icon);

    $sql_update = "INSERT INTO healthcare_popjob( job_icon, job_name, job_by, job_loc, job_tag_one, job_tag_two, job_tag_three, salary) 
                   VALUES ('$job_icon','$job_name','$job_by','$job_loc','$job_tag_one','$job_tag_two','$job_tag_three','$salary')";

    if ($conn->query($sql_update) === TRUE) {
        $_SESSION['submitStatus'] = array("code" => 200, "message" => "Inserted Successfully");
        header("Location:../healthcare");
    } else {
        $_SESSION['submitStatus'] = array("code" => 201, "message" => "Something Went Wrong");
        header("Location:../healthcare");
    }
}

if (isset($_POST['hcpopjob'])) {

    $id= $_POST['id'];
    $job_name = $_POST['job_name'];
    $job_by=$_POST['job_by'];
    $job_loc=$_POST['job_loc'];
    $job_tag_one=$_POST['job_tag_one'];
    $job_tag_two=$_POST['job_tag_two'];
    $job_tag_three=$_POST['job_tag_three'];
    $salary =$_POST['salary'];
    
    $job_icon = $_FILES['job_icon']['name'];
    
    $temp_job_icon = $_FILES['job_icon']['tmp_name'];
    
    $upload_directory = "uploads/";

    $sql_fetch = "SELECT 
                 job_icon 
                 FROM healthcare_popjob WHERE id = '$id'";
                 
    $result = $conn->query($sql_fetch);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $default_job_icon = $row['job_icon'];
           
    } else {
        
        $_SESSION['submitStatus'] = array("code" => 201, "message" => "Invalid record ID");
        header("Location:../heathcare-update-form?myid=$id");
        exit;
    }

    
    if (!empty($job_icon)) {
        move_uploaded_file($temp_job_icon, $upload_directory . $job_icon);
        $job_icon =  $job_icon;
    } else {
        $job_icon = $default_job_icon;
    }

    $sql_update = "UPDATE healthcare_popjob SET job_icon='$job_icon',job_name='$job_name',job_by='$job_by',job_loc='$job_loc',job_tag_one='$job_tag_one',job_tag_two='$job_tag_two',job_tag_three='$job_tag_three',salary='$salary' WHERE id='$id'";

    if ($conn->query($sql_update) === TRUE) {
        $_SESSION['submitStatus'] = array("code" => 200, "message" => "Updated Successfully");
        header("Location:../healthcare-update-form?myid=$id");
    } else {
        $_SESSION['submitStatus'] = array("code" => 201, "message" => "Something Went Wrong");
        header("Location:../healthcare-update-form?myid=?$id");
    }
}

if (isset($_POST['htadd'])) {

    $id= $_POST['id'];
    $job_name = $_POST['job_name'];
    $job_by=$_POST['job_by'];
    $job_loc=$_POST['job_loc'];
    $job_tag_one=$_POST['job_tag_one'];
    $job_tag_two=$_POST['job_tag_two'];
    $job_tag_three=$_POST['job_tag_three'];
    $salary =$_POST['salary'];
    
    $job_icon = $_FILES['job_icon']['name'];
    
    $temp_job_icon = $_FILES['job_icon']['tmp_name'];
    
    $upload_directory = "uploads/";

    move_uploaded_file($temp_job_icon, $upload_directory . $job_icon);

    $sql_update = "INSERT INTO hospitality_popjob( job_icon, job_name, job_by, job_loc, job_tag_one, job_tag_two, job_tag_three, salary) 
                   VALUES ('$job_icon','$job_name','$job_by','$job_loc','$job_tag_one','$job_tag_two','$job_tag_three','$salary')";

    if ($conn->query($sql_update) === TRUE) {
        $_SESSION['submitStatus'] = array("code" => 200, "message" => "Inserted Successfully");
        header("Location:../tourism");
    } else {
        $_SESSION['submitStatus'] = array("code" => 201, "message" => "Something Went Wrong");
        header("Location:../tourism");
    }
}

if (isset($_POST['htpopjob'])) {

    $id= $_POST['id'];
    $job_name = $_POST['job_name'];
    $job_by=$_POST['job_by'];
    $job_loc=$_POST['job_loc'];
    $job_tag_one=$_POST['job_tag_one'];
    $job_tag_two=$_POST['job_tag_two'];
    $job_tag_three=$_POST['job_tag_three'];
    $salary =$_POST['salary'];
    
    $job_icon = $_FILES['job_icon']['name'];
    
    $temp_job_icon = $_FILES['job_icon']['tmp_name'];
    
    $upload_directory = "uploads/";

    $sql_fetch = "SELECT 
                 job_icon 
                 FROM hospitality_popjob WHERE id = '$id'";
                 
    $result = $conn->query($sql_fetch);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $default_job_icon = $row['job_icon'];
           
    } else {
        
        $_SESSION['submitStatus'] = array("code" => 201, "message" => "Invalid record ID");
        header("Location:../tourism-update-form?myid=$id");
        exit;
    }

    
    if (!empty($job_icon)) {
        move_uploaded_file($temp_job_icon, $upload_directory . $job_icon);
        $job_icon =  $job_icon;
    } else {
        $job_icon = $default_job_icon;
    }

    $sql_update = "UPDATE hospitality_popjob SET job_icon='$job_icon',job_name='$job_name',job_by='$job_by',job_loc='$job_loc',job_tag_one='$job_tag_one',job_tag_two='$job_tag_two',job_tag_three='$job_tag_three',salary='$salary' WHERE id='$id'";

    if ($conn->query($sql_update) === TRUE) {
        $_SESSION['submitStatus'] = array("code" => 200, "message" => "Updated Successfully");
        header("Location:../tourism-update-form?myid=$id");
    } else {
        $_SESSION['submitStatus'] = array("code" => 201, "message" => "Something Went Wrong");
        header("Location:../tourism-update-form?myid=?$id");
    }
}

if (isset($_POST['hradd'])) {

    $id= $_POST['id'];
    $job_name = $_POST['job_name'];
    $job_by=$_POST['job_by'];
    $job_loc=$_POST['job_loc'];
    $job_tag_one=$_POST['job_tag_one'];
    $job_tag_two=$_POST['job_tag_two'];
    $job_tag_three=$_POST['job_tag_three'];
    $salary =$_POST['salary'];
    
    $job_icon = $_FILES['job_icon']['name'];
    
    $temp_job_icon = $_FILES['job_icon']['tmp_name'];
    
    $upload_directory = "uploads/";

    move_uploaded_file($temp_job_icon, $upload_directory . $job_icon);

    $sql_update = "INSERT INTO hr_popjob( job_icon, job_name, job_by, job_loc, job_tag_one, job_tag_two, job_tag_three, salary) 
                   VALUES ('$job_icon','$job_name','$job_by','$job_loc','$job_tag_one','$job_tag_two','$job_tag_three','$salary')";

    if ($conn->query($sql_update) === TRUE) {
        $_SESSION['submitStatus'] = array("code" => 200, "message" => "Inserted Successfully");
        header("Location:../human-resource");
    } else {
        $_SESSION['submitStatus'] = array("code" => 201, "message" => "Something Went Wrong");
        header("Location:../human-resource");
    }
}

if (isset($_POST['hrpopjob'])) {

    $id= $_POST['id'];
    $job_name = $_POST['job_name'];
    $job_by=$_POST['job_by'];
    $job_loc=$_POST['job_loc'];
    $job_tag_one=$_POST['job_tag_one'];
    $job_tag_two=$_POST['job_tag_two'];
    $job_tag_three=$_POST['job_tag_three'];
    $salary =$_POST['salary'];
    
    $job_icon = $_FILES['job_icon']['name'];
    
    $temp_job_icon = $_FILES['job_icon']['tmp_name'];
    
    $upload_directory = "uploads/";

    $sql_fetch = "SELECT 
                 job_icon 
                 FROM hr_popjob WHERE id = '$id'";
                 
    $result = $conn->query($sql_fetch);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $default_job_icon = $row['job_icon'];
           
    } else {
        
        $_SESSION['submitStatus'] = array("code" => 201, "message" => "Invalid record ID");
        header("Location:../human-resource-update-form?myid=$id");
        exit;
    }

    
    if (!empty($job_icon)) {
        move_uploaded_file($temp_job_icon, $upload_directory . $job_icon);
        $job_icon =  $job_icon;
    } else {
        $job_icon = $default_job_icon;
    }

    $sql_update = "UPDATE hr_popjob SET job_icon='$job_icon',job_name='$job_name',job_by='$job_by',job_loc='$job_loc',job_tag_one='$job_tag_one',job_tag_two='$job_tag_two',job_tag_three='$job_tag_three',salary='$salary' WHERE id='$id'";

    if ($conn->query($sql_update) === TRUE) {
        $_SESSION['submitStatus'] = array("code" => 200, "message" => "Updated Successfully");
        header("Location:../human-resource-update-form?myid=$id");
    } else {
        $_SESSION['submitStatus'] = array("code" => 201, "message" => "Something Went Wrong");
        header("Location:../human-resource-update-form?myid=?$id");
    }
}

if (isset($_POST['markadd'])) {

    $id= $_POST['id'];
    $job_name = $_POST['job_name'];
    $job_by=$_POST['job_by'];
    $job_loc=$_POST['job_loc'];
    $job_tag_one=$_POST['job_tag_one'];
    $job_tag_two=$_POST['job_tag_two'];
    $job_tag_three=$_POST['job_tag_three'];
    $salary =$_POST['salary'];
    
    $job_icon = $_FILES['job_icon']['name'];
    
    $temp_job_icon = $_FILES['job_icon']['tmp_name'];
    
    $upload_directory = "uploads/";

    move_uploaded_file($temp_job_icon, $upload_directory . $job_icon);

    $sql_update = "INSERT INTO marketing_popjob( job_icon, job_name, job_by, job_loc, job_tag_one, job_tag_two, job_tag_three, salary) 
                   VALUES ('$job_icon','$job_name','$job_by','$job_loc','$job_tag_one','$job_tag_two','$job_tag_three','$salary')";

    if ($conn->query($sql_update) === TRUE) {
        $_SESSION['submitStatus'] = array("code" => 200, "message" => "Inserted Successfully");
        header("Location:../marketing");
    } else {
        $_SESSION['submitStatus'] = array("code" => 201, "message" => "Something Went Wrong");
        header("Location:../marketing");
    }
}

if (isset($_POST['markpopjob'])) {

    $id= $_POST['id'];
    $job_name = $_POST['job_name'];
    $job_by=$_POST['job_by'];
    $job_loc=$_POST['job_loc'];
    $job_tag_one=$_POST['job_tag_one'];
    $job_tag_two=$_POST['job_tag_two'];
    $job_tag_three=$_POST['job_tag_three'];
    $salary =$_POST['salary'];
    
    $job_icon = $_FILES['job_icon']['name'];
    
    $temp_job_icon = $_FILES['job_icon']['tmp_name'];
    
    $upload_directory = "uploads/";

    $sql_fetch = "SELECT 
                 job_icon 
                 FROM marketing_popjob WHERE id = '$id'";
                 
    $result = $conn->query($sql_fetch);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $default_job_icon = $row['job_icon'];
           
    } else {
        
        $_SESSION['submitStatus'] = array("code" => 201, "message" => "Invalid record ID");
        header("Location:../marketing-update-form?myid=$id");
        exit;
    }

    
    if (!empty($job_icon)) {
        move_uploaded_file($temp_job_icon, $upload_directory . $job_icon);
        $job_icon =  $job_icon;
    } else {
        $job_icon = $default_job_icon;
    }

    $sql_update = "UPDATE marketing_popjob SET job_icon='$job_icon',job_name='$job_name',job_by='$job_by',job_loc='$job_loc',job_tag_one='$job_tag_one',job_tag_two='$job_tag_two',job_tag_three='$job_tag_three',salary='$salary' WHERE id='$id'";

    if ($conn->query($sql_update) === TRUE) {
        $_SESSION['submitStatus'] = array("code" => 200, "message" => "Updated Successfully");
        header("Location:../marketing-update-form?myid=$id");
    } else {
        $_SESSION['submitStatus'] = array("code" => 201, "message" => "Something Went Wrong");
        header("Location:../marketing-update-form?myid=?$id");
    }
}

if (isset($_POST['retailadd'])) {

    $id= $_POST['id'];
    $job_name = $_POST['job_name'];
    $job_by=$_POST['job_by'];
    $job_loc=$_POST['job_loc'];
    $job_tag_one=$_POST['job_tag_one'];
    $job_tag_two=$_POST['job_tag_two'];
    $job_tag_three=$_POST['job_tag_three'];
    $salary =$_POST['salary'];
    
    $job_icon = $_FILES['job_icon']['name'];
    
    $temp_job_icon = $_FILES['job_icon']['tmp_name'];
    
    $upload_directory = "uploads/";

    move_uploaded_file($temp_job_icon, $upload_directory . $job_icon);

    $sql_update = "INSERT INTO retail_popjob( job_icon, job_name, job_by, job_loc, job_tag_one, job_tag_two, job_tag_three, salary) 
                   VALUES ('$job_icon','$job_name','$job_by','$job_loc','$job_tag_one','$job_tag_two','$job_tag_three','$salary')";

    if ($conn->query($sql_update) === TRUE) {
        $_SESSION['submitStatus'] = array("code" => 200, "message" => "Inserted Successfully");
        header("Location:../retail");
    } else {
        $_SESSION['submitStatus'] = array("code" => 201, "message" => "Something Went Wrong");
        header("Location:../retail");
    }
}

if (isset($_POST['retailpopjob'])) {

    $id= $_POST['id'];
    $job_name = $_POST['job_name'];
    $job_by=$_POST['job_by'];
    $job_loc=$_POST['job_loc'];
    $job_tag_one=$_POST['job_tag_one'];
    $job_tag_two=$_POST['job_tag_two'];
    $job_tag_three=$_POST['job_tag_three'];
    $salary =$_POST['salary'];
    
    $job_icon = $_FILES['job_icon']['name'];
    
    $temp_job_icon = $_FILES['job_icon']['tmp_name'];
    
    $upload_directory = "uploads/";

    $sql_fetch = "SELECT 
                 job_icon 
                 FROM retail_popjob WHERE id = '$id'";
                 
    $result = $conn->query($sql_fetch);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $default_job_icon = $row['job_icon'];
           
    } else {
        
        $_SESSION['submitStatus'] = array("code" => 201, "message" => "Invalid record ID");
        header("Location:../retail-update-form?myid=$id");
        exit;
    }

    
    if (!empty($job_icon)) {
        move_uploaded_file($temp_job_icon, $upload_directory . $job_icon);
        $job_icon =  $job_icon;
    } else {
        $job_icon = $default_job_icon;
    }

    $sql_update = "UPDATE retail_popjob SET job_icon='$job_icon',job_name='$job_name',job_by='$job_by',job_loc='$job_loc',job_tag_one='$job_tag_one',job_tag_two='$job_tag_two',job_tag_three='$job_tag_three',salary='$salary' WHERE id='$id'";

    if ($conn->query($sql_update) === TRUE) {
        $_SESSION['submitStatus'] = array("code" => 200, "message" => "Updated Successfully");
        header("Location:../retail-update-form?myid=$id");
    } else {
        $_SESSION['submitStatus'] = array("code" => 201, "message" => "Something Went Wrong");
        header("Location:../retail-update-form?myid=?$id");
    }
}

if(isset($_REQUEST['block_profile'])){
	$req_id=$_REQUEST['req_id'];
	
	$user_id=$_REQUEST['user_req'];
	
	
	mysqli_query($conn,"UPDATE user SET block_status='1'  WHERE user_id='$user_id'");
	   
	header("Location:../user-list");

}
if(isset($_REQUEST['unblock_profile'])){
	$req_id=$_REQUEST['req_id'];
	
	$user_id=$_REQUEST['user_req'];
	
	
	mysqli_query($conn,"UPDATE user SET block_status='0'  WHERE user_id='$user_id'");
	   
	header("Location:../user-blocked");

}

if(isset($_REQUEST['approve_user'])){
	$req_id=$_REQUEST['req_id'];
	
	$user_id=$_REQUEST['user_req'];
    $date=date('Y-m-d H:i:s');
	
	
	mysqli_query($conn,"UPDATE apply SET approve_status='1' ,approve_date='$date'  WHERE id='$req_id'");
	   
	header("Location:../user-job-pending");

}

if(isset($_REQUEST['verify'])){
	$req_id=$_REQUEST['req_id'];
	
	$user_id=$_REQUEST['user_req'];
    $date=date('Y-m-d H:i:s');
	
	
	mysqli_query($conn,"UPDATE payment SET check_status='1'  WHERE id='$req_id'");
	   
	header("Location:../user-payment");

}

if(isset($_REQUEST['login'])){
	$user_id=$_REQUEST['username'];
	$password=$_REQUEST['password'];
	move_to_dashboard($user_id,$password);

}
function move_to_dashboard($user_id,$pass){
	global $conn;
	$user_id = $conn->real_escape_string($user_id);
    $pass = $conn->real_escape_string($pass);
	$query=mysqli_query($conn,"SELECT * FROM admin WHERE username='$user_id' AND password='$pass'");
	if(mysqli_num_rows($query)==1){
		$_SESSION['session_id']=session_id();
		$_SESSION['user_id']=$user_id;

		header("Location:../dashboard");

	}
	else{
		header("Location:../index");
	}


} 
?>