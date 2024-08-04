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
							<h1 class="text-uppercase" >Candidate Profile</h1>
							<p>Your profile contains your basic personal information</p>
						</div>
						<nav class="breadcrumb-nav text-white d-flex justify-content-center mt-20 mt-lg-40">
							<ul class="breadcrumb mb-0">
								<li class="breadcrumb-item text-uppercase"><a href="index">Home</a></li>
								<li class="breadcrumb-item text-uppercase"><a href="javascript:;">Browse Jobs</a></li>
								<li class="breadcrumb-item active text-uppercase">Candidate Profile</li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</div>
		<!-- contain main informative part of the site -->
		<main class="main">
			<!-- conpany Details Section -->
			<section class="section section-company-details section-theme-1 pt-35 pt-md-50 pt-lg-75 pt-xl-100 pb-35 pb-md-50 pb-xl-100">
				<div class="container">
					<div class="row">
						<div class="col-12 col-md-7 col-xl-8">
							<div class="block-holder">
								<h3>Candidate Overview</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt lab magna aliqua. Ut enim ad minim veniam, quisoris nisi ut aliquip ex ea commodo consequat. Duis dolor in reprehenderit in vol tate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum d olor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt lab magna aliqua. Ut enim ad minim veniam, quisderit in vol tate velit.</p>
								<p>dolor in reprehenderit in vol tate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum d olor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt lab magna aliqua. Ut enim ad minim veniam, quisderit in vol tate velit.</p>
							</div>
							<div class="block-holder">
								<h4>Introduction</h4>
								<div class="video-box">
									<img src="images/image-video02.jpg" width="850" height="460" alt="Candidate Intro">
									<a class="btn-play" data-fancybox href="https://youtu.be/D0UnqGm_miA"><span class="icon-play"></span></a>
								</div>
							</div>
							<div class="block-holder">
								<h4>Candidate Skills</h4>
								<ul class="tags-list">
									<li><span class="tag">HTML</span></li>
									<li><span class="tag">CSS</span></li>
									<li><span class="tag">Figma</span></li>
									<li><span class="tag">Illustrator</span></li>
									<li><span class="tag">Web Design</span></li>
									<li><span class="tag">Adobe XD</span></li>
									<li><span class="tag">WordPress</span></li>
									<li><span class="tag">Accounting</span></li>
									<li><span class="tag">Multimedia</span></li>
								</ul>
							</div>
							<div class="block-holder">
								<h4>Education</h4>
								<ul class="candidate-info-list">
									<li>
										<div class="head">
											<h5>Bachelor Degree of Design</h5>
											<span class="tag">oxford university</span>
										</div>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin a ipsum tellus Int erdum primis Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
									</li>
									<li>
										<div class="head">
											<h5>Master Degree</h5>
											<span class="tag">oxford university</span>
										</div>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin a ipsum tellus Int erdum primis Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
									</li>
								</ul>
							</div>
							<div class="block-holder">
								<h4>Work Experience</h4>
								<ul class="candidate-info-list">
									<li>
										<div class="head">
											<h5>Graphic Designing</h5>
											<span class="tag">Dec 21, 2018 -  Dec 21, 2023</span>
										</div>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin a ipsum tellus Int erdum primis Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
									</li>
									<li>
										<div class="head">
											<h5>UI/UX Engineer (Adobe)</h5>
											<span class="tag">Dec 21, 2018 -  Dec 21, 2023</span>
										</div>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin a ipsum tellus Int erdum primis Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
									</li>
									<li>
										<div class="head">
											<h5>HTML / CSS Developer</h5>
											<span class="tag">Dec 21, 2018 -  Dec 21, 2023</span>
										</div>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin a ipsum tellus Int erdum primis Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
									</li>
								</ul>
							</div>
							<div class="block-holder form-condidates">
								<div class="subhead">
									<h4>Email to Candidate</h4>
									<p>Your email address & profile will be shown to the recipient.</p>
								</div>
								<!-- Contact Form -->
								<form class="contac-form" action="#">
									<div class="row">
										<div class="col-12 col-lg-6 mb-15 pe-lg-5">
											<input class="form-control" type="text" placeholder="Full Name">
										</div>
										<div class="col-12 col-lg-6 mb-15 ps-lg-5">
											<input class="form-control" type="email" placeholder="Email Address">
										</div>
										<div class="col-12 mb-15">
											<textarea class="form-control" cols="30" rows="10" placeholder="Your Message"></textarea>
										</div>
										<div class="col-12 pt-10">
											<button class="btn btn-green btn-sm"><span class="btn-text">Send Message</span></button>
										</div>
									</div>
								</form>
							</div>
						</div>
						<div class="col-12 col-md-5 col-xl-4 pt-35 pt-md-0">
							<div class="company-info-box">
								<div class="company-info-head">
									<div class="company-logo">
										<img src="images/img-candidate.jpg" width="108" height="108" alt="Develpersoft">
									</div>
									<div class="textbox">
										<h4>Thomas Walkar</h4>
										<p>Graphic Designer</p>
										<p>Employee:  Master Degree</p>
										<p>Expected Salary:   $3k-$4k/month</p>
										<div class="btn-wrap pt-15 pb-25">
											<a href="#" class="btn btn-green btn-sm"><span class="btn-text">Download CV</span></a>
										</div>
									</div>
								</div>
								<div class="company-contact-info">
									<ul class="company-contact-list">
										<li>
											<i class="ico icon-phone"></i>
											<div class="textinfo">
												<strong class="title">Phone No:</strong>
												<span class="text"><a href="tel:+44(0)2079422000">+44 (0)20 7942 2000</a></span>
											</div>
										</li>
										<li>
											<i class="ico icon-mail"></i>
											<div class="textinfo">
												<strong class="title">Email Address:</strong>
												<span class="text"><a href="mailto:support@domain.com">support@domain.com</a></span>
											</div>
										</li>
										<li>
											<i class="ico icon-map-pin"></i>
											<div class="textinfo">
												<strong class="title">Location:	</strong>
												<address class="text">Cromwell Road New Town London SW7 2RL</address>
											</div>
										</li>
										<li>
											<div class="textinfo">
												<strong class="title">Social Media Profiles:</strong>
												<ul class="social-networks d-flex flex-wrap">
													<li><a href="#"><i class="icon-facebook"></i></a></li>
													<li><a href="#"><i class="icon-instagram"></i></a></li>
													<li><a href="#"><i class="icon-twitter"></i></a></li>
												</ul>
											</div>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- Services Block -->
			<section class="section section-theme-6 related-services related-categories bg-light-sky pt-35 pt-md-50 pt-lg-65 pt-xl-80 pt-xxl-110 pb-35 pb-md-50 pb-lg-65 pb-xl-80 pb-xxl-110">
				<div class="container">
					<div class="row justify-content-between mb-25 mb-lg-40">
						<div class="col-12 col-lg-8 col-xl-5">
							<!-- Section header -->
							<header class="section-header text-center text-lg-start mb-10 m-lg-0">
								<h2>Candidate Services</h2>
								<p>Most viewed and all-time top-selling services</p>
							</header>
						</div>
					</div>
					<div class="row">
						<div class="col-12">
							<div class="services-carousel">
								<div class="service-slide">
									<div class="inner-frame">
										<a href="#">
											<div class="image-holder">
												<img src="images/service-01.jpg" alt="image">
											</div>
											<div class="service-info-box">
												<strong class="sub-heading">Web & App Design</strong>
												<h2>I will create modern flat design illustration</h2>
												<div class="service-footer">
													<div class="img"><img src="images/avatar-01.jpg" alt="image"></div>
													<div class="text">
														<strong class="title">Thomas Willimes</strong>
														<p class="m-0 price">Starting at  <strong>$1000</strong></p>
													</div>
												</div>
											</div>
										</a>
									</div>
								</div>
								<div class="service-slide">
									<div class="inner-frame">
										<a href="#">
											<div class="image-holder">
												<img src="images/service-02.jpg" alt="image">
											</div>
											<div class="service-info-box">
												<strong class="sub-heading">Web & App Design</strong>
												<h2>Admin & Customer Support</h2>
												<div class="service-footer">
													<div class="img"><img src="images/avatar-02.jpg" alt="image"></div>
													<div class="text">
														<strong class="title">Romina Jamson</strong>
														<p class="m-0 price">Starting at  <strong>$1000</strong></p>
													</div>
												</div>
											</div>
										</a>
									</div>
								</div>
								<div class="service-slide">
									<div class="inner-frame">
										<a href="#">
											<div class="image-holder">
												<img src="images/service-03.jpg" alt="image">
											</div>
											<div class="service-info-box">
												<strong class="sub-heading">Web & App Design</strong>
												<h2>I will build a fully responsive design</h2>
												<div class="service-footer">
													<div class="img"><img src="images/avatar-01.jpg" alt="image"></div>
													<div class="text">
														<strong class="title">Wanda Rano</strong>
														<p class="m-0 price">Starting at  <strong>$1000</strong></p>
													</div>
												</div>
											</div>
										</a>
									</div>
								</div>
								<div class="service-slide">
									<div class="inner-frame">
										<a href="#">
											<div class="image-holder">
												<img src="images/service-04.jpg" alt="image">
											</div>
											<div class="service-info-box">
												<strong class="sub-heading">Web & App Design</strong>
												<h2>I will do mobile app development</h2>
												<div class="service-footer">
													<div class="img"><img src="images/avatar-04.jpg" alt="image"></div>
													<div class="text">
														<strong class="title">Jakki Thomas</strong>
														<p class="m-0 price">Starting at  <strong>$1000</strong></p>
													</div>
												</div>
											</div>
										</a>
									</div>
								</div>
								<div class="service-slide">
									<div class="inner-frame">
										<a href="#">
											<div class="image-holder">
												<img src="images/service-02.jpg" alt="image">
											</div>
											<div class="service-info-box">
												<strong class="sub-heading">Web & App Design</strong>
												<h2>Admin & Customer Support</h2>
												<div class="service-footer">
													<div class="img"><img src="images/avatar-02.jpg" alt="image"></div>
													<div class="text">
														<strong class="title">Romina Jamson</strong>
														<p class="m-0 price">Starting at  <strong>$1000</strong></p>
													</div>
												</div>
											</div>
										</a>
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
