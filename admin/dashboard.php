<!doctype html>
<html lang="en">
<?php include_once("elements/connect.php");?>


<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--favicon-->
	
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
		<div class="page-wrapper">
			<div class="page-content">
				<div class="row row-cols-1 row-cols-md-3 row-cols-xl-5">
					<div class="col">
						<a href="pop-search"><div class="card radius-10">
							<div class="card-body">
								<div class="text-center">
									<div class="widgets-icons rounded-circle mx-auto bg-light-primary text-primary mb-3"><i class='bx bx-home-smile'></i>
									</div>
									<h5 class="my-1">Popular Searches</h5>
									
								</div>
							</div>
						</div></a>
					</div>
					<div class="col">
					<a href="trending-category"><div class="card radius-10">
							<div class="card-body">
								<div class="text-center">
									<div class="widgets-icons rounded-circle mx-auto bg-light-primary text-primary mb-3"><i class='bx bx-home-smile'></i>
									</div>
									<h5 class="my-1">Trending Category</h5>
									
								</div>
							</div>
						</div></a>
					</div>
					<div class="col">
					<a href="pop-job"><div class="card radius-10">
							<div class="card-body">
								<div class="text-center">
									<div class="widgets-icons rounded-circle mx-auto bg-light-primary text-primary mb-3"><i class='bx bx-home-smile'></i>
									</div>
									<h5 class="my-1">Popular Jobs</h5>
									
								</div>
							</div>
						</div></a>
					</div>
					<div class="col">
					<a href="company"><div class="card radius-10">
							<div class="card-body">
								<div class="text-center">
									<div class="widgets-icons rounded-circle mx-auto bg-light-primary text-primary mb-3"><i class='bx bx-home-smile'></i>
									</div>
									<h5 class="my-1">Companies</h5>
									
								</div>
							</div>
						</div></a>
					</div>
					<div class="col">
					<a href="review"><div class="card radius-10">
							<div class="card-body">
								<div class="text-center">
									<div class="widgets-icons rounded-circle mx-auto bg-light-primary text-primary mb-3"><i class='bx bx-home-smile'></i>
									</div>
									<h5 class="my-1">Reviews</h5>
									
								</div>
							</div>
						</div></a>
					</div>
					<div class="col">
					<a href="healthcare"><div class="card radius-10">
							<div class="card-body">
								<div class="text-center">
									<div class="widgets-icons rounded-circle mx-auto bg-light-success text-success mb-3"><i class='bx bx-list-ol'></i>
									</div>
									<h5 class="my-1">Healthcare</h5>
								</div>
							</div>
						</div></a>
					</div>
					<div class="col">
					<a href="finance"><div class="card radius-10">
							<div class="card-body">
								<div class="text-center">
									<div class="widgets-icons rounded-circle mx-auto bg-light-success text-success mb-3"><i class='bx bx-list-ol'></i>
									</div>
									<h5 class="my-1">Finance</h5>
								</div>
							</div>
						</div></a>
					</div>
					<div class="col">
					<a href="marketing"><div class="card radius-10">
							<div class="card-body">
								<div class="text-center">
									<div class="widgets-icons rounded-circle mx-auto bg-light-success text-success mb-3"><i class='bx bx-list-ol'></i>
									</div>
									<h5 class="my-1">Marketing</h5>
								</div>
							</div>
						</div></a>
					</div>
					<div class="col">
					<a href="education"><div class="card radius-10">
							<div class="card-body">
								<div class="text-center">
									<div class="widgets-icons rounded-circle mx-auto bg-light-success text-success mb-3"><i class='bx bx-list-ol'></i>
									</div>
									<h5 class="my-1">Education</h5>
								</div>
							</div>
						</div></a>
					</div>
					<div class="col">
					<a href="human-resource"><div class="card radius-10">
							<div class="card-body">
								<div class="text-center">
									<div class="widgets-icons rounded-circle mx-auto bg-light-success text-success mb-3"><i class='bx bx-list-ol'></i>
									</div>
									<h5 class="my-1">Human Resource</h5>
								</div>
							</div>
						</div></a>
					</div>
					<div class="col">
					<a href="customer-service"><div class="card radius-10">
							<div class="card-body">
								<div class="text-center">
									<div class="widgets-icons rounded-circle mx-auto bg-light-success text-success mb-3"><i class='bx bx-list-ol'></i>
									</div>
									<h5 class="my-1">Customer Service</h5>
								</div>
							</div>
						</div></a>
					</div>
					<div class="col">
					<a href="tourism"><div class="card radius-10">
							<div class="card-body">
								<div class="text-center">
									<div class="widgets-icons rounded-circle mx-auto bg-light-success text-success mb-3"><i class='bx bx-list-ol'></i>
									</div>
									<h5 class="my-1">Hospitality</h5>
								</div>
							</div>
						</div></a>
					</div>
					<div class="col">
					<a href="construction"><div class="card radius-10">
							<div class="card-body">
								<div class="text-center">
									<div class="widgets-icons rounded-circle mx-auto bg-light-success text-success mb-3"><i class='bx bx-list-ol'></i>
									</div>
									<h5 class="my-1">Construction</h5>
								</div>
							</div>
						</div></a>
					</div>
					<div class="col">
					<a href="administrative"><div class="card radius-10">
							<div class="card-body">
								<div class="text-center">
									<div class="widgets-icons rounded-circle mx-auto bg-light-success text-success mb-3"><i class='bx bx-list-ol'></i>
									</div>
									<h5 class="my-1">Administrative</h5>
									
								</div>
							</div>
						</div></a>
					</div>
					<div class="col">
					<a href="retail"><div class="card radius-10">
							<div class="card-body">
								<div class="text-center">
									<div class="widgets-icons rounded-circle mx-auto bg-light-success text-success mb-3"><i class='bx bx-list-ol'></i>
									</div>
									<h5 class="my-1">Retail</h5>
									
								</div>
							</div>
						</div></a>
					</div>
					
				</div>
				<!--end row-->
			</div>
		</div>
		<!--end page wrapper -->



		<!-- search modal -->
		
		<!-- end search modal -->



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
	<script src="assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
	<script src="assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js"></script>
	<script src="assets/plugins/chartjs/js/chart.js"></script>
	<script src="assets/js/index.js"></script>
	<!--app JS-->
	<script src="assets/js/app.js"></script>

	

</body>


</html>