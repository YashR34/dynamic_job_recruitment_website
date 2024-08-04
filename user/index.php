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
	<link href="assets/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet"/>
	<link href="assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
	<link href="assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet"/>
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
    <style>
		.mobile{
			display:none;
		}

		.profile-img-wrapper {
    width: 110px;
    height: 110px;
    overflow: hidden;
    border-radius: 50%;
    border: 2px solid #007bff; /* Adjust the border color to match your theme */
    padding: 3px;
    background-color: #007bff; /* Adjust the background color to match your theme */
}

.profile-img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}
		@media (max-width: 768px) {
        /* Show toggle button */
        .pc{
			display: none;

		}
        
        .mobile{
            display: block!important;
        }
        
       }
	   
        
        
	</style>
</head>

<body>
	<!--wrapper-->
	<?php include("elements/navbar.php");?>
	   <!--end header wrapper-->
		<!--start page wrapper -->
		<div class="page-wrapper">
			<div class="page-content">
                <div class="row row-cols-0 row-cols-lg-2">
                    <?php 
                    $info = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM user WHERE user_id='$my_id'")); 
                    ?>
					<div class="col d-flex">
                        <div class="card radius-15 w-100">
							<div class="card-body text-center">
                                <div class="d-flex flex-column align-items-center text-center p-4 border border-success radius-15 ">
                                    <div class="profile-img-wrapper">
                                        <img src="elements/uploads/<?php echo $info['photo']?>" alt="Admin" class="rounded-circle profile-img">
                                    </div>
                                    <div class="mt-3">
                                        <h4><?php echo $info['name']?></h4>
                                        <p class="text-secondary mb-1"><?php echo $info['phone']?></p>
                                        <p class="text-muted font-size-sm"><?php echo $info['email']?></p>
					                    <p class="text-muted font-size-sm"><?php echo $info['address']?></p>
                                        <a href="profile mt-1"><button class="btn btn-primary">Edit Profile</button></a>
                                        <a href="id-card mt-1"><button class="btn btn-outline-primary">Identity Card</button></a>
                                    </div>
                                </div>
							</div>
						</div>
					</div>
                    <div class="col d-flex">
                        <div class="card radius-15 w-100">
							<div class="card-body">
                                <div class="d-flex flex-column align-items-center text-center p-4 border border-success radius-15 ">
                                    <img class="pc" src="assets/images/logo3.png" width="500">
                                    <img class="mobile" src="assets/images/logo3.png" width="250">
                                    <h5 class="mb-3">Welcome To A2Z SERVICES</h5>
                                    <h5 class="mb-3"><?php echo $info['name'] ?></h5>
                                    <h5 class="mb-3"><?php echo $info['user_id'] ?></h5>
                                    <p class="mb-3">
                                        <a href="javascript:void(0)" onclick="copyReferralLink()">
                                            <span id="referral_link">https://a2zservices.com/</span>
                                        </a>
                                    </p>
                                    <a href="javascript:void(0)" onclick="copyReferralLink()" class="btn btn-outline-primary radius-15">Copy Link</a>
                                    
                                </div>
							</div>
						</div>
					</div>
					
				</div><!--end row-->
				<div class="row row-cols-1 row-cols-md-1 row-cols-xl-3">
                    <?php $data7=mysqli_fetch_array(mysqli_query($conn,"SELECT IFNULL(count(user_id),0) as total FROM apply WHERE user_id='$my_id'  "));?>
                    <div class="col">
						<div class="card radius-10 bg-primary bg-gradient">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div>
										<p class="mb-0 text-white">Applied Jobs</p>
										<h4 class="my-1 text-white"><?php echo $data7['total']?></h4>
									</div>
									<div class="text-white ms-auto font-35"><i class='bx bx-user-pin'></i>
									</div>
								</div>
							</div>
						</div>
					</div>
                    <?php $data8=mysqli_fetch_array(mysqli_query($conn,"SELECT IFNULL(count(user_id),0) as total FROM apply WHERE user_id='$my_id' AND approve_status='0'  "));?>
                    <div class="col">
						<div class="card radius-10 bg-danger bg-gradient">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div>
										<p class="mb-0 text-white">Pending Jobs</p>
										<h4 class="my-1 text-white"><?php echo $data8['total']?></h4>
									</div>
									<div class="text-white ms-auto font-35"><i class='bx bx-user-pin'></i>
									</div>
								</div>
							</div>
						</div>
					</div>
					<?php $data9=mysqli_fetch_array(mysqli_query($conn,"SELECT IFNULL(count(user_id),0) as total FROM apply WHERE user_id='$my_id' AND approve_status='1'  "));?>
                
                    <div class="col">
						<div class="card radius-10 bg-warning bg-gradient">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div>
										<p class="mb-0 text-dark">Accepted Job Request</p>
										<h4 class="text-dark my-1"><?php echo $data9['total']?></h4>
									</div>
									<div class="text-dark ms-auto font-35"><i class='bx bx-user-pin'></i>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div><!--end row-->
			</div>
		</div>
		<!--end page wrapper -->



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
    <script>
        function copyReferralLink() {
            var copyText = document.getElementById("referral_link").innerHTML;
            
            navigator.clipboard.writeText(copyText).then(() => {
            alert("Website Link Copied to clipboard");
        });
        }
    </script> 
	<script src="assets/js/bootstrap.bundle.min.js"></script>
	<!--plugins-->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/plugins/simplebar/js/simplebar.min.js"></script>
	<script src="assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
	<script src="assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js"></script>
	<script src="assets/plugins/chartjs/js/chart.js"></script>
	<script src="assets/js/index.js"></script>
	<!--app JS-->
	<script src="assets/js/app.js"></script>

	

</body>


</html>