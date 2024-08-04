<?php include("elements/connect.php");?>
<!doctype html>
<html lang="en">


<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--favicon-->
	<link rel="icon" href="assets/images/favicon-32x32.png" type="image/png" />
	<!--plugins-->
	<link href="assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
	<link href="assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
	<link href="assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
	<link href="assets/plugins/bs-stepper/css/bs-stepper.css" rel="stylesheet" />
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
	<link rel="stylesheet" href="assets/css/dark-theme.css" />
	<link rel="stylesheet" href="assets/css/semi-dark.css" />
	<link rel="stylesheet" href="assets/css/header-colors.css" />
	<title>A2Z SERVICES</title>
</head>

<body>
	<!--wrapper-->
	<?php include("elements/navbar.php");?>
		   <!--end header wrapper-->
		<!--start page wrapper -->
		<div class="page-wrapper">
			<div class="page-content">
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">Payments</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Fees Payment</li>
							</ol>
						</nav>
					</div>
					
				</div>
			  <!--end breadcrumb-->

			  <!--start stepper one--> 
			  <?php $details=mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM apply WHERE user_id='$my_id' AND approve_status='1' ORDER BY id DESC LIMIT 1"));?>
			   
			    <h6 class="text-uppercase">Job Fees Payment</h6>
			    <hr>
				<div id="stepper1" class="bs-stepper">
				  <div class="card">
					
					<div class="card-header">
						<div class="d-lg-flex flex-lg-row align-items-lg-center justify-content-lg-between" role="tablist">
							<div class="step" data-target="#test-l-1">
							  <div class="step-trigger" role="tab" id="stepper1trigger1" aria-controls="test-l-1">
								<div class="bs-stepper-circle">1</div>
								<div class="">
									<h5 class="mb-0 steper-title">Information</h5>
									<p class="mb-0 steper-sub-title">Job/Your Details</p>
								</div>
							  </div>
							</div>
							<div class="bs-stepper-line"></div>
							<div class="step" data-target="#test-l-2">
								<div class="step-trigger" role="tab" id="stepper1trigger2" aria-controls="test-l-2">
								  <div class="bs-stepper-circle">2</div>
								  <div class="">
									  <h5 class="mb-0 steper-title">Account/U.P.I. Details</h5>
									  <p class="mb-0 steper-sub-title">Payment</p>
								  </div>
								</div>
							  </div>
							
							  <div class="bs-stepper-line"></div>
								<div class="step" data-target="#test-l-4">
									<div class="step-trigger" role="tab" id="stepper1trigger4" aria-controls="test-l-4">
									<div class="bs-stepper-circle">3</div>
									<div class="">
										<h5 class="mb-0 steper-title">Payment Summary</h5>
										<p class="mb-0 steper-sub-title">Upload Payement Details</p>
									</div>
									</div>
								</div>
						  </div>
					</div>
				    <div class="card-body">
					
					  <div class="bs-stepper-content">
						<form method="POST" action="elements/redirect" enctype="multipart/form-data">
						  <div id="test-l-1" role="tabpanel" class="bs-stepper-pane" aria-labelledby="stepper1trigger1">
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
							<h5 class="mb-1">Job/Your information</h5>
							<p class="mb-4">Details</p>

							<div class="row g-3">
								<div class="col-12 col-lg-6">
									<label for="FisrtName" class="form-label">User Id</label>
									<input type="text" class="form-control" id="FisrtName" name="user_id" value="<?php echo $my_id?>" readonly required >
								</div>
								<div class="col-12 col-lg-6">
									<label for="LastName" class="form-label">Name</label>
									<input type="text" class="form-control" id="LastName" name="name" value="<?php echo $details['name']?>" readonly required >
								</div>
								<div class="col-12 col-lg-6">
									<label for="PhoneNumber" class="form-label">Phone Number</label>
									<input type="text" class="form-control" id="PhoneNumber" name="phone" value="<?php echo $details['phone']?>" readonly required >
								</div>
								<div class="col-12 col-lg-6">
									<label for="InputEmail" class="form-label">E-mail Address</label>
									<input type="text" class="form-control" id="InputEmail" name="email" value="<?php echo $details['email']?>" readonly required >
								</div>
								<div class="col-12 col-lg-6">
									<label for="InputEmail" class="form-label">Job Category</label>
									<input type="text" class="form-control" id="InputEmail" name="category" value="<?php echo $details['category']?>" readonly required >
								</div>
								<div class="col-12 col-lg-6">
									<label for="InputEmail" class="form-label">Job</label>
									<input type="text" class="form-control" id="InputEmail" name="job" value="<?php echo $details['job']?>" readonly required >
								</div>
								<div class="col-12 col-lg-6">
									<button type="button" class="btn btn-primary px-4" onclick="stepper1.next()">Next<i class='bx bx-right-arrow-alt ms-2'></i></button>
								</div>
							</div><!---end row-->
							
						  </div>

						  <div id="test-l-2" role="tabpanel" class="bs-stepper-pane" aria-labelledby="stepper1trigger2">

							
							<div class="row ">
							<div class="col-12 col-md-6 text-center">
                                <img src="assets/images/cleaned_qr.png" alt="QR Code" width="300">
                                 <p class="mb-0">QR Code ID: <strong>123456</strong></p>
                              </div>
    
    
                            <div class="col-12 col-md-6 text-center d-flex align-items-center justify-content-center mt-3">
                             <div>
                              <p class="mb-1"><strong>Bank Name:</strong> XYZ Bank</p>
                              <p class="mb-1"><strong>Account Number:</strong> 1234567890</p>
                              <p class="mb-1"><strong>IFSC Code:</strong> XYZB0000001</p>
                            </div>
                            </div>
							<div class="col-12 text-center">
							<div class="d-flex align-items-center gap-3">
										<button type="button" class="btn btn-outline-secondary px-4" onclick="stepper1.previous()"><i class='bx bx-left-arrow-alt me-2'></i>Previous</button>
										<button type="button" class="btn btn-primary px-4" onclick="stepper1.next()">Next<i class='bx bx-right-arrow-alt ms-2'></i></button>
									</div>
								</div>
								
							</div><!---end row-->
							
						  </div>

						  
						  <div id="test-l-4" role="tabpanel" class="bs-stepper-pane" aria-labelledby="stepper1trigger4">
							<h5 class="mb-1">Payment Summary</h5>
							<p class="mb-4">Upload Screenshot and Transection Number</p>

							<div class="row g-3">
								<div class="col-12 col-lg-6">
									<label for="Experience1" class="form-label">Payement Id</label>
									<input type="text" class="form-control" name="payid" autocomplete="off" required>
								</div>
								<div class="col-12 col-lg-6">
									<label for="Position1" class="form-label">Payment Screenshot</label>
									<input type="file" class="form-control" name="shot" required>
								</div>
								
								<div class="col-12">
									<div class="d-flex align-items-center gap-3">
										<button type="button" class="btn btn-primary px-4" onclick="stepper1.previous()"><i class='bx bx-left-arrow-alt me-2'></i>Previous</button>
										<input type="submit" name="payment" class="btn btn-success px-4"  value="Submit">
									</div>
								</div>
								
							</div><!---end row--><!---end row-->
							
						  </div>
						</form>
					  </div>
					   
					</div>
				   </div>
				 </div>
				<!--end stepper one--> 

                
				<!--start stepper two--> 
				
				  <!--end stepper two--> 


				<!--start stepper three--> 
					

				  
			</div>
		</div>
		

		<!-- search modal -->
		
		<!-- end search modal -->


		<!--start overlay-->
		
		<!--end overlay-->
		<!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
		<!--End Back To Top Button-->
		<footer class="page-footer">
			<p class="mb-0">Copyright © 2023. All right reserved.</p>
		</footer>
	</div>
	<!--end wrapper-->
	<!--start switcher-->
	
	<!--end switcher-->
	<!-- Bootstrap JS -->
	<script src="assets/js/bootstrap.bundle.min.js"></script>
	<!--plugins-->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/plugins/simplebar/js/simplebar.min.js"></script>
	<script src="assets/plugins/metismenu/js/metisMenu.min.js"></script>
	<script src="assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
	<script src="assets/plugins/bs-stepper/js/bs-stepper.min.js"></script>
	<script src="assets/plugins/bs-stepper/js/main.js"></script>
	<!--app JS-->
	<script src="assets/js/app.js"></script>
</body>


</html>