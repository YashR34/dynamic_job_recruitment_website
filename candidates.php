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
							<h1>Candidates</h1>
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
			<section class="section section-categories section-theme-1 pt-35 pt-md-50 pt-lg-75 pt-xl-95 pt-xxl-120 pb-35 pb-md-50 pb-lg-75  pb-xl-95 pb-xxl-120">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<!-- Page subheader -->
							<header class="page-subheader mb-30 mb-md-40 d-lg-flex align-items-center justify-content-between">
								<h3 class="h6 mb-25 mb-lg-0">All 7,096 jobs found</h3>
								<div class="subhead-filters">
									<div class="subhead-filters-item">
										<label>Sort By</label>
										<div class="form-group d-lg-flex align-items-center">
											<select class="select2" name="state" data-placeholder="Sort by">
												<option label="Sort by"></option>
												<option>Newest Jobs</option>
												<option>Old Jobs</option>
												<option>Sort by Date</option>
												<option>Sort by Name</option>
											</select>
										</div>
									</div>
									<div class="grid-buttons">
										<button class="btn btn-list" type="button">
											<img src="images/list-icon.svg" width="20" height="20" alt="List">
										</button>
										<button class="btn btn-grid active" type="button">
											<img src="images/grid-icon.svg" width="22" height="22" alt="Grid">
										</button>
										<button class="btn btn-filters filters-opener" type="button">
											<span></span>
										</button>
									</div>
								</div>
							</header>
							<!-- Filters Sidebar -->
							<aside class="filters-sidebar custom-filters">
								<button class="btn btn-filters filters-opener" type="button">
									<span></span>
								</button>
								<form action="#">
									<!-- Filter Box -->
									<div class="filter-box">
										<a class="filter-box-head" data-bs-toggle="collapse" href="#collapseCategory">
											<h2 class="h5">Category</h2>
											<span class="collapse-icon"></span>
										</a>
										<div class="collapse show" id="collapseCategory">
											<div class="form-group">
												<div class="checkbox-limit">
													<ul class="checkbox-list">
														<li>
															<label class="custom-checkbox">
																<input type="checkbox">
																<span class="fake-checkbox"></span>
																<span class="label-text">Management</span>
															</label>
														</li>
														<li>
															<label class="custom-checkbox">
																<input type="checkbox">
																<span class="fake-checkbox"></span>
																<span class="label-text">Retail</span>
															</label>
														</li>
														<li>
															<label class="custom-checkbox">
																<input type="checkbox">
																<span class="fake-checkbox"></span>
																<span class="label-text">Marketing</span>
															</label>
														</li>
														<li>
															<label class="custom-checkbox">
																<input type="checkbox">
																<span class="fake-checkbox"></span>
																<span class="label-text">Translation</span>
															</label>
														</li>
														<li>
															<label class="custom-checkbox">
																<input type="checkbox">
																<span class="fake-checkbox"></span>
																<span class="label-text">Ux Designer</span>
															</label>
														</li>
														<li>
															<label class="custom-checkbox">
																<input type="checkbox">
																<span class="fake-checkbox"></span>
																<span class="label-text">UI/UX</span>
															</label>
														</li>
														<li>
															<label class="custom-checkbox">
																<input type="checkbox">
																<span class="fake-checkbox"></span>
																<span class="label-text">Web Design</span>
															</label>
														</li>
														<li>
															<label class="custom-checkbox">
																<input type="checkbox">
																<span class="fake-checkbox"></span>
																<span class="label-text">Graphic Design</span>
															</label>
														</li>
														<li>
															<label class="custom-checkbox">
																<input type="checkbox">
																<span class="fake-checkbox"></span>
																<span class="label-text">Website Development</span>
															</label>
														</li>
														<li>
															<label class="custom-checkbox">
																<input type="checkbox">
																<span class="fake-checkbox"></span>
																<span class="label-text">Programming</span>
															</label>
														</li>
													</ul>
													<a href="#" class="btn btn-primary btn-sm buttonShowMore">
														<span class="btn-text">Show 
															<span class="show">More</span>
															<span class="hide">Less</span>
														</span>
													</a>
												</div>
											</div>
										</div>
									</div>
									<!-- Filter Box -->
									<div class="filter-box">
										<a class="filter-box-head" data-bs-toggle="collapse" href="#collapseExperience">
											<h2 class="h5">Experience</h2>
											<span class="collapse-icon"></span>
										</a>
										<div class="collapse show" id="collapseExperience">
											<div class="form-group">
												<div class="checkbox-limit">
													<ul class="checkbox-list">
														<li>
															<label class="custom-checkbox">
																<input type="checkbox">
																<span class="fake-checkbox"></span>
																<span class="label-text">Fresher</span>
															</label>
														</li>
														<li>
															<label class="custom-checkbox">
																<input type="checkbox">
																<span class="fake-checkbox"></span>
																<span class="label-text">Intermediate</span>
															</label>
														</li>
														<li>
															<label class="custom-checkbox">
																<input type="checkbox">
																<span class="fake-checkbox"></span>
																<span class="label-text">No-Experience</span>
															</label>
														</li>
														<li>
															<label class="custom-checkbox">
																<input type="checkbox">
																<span class="fake-checkbox"></span>
																<span class="label-text">Internship</span>
															</label>
														</li>
														<li>
															<label class="custom-checkbox">
																<input type="checkbox">
																<span class="fake-checkbox"></span>
																<span class="label-text">Expert</span>
															</label>
														</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
									<!-- Filter Box -->
									<div class="filter-box">
										<a class="filter-box-head" data-bs-toggle="collapse" href="#collapseType">
											<h2 class="h5">Job Type</h2>
											<span class="collapse-icon"></span>
										</a>
										<div class="collapse show" id="collapseType">
											<div class="form-group">
												<div class="checkbox-limit">
													<ul class="checkbox-list">
														<li>
															<label class="custom-checkbox">
																<input type="checkbox">
																<span class="fake-checkbox"></span>
																<span class="label-text">Full Time</span>
															</label>
														</li>
														<li>
															<label class="custom-checkbox">
																<input type="checkbox">
																<span class="fake-checkbox"></span>
																<span class="label-text">Part Time</span>
															</label>
														</li>
														<li>
															<label class="custom-checkbox">
																<input type="checkbox">
																<span class="fake-checkbox"></span>
																<span class="label-text">Remote</span>
															</label>
														</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
									<!-- Filter Box -->
									<div class="filter-box">
										<a class="filter-box-head" data-bs-toggle="collapse" href="#collapseLocation">
											<h2 class="h5">Location</h2>
											<span class="collapse-icon"></span>
										</a>
										<div class="collapse show" id="collapseLocation">
											<div class="form-group">
												<select class="select2 medium" name="state" data-placeholder="Location">
													<option label="Select Category"></option>
													<option>Indonesia</option>
													<option>Indonesia</option>
													<option>Indonesia</option>
												</select>
											</div>
										</div>
									</div>
									<!-- Filter Box -->
									<div class="filter-box">
										<a class="filter-box-head" data-bs-toggle="collapse" href="#collapseTags">
											<h2 class="h5">Tags</h2>
											<span class="collapse-icon"></span>
										</a>
										<div class="collapse show" id="collapseTags">
											<div class="form-group">
												<ul class="tags-list">
													<li><a href="#" class="tag">Design</a></li>
													<li><a href="#" class="tag">Business</a></li>
													<li><a href="#" class="tag">Video</a></li>
													<li><a href="#" class="tag">Design & Art</a></li>
													<li><a href="#" class="tag">Sales</a></li>
													<li><a href="#" class="tag">Banking</a></li>
													<li><a href="#" class="tag">Real Estate</a></li>
												</ul>
											</div>
										</div>
									</div>
									<!-- Filter Box -->
									<div class="filter-box">
										<a class="filter-box-head" data-bs-toggle="collapse" href="#collapseSalary">
											<h2 class="h5">Salary</h2>
											<span class="collapse-icon"></span>
										</a>
										<div class="collapse show" id="collapseSalary">
											<div class="form-group">
												<div class="price-inputs">
													<input type="text" id="amount-start" class="form-control" readonly placeholder="Form" value="">
													<input type="text" id="amount-end" class="form-control" readonly placeholder="To" value="">
												</div>
												<div class="range-box">
													<div id="slider-range"></div>
												</div>
											</div>
										</div>
									</div>
									<!-- Filter Buttons -->
									<div class="filter-buttons">
										<a href="#" class="btn btn-green btn-sm"><span class="btn-text">Filter</span></a>
										<a href="#" class="btn btn-text btn-sm">Reset all filters</a>
									</div>
								</form>
							</aside>
							<div class="row justify-content-center">
								<div class="col-12 col-md-6 col-lg-6 mb-20 mb-lg-30">
									<!-- Candidate Post -->
									<div class="candidate-post alt">
										<div class="candidate-post-holder">
											<div class="ratings-info">
												<i class="icon-star"></i>
											</div>
											<div class="image-holder">
												<img src="images/img-candiate01.jpg" alt="image">
											</div>
											<div class="text-info">
												<div class="title-bar">
													<h3>Willimes James</h3>
													<p>Graphic Designer</p>
												</div>
												<address class="location"><i class="icon icon-map-pin"></i><span class="text">Pekanbaru, Indonesia</span></address>
												<strong class="price">$78.00 <sub>/ month</sub></strong>
											</div>
										</div>
										<div class="candidate-post-foot">
											<ul class="tags-list">
												<li><span class="tag">HTML</span></li>
												<li><span class="tag">CSS</span></li>
												<li><span class="tag">Figma</span></li>
											</ul>
											<a href="#" class="btn btn-green btn-sm"><span class="btn-text">View Profile</span></a>
										</div>
									</div>
								</div>
								<div class="col-12 col-md-6 col-lg-6 mb-20 mb-lg-30">
									<!-- Candidate Post -->
									<div class="candidate-post alt">
										<div class="candidate-post-holder">
											<div class="ratings-info">
												<i class="icon-star"></i>
											</div>
											<div class="image-holder">
												<img src="images/img-candiate02.jpg" alt="image">
											</div>
											<div class="text-info">
												<div class="title-bar">
													<h3>Thomas Willimes</h3>
													<p>Javascript Developer</p>
												</div>
												<address class="location"><i class="icon icon-map-pin"></i><span class="text">Pekanbaru, Indonesia</span></address>
												<strong class="price">$78.00 <sub>/ month</sub></strong>
											</div>
										</div>
										<div class="candidate-post-foot">
											<ul class="tags-list">
												<li><span class="tag">HTML</span></li>
												<li><span class="tag">CSS</span></li>
												<li><span class="tag">Figma</span></li>
											</ul>
											<a href="#" class="btn btn-green btn-sm"><span class="btn-text">View Profile</span></a>
										</div>
									</div>
								</div>
								<div class="col-12 col-md-6 col-lg-6 mb-20 mb-lg-30">
									<!-- Candidate Post -->
									<div class="candidate-post alt">
										<div class="candidate-post-holder">
											<div class="ratings-info">
												<i class="icon-star"></i>
											</div>
											<div class="image-holder">
												<img src="images/img-candiate03.jpg" alt="image">
											</div>
											<div class="text-info">
												<div class="title-bar">
													<h3>Monila Jessica</h3>
													<p>UI/UX Designer</p>
												</div>
												<address class="location"><i class="icon icon-map-pin"></i><span class="text">Pekanbaru, Indonesia</span></address>
												<strong class="price">$78.00 <sub>/ month</sub></strong>
											</div>
										</div>
										<div class="candidate-post-foot">
											<ul class="tags-list">
												<li><span class="tag">HTML</span></li>
												<li><span class="tag">CSS</span></li>
												<li><span class="tag">Figma</span></li>
											</ul>
											<a href="#" class="btn btn-green btn-sm"><span class="btn-text">View Profile</span></a>
										</div>
									</div>
								</div>
								<div class="col-12 col-md-6 col-lg-6 mb-20 mb-lg-30">
									<!-- Candidate Post -->
									<div class="candidate-post alt">
										<div class="candidate-post-holder">
											<div class="ratings-info">
												<i class="icon-star"></i>
											</div>
											<div class="image-holder">
												<img src="images/img-candiate04.jpg" alt="image">
											</div>
											<div class="text-info">
												<div class="title-bar">
													<h3>Parky Petter</h3>
													<p>Content Writing & Graphic Design</p>
												</div>
												<address class="location"><i class="icon icon-map-pin"></i><span class="text">Pekanbaru, Indonesia</span></address>
												<strong class="price">$78.00 <sub>/ month</sub></strong>
											</div>
										</div>
										<div class="candidate-post-foot">
											<ul class="tags-list">
												<li><span class="tag">HTML</span></li>
												<li><span class="tag">CSS</span></li>
												<li><span class="tag">Figma</span></li>
											</ul>
											<a href="#" class="btn btn-green btn-sm"><span class="btn-text">View Profile</span></a>
										</div>
									</div>
								</div>
								<div class="col-12 col-md-6 col-lg-6 mb-20 mb-lg-30">
									<!-- Candidate Post -->
									<div class="candidate-post alt">
										<div class="candidate-post-holder">
											<div class="ratings-info">
												<i class="icon-star"></i>
											</div>
											<div class="image-holder">
												<img src="images/img-candiate05.jpg" alt="image">
											</div>
											<div class="text-info">
												<div class="title-bar">
													<h3>Roman Parkar</h3>
													<p>Content Writing & Graphic Design</p>
												</div>
												<address class="location"><i class="icon icon-map-pin"></i><span class="text">Pekanbaru, Indonesia</span></address>
												<strong class="price">$78.00 <sub>/ month</sub></strong>
											</div>
										</div>
										<div class="candidate-post-foot">
											<ul class="tags-list">
												<li><span class="tag">HTML</span></li>
												<li><span class="tag">CSS</span></li>
												<li><span class="tag">Figma</span></li>
											</ul>
											<a href="#" class="btn btn-green btn-sm"><span class="btn-text">View Profile</span></a>
										</div>
									</div>
								</div>
								<div class="col-12 col-md-6 col-lg-6 mb-20 mb-lg-30">
									<!-- Candidate Post -->
									<div class="candidate-post alt">
										<div class="candidate-post-holder">
											<div class="ratings-info">
												<i class="icon-star"></i>
											</div>
											<div class="image-holder">
												<img src="images/img-candiate06.jpg" alt="image">
											</div>
											<div class="text-info">
												<div class="title-bar">
													<h3>Elina Oliva</h3>
													<p>Content Writing & Graphic Design</p>
												</div>
												<address class="location"><i class="icon icon-map-pin"></i><span class="text">Pekanbaru, Indonesia</span></address>
												<strong class="price">$78.00 <sub>/ month</sub></strong>
											</div>
										</div>
										<div class="candidate-post-foot">
											<ul class="tags-list">
												<li><span class="tag">HTML</span></li>
												<li><span class="tag">CSS</span></li>
												<li><span class="tag">Figma</span></li>
											</ul>
											<a href="#" class="btn btn-green btn-sm"><span class="btn-text">View Profile</span></a>
										</div>
									</div>
								</div>
								<div class="col-12 col-md-6 col-lg-6 mb-20 mb-lg-30">
									<!-- Candidate Post -->
									<div class="candidate-post alt">
										<div class="candidate-post-holder">
											<div class="ratings-info">
												<i class="icon-star"></i>
											</div>
											<div class="image-holder">
												<img src="images/img-candiate07.jpg" alt="image">
											</div>
											<div class="text-info">
												<div class="title-bar">
													<h3>Jessica Joli</h3>
													<p>Content Writing & Graphic Design</p>
												</div>
												<address class="location"><i class="icon icon-map-pin"></i><span class="text">Pekanbaru, Indonesia</span></address>
												<strong class="price">$78.00 <sub>/ month</sub></strong>
											</div>
										</div>
										<div class="candidate-post-foot">
											<ul class="tags-list">
												<li><span class="tag">HTML</span></li>
												<li><span class="tag">CSS</span></li>
												<li><span class="tag">Figma</span></li>
											</ul>
											<a href="#" class="btn btn-green btn-sm"><span class="btn-text">View Profile</span></a>
										</div>
									</div>
								</div>
								<div class="col-12 col-md-6 col-lg-6 mb-20 mb-lg-30">
									<!-- Candidate Post -->
									<div class="candidate-post alt">
										<div class="candidate-post-holder">
											<div class="ratings-info">
												<i class="icon-star"></i>
											</div>
											<div class="image-holder">
												<img src="images/img-candiate08.jpg" alt="image">
											</div>
											<div class="text-info">
												<div class="title-bar">
													<h3>Walkar Jakki</h3>
													<p>Content Writing & Graphic Design</p>
												</div>
												<address class="location"><i class="icon icon-map-pin"></i><span class="text">Pekanbaru, Indonesia</span></address>
												<strong class="price">$78.00 <sub>/ month</sub></strong>
											</div>
										</div>
										<div class="candidate-post-foot">
											<ul class="tags-list">
												<li><span class="tag">HTML</span></li>
												<li><span class="tag">CSS</span></li>
												<li><span class="tag">Figma</span></li>
											</ul>
											<a href="#" class="btn btn-green btn-sm"><span class="btn-text">View Profile</span></a>
										</div>
									</div>
								</div>
							</div>
							<!-- Pagination Block -->
							<div class="pagination-block pt-15 pt-md-30 pb-0">
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
