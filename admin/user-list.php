<!doctype html>
<html lang="en">
<?php include_once("elements/connect.php");?>



<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--favicon-->
	
	<!--plugins-->
	<link href="assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
	<link href="assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
	<link href="assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
	<link href="assets/plugins/datatable/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
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
	<link rel="stylesheet" href="assets/css/dark.css" />
	<style>
		input[type="file"].form-control::file-selector-button {
			color: #000!important; 

		}
        

        
    </style>
	<?php include("elements/header.php");?>
</head>

<body>
	<!--wrapper-->
	<?php include("elements/navbar.php");?>
			   
		<!--start page wrapper -->
		<div class="page-wrapper">
			<div class="page-content">
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">User</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								
								<li class="breadcrumb-item active" aria-current="page">User List</li>
							</ol>
						</nav>
					</div>
					
				</div>
				<!--end breadcrumb-->
				<h6 class="mb-0 text-uppercase">User list</h6>
				<hr/>
				<div class="card">
					<div class="card-body">
						<div class="table-responsive">
                        <table id="example" class="table table-striped table-bordered" style="width:100%">
								<thead>
									<tr>
										<th>S No.</th>
										<th>User Id</th>
										<th>Name</th>
										<th>Father Name</th>
										<th>Gender</th>
                                        <th>Mobile</th>
										<th>Email</th>
										<th>Date of birth</th>
										<th>Address</th>
										
										
										<th>Block</th>
										<th>View</th>
									</tr>
								</thead>
								<tbody>
									<?php
                                 $a=0;
                                 $data=mysqli_query($conn,"SELECT * FROM user WHERE  block_status='0' ");
                                 while($d=mysqli_fetch_array($data)){
                                  ?>
                                 <tr>
                                  <td><?php echo ++$a?></td>
                                  <td><?php echo $d['user_id']?></td>
                                  <td><?php echo $d['name']?></td>
								  <td><?php echo $d['father']?></td>
                                  <td><?php echo ($d['gender'] == 0)?"Male":"Female"?></td>
                                  <td><?php echo $d['phone']?></td>
                                  <td><?php echo $d['email']?></td>
                                  
                                  <td><?php echo $d['dob']?></td>
                                  <td><?php echo $d['address']?></td>
                                 
                                  
                                  

                                  <td>
                                  <form class="" action="elements/redirect" method="POST">
                                    <input hidden type="text" name="req_id" value="<?php echo $d['id']?>"> 				
                                    <input hidden type="text" name="user_req" value="<?php echo $d['user_id']?>">
                                    <button type="submit" name="block_profile" class="btn btn-sm btn-danger">Block</button>
                                   </form>
                                  </td> 
								  <td><a href="../user/elements/uploads/<?php echo $d['cv'] ?>" target="_blank" style="color: #fff;"><button class="btn btn-sm btn-primary">View</button></a></td>
                                 </tr>
                                  <?php

                                 }

                                   ?>
									
									
								</tbody>
								
							</table>
						</div>
					</div>
				</div>
				
			</div>
		</div>
		<!--end page wrapper -->
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
	
	<!--end switcher-->
	<!-- Bootstrap JS -->
	<script src="assets/js/bootstrap.bundle.min.js"></script>
	<!--plugins-->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/plugins/simplebar/js/simplebar.min.js"></script>
	<script src="assets/plugins/metismenu/js/metisMenu.min.js"></script>
	<script src="assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
	<script src="assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
	<script src="assets/plugins/datatable/js/dataTables.bootstrap5.min.js"></script>
	<script>
		$(document).ready(function() {
			$('#example').DataTable();
		  } );
	</script>
	<script>
		$(document).ready(function() {
			var table = $('#example2').DataTable( {
				lengthChange: false,
				buttons: [ 'copy', 'excel', 'pdf', 'print']
			} );
		 
			table.buttons().container()
				.appendTo( '#example2_wrapper .col-md-6:eq(0)' );
		} );
	</script>
	<!--app JS-->
	<script src="assets/js/app.js"></script>
</body>



</html>