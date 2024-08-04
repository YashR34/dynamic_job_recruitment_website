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
    <?php $nav=mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM user WHERE user_id='$my_id'"));?>
<div class="wrapper">
		<!--start header wrapper-->	
		<div class="header-wrapper">
			<!--start header -->
			<header>
				<div class="topbar d-flex align-items-center">
					<nav class="navbar navbar-expand gap-3">
						<div class="topbar-logo-header d-none d-lg-flex">
							<a href="index"><div class="">
								<img src="assets/images/logo3.png" width="250" alt="logo icon">
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
									<p class="user-name mb-0"><?php echo $nav['user_id']?></p>
									
								</div>
						 	</a>
							<ul class="dropdown-menu dropdown-menu-end">
								
								</li>
								<li><a class="dropdown-item d-flex align-items-center" href="logout"><i class="bx bx-log-out-circle"></i><span><b >Logout</b></span></a>
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
								<a href="index"><div class="">
									<img src="assets/images/logo3.png" width="250" alt="logo icon">
								</div></a>
								
							</div>
						  <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
						</div>
						<div class="offcanvas-body">
						  <ul class="navbar-nav align-items-center flex-grow-1">
						    <li class="nav-item dropdown">
								<a class="nav-link " href="index" >
									<div class="parent-icon"><i class='bx bx-home-alt'></i>
									</div>
									<div class="menu-title d-flex align-items-center">Dashboard</div>
									
								</a>
								
							  </li>
							  
							  <li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="javascript:;" data-bs-toggle="dropdown">
									<div class="parent-icon"><i class='bx bx-cube'></i>
									</div>
									<div class="menu-title d-flex align-items-center">Profile</div>
									<div class="ms-auto dropy-icon"><i class='bx bx-chevron-down'></i></div>
								</a>
								<ul class="dropdown-menu">
								  <li><a class="dropdown-item" href="profile"><i class='bx bx-pie-chart-alt' ></i>Profile</a></li>
								</ul>
							  </li>
							  <li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="javascript:;" data-bs-toggle="dropdown">
									<div class="parent-icon"><i class='bx bx-cube'></i>
									</div>
									<div class="menu-title d-flex align-items-center">Jobs</div>
									<div class="ms-auto dropy-icon"><i class='bx bx-chevron-down'></i></div>
								</a>
								<ul class="dropdown-menu">
								  <li><a class="dropdown-item" href="apply"><i class='bx bx-radio-circle'></i>Apply</a></li>	
								  <li><a class="dropdown-item" href="applied-Job"><i class='bx bx-radio-circle'></i>Applied Job</a></li>
                                  <li><a class="dropdown-item" href="accepted-Job"><i class='bx bx-radio-circle'></i>Accepted Job</a></li>
								 
								  
								  
								</ul>
							  </li>
							  <li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="javascript:;" data-bs-toggle="dropdown">
									<div class="parent-icon"><i class='bx bx-cube'></i>
									</div>
									<div class="menu-title d-flex align-items-center">Identity Card</div>
									<div class="ms-auto dropy-icon"><i class='bx bx-chevron-down'></i></div>
								</a>
								<ul class="dropdown-menu">
								  <li><a class="dropdown-item" href="id-card"><i class='bx bx-pie-chart-alt' ></i>ID Card</a></li>
                                 
								  
								</ul>
							  </li> 
							  
							  <?php 
							  $pay=mysqli_query($conn,"SELECT * FROM apply WHERE user_id='$my_id' AND approve_status='1'");
							  if(mysqli_num_rows($pay) > 0){
								?>
								<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="javascript:;" data-bs-toggle="dropdown">
									<div class="parent-icon"><i class='bx bx-cube'></i>
									</div>
									<div class="menu-title d-flex align-items-center">Payments</div>
									<div class="ms-auto dropy-icon"><i class='bx bx-chevron-down'></i></div>
								</a>
								<ul class="dropdown-menu">
								  <li><a class="dropdown-item" href="payment"><i class='bx bx-pie-chart-alt' ></i>Fees Payment</a></li>
                                 
								  
								</ul>
							  </li>
							  
								<?php
							  }
							  ?>
							    <?php 
                                $checking_query = mysqli_query($conn, "SELECT * FROM payment WHERE user_id='$my_id' ORDER BY id DESC LIMIT 1");
                                if (mysqli_num_rows($checking_query) > 0) {
                                    $checking = mysqli_fetch_array($checking_query);
                                        if ($checking['check_status'] == '1') {
                                            ?>
                                            <li class="nav-item dropdown">
                                                <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="javascript:;" data-bs-toggle="dropdown">
                                                    <div class="parent-icon"><i class='bx bx-cube'></i></div>
                                                    <div class="menu-title d-flex align-items-center">Job Letter</div>
                                                    <div class="ms-auto dropy-icon"><i class='bx bx-chevron-down'></i></div>
                                                </a>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="job-letter"><i class='bx bx-pie-chart-alt'></i>Job Letter</a></li>
                                                </ul>
                                            </li>
                                            <?php
                                        }
                                }
                                ?>
							  
							                            
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