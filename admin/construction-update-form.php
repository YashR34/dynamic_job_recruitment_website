<?php include_once("elements/connect.php");?>
<!doctype html>
<html lang="en">


<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--favicon-->
	
	<!--plugins-->
	<link href="assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
	<link href="assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
	<link href="assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
	<!-- loader-->
	<link href="assets/css/pace.min.css" rel="stylesheet" />
	<script src="assets/js/pace.min.js"></script>
	<!-- Bootstrap CSS -->
	<link href="assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="assets/css/bootstrap-extended.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&amp;display=swap" rel="stylesheet">
	<link href="assets/css/app.css" rel="stylesheet">
	<link href="assets/css/icons.css" rel="stylesheet">
	<!-- Theme Style CSS -->
	<link rel="stylesheet" href="assets/css/dark.css" />
	<style>
		input[type="file"].form-control::file-selector-button {
			color: #000!important; 

		}
        

        
    </style>
    
    
	
	<?php include("elements/header.php");?>
</head>

<body>
	<?php include("elements/navbar.php");?>
    <?php
        $id=$_REQUEST['myid'];
        $details=mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM construction_popjob WHERE id='$id'")); 
    ?>
    

		<div class="page-wrapper">
			<div class="page-content">
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">Home Page</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								
								<li class="breadcrumb-item active" aria-current="page">Construction Job Update Form</li>
							</ol>
						</nav>
					</div>
					
				</div>
                
				<!--end breadcrumb-->
				<div class="row">
					 
				<div class="col-xl-6 mx-auto">
					
					<div class="card">
						<div class="card-body p-4">
							<?php
								if(isset($_SESSION['submitStatus'])){
									$session_date = $_SESSION['submitStatus'];
									//echo '<pre>';print_r($session_date);
									if($session_date['code'] == 200){
									?>
									<div class="alert alert-success border-0 bg-success alert-dismissible fade show py-2">
									    <div class="d-flex align-items-center">
										    <div class="font-35 text-white"><i class='bx bxs-check-circle'></i>
										    </div>
										    <div class="ms-3">
											    <h6 class="mb-0 text-white"><?php echo $session_date['message']?></h6>
										    </div>
									    </div>
									    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
								    </div>
									<?php
									}else{
										?>
									<div class="alert alert-danger border-0 bg-danger alert-dismissible fade show py-2">
									<div class="d-flex align-items-center">
										<div class="font-35 text-white"><i class='bx bxs-message-square-x'></i>
										</div>
										<div class="ms-3">
											<h6 class="mb-0 text-white"><?php echo $session_date['message']?></h6>

										</div>
									</div>
									<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
								    </div>
								    <?php
									}
									unset($_SESSION['submitStatus']);
								}
								?>
							
							<h5 class="mb-4">Construction Update Form</h5>
							<form class="row g-3" method="POST" action="elements/redirect" enctype="multipart/form-data">
                                <div class="col-md-12">
									<label for="input26" class="form-label">Job Name</label>
									<div class="input-group">
                                        <input type="text" class="form-control"  name="id" value="<?php echo $id?>"  autocomplete="off" hidden readonly required>
										<input type="text" class="form-control"  name="job_by" value="<?php echo $details['job_by']?>"  autocomplete="off"  hidden required> 
										<input type="text" class="form-control"  name="job_name" value="<?php echo $details['job_name']?>"  autocomplete="off"  required> 
									</div>
								</div>
                                
                                <div class="col-md-12">
									<label for="input26" class="form-label">Job Location</label>
									<div class="input-group">
										<input type="text" class="form-control"  name="job_loc" value="<?php echo $details['job_loc']?>"  autocomplete="off"  required> 
									</div>
								</div>
                                <div class="col-md-12">
									<label for="input26" class="form-label">Job Tag One</label>
									<div class="input-group">
										<input type="text" class="form-control"  name="job_tag_one" value="<?php echo $details['job_tag_one']?>"  autocomplete="off"  required> 
									</div>
								</div>
                                <div class="col-md-12">
									<label for="input26" class="form-label">Job Tag Two</label>
									<div class="input-group">
										<input type="text" class="form-control"  name="job_tag_two" value="<?php echo $details['job_tag_two']?>"  autocomplete="off"  required> 
									</div>
								</div>
                                <div class="col-md-12">
									<label for="input26" class="form-label">Job Tag Three</label>
									<div class="input-group">
										<input type="text" class="form-control"  name="job_tag_three" value="<?php echo $details['job_tag_three']?>"  autocomplete="off"  required> 
									</div>
								</div>
                                <div class="col-md-12">
									<label for="input26" class="form-label">Job Salary</label>
									<div class="input-group">
										<input type="text" class="form-control"  name="salary" value="<?php echo $details['salary']?>"  autocomplete="off"  required> 
									</div>
								</div>
                                
	                            <div class="col-md-12">
		                            <label for="input26" class="form-label">Job Icon </label>
		                            <div class="input-group">
			                            <input type="file" class="form-control" name="job_icon" id="inputGroupFile01" > 	
		                            </div>
	                            </div>
                                <div class="col-md-12">
		                            <div class="d-md-flex d-grid align-items-center gap-3">
                                        <input class="btn btn-primary px-4" type="submit" name="constructpopjob" value="UPDATE">	
		                            </div>
	                            </div>
	                            
                            </form>

						</div>
					</div>
				</div>

			</div>
			</div>
		</div>
		<!--end page wrapper -->
		<!-- search modal -->

		<!--start overlay-->
		<div class="overlay toggle-icon"></div>
		<!--end overlay-->
		<!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
		<!--End Back To Top Button-->
		<footer class="page-footer">
			<p class="mb-0">Copyright © 2023. All right reserved.</p>
		</footer>
	</div>
	<!--end wrapper-->

	<!-- Bootstrap JS -->
	<script src="assets/js/bootstrap.bundle.min.js"></script>
	<!--plugins-->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/plugins/simplebar/js/simplebar.min.js"></script>
	<script src="assets/plugins/metismenu/js/metisMenu.min.js"></script>
	<script src="assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
	<!--app JS-->
	<script src="assets/js/app.js"></script>
</body>


</html>