<style>
	.primary-menu .navbar .navbar-nav a.nav-link {
                font-size: 13px;
                text-transform: uppercase;
                font-weight: 600;
            }

            .primary-menu .navbar .navbar-nav .dropdown-menu .dropdown-item {
                font-size: 12px;
                text-transform: uppercase;
                font-weight: 500;
            }

            .primary-menu .navbar .navbar-nav .dropdown-menu {
                width: 18rem;
            }
	</style>
<div class="wrapper">
		<!--start header wrapper-->	
		<div class="header-wrapper">
			<!--start header -->
			<header>
				<div class="topbar d-flex align-items-center">
					<nav class="navbar navbar-expand gap-3">
						<div class="topbar-logo-header d-none d-lg-flex">
							<a href="dashboard"><div class="">
								<img src="assets/images/logo4.png" width="250" alt="logo icon">
							</div></a>
							
						</div>
						<div class="mobile-toggle-menu d-block d-lg-none" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"><i class='bx bx-menu'></i></div>
						<div class="search-bar d-lg-block d-none" data-bs-toggle="modal" data-bs-target="#SearchModal" style="display: none;">
							
						 </div>
						  <div class="top-menu ms-auto">
							<ul class="navbar-nav align-items-center gap-1">
								<li class="nav-item mobile-search-icon d-flex d-lg-none" data-bs-toggle="modal" data-bs-target="#SearchModal">
									
								</li>
								<li class="nav-item dropdown dropdown-laungauge d-none d-sm-flex">
									
									
								</li>
								<li class="nav-item dark-mode d-none d-sm-flex">
									
								</li>
	
								<li class="nav-item dropdown dropdown-app" style="display: none;">
									<a class="nav-link dropdown-toggle dropdown-toggle-nocaret" data-bs-toggle="dropdown" href="javascript:;"><i class='bx bx-grid-alt'></i></a>
									<div class="dropdown-menu dropdown-menu-end p-0">
										<div class="app-container p-2 my-2">
										  <div class="row gx-0 gy-2 row-cols-3 justify-content-center p-2">
											 <div class="col">
											  <a href="javascript:;">
												<div class="app-box text-center">
												  <div class="app-icon">
													  <img src="assets/images/app/slack.png" width="30" alt="">
												  </div>
												  <div class="app-name">
													  <p class="mb-0 mt-1">Slack</p>
												  </div>
												  </div>
												</a>
											 </div>
											 
					
										  </div><!--end row-->
					
										</div>
									</div>
								</li>
	
								<li class="nav-item dropdown dropdown-large" style="display: none;">
									<a class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative" href="#" data-bs-toggle="dropdown"><span class="alert-count">7</span>
										<i class='bx bx-bell'></i>
									</a>
									<div class="dropdown-menu dropdown-menu-end">
										<a href="javascript:;">
											<div class="msg-header">
												<p class="msg-header-title">Notifications</p>
												<p class="msg-header-badge">8 New</p>
											</div>
										</a>
										<div class="header-notifications-list">

											
										</div>
										<a href="javascript:;">
											<div class="text-center msg-footer">
												<button class="btn btn-primary w-100">View All Notifications</button>
											</div>
										</a>
									</div>
								</li>
								<li class="nav-item dropdown dropdown-large" style="display: none;">
									<a class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> <span class="alert-count">8</span>
										<i class='bx bx-shopping-bag'></i>
									</a>
									<div class="dropdown-menu dropdown-menu-end">
										<a href="javascript:;">
											<div class="msg-header">
												<p class="msg-header-title">My Cart</p>
												<p class="msg-header-badge">10 Items</p>
											</div>
										</a>
										<div class="header-message-list">
										</div>
										
									</div>
								</li>
							</ul>
						</div>
						<div class="user-box dropdown px-3">
							<a class="d-flex align-items-center nav-link dropdown-toggle gap-3 dropdown-toggle-nocaret" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
								<img src="assets/images/avatars/avatar-4.png" class="user-img" alt="user avatar">
								<div class="user-info">
									<p class="user-name mb-0">Admin</p>
									
								</div>
							</a>
							<ul class="dropdown-menu dropdown-menu-end">
								
								</li>
								<li><a class="dropdown-item d-flex align-items-center" href="logout"><i class="bx bx-log-out-circle"></i><span><b style="color: #fff;">Logout</b></span></a>
								</li>
							</ul>
						</div>
					</nav>
				</div>
			</header>
			<!--end header -->
			<!--navigation-->
			   <div class="primary-menu">
				   <nav class="navbar navbar-expand-lg align-items-center">
					  <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
						<div class="offcanvas-header border-bottom">
							<div class="d-flex align-items-center">
								<a href="dashboard"><div class="">
									<img src="assets/images/logo4.png" width="250" alt="logo icon">
								</div></a>
								
							</div>
						  <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
						</div>
						<div class="offcanvas-body">
						  <ul class="navbar-nav align-items-center flex-grow-1">
						  <li class="nav-item dropdown">
								<a class="nav-link " href="dashboard" >
									<div class="parent-icon"><i class='bx bx-home-alt'></i>
									</div>
									<div class="menu-title d-flex align-items-center">Dashboard</div>
									
								</a>
								
							  </li>
							  <li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="javascript:;" data-bs-toggle="dropdown">
									<div class="parent-icon"><i class='bx bx-home-alt'></i>
									</div>
									<div class="menu-title d-flex align-items-center">Home Page</div>
									<div class="ms-auto dropy-icon"><i class='bx bx-chevron-down'></i></div>
								</a>
								<ul class="dropdown-menu">
								  <li><a class="dropdown-item" href="pop-search"><i class='bx bx-pie-chart-alt' ></i>Popular Searches</a></li>
								  <li><a class="dropdown-item" href="trending-category"><i class='bx bx-pie-chart-alt' ></i>Trending Category</a></li>
								  <li><a class="dropdown-item" href="pop-job"><i class='bx bx-pie-chart-alt' ></i>Popular Jobs</a></li>
								  <li><a class="dropdown-item" href="company"><i class='bx bx-pie-chart-alt' ></i>Companies</a></li>
								  <li><a class="dropdown-item" href="review"><i class='bx bx-pie-chart-alt' ></i>Reviews</a></li>
								</ul>
							  </li>
							  <li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="javascript:;" data-bs-toggle="dropdown">
									<div class="parent-icon"><i class='bx bx-home-alt'></i>
									</div>
									<div class="menu-title d-flex align-items-center">Company Contact</div>
									<div class="ms-auto dropy-icon"><i class='bx bx-chevron-down'></i></div>
								</a>
								<ul class="dropdown-menu">
								  <li><a class="dropdown-item" href="company-contact"><i class='bx bx-pie-chart-alt' ></i>Update Company Contact</a></li>
								  
								</ul>
							  </li>
							  <li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="javascript:;" data-bs-toggle="dropdown">
									<div class="parent-icon"><i class='bx bx-home-alt'></i>
									</div>
									<div class="menu-title d-flex align-items-center">Job List</div>
									<div class="ms-auto dropy-icon"><i class='bx bx-chevron-down'></i></div>
								</a>
								<ul class="dropdown-menu">
								  <li><a class="dropdown-item" href="healthcare"><i class='bx bx-pie-chart-alt' ></i>Healthcare</a></li>
								  <li><a class="dropdown-item" href="finance"><i class='bx bx-pie-chart-alt' ></i>Finance and Accounting</a></li>
								  <li><a class="dropdown-item" href="marketing"><i class='bx bx-pie-chart-alt' ></i>Marketing and Sales</a></li>
								  <li><a class="dropdown-item" href="education"><i class='bx bx-pie-chart-alt' ></i>Education</a></li>
								  <li><a class="dropdown-item" href="human-resource"><i class='bx bx-pie-chart-alt' ></i>Human Resource</a></li>
								  <li><a class="dropdown-item" href="customer-service"><i class='bx bx-pie-chart-alt' ></i>Customer Service</a></li>
								  <li><a class="dropdown-item" href="tourism"><i class='bx bx-pie-chart-alt' ></i>Hospitality and Tourism</a></li>
								  <li><a class="dropdown-item" href="construction"><i class='bx bx-pie-chart-alt' ></i>Construcation</a></li>
								  <li><a class="dropdown-item" href="administrative"><i class='bx bx-pie-chart-alt' ></i>Administrative</a></li>
								  <li><a class="dropdown-item" href="retail"><i class='bx bx-pie-chart-alt' ></i>Retail</a></li>
								</ul>
							  </li>
							  
							  
							  <li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="javascript:;" data-bs-toggle="dropdown">
									<div class="parent-icon"><i class='bx bx-cube'></i>
									</div>
									<div class="menu-title d-flex align-items-center">User</div>
									<div class="ms-auto dropy-icon"><i class='bx bx-chevron-down'></i></div>
								</a>
								<ul class="dropdown-menu">
								  <li><a class="dropdown-item" href="user-list"><i class='bx bx-pie-chart-alt' ></i>user list</a></li>
								  <li><a class="dropdown-item" href="user-blocked"><i class='bx bx-pie-chart-alt' ></i>Blocked User list</a></li>
								  <li><a class="dropdown-item" href="user-payment"><i class='bx bx-pie-chart-alt' ></i>Non-Verified User Payment</a></li>
								  <li><a class="dropdown-item" href="user-payment-verified"><i class='bx bx-pie-chart-alt' ></i>Verified User Payment</a></li>
								  
								  
								  <li><a class="dropdown-item" href="user-job-pending"><i class='bx bx-pie-chart-alt' ></i>User Pending Job Request</a></li>
								  <li><a class="dropdown-item" href="user-approved-list"><i class='bx bx-pie-chart-alt' ></i>User Approved Job Request</a></li>
								</ul>
							  </li>
							  <li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="javascript:;" data-bs-toggle="dropdown">
									<div class="parent-icon"><i class='bx bx-cube'></i>
									</div>
									<div class="menu-title d-flex align-items-center">Enquiry</div>
									<div class="ms-auto dropy-icon"><i class='bx bx-chevron-down'></i></div>
								</a>
								<ul class="dropdown-menu">
								  <li><a class="dropdown-item" href="customer"><i class='bx bx-pie-chart-alt' ></i>Customer enquiry</a></li>
								  
								  
								</ul>
							  </li>
							  
							  <li class="nav-item dropdown" style="display:none;">
								<a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="javascript:;" data-bs-toggle="dropdown">
									<div class="parent-icon"><i class='bx bx-briefcase-alt'></i>
									</div>
									<div class="menu-title d-flex align-items-center">UI Elements</div>
									<div class="ms-auto dropy-icon"><i class='bx bx-chevron-down'></i></div>
								</a>
								<ul class="dropdown-menu">
								  
								  <li class="nav-item dropend">
									<a class="dropdown-item dropdown-toggle dropdown-toggle-nocaret" href="javascript:;"><i class='bx bx-cart' ></i>eCommerce</a>
									<ul class="dropdown-menu submenu">
										
									  </ul>
								  </li>
								  <li class="nav-item dropend">
									<a class="dropdown-item dropdown-toggle dropdown-toggle-nocaret" href="javascript:;"><i class='bx bx-ghost'></i>Components</a>
									<ul class="dropdown-menu scroll-menu">
										
									  </ul>
								  </li>
								  
								  
								</ul>
							  </li>
							  
							  
						  </ul>
						</div>
					  </div>
				  </nav>
			</div>
			<!--end navigation-->
		   </div>
		   <!--end header wrapper-->
		<!--start page wrapper -->