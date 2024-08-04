<?php include("config/connection.php");?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include("elements/header.php");?>
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Epilogue:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:opsz,wght@9..40,400;9..40,700&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
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
		<div class="subvisual-block subvisual-theme-1 bg-dark-green d-flex pt-60 pt-md-90 pt-lg-150 pb-30 text-white">
            <div class="pattern-image"><img src="images/bg-pattern-overlay.jpg" width="1920" height="570" alt="Pattern"></div>
            <div class="container position-relative text-center">
                <div class="row">
                    <div class="col-12">
                        <div class="subvisual-textbox">
                            <h1 class="text-uppercase" >Pricing Plan</h1>
                            
                        </div>
                        <nav class="breadcrumb-nav text-white d-flex justify-content-center mt-20 mt-lg-40">
                            <ul class="breadcrumb mb-0">
                                <li class="breadcrumb-item text-uppercase"><a href="index">Home</a></li>
                                <li class="breadcrumb-item text-uppercase"><a href="javascript:;">Pages</a></li>
                                <li class="breadcrumb-item active text-uppercase">Pricing Plan</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
		<!-- contain main informative part of the site -->
		<main class="main">
			<!-- Packages Block -->
			<section class="section section-theme-1 packages-block option-styles pt-35 pt-md-50 pt-lg-65 pt-xl-85 pt-xxl-110 pb-35 pb-md-50 pb-lg-65 pb-xl-85 pb-xxl-110">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-12 col-md-6 col-lg-4 mb-15 mb-md-30">
							<div class="package-box">
								<div class="box-head">
									<strong class="subtitle">Basic Package</strong>
									<h3>$140.00</h3>
								</div>
								<div class="box-inner">
									<div class="icon">
										<img src="images/bag-icon.svg" width="38" height="34" alt="Image Description">
									</div>
									<ul class="list-unstyled features-list">
										<li>30 job posting</li>
										<li>3 featured job</li>
										<li>Job displayed for 15 days</li>
										<li>Premium Support 24/7</li>
									</ul>
									<a href="#" class="btn btn-green btn-sm"><span class="btn-text">Select Plan</span></a>
								</div>
							</div>
						</div>
						<div class="col-12 col-md-6 col-lg-4 mb-15 mb-md-30">
							<div class="package-box bg-dark-green text-white">
								<div class="box-head">
									<strong class="subtitle">Standard Package</strong>
									<h3>$410.00</h3>
									<strong class="recommended-tag">Recommended</strong>
								</div>
								<div class="box-inner">
									<div class="icon">
										<img src="images/handshake-icon.svg" width="55" height="49" alt="Image Description">
									</div>
									<ul class="list-unstyled features-list">
										<li>30 job posting</li>
										<li>3 featured job</li>
										<li>Job displayed for 15 days</li>
										<li>Premium Support 24/7</li>
									</ul>
									<a href="#" class="btn btn-green btn-sm"><span class="btn-text">Select Plan</span></a>
								</div>
							</div>
						</div>
						<div class="col-12 col-md-6 col-lg-4 mb-5 mb-lg-30">
							<div class="package-box">
								<div class="box-head">
									<strong class="subtitle">Extended Package</strong>
									<h3>$814.00</h3>
								</div>
								<div class="box-inner">
									<div class="icon">
										<img src="images/promotion-icon.svg" width="52" height="52" alt="Image Description">
									</div>
									<ul class="list-unstyled features-list">
										<li>30 job posting</li>
										<li>3 featured job</li>
										<li>Job displayed for 15 days</li>
										<li>Premium Support 24/7</li>
									</ul>
									<a href="#" class="btn btn-green btn-sm"><span class="btn-text">Select Plan</span></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- Packages Block -->
			<section class="section section-theme-1 packages-block bg-light-sky pt-35 pt-md-50 pt-lg-65 pt-xl-85 pt-xxl-110 pb-35 pb-md-50 pb-lg-65 pb-xl-85 pb-xxl-110">
				<div class="container">
					<!-- Section header -->
					<header class="section-header text-center mb-30 mb-md-45 mb-xl-60">
						<h2>Affortable Plans for All</h2>
						<p>Beneath each of these categories, you can find its most popular</p>
					</header>
					<div class="row justify-content-center">
						<div class="col-12 col-md-6 col-lg-4 mb-15 mb-md-30">
							<div class="package-box">
								<div class="box-head">
									<strong class="subtitle">Basic Package</strong>
									<h3>$140.00</h3>
								</div>
								<div class="box-inner">
									<div class="icon">
										<img src="images/bag-icon.svg" width="38" height="34" alt="Image Description">
									</div>
									<ul class="list-unstyled features-list">
										<li>30 job posting</li>
										<li>3 featured job</li>
										<li>Job displayed for 15 days</li>
										<li>Premium Support 24/7</li>
									</ul>
									<a href="#" class="btn btn-white btn-sm"><span class="btn-text">Select Plan</span></a>
								</div>
							</div>
						</div>
						<div class="col-12 col-md-6 col-lg-4 mb-15 mb-md-30">
							<div class="package-box bg-dark-green">
								<div class="box-head text-white">
									<strong class="subtitle">Standard Package</strong>
									<h3>$410.00</h3>
									<strong class="recommended-tag">Recommended</strong>
								</div>
								<div class="box-inner">
									<div class="icon">
										<img src="images/handshake-icon.svg" width="55" height="49" alt="Image Description">
									</div>
									<ul class="list-unstyled features-list">
										<li>30 job posting</li>
										<li>3 featured job</li>
										<li>Job displayed for 15 days</li>
										<li>Premium Support 24/7</li>
									</ul>
									<a href="#" class="btn btn-green btn-sm"><span class="btn-text">Select Plan</span></a>
								</div>
							</div>
						</div>
						<div class="col-12 col-md-6 col-lg-4 mb-5 mb-lg-30">
							<div class="package-box">
								<div class="box-head">
									<strong class="subtitle">Extended Package</strong>
									<h3>$814.00</h3>
								</div>
								<div class="box-inner">
									<div class="icon">
										<img src="images/promotion-icon.svg" width="52" height="52" alt="Image Description">
									</div>
									<ul class="list-unstyled features-list">
										<li>30 job posting</li>
										<li>3 featured job</li>
										<li>Job displayed for 15 days</li>
										<li>Premium Support 24/7</li>
									</ul>
									<a href="#" class="btn btn-white btn-sm"><span class="btn-text">Select Plan</span></a>
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
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
    <!-- jQuery Library -->
    <script src="js/jquery-3.6.4.min.js"></script>
    <!-- jQuery Plugins -->
    <script src="js/vendor.js"></script>
    <!-- jQuery Main -->
    <script src="js/jquery.main.js"></script>
</body>

</html>
