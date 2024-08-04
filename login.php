<?php include("user/elements/redirect.php");?>
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
	<style>
		.custom-alert {
    position: relative;
    padding: 10px 15px;
    margin-bottom: 15px;
    border: 1px solid transparent;
    border-radius: 5px;
    font-size: 14px;
    line-height: 1.5;
}

.custom-alert-success {
    background-color: #d4edda;
    border-color: #c3e6cb;
    color: #155724;
}

.custom-alert-danger {
    background-color: #f8d7da;
    border-color: #f5c6cb;
    color: #721c24;
}

.custom-alert-icon {
    float: left;
    margin-right: 10px;
}

.custom-alert-message {
    overflow: hidden;
    padding-top: 5px;
}

.custom-alert-close-btn {
    position: absolute;
    top: 50%;
    right: 10px;
    transform: translateY(-50%);
    padding: 0;
    border: none;
    background: none;
    cursor: pointer;
    color: inherit;
    font-size: 18px;
    line-height: 1;
}

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
							<h1 class="text-uppercase">Login</h1>
							
						</div>
						<nav class="breadcrumb-nav text-white d-flex justify-content-center mt-20 mt-lg-40">
							<ul class="breadcrumb mb-0">
								<li class="breadcrumb-item text-uppercase"><a href="index">Home</a></li>
								
								<li class="breadcrumb-item active text-uppercase">Login</li>
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
										<h2>Hi, Welcome Back!</h2>
										<p>Enter username and password to log on:</p>
										
									</div>
									<?php
if (isset($_SESSION['submitStatus'])) {
    $session_date = $_SESSION['submitStatus'];
    
    echo '<div class="custom-alert ';
    if ($session_date['code'] == 200) {
        echo 'custom-alert-success">';
        $icon_class = 'bx bxs-check-circle';
    } else {
        echo 'custom-alert-danger">';
        $icon_class = 'bx bxs-message-square-x';
    }
    echo '<div class="custom-alert-icon"><i class="' . $icon_class . '"></i></div>
          <div class="custom-alert-message">' . $session_date['message'] . '</div>
          <button type="button" class="custom-alert-close-btn" aria-label="Close" onclick="closeAlert(this)">×</button>
          </div>';

    unset($_SESSION['submitStatus']);
}
?>
									<form class="contac-form" method="POST" action="user/elements/redirect">
										<div class="row">
											<div class="col-12 mb-15 mb-md-20">
											    <label  class="form-label " style="margin-left:10px!important;">USER ID</label>
												<input class="form-control" type="text" name="user_id" autocomplete="off" required>
											</div>
											<div class="col-12 mb-15 mb-md-20">
											<label  class="form-label " style="margin-left:10px!important;">PASSWORD</label>
												<input class="form-control" type="password" name="password" autocomplete="off" required>
											</div>
											<div class="col-12 col-lg-6 mb-25">
												<label class="custom-checkbox mt-5 ms-10">
													<input type="checkbox">
													<span class="fake-checkbox"></span>
													<span class="label-text">Remember me</span>
												</label>
											</div>
											<div class="col-12 col-lg-6 mb-15 mb-md-20 mb-lg-25 text-center text-lg-end">
												<a href="register" class="link mx-10">Don't Have An Account?</a>
											</div>
											
											<div class="col-12">
												<button class="btn btn-green btn-sm" type="submit" name="login" ><span class="btn-text">Login</span></button>
											</div>
										</div>
									</form>
									
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
	<script>
function closeAlert(button) {
    var alertBox = button.closest('.custom-alert');
    if (alertBox) {
        alertBox.style.display = 'none';
    }
}
</script>
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
