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
		<!-- Visual of the page -->
		<div class="visual-block visual-theme-1 bg-dark-green pt-40 pt-md-65 pb-40 pb-md-65 pb-xl-85 text-white">
			<div class="container position-relative">
				<div class="row justify-content-between">
					<div class="col-12 col-lg-7 col-xl-6 position-relative">
						<!-- visual textbox -->
						<div class="visual-textbox">
							<h1>Bridging the Gap Between Talent and Employers</h1>
							<a class="mt-3" href="register"><button class="btn btn-green btn-sm" type="button"><span class="btn-text">Register</span></button></a>
							<p></p>
							<!-- search form -->
							<form class="form-search" action="#" id="jobSearchForm">
                                <div class="fields-holder bg-white text-black d-flex flex-wrap flex-md-nowrap">
                                    <div class="form-group">
                                        <i class="icon icon-search"></i>
                                        <select class="select2" name="job" id="jobSelect" data-placeholder="Select Country">
                                            <option selected>~Select Category~</option>
                                            <option value="healthcare">Healthcare</option>
                                            <option value="finance">Finance and Accounting</option>
                                            <option value="marketing">Marketing and Sales</option>
                                            <option value="education">Education</option>
                                            <option value="hr">Human Resource</option>
                                            <option value="customer-service">Customer Service</option>
                                            <option value="hospitality">Hospitality and Tourism</option>
                                            <option value="construction">Construction</option>
                                            <option value="retail">Retail</option>
                                            <option value="administrative">Administrative</option>
                                        </select>
                                    </div>
                                </div>
                                <button class="btn btn-green btn-sm" type="submit"><span class="btn-text">Find Job</span></button>
								
                            </form>
							<?php $data2=mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM index_pop"));?>
							<div class="popular-searches">
								<strong class="subtitle">Popular Searches:</strong>
								<ul>
									<li><a href="healthcare"><?php echo $data2['pop_one']?></a></li>
									<li><a href="marketing"><?php echo $data2['pop_two']?></a></li>
									<li><a href="finance"><?php echo $data2['pop_three']?></a></li>
									<li><a href="administrative"><?php echo $data2['pop_four']?></a></li>
									<li><a href="education"><?php echo $data2['pop_five']?></a></li>
									<li><a href="hr"><?php echo $data2['pop_six']?></a></li>
								</ul>
							</div>
							<div class="bg-patterns">
								<img src="images/bg-pattern.png" width="242" height="423" alt="Icons">
							</div>
						</div>
					</div>
					<div class="col-12 col-lg-5 col-xl-6 d-flex justify-content-center align-items-center">
						<!-- visual Image -->
						<div class="visual-image position-relative">
							<img src="images/avatars/banner.png" width="642" height="494" alt="Find The Perfect Job For You">
							<div class="icons-black">
								<img src="images/icon-pattern01.png" width="306" height="321" alt="Icons">
							</div>
							<div class="icon-circle">
								<img src="images/icon-pattern02.png" width="95" height="95" alt="Icons">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- contain main informative part of the site -->
		<main class="main">
			<!-- Trending Categories Section -->
			<section class="section section-theme-1 section-trending-categories pt-35 pt-md-50 pt-lg-65 pb-35px pb-md-50 pb-lg-65">
				<div class="container">
					<!-- Section header -->
					<header class="section-header text-center mb-30 mb-md-45 mb-xl-60">
						<div class="seprator"></div>
						<h2>Trending Categories</h2>
						<p>Beneath each of these categories, you can find its most popular</p>
					</header>
					<div class="trending-categories-slider">
						<?php
						$data1=mysqli_query($conn,"SELECT * FROM index_trend"); 
						while($d1=mysqli_fetch_array($data1)){
							?>
							<div class="slick-slide">
							    <a href="<?php echo $d1['job_link']?>" class="trending-categories-box">
								    <div class="icon">
									    <img src="admin/elements/uploads/<?php echo $d1['job_icon']?>" width="49" height="49" alt="UI/UX Design">
								    </div>
								    <div class="textbox">
									    <strong class="h6"><?php echo $d1['job_name']?></strong>
								    </div>
							    </a>
						    </div>
							<?php
						}
						?>
						
					</div>
				</div>
			</section>
			<!-- Popular Jobs Section -->
			<section class="section section-theme-1 section-popular-jobs pt-35 pt-md-50 pt-lg-65 pb-35 pb-md-50 pb-lg-65">
				<div class="container">
					<!-- Section header -->
					<header class="section-header text-center mb-30 mb-md-45 mb-xl-60">
						<div class="seprator"></div>
						<h2>Most Popular Jobs</h2>
						<p>Beneath each of these categories, you can find its most popular</p>
					</header>
					<div class="row">

					    <?php
                        $data=mysqli_query($conn,"SELECT * FROM index_popjob ");
                        while($d=mysqli_fetch_array($data)){
                            ?>
							<div class="col-12 col-lg-6 mb-15 mb-md-25 mb-lg-35">
							    <article class="popular-jobs-box">
								    <div class="box-holder">
									    <div class="job-info">
										    <div class="img-holder">
											    <img src="admin/elements/uploads/<?php echo $d['job_icon']?>" width="78" height="78" alt="Image Description">
										    </div>
										    <div class="textbox">
											    <h3 class="h5"><?php echo $d['job_name']?></h3>
											    <ul class="meta-list">
												    
												    <li><i class="icon-map-pin"></i><span class="text"><?php echo $d['job_loc']?></span></li>
											    </ul>
											    <ul class="tags-list">
												    <li><span class="tag"><?php echo $d['job_tag_one']?></span></li>
												    <li><span class="tag"><?php echo $d['job_tag_two']?></span></li>
												    <li><span class="tag"><?php echo $d['job_tag_three']?></span></li>
											    </ul>
										    </div>
									    </div>
									    <footer class="jobs-foot">
										    <strong class="amount"><?php echo $d['salary']?><span>/month</span></strong>
										    <a href="login" class="btn btn-green btn-sm"><span class="btn-text">Apply Now</span></a>
									    </footer>
								    </div>
							    </article>
						    </div>	
                            <?php
                        }
                        ?>
						
					</div>
					<div class="row">
						<div class="col-12 text-center pt-15 pt-md-25">
							<a href="register" class="btn btn-green btn-sm"><span class="btn-text">Register Now</span></a>
						</div>
					</div>
				</div>
			</section>
			<!-- Explores Section -->
			<section class="section section-theme-1 section-explores bg-light-gray pt-35 pt-md-50 pt-lg-65 pt-xl-125 pb-35 pb-md-50 pb-lg-65 pb-xl-125">
				<div class="container">
					<div class="row flex-column-reverse flex-lg-row align-items-center">
						<div class="col-12 col-lg-6 mb-15 mb-lg-0">
							<div class="explores-image-box">
								<div class="img-pattern"><img src="images/explore-pattern.png" width="723" height="461" alt="Image Description"></div>
								<div class="image-holder">
									<img src="images/avatars/bus.jpg" width="560" height="570" alt="Image Description">
								</div>
							</div>
						</div>
						<div class="col-12 col-lg-6">
							<div class="section-header">
								<h2>Your Career,<span class="text-outlined"> Our Commitment</span></h2>
								<p>Discover a world of opportunities tailored to your skills and aspirations. At a2zservices.com, we are dedicated to connecting you with your dream job. Our platform offers a wide range of positions across various industries to help you achieve your career goals.</p>
								<ul class="check-list">
									<li><b>Personalized Job Matches:</b> Receive job recommendations that match your unique profile and preferences.</li>
									<li><b>Expert Career Advice:</b> Access tips and guidance from industry professionals to help you succeed.</li>
									<li><b>Easy Application Process:</b> Apply for jobs seamlessly with our user-friendly interface.</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="row align-items-center pt-35 pt-md-60 pt-lg-100">
						<div class="col-12 col-lg-6 col-xl-5 mb-30 mb-lg-0">
							<div class="section-header mb-0">
								<h2>Find a Job You'll Love with The <span class="text-outlined">#1&nbsp;Job</span> Site</h2>
								<p>Your next role could be with one of these leading companies.</p>
							</div>
						</div>
						<div class="col-12 col-lg-6 col-xl-7">
							<ul class="sites-list">
								<?php
								$data3=mysqli_query($conn,"SELECT * FROM index_company"); 
								while($d3=mysqli_fetch_array($data3)){
									?>
									<li><a href="javascript:;"><img src="admin/elements/uploads/<?php echo $d3['company']?>" alt="Image Description"></a></li>
									<?php

								}
								?>
								
								
							</ul>
						</div>
					</div>
				</div>
			</section>
			<!-- How Works Section -->
			<section class="section section-theme-1 section-how-works pt-45 pt-md-50 pt-lg-65 pt-xl-85 pt-xxl-110 pb-60 pb-md-80 pb-xl-85 pb-xxl-110 pb-xxxl-150">
				<div class="container">
					<!-- Section header -->
					<header class="section-header text-center mb-30 mb-md-45 mb-xl-60">
						<div class="seprator"></div>
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
								<div class="section-header">
									<h2>Get your Matched Jobs in a few <span class="text-outlined">minutes</span>.</h2>
									<p>Find your dream job & earn from world leading brands. </p>
									<a href="register" class="btn btn-green btn-sm"><span class="btn-text"><i class="icon-upload-cloud"></i>Register</span></a>
								</div>
								<div class="image-holder">
									<img src="images/image-circle.png" width="462" height="436" alt="Image Description">
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- Popular Blockquotes -->
			<section class="section section-theme-1 bg-light-gray section-quotes pt-35 pt-md-50 pt-lg-65 pt-xl-90 pt-xxl-120 pb-35px pb-md-50 pb-lg-65 pb-xl-90 pb-xxl-120">
				<div class="container">
					<!-- Section header -->
					<header class="section-header text-center mb-30 mb-md-45 mb-xl-60">
						<div class="seprator"></div>
						<h2>What Our Customers Say About Us</h2>
						<p>Beneath each of these categories, you can find its most popular</p>
					</header>
					<div class="quotes-slider">
						<?php
						$data4=mysqli_query($conn,"SELECT * FROM index_review"); 
						while($d4=mysqli_fetch_array($data4)){
							?>
							<div class="slick-slide">
							    <div class="quotes-box">
								    <div class="author-box">
									    <div class="author-avatar">
										    <img src="admin/elements/uploads/<?php echo $d4['customer_img']?>" width="119" height="119" alt="Linda Romania">
									    </div>
									    <strong class="author-name h6"><?php echo $d4['customer_name']?></strong>
								    </div>
								    <blockquote>
									    <q><?php echo $d4['review']?></q>
								    </blockquote>
							    </div>
						    </div>
							<?php
						}
						?>
						
					</div>
				</div>
			</section>
			<!-- Featured News Block -->
			
			<!-- Downloads Section -->
			
		</main>
		<!-- footer of the page -->
		<?php include("elements/footer.php");?>
	</div>
	<script>
document.getElementById('jobSearchForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent form submission
    var job = document.getElementById('jobSelect').value;
    if (job === '---') {
        alert('Please select a job category.');
    } else {
        var url = '';
        switch (job) {
            case 'healthcare':
                url = 'healthcare';
                break;
            case 'finance':
                url = 'finance';
                break;
            case 'marketing':
                url = 'marketing';
                break;
            case 'education':
                url = 'education';
                break;
            case 'hr':
                url = 'hr';
                break;
            case 'customer-service':
                url = 'customer-service';
                break;
            case 'hospitality':
                url = 'hospitality';
                break;
            case 'construction':
                url = 'construction';
                break;
            case 'retail':
                url = 'retail';
                break;
            case 'administrative':
                url = 'administrative';
                break;
            default:
                url = '#';
        }
        window.location.href = url;
    }
});
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
