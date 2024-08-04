<?php include("user/elements/redirect.php");?>
<?php 
if (!isset($_SESSION['userDetails'])) {

    header("Location:register"); 

    exit;
}


$user_id = $_SESSION['userDetails']['user_id'];
$email = $_SESSION['userDetails']['email'];
$password = $_SESSION['userDetails']['password'];


unset($_SESSION['userDetails']);
?>
<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php include("elements/header.php");?>
	<!-- Google Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com/">
	<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Epilogue:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;family=Inter:wght@100;200;300;400;500;600;700;800;900&amp;family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=DM+Sans:opsz,wght@9..40,400;9..40,700&amp;display=swap" rel="stylesheet">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
	<!-- Additional Plugins Styles -->
	<link rel="stylesheet" href="css/vendors.css">
	<!-- Bootstrap -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Site main stylesheet-->
	<link rel="stylesheet" href="css/main.css">
	

	</style>
</head>
<body>
	<!-- main container of all the page elements -->
	<div id="wrapper">
	<?php include("elements/navbar.php");?>
		<!-- Sub Visual of the page -->
		<div class="subvisual-block subvisual-theme-1 bg-dark-green d-flex pt-60 pt-md-90 pt-lg-150 pb-30 text-white">
			<div class="pattern-image"><img src="images/bg-pattern-overlay.jpg" width="1920" height="570" alt="Pattern"></div>
			<div class="container position-relative text-center">
				<div class="row">
					<div class="col-12">
						<div class="subvisual-textbox">
							<h1 class="text-uppercase">credential</h1>
							
						</div>
						<nav class="breadcrumb-nav text-white d-flex justify-content-center mt-20 mt-lg-40">
							<ul class="breadcrumb mb-0">
								<li class="breadcrumb-item text-uppercase"><a href="index">HOME</a></li>
								
								<li class="breadcrumb-item active text-uppercase">CREDENTIAL</li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</div>
		<!-- contain main informative part of the site -->
        
		<main class="main">
			<!-- Accounts Section -->
			<section class="section section-accounts section-theme-1 pt-35 pt-md-50 pt-lg-75 pt-xl-100 pt-xxl-120 pb-35 pb-md-50 pb-lg-75 pb-xl-100 pb-xxl-120 d-flex justify-content-center align-items-center">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-12 col-md-6 col-lg-8">
							<div class="account-box">
								<span class="icon">
									<img src="images/user-icon.svg" alt="user">
								</span>
								<div class="account-box-frame">
									<div class="form-head">
										<h2 class="text-success">CONGRATULATION! ON SUCCESSFULL REGISTRATION</h2>
										
									</div>
									
									<div class="row">
                                        <div class="col">
                                            <p><strong>ID NO.</strong></p>
                                            <p><strong>EMAIL ID</strong></p>
                                            <p><strong>PASSWORD</strong></p>
                                        </div>
                                        <div class="col-auto">
                                            <p><strong>:</strong></p>
                                            <p><strong>:</strong></p>
                                            <p><strong>:</strong></p>
                                        </div>
                                        <div class="col">
                                            <p><?php echo $user_id ;?></p>
                                            <p><?php echo $email ;?></p>
                                            <p><?php echo $password; ?></p>
                                            
                                        </div>
                                    </div>    
									
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
		</main>
		<!-- footer of the page -->
		<?php include("elements/footer.php");?>
	</div>
	
	<!-- Bootstrap JS -->
	<script src="https://cdn.jsdelivr.net/npm/%40popperjs/core%402.11.6/dist/umd/popper.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap%405.2.3/dist/js/bootstrap.min.js"></script>
	<!-- jQuery Library -->
	<script src="js/jquery-3.6.4.min.js"></script>
	<!-- jQuery Plugins -->
	<script src="js/vendor.js"></script>
	<!-- jQuery Main -->
	<script src="js/jquery.main.js"></script>
</body>

</html>
