<?php
session_start();
require 'common\connection.php';

if(!isset($_SESSION['admin_id']))
{
	header("Location:admin_login.php");
	exit();
}

$id = $_SESSION["admin_id"];
$sql = "SELECT * from `admin` WHERE id='$id'";
$result = mysqli_query($conn,$sql) or die("query unsuccessful");
$data = mysqli_fetch_assoc($result);


$p_m_id = $_GET['id'];

$sql = "SELECT * FROM `provider_member` where p_m_id=$p_m_id";
$x = mysqli_query($conn,$sql) or die("query unsuccessful");
$result = mysqli_fetch_assoc($x);


$name = $result['name'];
$email = $result['email'];
$contact = $result['contact'];

$category_name = $result['category'];
$service_title = $result['service_title'];
$service_amount = $result['service_amount'];

$package_name = $result['package_name'];
$package_price = $result['package_price'];
$package_start_date = $result['package_start_date'];
$package_end_date = $result['package_end_date']; 

$no_of_days = $result['no_of_days'];
$description = $result['description'];
$status = $result['status'];
?>

<!DOCTYPE html>
<html lang="en">

<?php
	require 'common/head.php';
?>

<body>
	<div class="main-wrapper">
	
		<!-- Header -->
		<?php 
			require 'common/header.php';
		?>
		<!-- /Header -->
		
		<!-- Sidebar -->
		<?php 
			require 'common/sidebar.php';
		?>
		<!-- /Sidebar -->
		
		<div class="page-wrapper" id="printableArea">
			<div class="content container-fluid">
			
				<!-- Page Header -->
				<div class="page-header" >
					<div class="row">
						<div class="col">
							<h3 class="page-title">Service Provider Member</h3>
						</div>
					</div>
				</div>
				<!-- /Page Header -->
				
				<!-- <ul class="nav nav-tabs menu-tabs">
					<li class="nav-item">
						<a class="nav-link" href="settings.html">General Settings</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="emailsettings.html">Email Settings</a>
					</li>
					<li class="nav-item active">
						<a class="nav-link" href="stripe_payment_gateway.html">Payment Gateway</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="sms-settings.html">SMS Gateway</a>
					</li>
				</ul>
				 -->
				<div class="row">
					<div class="col-lg-8">
						<div class="card">
							<div class="card-body">
								<form method="get">
									<!-- <h4 class="text-primary">Stripe</h4>
									<div class="form-group">
										<label>Stripe Option</label>
										<div>
											<div class="custom-control custom-radio custom-control-inline">
												<input class="custom-control-input" id="sandbox" name="gateway_type" value="sandbox" type="radio" checked>
												<label class="custom-control-label" for="sandbox">Sandbox</label>
											</div>
											<div class="custom-control custom-radio custom-control-inline">
												<input class="custom-control-input" id="livepaypal" name="gateway_type" value="live" type="radio">
												<label class="custom-control-label" for="livepaypal">Live</label>
											</div>
										</div>
									</div> -->
									<div class="form-group">
										<label style="color: black; font-weight: bold;">Provider Name : </label>
										<?php echo $name ?>
									</div>
									<div class="form-group">
										<label style="color: black; font-weight: bold;">Provider E-mail : </label>
										<?php echo $email ?>
									</div>
									<div class="form-group">
										<label style="color: black; font-weight: bold;">Contact : </label>
										<?php echo $contact ?>
									</div>

									<div class="form-group">
										<label style="color: black; font-weight: bold;">Category : </label>
										<?php echo $category_name ?>
									</div>
									<div class="form-group">
										<label style="color: black; font-weight: bold;">Service title : </label>
										<?php echo $service_title ?>
									</div>
									<div class="form-group">
										<label style="color: black; font-weight: bold;">Service amount : </label>
										<?php echo $service_amount ?>
									</div>
									<div class="form-group">
										<label style="color: black; font-weight: bold;">Package-name : </label>
										<?php echo $package_name ?>
									</div>
									<div class="form-group">
										<label style="color: black; font-weight: bold;">Package-price : </label>
										<?php echo $package_price ?>
									</div>
									<div class="form-group">
										<label style="color: black; font-weight: bold;">Package start date : </label>
										<?php echo $package_start_date ?>
									</div>
									<div class="form-group">
										<label style="color: black; font-weight: bold;">Package end date : </label>
										<?php echo $package_end_date ?>
									</div>
									<div class="form-group">
										<label style="color: black; font-weight: bold;">No of days : </label>
										<?php echo $no_of_days ?>
									</div>
									<div class="form-group">
										<label style="color: black; font-weight: bold;">Description : </label>
										<?php echo $description ?>
									</div>
									<div class="form-group">
										<label style="color: black; font-weight: bold;">Status : </label>
										<?php echo $status ?>
									</div>
									<div class="form-group" style="text-align: center;">
										<hr style="border-radius: 5px;border-color: black;">
										<p><b>Service-Provider Website || 02692-230-104</b></p>
									</div>
									<!-- <div class="mt-4">
										
									<a href="process/service_provider_member_approve.php?index=<?php echo $p_m_id?>" class="btn btn-primary">Approve</a>

									<a href="#" class="btn btn-link ml-2">Cancel</a>
									</div> -->
									<div class="mt-4">
										
									<p align="center "><input type="button" class="btn btn-success" onclick="printDiv('printableArea')" value="Print"
										style="letter-spacing: 2px;font-size: 18px;"></p>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<script>
       function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}
    </script>


	<!-- jQuery -->
	<script src="assets/js/jquery-3.5.0.min.js"></script>

	<!-- Bootstrap Core JS -->
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>

	<!-- Slimscroll JS -->
	<script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>

	<!-- Custom JS -->
	<script src="assets/js/admin.js"></script>

</body>


</html>