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
	<style>
    /* Styling for the ID card */
    .id-card {
        border: 2px solid #007bff; /* Blue border for the entire card */
        background-color: white; /* White background for card body */
        padding: 20px; /* Padding inside the card */
    }

    .id-card-header {
        background-color: #007bff; /* Blue background */
        color: white; /* White text */
        padding: 10px; /* Padding inside the header */
        border: 2px solid #007bff; /* Blue border */
        border-bottom: none; /* Remove bottom border for separation */
    }

    .student-photo {
        width: 150px; /* Width of the photo */
        height: auto; /* Maintain aspect ratio */
        border: 2px solid #007bff; /* Blue border around photo */
        margin-bottom: 10px; /* Margin bottom for spacing */
    }

    
	
</style>
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
					<div class="breadcrumb-title pe-3">Identity Card</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Download ID card</li>
							</ol>
						</nav>
					</div>
					
				</div>
				<?php $details=mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM user WHERE user_id='$my_id' "));?>
				<!--end breadcrumb-->
				<div class="row">         
                    <div class="col-xl-6 mx-auto">
                        <div class="card">
                            <div class="card-body">
                                <div id="invoice">
                                    <div class="toolbar hidden-print">
                                        <div class="text-end">
                                           
                                            <button type="button" class="btn btn-danger" id="exportPDF"><i class="fa fa-download"></i>Download</button>
                                        </div>
                                    <hr />
                                </div>
                                <div class="invoice overflow-auto">
                                    <div class="id-card bg-primary" style="border: 2px solid #333; padding: 20px; width: 700px;">
                                        <header class="bg-primary text-white p-2">
                                            <div class="row">
                                                <div class="col">
                                                    <a href="javascript:;"><img src="assets/images/logo4.png" width="250" alt="" /></a>
                                                </div>
                                                <div class="col company-details text-end">
                                                    <div>Ranchi , Jharkhand</div>
                                                    <div>+91 9999900000</div>
                                                    <div>info@a2zservices.com</div>
                                                </div>
                                            </div>
                                        </header>
                                        <main style="background-color: #fff; padding: 20px;">
                                            <div class="row">
                                                <div class="col-4 border-end text-center">
                                                    <img src="elements/uploads/<?php echo $details['photo']?>" style="width: 150px; height: 200px; border: 2px solid blue;">
                                                    <p style="margin-top: 45px;">SIGNATURE</p>
                                                </div>
                                                <div class="col">
                                                    <div class="card-body">
                                                        <h4 class="text-uppercase text-center"><?php echo $details['name']?></h4>
                                                        <hr>
                                                        <div class="row">
                                                            <div class="col">
                                                                <p><strong>ID NO.</strong></p>
                                                                <p><strong>GENDER</strong></p>
                                                                <p><strong>FATHER'S NAME</strong></p>
                                                                <p><strong>PHONE</strong></p>
                                                                <p><strong>EMAIL</strong></p>
                                                                <p><strong>DATE OF BIRTH</strong></p>
                                                            </div>
                                                            <div class="col-auto">
                                                                <p><strong>:</strong></p>
                                                                <p><strong>:</strong></p>
                                                                <p><strong>:</strong></p>
                                                                <p><strong>:</strong></p>
                                                                <p><strong>:</strong></p>
                                                                <p><strong>:</strong></p>
                                                            </div>
                                                            <div class="col">
                                                                <p class="text-uppercase" ><?php echo $my_id?></p>
                                                                <p class="text-uppercase"><?php echo ($details['gender']==0)?'male':'female'?></p>
                                                                <p class="text-uppercase"><?php echo $details['father']?></p>
                                                                <p>+91 <?php echo $details['phone']?></p>
                                                                <p><?php echo $details['email']?></p>
                                                                <p><?php echo $details['dob']?></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </main>
                                    </div>
                                    <footer>This id is created on a computer and is not valid without the signature.</footer>
                                </div>
                                <!-- DO NOT DELETE THIS div. IT is responsible for showing footer always at the bottom -->
                                <div></div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>


			</div>
		</div>
		

		<!-- search modal -->
		
		<!-- end search modal -->


		<!--start overlay-->
		<div class="overlay toggle-icon"></div>
		<!--end overlay-->
		<!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
		<!--End Back To Top Button-->
		<footer class="page-footer">
			<p class="mb-0">Copyright © 2023. All right reserved.</p>
		</footer>
	</div>
	<!--end wrapper-->
	<!--start switcher-->
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>



	<script>
    document.getElementById('exportPDF').addEventListener('click', function () {
    const { jsPDF } = window.jspdf;

    // Select the ID card section for capturing
    const cardElement = document.querySelector('.id-card');

    // Adjust scale based on the device's pixel ratio
    const scale = window.devicePixelRatio;

    html2canvas(cardElement, { scale: scale }).then(canvas => {
        const imgData = canvas.toDataURL('image/jpeg', 1); // Full quality JPEG image data

        // Create PDF instance with the size of the card element
        const pdf = new jsPDF({
            orientation: 'landscape',
            unit: 'px',
            format: [cardElement.offsetWidth * scale, cardElement.offsetHeight * scale]
        });

        // Add captured image to the PDF
        pdf.addImage(imgData, 'JPEG', 0, 0, cardElement.offsetWidth * scale, cardElement.offsetHeight * scale);

        // Save the PDF
        pdf.save('employee_id_card.pdf');
    });
});

</script>


	
	
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


<!-- Mirrored from codervent.com/rocker/demo/horizontal/app-invoice.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 19 Dec 2023 09:57:25 GMT -->
</html>