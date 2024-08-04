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
							<h1 class="text-uppercase">Faq</h1>
							
						</div>
						<nav class="breadcrumb-nav text-white d-flex justify-content-center mt-20 mt-lg-40">
							<ul class="breadcrumb mb-0">
								<li class="breadcrumb-item text-uppercase"><a href="index">Home</a></li>
								
								<li class="breadcrumb-item active text-uppercase">Faq</li>
							</ul>
						</nav>
						
					</div>
				</div>
			</div>
		</div>
		<!-- contain main informative part of the site -->
		<main class="main">
			<!-- FAQ Section -->
			<section class="section section-theme-1 section-faqs pt-35 pt-md-50 pt-lg-75 pt-xl-100 pt-xxl-125 pb-35 pb-md-50 pb-lg-75 pb-xl-100 pb-xxl-125">
				<div class="container">
					<div class="accordion" id="faq-accordion">
						<div class="accordion-item">
							<h2 class="accordion-header" id="headingOne">
								<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
									<span class="bullet"></span>
									<span class="title">1. How do I create an account on a2zservices.com?</span>
								</button>
							</h2>
							<div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#faq-accordion">
								<div class="accordion-body">
									<p>To create an account on a2zservices.com, click on the "Register" button located at the top right corner of the homepage. Fill in the required information, such as your name, email address, and password, and follow the prompts to complete the registration process. Once registered, you can start applying for jobs and manage your profile.</p>
									
								</div>
							</div>
						</div>
						<div class="accordion-item">
							<h2 class="accordion-header" id="headingTwo">
								<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
									<span class="bullet"></span>
									<span class="title">2. How can I apply for jobs on a2zservices.com?</span>
								</button>
							</h2>
							<div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faq-accordion">
								<div class="accordion-body">
									<p>To apply for jobs, first, create an account and log in. Browse the job listings and select the position you are interested in. Click on the "Apply Now" button and follow the instructions to submit your application. You may need to upload your resume and cover letter during the application process.</p>
									
								</div>
							</div>
						</div>
						<div class="accordion-item">
							<h2 class="accordion-header" id="headingThree">
								<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
									<span class="bullet"></span>
									<span class="title">3. How do I post a job on a2zservices.com?</span>
								</button>
							</h2>
							<div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faq-accordion">
								<div class="accordion-body">
									<p>If you are an employer, log in to your account and navigate to the "Post a Job" section. Fill in the job details, including the job title, description, requirements, and location. After reviewing the information, click "Submit" to post the job listing. Your job will be visible to job seekers once approved.</p>
									
								</div>
							</div>
						</div>
						<div class="accordion-item">
							<h2 class="accordion-header" id="headingFour">
								<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
									<span class="bullet"></span>
									<span class="title">4. How can I update my profile information?</span>
								</button>
							</h2>
							<div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#faq-accordion">
								<div class="accordion-body">
									<p>To update your profile information, log in to your account and go to the "Profile" section. Here, you can edit your personal information, upload a new resume, and update your job preferences. Make sure to save the changes before exiting.</p>
									
								</div>
							</div>
						</div>
						<div class="accordion-item">
							<h2 class="accordion-header" id="headingFive">
								<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
									<span class="bullet"></span>
									<span class="title">5. What should I do if I forget my password?</span>
								</button>
							</h2>
							<div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#faq-accordion">
								<div class="accordion-body">
									<p>If you forget your password, click on the "Forgot Password" link on the login page. Enter your registered email address, and we will send you instructions on how to reset your password. Follow the link in the email to create a new password.</p>
									
								</div>
							</div>
						</div>
						<div class="accordion-item">
							<h2 class="accordion-header" id="headingSix">
								<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
									<span class="bullet"></span>
									<span class="title">6. How can I contact customer support?</span>
								</button>
							</h2>
							<div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#faq-accordion">
								<div class="accordion-body">
									<p>If you need assistance or have any questions, you can contact our customer support team by sending an email to [Your Contact Email]. We aim to respond to all inquiries within 24 hours. You can also visit our "Contact Us" page for more information.</p>
									
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- FAQ Section -->
			<section class="section section-theme-1 section-faqs pt-15 pt-md-0 pb-50 pb-md-50 pb-lg-75 pb-xl-100 pb-xxl-125">
				<div class="container">
					<div class="textbox text-center">
						<strong class="subtitle">Don’t get your answer?</strong>
						<h2>Please feel free to contact me if you need any further information</h2>
						<a href="contact" class="btn btn-green btn-sm"><span class="btn-text">Contact Us</span></a>
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
