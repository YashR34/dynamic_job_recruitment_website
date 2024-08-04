<?php include("config/connection.php");?>
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
							<h1 class="text-uppercase">Our Blog</h1>
							
						</div>
						<nav class="breadcrumb-nav text-white d-flex justify-content-center mt-20 mt-lg-40">
							<ul class="breadcrumb mb-0">
								<li class="breadcrumb-item text-uppercase"><a href="index">Home</a></li>
								<li class="breadcrumb-item text-uppercase"><a href="javascript:;">News</a></li>
								<li class="breadcrumb-item active text-uppercase">Our Blog</li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</div>
		<!-- contain main informative part of the site -->
		<main class="main">
			<!-- Blogs Section -->
			<section class="section latest-news-block section-theme-1 pt-35 pt-md-50 pt-lg-75 pt-xl-100 pt-xxl-120 pb-35">
				<div class="container">
					<div class="row">
						<div class="col-12 col-md-6 col-lg-4 mb-35 mb-md-55">
							<!-- News Post -->
							<div class="news-post">
								<a href="#">
									<div class="image-holder">
										<img src="images/image-news03.jpg" alt="image">
									</div>
									<div class="textbox">
										<strong class="subtitle">Developer, Code</strong>
										<h3>Looking For A Highly Motivated Producer To Build</h3>
										<ul class="post-meta">
											<li>December 31, 2022</li>
											<li>14 Comments</li>
										</ul>
										<div class="post-author">
											<span class="author-image"><img src="images/avatar-03.jpg" width="52" height="52" alt="Image Description"></span>
											<span class="post-by">By <strong>Thomas Smith</strong></span>
										</div>
									</div>
								</a>
							</div>
						</div>
						<div class="col-12 col-md-6 col-lg-4 mb-35 mb-md-55">
							<!-- News Post -->
							<div class="news-post">
								<a href="#">
									<div class="image-holder">
										<img src="images/image-news11.jpg" alt="image">
									</div>
									<div class="textbox">
										<strong class="subtitle">Developer, Code</strong>
										<h3>Collaboration: Best  Practices, Challenges, and Tools</h3>
										<ul class="post-meta">
											<li>December 31, 2022</li>
											<li>14 Comments</li>
										</ul>
										<div class="post-author">
											<span class="author-image"><img src="images/avatar-03.jpg" width="52" height="52" alt="Image Description"></span>
											<span class="post-by">By <strong>Thomas Smith</strong></span>
										</div>
									</div>
								</a>
							</div>
						</div>
						<div class="col-12 col-md-6 col-lg-4 mb-35 mb-md-55">
							<!-- News Post -->
							<div class="news-post">
								<a href="#">
									<div class="image-holder">
										<img src="images/image-news04.jpg" alt="image">
									</div>
									<div class="textbox">
										<strong class="subtitle">Developer, Code</strong>
										<h3>Print, publishing qui visual ux quis layout mockups.</h3>
										<ul class="post-meta">
											<li>December 31, 2022</li>
											<li>14 Comments</li>
										</ul>
										<div class="post-author">
											<span class="author-image"><img src="images/avatar-03.jpg" width="52" height="52" alt="Image Description"></span>
											<span class="post-by">By <strong>Thomas Smith</strong></span>
										</div>
									</div>
								</a>
							</div>
						</div>
						<div class="col-12 col-md-6 col-lg-4 mb-35 mb-md-55">
							<!-- News Post -->
							<div class="news-post">
								<a href="#">
									<div class="image-holder">
										<img src="images/image-news10.jpg" alt="image">
									</div>
									<div class="textbox">
										<strong class="subtitle">Developer, Code</strong>
										<h3>Looking For A Highly Motivated Producer To Build</h3>
										<ul class="post-meta">
											<li>December 31, 2022</li>
											<li>14 Comments</li>
										</ul>
										<div class="post-author">
											<span class="author-image"><img src="images/avatar-03.jpg" width="52" height="52" alt="Image Description"></span>
											<span class="post-by">By <strong>Thomas Smith</strong></span>
										</div>
									</div>
								</a>
							</div>
						</div>
						<div class="col-12 col-md-6 col-lg-4 mb-35 mb-md-55">
							<!-- News Post -->
							<div class="news-post">
								<a href="#">
									<div class="image-holder">
										<img src="images/image-news14.jpg" alt="image">
									</div>
									<div class="textbox">
										<strong class="subtitle">Developer, Code</strong>
										<h3>Collaboration: Best  Practices, Challenges, and Tools</h3>
										<ul class="post-meta">
											<li>December 31, 2022</li>
											<li>14 Comments</li>
										</ul>
										<div class="post-author">
											<span class="author-image"><img src="images/avatar-03.jpg" width="52" height="52" alt="Image Description"></span>
											<span class="post-by">By <strong>Thomas Smith</strong></span>
										</div>
									</div>
								</a>
							</div>
						</div>
						<div class="col-12 col-md-6 col-lg-4 mb-35 mb-md-55">
							<!-- News Post -->
							<div class="news-post">
								<a href="#">
									<div class="image-holder">
										<img src="images/image-news13.jpg" alt="image">
									</div>
									<div class="textbox">
										<strong class="subtitle">Developer, Code</strong>
										<h3>Print, publishing qui visual ux quis layout mockups.</h3>
										<ul class="post-meta">
											<li>December 31, 2022</li>
											<li>14 Comments</li>
										</ul>
										<div class="post-author">
											<span class="author-image"><img src="images/avatar-03.jpg" width="52" height="52" alt="Image Description"></span>
											<span class="post-by">By <strong>Thomas Smith</strong></span>
										</div>
									</div>
								</a>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- Pagination Block -->
			<div class="pagination-block section-theme-1 pb-50 pb-md-50">
				<div class="container d-flex align-items-center justify-content-center">
					<ul class="pagination">
						<li class="page-item disabled"><a class="page-link" href="#"><i class="icon-arrow-left1"></i></a></li>
						<li class="page-item active"><a class="page-link" href="#">1</a></li>
						<li class="page-item"><a class="page-link" href="#">2</a></li>
						<li class="page-item"><a class="page-link" href="#">3</a></li>
						<li class="page-item"><a class="page-link" href="#"><i class="icon-arrow-right"></i></a></li>
					</ul>
				</div>
			</div>
			<!-- Apps Block -->
			<section class="section section-theme-4 apps-block bg-white pt-0 pt-md-30 pt-lg-65 pb-35 pb-md-50 pb-lg-65">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-12 col-md-6">
							<div class="text">
								<h2>Download the App</h2>
								<p>Aliquam lorem ante, dapibus in, viverra quis, feu Aliquam lorem ante, dapibus orem ante, dapibus in, viverra.</p>
								<ul class="list-unstyled list">
									<li>Duis aute irure dolor in reprehenderit</li>
									<li>Voluptate velit esse cillum dolore</li>
									<li>Fugiat nulla pariatur. Excepteur sint occaecat</li>
								</ul>
								<div class="download-btns">
									<a class="btn-app btn-play-store" href="#">
										<div class="store-icon">
											<img src="images/icon-play-store.png" width="28" height="30" alt="Google Play">
										</div>
										<div class="btn-text">
											Download From <span>Google Play</span>
										</div>
									</a>
									<a class="btn-app btn-app-store" href="#">
										<div class="store-icon">
											<img src="images/icon-app-store.png" width="32" height="38" alt="App Store">
										</div>
										<div class="btn-text">
											Download From <span>App Store</span>
										</div>
									</a>
								</div>
							</div>
						</div>
						<div class="col-12 col-md-6">
							<div class="image-holder">
								<img src="images/apps-image1.png" alt="image">
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
