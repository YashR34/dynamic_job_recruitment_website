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
			<div class="pattern-image"><img src="images/visual-pattern-1.png" width="1920" height="570" alt="Pattern"></div>
			<div class="container position-relative text-center">
				<div class="row">
					<div class="col-12">
						<div class="subvisual-textbox">
							<h1 class="text-uppercase">Finance Jobs</h1>
							
						</div>
						<nav class="breadcrumb-nav text-white d-flex justify-content-center mt-20 mt-lg-40">
							<ul class="breadcrumb mb-0">
								<li class="breadcrumb-item text-uppercase"><a href="index">Home</a></li>
								
								<li class="breadcrumb-item active text-uppercase">Finance Jobs</li>
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
                <div class="container-fluid d-flex justify-content-center">
                    <div class="row">
                        <div class="col-12 col-lg-8 col-xxl-9 mx-auto">
							<div class="row justify-content-center">
								
								<?php
                                $data=mysqli_query($conn,"SELECT * FROM finance_popjob ");
                                while($d=mysqli_fetch_array($data)){
                                    ?>
									<div class="col-12 col-xxxl-6 mb-15 mb-md-20">
									    <article class="popular-jobs-box">
										    <div class="box-holder">
											    <div class="job-info">
												    <div class="img-holder">
													    <img src="admin/elements/uploads/<?php echo $d['job_icon']?>" width="78" height="78" alt="Image Description">
												    </div>
												    <div class="textbox">
													    <a href="#" class="btn-bookmark"><i class="icon-bookmark"></i></a>
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
