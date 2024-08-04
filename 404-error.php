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
	<link rel="stylesheet" href="cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
	<!-- Additional Plugins Styles -->
	<link rel="stylesheet" href="css/vendors.css">
	<!-- Bootstrap -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Site main stylesheet-->
	<link rel="stylesheet" href="css/main.css">
</head>
<body>
	<!-- main container of all the page elements -->
	<div id="wrapper">
	<?php include("elements/navbar.php");?>
		<!-- Sub Visual of the page -->
		<div class="subvisual-block subvisual-theme-1 block-404 bg-dark-green d-flex pt-50 pt-lg-80 pb-50 pb-lg-80 text-white">
			<div class="pattern-image"><img src="images/bg-pattern-overlay.jpg" width="1920" height="570" alt="Pattern"></div>
			<div class="container position-relative">
				<div class="row align-items-center">
					<div class="col-12 col-md-6">
						<div class="subvisual-textbox">
							<h1>404</h1>
							<h2>Ooops, Page Not Found</h2>
							<p>We Can't Seem to find the page you're looking for.</p>
							<div class="form-subscribe">
								<form action="#">
									<input class="form-control" type="text" placeholder="Enter Kayword....">
									<button class="btn-search"><i class="icon-search"></i></button>
								</form>
								<a class="btn btn-green btn-sm" href="#"><span class="btn-text">Back To Home</span></a>
							</div>
						</div>
					</div>
					<div class="col-12 col-md-6">
						<div class="image-404">
							<img src="images/404-theme1.png" alt="404">
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- footer of the page -->
		<?php include("elements/footer.php");?>
	</div>
	<!-- Bootstrap JS -->
	<script src="cdn.jsdelivr.net/npm/%40popperjs/core%402.11.6/dist/umd/popper.min.js"></script>
	<script src="cdn.jsdelivr.net/npm/bootstrap%405.2.3/dist/js/bootstrap.min.js"></script>
	<!-- jQuery Library -->
	<script src="js/jquery-3.6.4.min.js"></script>
	<!-- jQuery Plugins -->
	<script src="js/vendor.js"></script>
	<!-- jQuery Main -->
	<script src="js/jquery.main.js"></script>
</body>

</html>
