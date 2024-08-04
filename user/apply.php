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
	<style>
        .job-select {
            display: none;
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
								
										
								<h5 class="mb-4">Job Apply Form</h5>
								<form class="row g-3" method="POST" action="elements/redirect">
    <div class="col-md-12">
        <label for="category" class="form-label">Category</label>
        <input type="text" class="form-control" id="input1" name="user_id" value="<?php echo $my_id?>" hidden required>
        <input type="text" class="form-control" id="input1" name="name" value="<?php echo $details['name']?>" hidden required>
        <input type="text" class="form-control" id="input1" name="gender" value="<?php echo $details['gender']?>" hidden required>
        <input type="text" class="form-control" id="input1" name="phone" value="<?php echo $details['phone']?>" hidden required>
        <input type="text" class="form-control" id="input1" name="email" value="<?php echo $details['email']?>" hidden required>
        <input type="text" class="form-control" id="input1" name="dob" value="<?php echo $details['dob']?>" hidden required>
        <input type="text" class="form-control" id="input1" name="cv" value="<?php echo $details['cv']?>" hidden required>
        <select id="category" class="form-select" name="category" required>
            <option value="" selected>---</option>
            <option value="healthcare">Healthcare</option>
            <option value="finance">Finance and Accounting</option>
            <option value="marketing">Marketing and Sales</option>
            <option value="education">Education</option>
            <option value="human-resource">Human Resource</option>
            <option value="customer-service">Customer Service</option>
            <option value="hospitality">Hospitality and Tourism</option>
            <option value="construction">Construction</option>
            <option value="retail">Retail</option>
            <option value="administrative">Administrative</option>
        </select>
    </div>
    <div class="col-md-12">
        <label for="job" class="form-label">Job</label>

        <select class="form-select job-select" id="healthcare" name="job-healthcare">
            <option value="" selected>---</option>
            <?php
            $data1 = mysqli_query($conn, "SELECT * FROM healthcare_popjob");
            while ($d1 = mysqli_fetch_array($data1)) {
                echo "<option value='" . $d1['job_name'] . "'>" . $d1['job_name'] . "</option>";
            }
            ?>
        </select>

        <select class="form-select job-select" id="finance" name="job-finance">
            <option value="" selected>---</option>
            <?php
            $data2 = mysqli_query($conn, "SELECT * FROM finance_popjob");
            while ($d2 = mysqli_fetch_array($data2)) {
                echo "<option value='" . $d2['job_name'] . "'>" . $d2['job_name'] . "</option>";
            }
            ?>
        </select>

        <select class="form-select job-select" id="marketing" name="job-marketing">
            <option value="" selected>---</option>
            <?php
            $data3 = mysqli_query($conn, "SELECT * FROM marketing_popjob");
            while ($d3 = mysqli_fetch_array($data3)) {
                echo "<option value='" . $d3['job_name'] . "'>" . $d3['job_name'] . "</option>";
            }
            ?>
        </select>
		<select class="form-select job-select" id="education" name="job-education">
            <option value="" selected>---</option>
            <?php
            $data3 = mysqli_query($conn, "SELECT * FROM education_popjob");
            while ($d3 = mysqli_fetch_array($data3)) {
                echo "<option value='" . $d3['job_name'] . "'>" . $d3['job_name'] . "</option>";
            }
            ?>
        </select>
		<select class="form-select job-select" id="human-resource" name="job-human-resource">
            <option value="" selected>---</option>
            <?php
            $data3 = mysqli_query($conn, "SELECT * FROM hr_popjob");
            while ($d3 = mysqli_fetch_array($data3)) {
                echo "<option value='" . $d3['job_name'] . "'>" . $d3['job_name'] . "</option>";
            }
            ?>
        </select>
		<select class="form-select job-select" id="customer-service" name="customer-service">
            <option value="" selected>---</option>
            <?php
            $data3 = mysqli_query($conn, "SELECT * FROM customer_service_popjob");
            while ($d3 = mysqli_fetch_array($data3)) {
                echo "<option value='" . $d3['job_name'] . "'>" . $d3['job_name'] . "</option>";
            }
            ?>
        </select>
		<select class="form-select job-select" id="hospitality" name="job-hospitality">
            <option value="" selected>---</option>
            <?php
            $data3 = mysqli_query($conn, "SELECT * FROM hospitality_popjob");
            while ($d3 = mysqli_fetch_array($data3)) {
                echo "<option value='" . $d3['job_name'] . "'>" . $d3['job_name'] . "</option>";
            }
            ?>
        </select>
		<select class="form-select job-select" id="construction" name="job-construction">
            <option value="" selected>---</option>
            <?php
            $data3 = mysqli_query($conn, "SELECT * FROM construction_popjob");
            while ($d3 = mysqli_fetch_array($data3)) {
                echo "<option value='" . $d3['job_name'] . "'>" . $d3['job_name'] . "</option>";
            }
            ?>
        </select>
		<select class="form-select job-select" id="retail" name="job-retail">
            <option value="" selected>---</option>
            <?php
            $data3 = mysqli_query($conn, "SELECT * FROM retail_popjob");
            while ($d3 = mysqli_fetch_array($data3)) {
                echo "<option value='" . $d3['job_name'] . "'>" . $d3['job_name'] . "</option>";
            }
            ?>
        </select>
		<select class="form-select job-select" id="administrative" name="job-administrative">
            <option value="" selected>---</option>
            <?php
            $data3 = mysqli_query($conn, "SELECT * FROM administrative_popjob");
            while ($d3 = mysqli_fetch_array($data3)) {
                echo "<option value='" . $d3['job_name'] . "'>" . $d3['job_name'] . "</option>";
            }
            ?>
        </select>

        <!-- Add other select elements similarly for each category -->

    </div>
    <div class="col-md-12">
        <div class="d-md-flex d-grid align-items-center gap-3">
            <button type="submit" name="apply" class="btn btn-primary px-4">Submit</button>
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
    document.getElementById('category').addEventListener('change', function () {
        var jobSelects = document.querySelectorAll('.job-select');
        jobSelects.forEach(function (select) {
            select.style.display = 'none';
            select.removeAttribute('name');
        });

        var selectedCategory = this.value;
        if (selectedCategory) {
            var selectedJobSelect = document.getElementById(selectedCategory);
            if (selectedJobSelect) {
                selectedJobSelect.style.display = 'block';
                selectedJobSelect.setAttribute('name', 'job');
            }
        }
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