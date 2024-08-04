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
		<div class="subvisual-block subvisual-theme-1 bg-dark-green d-flex pt-60 pt-md-90 pt-lg-150 pb-30 text-white">
			<div class="pattern-image"><img src="images/bg-pattern-overlay.jpg" width="1920" height="570" alt="Pattern"></div>
			<div class="container position-relative text-center">
				<div class="row">
					<div class="col-12">
						<div class="subvisual-textbox">
							<h1 class="text-uppercase">About Us</h1>
							
						</div>
						<nav class="breadcrumb-nav text-white d-flex justify-content-center mt-20 mt-lg-40">
							<ul class="breadcrumb mb-0">
								<li class="breadcrumb-item text-uppercase"><a href="index">Home</a></li>
								<li class="breadcrumb-item active text-uppercase">About Us</li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</div>
		<!-- contain main informative part of the site -->
		<main class="main">
			<!-- About Section -->
			<section class="section section-about section-theme-1 pt-35 pt-md-50 pt-lg-70 pt-xl-100 pt-xxl-120 pb-35 pb-md-50 pb-lg-70 pb-xl-100 pb-xxl-120">
				<div class="container">
					<!-- Section header -->
					<header class="section-header mb-30 mb-md-45 mb-xl-60">
						<p class="fw-bold">About Our Company</p>
						<h2>Dedicated to Your Success, Committed to Excellence</h2>
					</header>
					<div class="row">
						<div class="col-12 col-lg-7 mb-35 mb-lg-0">
							<div class="textbox">
								<ul class="nav nav-tabs nav-tabs-line mb-15 mb-lg-30">
									<li><button class="nav-link active" data-bs-toggle="tab" data-bs-target="#nav-tab01" type="button">Our Mission</button></li>
									<li><button class="nav-link" data-bs-toggle="tab" data-bs-target="#nav-tab02" type="button">Our Values</button></li>
									<li><button class="nav-link" data-bs-toggle="tab" data-bs-target="#nav-tab03" type="button">Our Story</button></li>
								</ul>
								<div class="tab-content">
									<div class="tab-pane fade show active" id="nav-tab01">
										<p>At a2zservices.com, our mission is to bridge the gap between talented professionals and top employers. We strive to create a seamless, efficient, and effective platform where job seekers can find opportunities that match their skills and aspirations. Our goal is to empower individuals to achieve their career dreams by providing them with the resources and support they need to succeed.</p>
										<p>We are dedicated to building long-lasting relationships with both job seekers and employers. By understanding the unique needs of each party, we tailor our services to ensure the best possible outcomes. Our commitment to excellence drives us to continually innovate and improve our platform, making it easier for users to connect and thrive.</p>
										<p>Every individual has a unique career path, and we recognize the importance of offering personalized solutions. Our mission is not only to connect job seekers with employers but also to provide career guidance, skill development resources, and support at every stage of the job search process. By fostering an environment of continuous growth and learning, we help our users stay competitive in an ever-evolving job market.</p>
                                    </div>
									<div class="tab-pane fade" id="nav-tab02">
									    <p>Integrity, innovation, and inclusivity are at the core of everything we do at a2zservices.com. We believe in conducting our business with honesty and transparency, ensuring that all our interactions are based on trust and respect. Our team is passionate about creating a platform that reflects these values, fostering a positive and supportive environment for all users.</p>
										<p>Innovation is key to our success. We leverage the latest technology and industry best practices to provide a state-of-the-art recruitment experience. Our platform is designed to be user-friendly and efficient, helping job seekers and employers navigate the recruitment process with ease. Inclusivity is also paramount; we are committed to promoting diversity and equality in the workplace.</p>
										<p>Our values extend beyond our platform. We are committed to giving back to the community and supporting initiatives that drive positive social change. Whether through partnerships with educational institutions, participation in job fairs, or providing free resources for job seekers, we aim to make a meaningful impact on the broader employment landscape. By championing diversity and inclusion, we ensure that everyone has an equal opportunity to succeed.</p>
                                    </div>
									<div class="tab-pane fade" id="nav-tab03">
									    <p>a2zservices.com was founded with the vision of revolutionizing the recruitment industry. Frustrated by the challenges and inefficiencies of traditional job searching methods, our founders set out to create a modern, digital solution that would simplify the process for everyone involved. What started as a small initiative has grown into a thriving platform that serves thousands of users.</p>
										<p>Over the years, we have expanded our services and refined our approach to better meet the needs of our community. Today, a2zservices.com is a trusted partner for job seekers and employers alike, offering a comprehensive suite of tools and resources to facilitate successful job matches. Our journey is driven by a passion for helping others achieve their career goals and a commitment to making the recruitment process as smooth and effective as possible.</p>
										<p>Our story is one of continuous growth and adaptation. From our humble beginnings, we have embraced change and innovation, staying ahead of industry trends to provide the best possible service. Our team of dedicated professionals works tirelessly to enhance the user experience, ensuring that our platform remains intuitive and responsive to the needs of our users. As we look to the future, we remain committed to our founding principles while seeking new ways to support and inspire the job seekers and employers who rely on us.</p>
                                    </div>
								</div>
								
							</div>
						</div>
						<div class="col-12 col-lg-5">
							<div class="about-image">
								<img src="images/img-about-01.jpg" width="560" height="570" alt="Intro">
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- Leadership Section -->
			
			<!-- How Works Section -->
			<section class="section section-theme-1 section-how-works pt-45 pt-md-50 pt-lg-65 pt-xl-85 pt-xxl-110 pb-60 pb-md-80 pb-xl-85 pb-xxl-110 pb-xxxl-150">
				<div class="container">
					<!-- Section header -->
					<header class="section-header text-center mb-30 mb-md-45 mb-xl-60">
						<h2>How it’s work?</h2>
						<p>Beneath each of these categories, you can find its most popular</p>
					</header>
					<div class="row mb-35 mb-lg-60 mb-xl-90">
						<div class="col-12 col-md-4 text-center mb-30 mb-md-0">
							<div class="how-work-box">
								<div class="icon">
									<img src="images/line-icon06.png" alt="Image Description">
								</div>
								<strong class="num">01</strong>
								<strong class="h5">Create Account</strong>
								<p>It’s very easy to open an account and start your journey.</p>
							</div>
						</div>
						<div class="col-12 col-md-4 text-center mb-30 mb-md-0">
							<div class="how-work-box">
								<div class="icon">
									<img src="images/line-icon07.png" alt="Image Description">
								</div>
								<strong class="num">02</strong>
								<strong class="h5">Complete your profile</strong>
								<p>Complete your profile with all the info to get attention of client.</p>
							</div>
						</div>
						<div class="col-12 col-md-4 text-center mb-30 mb-md-0">
							<div class="how-work-box">
								<div class="icon">
									<img src="images/line-icon08.png" alt="Image Description">
								</div>
								<strong class="num">03</strong>
								<strong class="h5">Apply job or hire</strong>
								<p>Apply &amp; get your preferable jobs with all the requirements and get it.</p>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-12">
							<div class="matched-jobs-block">
								<div class="bg-pattern">
									<img src="images/bg-pattern-overlay1.jpg" alt="bg Pattern">
								</div>
								<div class="section-header">
									<h2>Get your Matched Jobs in a few <span class="text-outlined">minutes</span>.</h2>
									<p>Find your dream job & earn from world leading brands. </p>
									<a href="register" class="btn btn-green btn-sm"><span class="btn-text"><i class="icon-upload-cloud"></i>Register Now</span></a>
								</div>
								<div class="image-holder">
									<img src="images/image-circle.png" width="462" height="436" alt="Image Description">
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- Learning Block -->
			
			<!-- top companies -->
			
			<!-- Downloads Section -->
			
		</main>
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
