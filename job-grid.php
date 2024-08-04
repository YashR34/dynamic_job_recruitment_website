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
							<h1>Job Grid</h1>
							<p>job duties, job responsibilities, and skills required</p>
						</div>
						<!-- search form -->
						<form class="form-search form-inline" action="#">
							<div class="fields-holder bg-white text-black d-flex flex-wrap flex-md-nowrap">
								<div class="form-group">
									<label for="rel01">What are you looking for?</label>
									<div class="form-input">
										<select id="rel01" class="select2" name="state" data-placeholder="What are you looking for?">
											<option label="Placeholder"></option>
											<option>Web Developer</option>
											<option>Web Developer</option>
											<option>Web Developer</option>
											<option>Web Developer</option>
										</select>
									</div>
								</div>
								<div class="form-group">
									<label for="rel02">Category</label>
									<div class="form-input">
										<select id="rel02" class="select2" name="state" data-placeholder="Category">
											<option label="Placeholder"></option>
											<option>Web Design</option>
											<option>Web Design</option>
											<option>Web Design</option>
											<option>Web Design</option>
										</select>
									</div>
								</div>
							</div>
							<button class="btn btn-green btn-sm" type="submit"><span class="btn-text">Find Job</span></button>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- contain main informative part of the site -->
		<main class="main">
			<!-- Featured Jobs Section -->
			<section class="section section-categories section-theme-1 pt-35 pt-md-50 pt-lg-75 pt-xl-95 pb-35 pb-md-50 pb-xl-75">
                <div class="container-fluid d-flex justify-content-center">
                    <div class="row">
                        <div class="col-12 col-lg-8 col-xxl-9 mx-auto">
							<!-- Page subheader -->
							<div class="row justify-content-center">
								<div class="col-12 col-md-6 col-xxl-4 mb-15 mb-md-20">
									<!-- Job Card -->
									<a href="#" class="job-card alt">
										<div class="inner-box">
											<span class="job-type">
												<img src="images/clock-icon.svg" width="20" height="22" alt="Duration">
												Intership
											</span>
											<h3>Backend Developer</h3>
											<strong class="salary-range">$1000 - $1200<sub>/month</sub></strong>
										</div>
										<div class="card-footer">
											<div class="img"><img src="images/company-logo01.jpg" width="68" height="68" alt="image"></div>
											<div class="bottom-box">
												<div class="info-row">
													<strong>By WebTechnology</strong>
													<p><i class="icon-map-pin"></i> Pekanbaru, Indonesia</p>
												</div>
											</div>
										</div>
									</a>
								</div>
								<div class="col-12 col-md-6 col-xxl-4 mb-15 mb-md-20">
									<!-- Job Card -->
									<a href="#" class="job-card alt">
										<div class="inner-box">
											<span class="job-type">
												<img src="images/clock-icon.svg" width="20" height="22" alt="Duration">
												Part Time
											</span>
											<h3>Javascript Developer</h3>
											<strong class="salary-range">$1000 - $1200<sub>/month</sub></strong>
										</div>
										<div class="card-footer">
											<div class="img"><img src="images/company-logo02.jpg" width="68" height="68" alt="image"></div>
											<div class="bottom-box">
												<div class="info-row">
													<strong>By Websikon</strong>
													<p><i class="icon-map-pin"></i> Pekanbaru, Indonesia</p>
												</div>
											</div>
										</div>
									</a>
								</div>
								<div class="col-12 col-md-6 col-xxl-4 mb-15 mb-md-20">
									<!-- Job Card -->
									<a href="#" class="job-card alt">
										<div class="inner-box">
											<span class="job-type">
												<img src="images/clock-icon.svg" width="20" height="22" alt="Duration">
												Full Time
											</span>
											<h3>Product Manager</h3>
											<strong class="salary-range">$1000 - $1200<sub>/month</sub></strong>
										</div>
										<div class="card-footer">
											<div class="img"><img src="images/company-logo03.jpg" width="68" height="68" alt="image"></div>
											<div class="bottom-box">
												<div class="info-row">
													<strong>By Softy</strong>
													<p><i class="icon-map-pin"></i> Pekanbaru, Indonesia</p>
												</div>
											</div>
										</div>
									</a>
								</div>
								<div class="col-12 col-md-6 col-xxl-4 mb-15 mb-md-20">
									<!-- Job Card -->
									<a href="#" class="job-card alt">
										<div class="inner-box">
											<span class="job-type">
												<img src="images/clock-icon.svg" width="20" height="22" alt="Duration">
												Financial Analyst
											</span>
											<h3>Backend Developer</h3>
											<strong class="salary-range">$1000 - $1200<sub>/month</sub></strong>
										</div>
										<div class="card-footer">
											<div class="img"><img src="images/company-logo04.jpg" width="68" height="68" alt="image"></div>
											<div class="bottom-box">
												<div class="info-row">
													<strong>By Rokwebs</strong>
													<p><i class="icon-map-pin"></i> Pekanbaru, Indonesia</p>
												</div>
											</div>
										</div>
									</a>
								</div>
								<div class="col-12 col-md-6 col-xxl-4 mb-15 mb-md-20">
									<!-- Job Card -->
									<a href="#" class="job-card alt">
										<div class="inner-box">
											<span class="job-type">
												<img src="images/clock-icon.svg" width="20" height="22" alt="Duration">
												Intership
											</span>
											<h3>Backend Developer</h3>
											<strong class="salary-range">$1000 - $1200<sub>/month</sub></strong>
										</div>
										<div class="card-footer">
											<div class="img"><img src="images/company-logo05.jpg" width="68" height="68" alt="image"></div>
											<div class="bottom-box">
												<div class="info-row">
													<strong>By WebTechnology</strong>
													<p><i class="icon-map-pin"></i> Pekanbaru, Indonesia</p>
												</div>
											</div>
										</div>
									</a>
								</div>
								<div class="col-12 col-md-6 col-xxl-4 mb-15 mb-md-20">
									<!-- Job Card -->
									<a href="#" class="job-card alt">
										<div class="inner-box">
											<span class="job-type">
												<img src="images/clock-icon.svg" width="20" height="22" alt="Duration">
												Part Time
											</span>
											<h3>Javascript Developer</h3>
											<strong class="salary-range">$1000 - $1200<sub>/month</sub></strong>
										</div>
										<div class="card-footer">
											<div class="img"><img src="images/company-logo06.jpg" width="68" height="68" alt="image"></div>
											<div class="bottom-box">
												<div class="info-row">
													<strong>By Websikon</strong>
													<p><i class="icon-map-pin"></i> Pekanbaru, Indonesia</p>
												</div>
											</div>
										</div>
									</a>
								</div>
								<div class="col-12 col-md-6 col-xxl-4 mb-15 mb-md-20">
									<!-- Job Card -->
									<a href="#" class="job-card alt">
										<div class="inner-box">
											<span class="job-type">
												<img src="images/clock-icon.svg" width="20" height="22" alt="Duration">
												Full Time
											</span>
											<h3>Product Manager</h3>
											<strong class="salary-range">$1000 - $1200<sub>/month</sub></strong>
										</div>
										<div class="card-footer">
											<div class="img"><img src="images/company-logo07.jpg" width="68" height="68" alt="image"></div>
											<div class="bottom-box">
												<div class="info-row">
													<strong>By Softy</strong>
													<p><i class="icon-map-pin"></i> Pekanbaru, Indonesia</p>
												</div>
											</div>
										</div>
									</a>
								</div>
								<div class="col-12 col-md-6 col-xxl-4 mb-15 mb-md-20">
									<!-- Job Card -->
									<a href="#" class="job-card alt">
										<div class="inner-box">
											<span class="job-type">
												<img src="images/clock-icon.svg" width="20" height="22" alt="Duration">
												Financial Analyst
											</span>
											<h3>Backend Developer</h3>
											<strong class="salary-range">$1000 - $1200<sub>/month</sub></strong>
										</div>
										<div class="card-footer">
											<div class="img"><img src="images/company-logo08.jpg" width="68" height="68" alt="image"></div>
											<div class="bottom-box">
												<div class="info-row">
													<strong>By Rokwebs</strong>
													<p><i class="icon-map-pin"></i> Pekanbaru, Indonesia</p>
												</div>
											</div>
										</div>
									</a>
								</div><div class="col-12 col-md-6 col-xxl-4 mb-15 mb-md-20">
									<!-- Job Card -->
									<a href="#" class="job-card alt">
										<div class="inner-box">
											<span class="job-type">
												<img src="images/clock-icon.svg" width="20" height="22" alt="Duration">
												Intership
											</span>
											<h3>Backend Developer</h3>
											<strong class="salary-range">$1000 - $1200<sub>/month</sub></strong>
										</div>
										<div class="card-footer">
											<div class="img"><img src="images/company-logo01.jpg" width="68" height="68" alt="image"></div>
											<div class="bottom-box">
												<div class="info-row">
													<strong>By WebTechnology</strong>
													<p><i class="icon-map-pin"></i> Pekanbaru, Indonesia</p>
												</div>
											</div>
										</div>
									</a>
								</div>
								<div class="col-12 col-md-6 col-xxl-4 mb-15 mb-md-20">
									<!-- Job Card -->
									<a href="#" class="job-card alt">
										<div class="inner-box">
											<span class="job-type">
												<img src="images/clock-icon.svg" width="20" height="22" alt="Duration">
												Part Time
											</span>
											<h3>Javascript Developer</h3>
											<strong class="salary-range">$1000 - $1200<sub>/month</sub></strong>
										</div>
										<div class="card-footer">
											<div class="img"><img src="images/company-logo02.jpg" width="68" height="68" alt="image"></div>
											<div class="bottom-box">
												<div class="info-row">
													<strong>By Websikon</strong>
													<p><i class="icon-map-pin"></i> Pekanbaru, Indonesia</p>
												</div>
											</div>
										</div>
									</a>
								</div>
								<div class="col-12 col-md-6 col-xxl-4 mb-15 mb-md-20">
									<!-- Job Card -->
									<a href="#" class="job-card alt">
										<div class="inner-box">
											<span class="job-type">
												<img src="images/clock-icon.svg" width="20" height="22" alt="Duration">
												Full Time
											</span>
											<h3>Product Manager</h3>
											<strong class="salary-range">$1000 - $1200<sub>/month</sub></strong>
										</div>
										<div class="card-footer">
											<div class="img"><img src="images/company-logo03.jpg" width="68" height="68" alt="image"></div>
											<div class="bottom-box">
												<div class="info-row">
													<strong>By Softy</strong>
													<p><i class="icon-map-pin"></i> Pekanbaru, Indonesia</p>
												</div>
											</div>
										</div>
									</a>
								</div>
								<div class="col-12 col-md-6 col-xxl-4 mb-15 mb-md-20">
									<!-- Job Card -->
									<a href="#" class="job-card alt">
										<div class="inner-box">
											<span class="job-type">
												<img src="images/clock-icon.svg" width="20" height="22" alt="Duration">
												Financial Analyst
											</span>
											<h3>Backend Developer</h3>
											<strong class="salary-range">$1000 - $1200<sub>/month</sub></strong>
										</div>
										<div class="card-footer">
											<div class="img"><img src="images/company-logo04.jpg" width="68" height="68" alt="image"></div>
											<div class="bottom-box">
												<div class="info-row">
													<strong>By Rokwebs</strong>
													<p><i class="icon-map-pin"></i> Pekanbaru, Indonesia</p>
												</div>
											</div>
										</div>
									</a>
								</div>
							</div>
							<!-- Pagination Block -->
							<div class="pagination-block pt-20 pt-lg-30 pt-xl-50 pb-0">
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
