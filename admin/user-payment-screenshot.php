<!doctype html>
<html lang="en">

<?php include_once("elements/connect.php");?>
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
	<?php include("elements/header.php");?>
	<style>
        input[type="file"].form-control::file-selector-button {
			color: #000!important; 

		}

		.gallery a img{
      height: 100%;
      width: 100%;
      object-fit: cover;
     }
     .popup {
            display: none;
            position: fixed;
            z-index: 10;
            padding-top: 100px;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0,0,0,0.9);
        }
        .popup img {
            display: block;
            margin: auto;
            max-width: 80%;
            max-height: 80%;
        }
        .close {
            color: #fff;
            position: absolute;
            top: 10px;
            right: 25px;
            font-size: 30px;
            font-weight: bold;
            transition: 0.3s;
        }
        .close:hover,
        .close:focus {
            color: #bbb;
            text-decoration: none;
            cursor: pointer;
        }
        .download {
            color: #fff;
            position: absolute;
            bottom: 10px;
            left: 50%;
            transform: translateX(-50%);
            font-size: 20px;
            text-decoration: underline;
            cursor: pointer;
        }
     
	</style>
</head>

<body>
	<?php include("elements/navbar.php");?>
		<div class="page-wrapper">
			<div class="page-content">
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">User</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Payment Screenshot</li>
							</ol>
						</nav>
					</div>

				</div>
				<!--end breadcrumb-->
				<?php
                   $id=$_REQUEST['myid'];
                   $details=mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM payment WHERE id='$id'")); 
                 ?>
				<div class="container">
					<div class="main-body">
						<div class="row">
							
							<div class="col-lg-12">
								<div class="card">
									<div class="card-body">
										<div class="row mb-3">
											<div class="col-sm-3">
												<h6 class="mb-0">Transaction Number</h6>
											</div>
											<div class="col-sm-9 text-secondary">
												<input type="text" class="form-control" value="<?php echo $details['payid']?>" />
											</div>
										</div>
										
										<div class="row mb-3">
    <div class="col-sm-3">
        <h6 class="mb-0">Screenshot</h6>
    </div>
    <div class="col-sm-9 text-secondary gallery">
        <img src="../user/elements/uploads/<?php echo $details['shot']?>" alt="screenshot!" onclick="openPopup('../user/elements/uploads/<?php echo $details['shot']?>')" width="200">
    </div>
</div>

<div id="imagePopup" class="popup" style="display: none;">
    <span class="close" onclick="closePopup()">&times;</span>
    <img id="popupImage" src="" alt="Popup Image">
    <a id="downloadLink" href="" download><i class="fa fa-download" ></i></a>
</div>
                                        
										
                                        
										
										<div class="row">
											<div class="col-sm-3"></div>
											<div class="col-sm-9 text-secondary">
												<a href="user-payment"><input type="button" class="btn btn-primary px-4" value="Go Back" /></a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--end page wrapper -->
		
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
	<script>
       function openPopup(imageUrl) {
    var popup = document.getElementById('imagePopup');
    var popupImage = document.getElementById('popupImage');
    var downloadLink = document.getElementById('downloadLink');
    popupImage.src = imageUrl;
    downloadLink.href = imageUrl;
    popup.style.display = "flex"; // Changed to "flex" to ensure proper centering
    document.body.style.overflow = "hidden"; // Disable scrolling on the body
}

function closePopup() {
    var popup = document.getElementById('imagePopup');
    popup.style.display = "none";
    document.body.style.overflow = "auto"; // Enable scrolling on the body
}
    </script>
</body>
</html>
	
	
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