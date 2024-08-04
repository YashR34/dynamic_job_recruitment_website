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
							<h1 class="text-uppercase">Company</h1>
							
						</div>
						<nav class="breadcrumb-nav text-white d-flex justify-content-center mt-20 mt-lg-40">
							<ul class="breadcrumb mb-0">
								<li class="breadcrumb-item text-uppercase"><a href="index">Home</a></li>
								<li class="breadcrumb-item text-uppercase"><a href="#">Browse Jobs</a></li>
								<li class="breadcrumb-item active text-uppercase">Company</li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</div>
		<!-- contain main informative part of the site -->
		<main class="main">
			<!-- Featured Jobs Section -->
			<section class="section section-categories section-theme-1 pt-35 pt-md-50 pt-lg-75 pt-xl-95 pb-35 pb-md-50 pb-xl-75">
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
								<div class="col-12 col-md-6 col-lg-4 mb-15 mb-md-30">
									<!-- Featured Category Box -->
									<a href="#" class="featured-category-box alt2">
										<div class="wrap">
											<div class="img-holder">
												<img src="images/company-logo01.jpg" alt="Javascript Developer">
											</div>
											<div class="textbox">
												<strong class="h6">Develpersoft</strong>
												<address class="location"><i class="icon icon-map-pin"></i><span class="text">Pekanbaru, Indonesia</span></address>
												<div class="tag-wrap">
													<span class="tag">Open Job - 2</span>
												</div>
											</div>
										</div>
									</a>
								</div>
								<div class="col-12 col-md-6 col-lg-4 mb-15 mb-md-30">
									<!-- Featured Category Box -->
									<a href="#" class="featured-category-box alt2">
										<div class="wrap">
											<div class="img-holder">
												<img src="images/company-logo02.jpg" alt="Javascript Developer">
											</div>
											<div class="textbox">
												<strong class="h6">Uxwebs</strong>
												<p class="location"><i class="icon icon-map-pin"></i>United State</p>
												<div class="tag-wrap">
													<span class="tag">Open Job - 2</span>
												</div>
											</div>
										</div>
									</a>
								</div>
								<div class="col-12 col-md-6 col-lg-4 mb-15 mb-md-30">
									<!-- Featured Category Box -->
									<a href="#" class="featured-category-box alt2">
										<div class="wrap">
											<div class="img-holder">
												<img src="images/company-logo03.jpg" alt="Javascript Developer">
											</div>
											<div class="textbox">
												<strong class="h6">Websikon</strong>
												<p class="location"><i class="icon icon-map-pin"></i>Pekanbaru, Indonesia</p>
												<div class="tag-wrap">
													<span class="tag">Open Job - 2</span>
												</div>
											</div>
										</div>
									</a>
								</div>
								<div class="col-12 col-md-6 col-lg-4 mb-15 mb-md-30">
									<!-- Featured Category Box -->
									<a href="#" class="featured-category-box alt2">
										<div class="wrap">
											<div class="img-holder">
												<img src="images/company-logo04.jpg" alt="Javascript Developer">
											</div>
											<div class="textbox">
												<strong class="h6">Develpersoft</strong>
												<address class="location"><i class="icon icon-map-pin"></i><span class="text">Pekanbaru, Indonesia</span></address>
												<div class="tag-wrap">
													<span class="tag">Open Job - 2</span>
												</div>
											</div>
										</div>
									</a>
								</div>
								<div class="col-12 col-md-6 col-lg-4 mb-15 mb-md-30">
									<!-- Featured Category Box -->
									<a href="#" class="featured-category-box alt2">
										<div class="wrap">
											<div class="img-holder">
												<img src="images/company-logo05.jpg" alt="Javascript Developer">
											</div>
											<div class="textbox">
												<strong class="h6">Uxwebs</strong>
												<p class="location"><i class="icon icon-map-pin"></i>United State</p>
												<div class="tag-wrap">
													<span class="tag">Open Job - 2</span>
												</div>
											</div>
										</div>
									</a>
								</div>
								<div class="col-12 col-md-6 col-lg-4 mb-15 mb-md-30">
									<!-- Featured Category Box -->
									<a href="#" class="featured-category-box alt2">
										<div class="wrap">
											<div class="img-holder">
												<img src="images/company-logo06.jpg" alt="Javascript Developer">
											</div>
											<div class="textbox">
												<strong class="h6">Websikon</strong>
												<p class="location"><i class="icon icon-map-pin"></i>Pekanbaru, Indonesia</p>
												<div class="tag-wrap">
													<span class="tag">Open Job - 2</span>
												</div>
											</div>
										</div>
									</a>
								</div>
								<div class="col-12 col-md-6 col-lg-4 mb-15 mb-md-30">
									<!-- Featured Category Box -->
									<a href="#" class="featured-category-box alt2">
										<div class="wrap">
											<div class="img-holder">
												<img src="images/company-logo07.jpg" alt="Javascript Developer">
											</div>
											<div class="textbox">
												<strong class="h6">Develpersoft</strong>
												<address class="location"><i class="icon icon-map-pin"></i><span class="text">Pekanbaru, Indonesia</span></address>
												<div class="tag-wrap">
													<span class="tag">Open Job - 2</span>
												</div>
											</div>
										</div>
									</a>
								</div>
								<div class="col-12 col-md-6 col-lg-4 mb-15 mb-md-30">
									<!-- Featured Category Box -->
									<a href="#" class="featured-category-box alt2">
										<div class="wrap">
											<div class="img-holder">
												<img src="images/company-logo08.jpg" alt="Javascript Developer">
											</div>
											<div class="textbox">
												<strong class="h6">Uxwebs</strong>
												<p class="location"><i class="icon icon-map-pin"></i>United State</p>
												<div class="tag-wrap">
													<span class="tag">Open Job - 2</span>
												</div>
											</div>
										</div>
									</a>
								</div>
								<div class="col-12 col-md-6 col-lg-4 mb-15 mb-md-30">
									<!-- Featured Category Box -->
									<a href="#" class="featured-category-box alt2">
										<div class="wrap">
											<div class="img-holder">
												<img src="images/company-logo04.jpg" alt="Javascript Developer">
											</div>
											<div class="textbox">
												<strong class="h6">Websikon</strong>
												<p class="location"><i class="icon icon-map-pin"></i>Pekanbaru, Indonesia</p>
												<div class="tag-wrap">
													<span class="tag">Open Job - 2</span>
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
			<!-- Downloads Section -->
			<section class="section section-theme-1 section-downloads pt-35 pt-md-60 pb-50 pb-md-75 pb-lg-75 pb-xl-110 pb-xxl-140">
				<div class="container">
					<!-- Section header -->
					<header class="section-header text-center mb-30 mb-md-40 mb-lg-50">
						<h2>Download our mobile app</h2>
						<p>Search through millions of jobs and find the right fit.<br> Simply swipe right to apply.</p>
					</header>
					<div class="app-buttons">
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
					<div class="icon ico01"><img src="images/ico-app01.png" alt="Image Description"></div>
					<div class="icon ico02"><img src="images/ico-app02.png" alt="Image Description"></div>
					<div class="icon ico03"><img src="images/ico-app03.png" alt="Image Description"></div>
					<div class="icon ico04"><img src="images/ico-app04.png" alt="Image Description"></div>
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
