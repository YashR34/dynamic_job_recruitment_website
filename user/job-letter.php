<?php include("elements/connect.php");?>
<!doctype html>
<html lang="en">


<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--favicon-->
	<link rel="icon" href="assets/images/favicon-32x32.png" type="image/png" />
	<!--plugins-->
	<link href="assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
	<link href="assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
	<link href="assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
	<!-- loader-->
	<link href="assets/css/pace.min.css" rel="stylesheet" />
	<script src="assets/js/pace.min.js"></script>
	<!-- Bootstrap CSS -->
	<link href="assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="assets/css/bootstrap-extended.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&amp;display=swap" rel="stylesheet">
	<link href="assets/css/app.css" rel="stylesheet">
	<link href="assets/css/icons.css" rel="stylesheet">
	<!-- Theme Style CSS -->
	<link rel="stylesheet" href="assets/css/dark-theme.css" />
	<link rel="stylesheet" href="assets/css/semi-dark.css" />
	<link rel="stylesheet" href="assets/css/header-colors.css" />
	
	<title>A2Z SERVICES</title>
</head>

<body>
	<!--wrapper-->
	<?php include("elements/navbar.php");?>
		   <!--end header wrapper-->
		<!--start page wrapper -->
		<div class="page-wrapper">
			<div class="page-content">
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">Job Letter</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Download Job Letter</li>
							</ol>
						</nav>
					</div>
					
				</div>
				<?php $cpname=mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM apply WHERE user_id='$my_id' ORDER BY id DESC LIMIT 1"));?>
				<!--end breadcrumb-->
				<div class="card col-xl-6 mx-auto">
					<div class="card-body">
						<div id="invoice">
							<div class="toolbar hidden-print">
								<div class="text-end">
									<button type="button" class="btn btn-danger" id="exportPDF"><i class="fa fa-file-pdf-o"></i>Download</button>
								</div>
								<hr/>
							</div>
							<div class="invoice overflow-auto" >
                                <div style="min-width: 600px ;border: 20px solid blue; padding: 20px;">
                                <!-- Job Certificate Content Here -->
                                    <header style="text-align: center; margin-bottom: 30px;">
                                        <div class="row">
                                            <div class="col">
                                                <img src="assets/images/logo3.png" width="200" alt="Company Logo" />
                                            </div>
                                        </div>
                                        <h1 style="font-size: 2.5em; font-weight: bold; margin: 20px 0;">CERTIFICATE OF EMPLOYEMENT</h1>
                                    </header>
                                    <main>
                                        <div style="margin: 30px 0; font-size: 1.2em;">
                                            <p>This is to certify that</p>
                                            <h2 style="font-size: 2em; margin: 10px 0;"><?php echo $cpname['name']?></h2>
                                            <p>got Job at</p>
                                            <h3 style="font-size: 1.5em; margin: 10px 0;"><?php echo $cpname['company_name']?></h3>
                                            
                                            <p>We are pleased to confirm that <?php echo $cpname['name']?> has successfully secured employment through a2zservices.com, a leading job recruitment platform..</p>
                                            <p>We extend our heartfelt congratulations to <?php echo $cpname['name']?> on their new role and wish them continued success in their professional journey.</p>
                                        </div>
                                        <div style="margin-top: 50px; text-align: center;">
                                            <p style="margin-bottom: 50px;">Thank you for choosing a2zservices.com as your trusted job recruitment partner.</p>
                                            <div style="display: flex; justify-content: space-around;">
                                            <div>
                                                
                                                <p>Manager</p>
                                                <p><?php echo $cpname['company_name']?></p>
                                            </div>
                                        <div>
                                        
                                        <p>HR Department</p>
                                        <p><?php echo $cpname['company_name']?></p>
                                    </div>
                                </div>
                            </div>
                        </main>
                        <footer style="text-align: center; margin-top: 50px;">
                            This certificate is issued upon the request of <?php echo $cpname['name']?> for whatever purpose it may serve.
                        </footer>
                    </div>
                    <!--DO NOT DELETE THIS div. IT is responsible for showing footer always at the bottom-->
                  <div></div>
                 </div>
						</div>
					</div>
				</div>
			</div>
		</div>
		

		<!-- search modal -->
		
		<!-- end search modal -->


		<!--start overlay-->
		
		<!--end overlay-->
		<!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
		<!--End Back To Top Button-->
		<footer class="page-footer">
			<p class="mb-0">Copyright © 2023. All right reserved.</p>
		</footer>
	</div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
    <script>
    document.getElementById('exportPDF').addEventListener('click', function () {
        const { jsPDF } = window.jspdf;

        html2canvas(document.querySelector('.invoice'), { scale: 1 }).then(canvas => {
            const imgData = canvas.toDataURL('image/jpeg', 0.75); // Compressing image data to reduce file size
            const pdf = new jsPDF('p', 'mm', 'a4');

            const imgWidth = 210; // A4 width in mm
            const pageHeight = 297; // A4 height in mm
            const imgHeight = (canvas.height * imgWidth) / canvas.width;

            let position = 0;
            let xOffset = (pdf.internal.pageSize.getWidth() - imgWidth) / 2;

            pdf.addImage(imgData, 'JPEG', xOffset, position, imgWidth, imgHeight);
            position -= pageHeight;

            while (position > -imgHeight) {
                pdf.addPage();
                pdf.addImage(imgData, 'JPEG', xOffset, position, imgWidth, imgHeight);
                position -= pageHeight;
            }

            pdf.save('job_letter.pdf');
        });
    });
</script>
	<!--end wrapper-->
	<!--start switcher-->
	<!--end switcher-->
	<!-- Bootstrap JS -->
	<script src="assets/js/bootstrap.bundle.min.js"></script>
	<!--plugins-->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/plugins/simplebar/js/simplebar.min.js"></script>
	<script src="assets/plugins/metismenu/js/metisMenu.min.js"></script>
	<script src="assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
	<!--app JS-->
	<script src="assets/js/app.js"></script>
</body>


</html>