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
					<div class="breadcrumb-title pe-3">Profile</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Update Profile</li>
							</ol>
						</nav>
					</div>

				</div>
				<!--end breadcrumb-->
                <?php $details=mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM user  WHERE user_id='$my_id'"));?>
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
								<h5 class="mb-4">Profile Update Form</h5>
								<form class="row g-3" method="POST" action="elements/redirect" enctype="multipart/form-data">
									<div class="col-md-6">
										<label for="input1" class="form-label">User Id</label>
										<input type="text" class="form-control" id="input1" value="<?php echo $my_id?>" name="user_id" required readonly>
									</div>
									<div class="col-md-6">
										<label for="input2" class="form-label">Name</label>
										<input type="text" class="form-control" id="input2" value="<?php echo $details['name']?>" readonly >
									</div>
									<div class="col-md-12">
										<label for="input3" class="form-label">Gender</label>
										<input type="text" class="form-control" id="input3" value="<?php echo ($details['gender'] == 0 ) ? 'Male' : 'Female'; ?>" readonly >
									</div>
                                    <div class="col-md-12">
										<label for="input6" class="form-label">DOB</label>
										<input type="text" class="form-control" id="input6"  value="<?php echo $details['dob']?>" readonly >
									</div>
                                    <div class="col-md-12">
										<label for="input2" class="form-label">Father Name</label>
										<input type="text" class="form-control" id="input2" value="<?php echo $details['father']?>" readonly>
									</div>
									<div class="col-md-12">
										<label for="input4" class="form-label">Email</label>
										<input type="email" class="form-control" id="input4" name="email" value="<?php echo $details['email']?>" autocomplete="off" required>
									</div>
									<div class="col-md-12">
										<label for="input5" class="form-label">Phone</label>
										<input type="number" class="form-control" id="input5" name="phone" value="<?php echo $details['phone']?>" autocomplete="off" required>
									</div>
                                    <div class="col-md-12">
										<label for="input4" class="form-label">Update Photo</label>
										<input type="File" class="form-control" id="input4" name="photo">
									</div>
									<div class="col-md-12">
										<label for="input5" class="form-label">Update CV : <button type="button" class="btn btn-primary" id="viewCV">View</button></label>
										<input type="file" class="form-control" id="input5" name="cv">
									</div>
									
									
									<div class="col-md-12">
										<label for="input11" class="form-label">Address</label>
										<textarea class="form-control" id="input11"  name="address" rows="3" autocomplete="off" required ><?php echo $details['address']?></textarea>
									</div>
									
									<div class="col-md-12">
										<div class="d-md-flex d-grid align-items-center gap-3">
											<input type="submit" class="btn btn-primary px-4" name="updatepro" value="Submit">
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
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
    <script>
    document.getElementById('viewCV').addEventListener('click', function() {
        // Assuming you have the old CV URL stored in a variable.
        const oldCvUrl = 'elements/uploads/<?php echo $details['cv']?>'; // Replace with actual URL
        
        // Open the old CV PDF in a new tab
        window.open(oldCvUrl, '_blank');
    });
</script>
	
	<!--end switcher-->
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