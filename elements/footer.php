<footer class="footer footer-theme-1">
			<div class="pri-footer bg-dark-green text-white pt-35 pt-lg-50 pt-xxl-80 pb-35 pb-md-20">
				<div class="container">
				    <div class="pri-footer-top pb-30 pb-md-35 mb-35 mb-lg-50 mb-xxl-80">
                        <div class="row justify-content-center align-items-center">
                            <div class="col-12 col-lg-3 mb-md-15 mb-lg-0 text-center">
                                <strong>
                                     <a href="index"><img src="images/alogo/logo4.png" width="250" alt="Job Circle"></a>
                                </strong>
								
                            </div>
							<p>Welcome to a2zservices.com, your premier destination for connecting talent with opportunity. Whether you're seeking your next career move or looking to fill a key position within your organization, we are dedicated to making the recruitment process seamless and efficient. Our comprehensive services and experienced team are here to support you every step of the way. Discover the difference with a2zservices.com, where we bring the best talent and top employers together.</p>
                        </div>
                    </div>
					
					<div class="row flex-md-row-reverse">
					    <div class="col-12 col-lg-3 mb-35 mb-md-45 mb-lg-0">
                            <h5>Social</h5>
                            <ul class="footer-links">
                                <li><a href="#"><i class="icon-facebook"></i> Facebook</a></li>
                                <li><a href="#"><i class="icon-instagram"></i> Instagram</a></li>
                                <li><a href="#"><i class="icon-twitter"></i> Twitter</a></li>
                                <li><a href="#"><i class="icon-youtube-play"></i> YouTube</a></li>
                            </ul>
                        </div>
						<div class="col-12 col-lg-9">
							<!-- <li><a href="#"><i class="icon-facebook"></i><span class="ml-4">Facebook</span></a></li>
								<li><a href="#"><i class="icon-instagram"></i>Instagram</a></li>
								<li><a href="#"><i class="icon-twitter"></i>Twitter</a></li>
								<li><a href="#"><i class="icon-youtube-play"></i>Youtube</a></li> -->
							<div class="row">
								<?php $foot=mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM company_contact"));?>
								<div class="col-12 col-md-5 col-lg-4 mb-15 mb-md-0">
									<h5>Contact</h5>
									<ul class="contact-list">
										<li>
											<i class="icon-map-pin"></i>
											<span class="text"><?php echo $foot['address']?></span>
										</li>
										<li>
											<i class="icon-phone"></i>
											<span class="text"><a href="javascript:;"><?php echo $foot['phone']?></a></span>
										</li>
										<li>
											<i class="icon-mail"></i>
											<span class="text"><a href="javascript:;"><?php echo $foot['email']?></a></span>
										</li>
									</ul>
								</div>
								<div class="col-6 col-md-4 col-lg-4">
									<h5>Popular Job Sectors​</h5>
									<ul class="footer-links">
										<li><a href="heathcare">healthcare</a></li>
										<li><a href="administrative">Administrative</a></li>
										<li><a href="education">Eduction</a></li>
										<li><a href="construction">Construction</a></li>
									</ul>
								</div>
								<div class="col-6 col-md-3 col-lg-4">
									<h5>Support</h5>
									<ul class="footer-links">
										<li><a href="contact">Contact</a></li>
										<li><a href="terms-&-condition">Terms &amp; conditions</a></li>
										<li><a href="privacy-policy">Privacy Policy</a></li>
										
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="sec-footer bg-dark-green text-white pt-0 pb-25 py-md-20 py-lg-45">
                <div class="container">
                    <div class="row justify-content-center align-items-center">
                        <div class="col-12 col-md-8 text-center mb-15 mb-md-0">
                            <p>Copyright © 2023 by <a class="site-link" href="javascipt:;">A2Z SERVICES</a> All Rights Reserved.</p>
                        </div>
                    </div>
                </div>
            </div>
		</footer>