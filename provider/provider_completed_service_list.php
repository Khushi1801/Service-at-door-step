<?php 

session_start();


require '..\connection.php';
if(!isset($_SESSION['provider_id']))
{
	header("Location:..\login.php");
	exit();
}
$provider_id = $_SESSION["provider_id"];
$provider_query = "SELECT * from `provider` WHERE provider_id='$provider_id'";
$result = mysqli_query($conn,$provider_query) or die("query unsuccessful");
$data = mysqli_fetch_assoc($result);

$name = $data['name'];


$sql1 = "SELECT * from `wallet` WHERE member_id='$provider_id' AND member_type='Provider'";
$result1 = mysqli_query($conn,$sql1) or die("query unsuccessful");
$data1 = mysqli_fetch_assoc($result1);
$balance = $data1['wallet_balance'];

?>
<!DOCTYPE html>
<html lang="en">

<?php require '..\head.php'; ?>

<body>

	<div class="main-wrapper">
	
		<!-- Header -->
		<?php require 'common/provider_header.php'; ?>
		<!-- /Header -->
		
		<div class="content">
			<div class="container">
				<div class="row">
					<div class="col-xl-3 col-md-4 theiaStickySidebar">
						<?php require'common/provider_sidebar.php' ?>
					</div>
					<div class="col-xl-9 col-md-8">
						<h4 class="widget-title">Completed Service List</h4>
						<div class="card transaction-table mb-0">
							<div class="card-body">
								<div class="table-responsive">
									<table class="table mb-0">
										<thead>
											<tr>
												<th>Service</th>
												<th>Customer</th>
												<th>Date</th>
												<th>Amount</th>
												<th>Status</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>
													<a href="javascript:void(0);">
														<img src="assets/img/services/service-01.jpg" class="pro-avatar" alt=""> Toughened Glass Fitting Services
													</a>
												</td>
												<td>
													<img class="avatar-xs rounded-circle" src="assets/img/customer/user-01.jpg" alt=""> Jeffrey Akridge
												</td>
												<td>23 Jul 2020 00:00</td>
												<td><strong>$25</strong></td>
												<td>
													<span class="badge bg-danger-light">User Rejected</span>
												</td>
											</tr>
											
											
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Footer -->
		
		<?php 
			require '..\footer.php';
		?>
		<!-- /Footer -->
		
	</div>

	<!-- jQuery -->
	<script src="assets/js/jquery-3.5.0.min.js"></script>

	<!-- Bootstrap Core JS -->
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>

	<!-- Sticky Sidebar JS -->
	<script src="assets/plugins/theia-sticky-sidebar/ResizeSensor.js"></script>
	<script src="assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js"></script>

	<!-- Custom JS -->
	<script src="assets/js/script.js"></script>
	
</body>


</html>