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
							<h1 class="text-uppercase">Job Details</h1>
							
						</div>
						<nav class="breadcrumb-nav text-white d-flex justify-content-center mt-20 mt-lg-40">
							<ul class="breadcrumb mb-0">
								<li class="breadcrumb-item text-uppercase"><a href="index">Home</a></li>
								<li class="breadcrumb-item text-uppercase"><a href="javascript:;">Browse Jobs</a></li>
								<li class="breadcrumb-item active text-uppercase">Job Details</li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</div>
		<!-- contain main informative part of the site -->
		<main class="main">
			<!-- Jobs Details Section -->
			<section class="section section-job-details add-styles section-theme-1 pt-35 pt-md-50 pt-lg-75 pt-xl-100 pb-35 pb-md-50 pb-xl-100">
				<div class="container">
					<header class="job-details-header mb-30 mb-md-45 mb-lg-60">
						<ul class="post-meta">
							<li>By Develpersoft</li>
							<li><i class="icon icon-map-pin"></i><span class="text">Pekanbaru, Indonesia</span></li>
						</ul>
						<h2>Product Marketing Manager</h2>
						<div class="social-info">
							<strong class="title">Social Sharing:</strong>
							<ul class="social-networks">
								<li><a href="#"><i class="icon-facebook"></i></a></li>
								<li><a href="#"><i class="icon-linkedin"></i></a></li>
								<li><a href="#"><i class="icon-twitter"></i></a></li>
								<li><a href="#"><i class="icon-instagram"></i></a></li>
							</ul>
						</div>
						<div class="utility-buttons">
							<a href="#" class="btn-tag"><img src="images/heart-filled-icon.svg" alt=""></a>
							<a href="#" class="btn-tag"><img src="images/bookmark-black-icon.svg" alt=""></a>
						</div>
						<div class="company-info-job">
							<ul class="job-info-list">
								<li>
									<span class="text">Salary:</span>
									<span class="text">0k-60k/year</span>
								</li>
								<li>
									<span class="text">Expertise:</span>
									<span class="text">Intermediate</span>
								</li>
								<li>
									<span class="text">Job Type:</span>
									<span class="text">Fulltime, Parttime</span>
								</li>
								<li>
									<span class="text">Experience:</span>
									<span class="text">2 Years</span>
								</li>
							</ul>
							<a href="#" class="btn btn-green btn-sm"><span class="btn-text">Apply Now</span></a>
						</div>
					</header>
					<div class="row">
						<div class="col-12">
							<div class="text-holder">
								<h3>Overview</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor in magna aliqua. Ut enim ad minim veniam, quisoris nisi ut aliquip ex ea commodo con dolor in reprehenderit in vol tate velit esse cillum dolore eu fugiat nulla pariatur. Lor olor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt lab ma Ut enim ad minim veniam, quisderit in vol tate velit.magna aliqua. Ut enim ad minim v dolor in reprehenderit in vol tate velit esse cillum dolore eu fugiat nulla pariatur. Lor olor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt lab ma Ut enim ad minim veniam, quisderit in vol tate velit.</p>
								<p>dolor in reprehenderit in vol tate velit esse cillum dolore eu fugiat nulla pariatur. Lor olor sit amet, <a href="#">consectetur adipiscing</a> elit, sed do eiusmod tempor incididunt lab ma Ut enim ad minim veniam, quisderit in vol tate velit.</p>
							</div>
							<div class="text-holder">
								<h3>Job Description</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor in magna aliqua. Ut enim ad minim veniam, quisoris nisi ut <a href="#">aliquip ex ea commodo con</a> dolor in reprehenderit in vol tate velit esse cillum dolore eu fugiat nulla pariatur. Lor olor sit amet, consectetur adipiscing elit, </p>
							</div>
							<div class="text-holder">
								<h3>Responsibilities</h3>
								<ul class="check-list">
									<li>Targeted job titles are more effective than generic ones, so be precise</li>
									<li>Provide an overview of your company and expectations</li>
									<li>Job duties, job responsibilities</li>
									<li>Cornerstone of the recruiting process</li>
									<li>Written statement of educational qualifications</li>
								</ul>
							</div>
							<div class="text-holder">
								<h3>Required Skills</h3>
								<ol class="num-list">
									<li>Excellent IT skills, especially with design and photo-editing software.</li>
									<li>Exceptional creativity and innovation.</li>
									<li>Excellent time management and organisational skills.</li>
									<li>Accuracy and attention to detail.</li>
									<li>An understanding of the latest trends and their role within a commercial environment.</li>
								</ol>
							</div>
							<div class="text-holder">
								<h3>Benefits</h3>
								<ul class="bullet-list">
									<li>Different types of job opportunities</li>
									<li>Stable work hours.</li>
									<li>Potential to work remotely.</li>
									<li>Sense of accomplishment.</li>
									<li>Income and benefits.</li>
								</ul>
							</div>
							<div class="text-holder note-box">
								<h3>Notes</h3>
								<p>office staff, admins, and field techs will be able to see that is specific to that individual job where the note lives.</p>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- Categories Block -->
			<section class="section section-theme-1 section-categories related-categories bg-light-sky pt-35 pt-md-50 pt-lg-65 pt-xl-80 pt-xxl-110 pb-35 pb-md-50 pb-lg-65 pb-xl-80 pb-xxl-110">
				<div class="container">
					<div class="row justify-content-between mb-35 mb-lg-40">
						<div class="col-12 col-lg-8 col-xl-5">
							<!-- Section header -->
							<header class="section-header text-center text-lg-start mb-10 m-lg-0">
								<h2>Related Jobs</h2>
								<p>Most viewed and all-time top-selling services</p>
							</header>
						</div>
					</div>
					<div class="row">
						<div class="col-12">
							<div class="jobs-listing-slider">
								<div class="slick-slide">
									<!-- Featured Category Box -->
									<article class="featured-category-box">
										<span class="tag">Intership</span>
										<div class="img-holder">
											<img src="images/company-logo01.jpg" width="78" height="78" alt="Financial Analyst">
										</div>
										<div class="textbox">
											<strong class="h6">Financial Analyst</strong>
											<span class="subtitle">By WebTechnology</span>
											<address class="location"><i class="icon icon-map-pin"></i><span class="text">Pekanbaru, Indonesia</span></address>
											<div class="job-info">
												<span class="subtext">11 hours ago</span>
												<span class="amount"><strong>$1000 - $1200</strong>/month</span>
											</div>
											<a href="#" class="btn btn-dark-yellow btn-sm"><span class="btn-text"><span class="text">Apple Now</span><i class="icon-chevron-right"></i></span></a>
										</div>
									</article>
								</div>
								<div class="slick-slide">
									<!-- Featured Category Box -->
									<article class="featured-category-box">
										<span class="tag">Part Time</span>
										<div class="img-holder">
											<img src="images/company-logo02.jpg" width="78" height="78" alt="Javascript Developer">
										</div>
										<div class="textbox">
											<strong class="h6">Javascript Developer</strong>
											<span class="subtitle">By Websikon</span>
											<address class="location"><i class="icon icon-map-pin"></i><span class="text">Pekanbaru, Indonesia</span></address>
											<div class="job-info">
												<span class="subtext">11 hours ago</span>
												<span class="amount"><strong>$1000 - $1200</strong>/month</span>
											</div>
											<a href="#" class="btn btn-dark-yellow btn-sm"><span class="btn-text"><span class="text">Apple Now</span><i class="icon-chevron-right"></i></span></a>
										</div>
									</article>
								</div>
								<div class="slick-slide">
									<!-- Featured Category Box -->
									<article class="featured-category-box">
										<span class="tag">Intership</span>
										<div class="img-holder">
											<img src="images/company-logo03.jpg" width="78" height="78" alt="Technical Writer">
										</div>
										<div class="textbox">
											<strong class="h6">Technical Writer</strong>
											<span class="subtitle">By Softy</span>
											<address class="location"><i class="icon icon-map-pin"></i><span class="text">Pekanbaru, Indonesia</span></address>
											<div class="job-info">
												<span class="subtext">11 hours ago</span>
												<span class="amount"><strong>$1000 - $1200</strong>/month</span>
											</div>
											<a href="#" class="btn btn-dark-yellow btn-sm"><span class="btn-text"><span class="text">Apple Now</span><i class="icon-chevron-right"></i></span></a>
										</div>
									</article>
								</div>
								<div class="slick-slide">
									<!-- Featured Category Box -->
									<article class="featured-category-box">
										<span class="tag">Full Time</span>
										<div class="img-holder">
											<img src="images/company-logo04.jpg" width="78" height="78" alt="Product Manager">
										</div>
										<div class="textbox">
											<strong class="h6">Product Manager</strong>
											<span class="subtitle">By Geniouslab</span>
											<address class="location"><i class="icon icon-map-pin"></i><span class="text">Pekanbaru, Indonesia</span></address>
											<div class="job-info">
												<span class="subtext">11 hours ago</span>
												<span class="amount"><strong>$1000 - $1200</strong>/month</span>
											</div>
											<a href="#" class="btn btn-dark-yellow btn-sm"><span class="btn-text"><span class="text">Apple Now</span><i class="icon-chevron-right"></i></span></a>
										</div>
									</article>
								</div>
								<div class="slick-slide">
									<!-- Featured Category Box -->
									<article class="featured-category-box">
										<span class="tag">Full Time</span>
										<div class="img-holder">
											<img src="images/company-logo05.jpg" width="78" height="78" alt="Human Resources">
										</div>
										<div class="textbox">
											<strong class="h6">Human Resources</strong>
											<span class="subtitle">By Develpersoft</span>
											<address class="location"><i class="icon icon-map-pin"></i><span class="text">Pekanbaru, Indonesia
											</span></address>
											<div class="job-info">
												<span class="subtext">11 hours ago</span>
												<span class="amount"><strong>$1000 - $1200</strong>/month</span>
											</div>
											<a href="#" class="btn btn-dark-yellow btn-sm"><span class="btn-text"><span class="text">Apple Now</span><i class="icon-chevron-right"></i></span></a>
										</div>
									</article>
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