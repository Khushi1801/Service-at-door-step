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
						<div class="row align-items-center mb-4">
							<div class="col">
								<h4 class="widget-title mb-0">Booking List</h4>
							</div>
							<!-- <div class="col-auto">
								<div class="sort-by">
									<select class="form-control-sm custom-select searchFilter" id="status">
										<option>All</option>
										<option>Pending</option>
										<option>Inprogress</option>
										<option>Complete Request</option>
										<option>Rejected</option>
										<option>Cancelled</option>
										<option>Completed</option>
									</select>
								</div>
							</div> -->
						</div>
						<div id="dataList">
							<div class="bookings">
								<div class="booking-list">
									<div class="booking-widget">
										<a href="service-details.html" class="booking-img">
											<img src="assets/img/services/service-02.jpg" alt="User Image">
										</a>
										<div class="booking-det-info">
											<h3>
												<a href="service-details.html">Car Repair Services</a>
											</h3>
											<ul class="booking-details">
												<li>
													<span>Booking Date</span> 23 Jul 2020 <span class="badge badge-pill badge-prof bg-success">Complete Request sent to User</span>
												</li>
												<li><span>Booking time</span> 13:00:00 - 14:00:00</li>
												<li><span>Amount</span> $500</li>
												<li><span>Location</span> 223 Jehovah Drive Roanoke</li>
												<li><span>Phone</span> 410-242-3850</li>
												<li>
													<span>User</span>
													<div class="avatar avatar-xs mr-1">
														<img class="avatar-img rounded-circle" alt="User Image" src="assets/img/customer/user-01.jpg">
													</div>
													Jeffrey Akridge
												</li>
											</ul>
										</div>
									</div>
									<div class="booking-action"></div>
								</div>
							</div>
							
							<div class="bookings">
								<div class="booking-list">
									<div class="booking-widget">
										<a href="service-details.html" class="booking-img">
											<img src="assets/img/services/service-03.jpg" alt="User Image">
										</a>
										<div class="booking-det-info">
											<h3>
												<a href="service-details.html">Electric Panel Repairing Service</a>
											</h3>
											<ul class="booking-details">
												<li>
													<span>Booking Date</span> 21 Jul 2020 <span class="badge badge-pill badge-prof bg-primary">Inprogress</span>
												</li>
												<li><span>Booking time</span> 17:00:00 - 18:00:00</li>
												<li><span>Amount</span> $500</li>
												<li><span>Location</span> 3281 West Fork Street Great Falls</li>
												<li><span>Phone</span> 410-242-3850</li>
												<li>
													<span>User</span>
													<div class="avatar avatar-xs mr-1">
														<img class="avatar-img rounded-circle" alt="User Image" src="assets/img/customer/user-02.jpg">
													</div>
													Nancy Olson
												</li>
											</ul>
										</div>
									</div>
									<div class="booking-action">
										<a href="user-chat.html" class="btn btn-sm bg-info-light"><i class="far fa-eye"></i> Chat</a>
										<a href="javascript:;" class="btn btn-sm bg-danger-light" data-toggle="modal" data-target="#myCancel"><i class="fas fa-times"></i> Cancel the Service</a>
										<a href="javascript:;" class="btn btn-sm bg-success-light"><i class="fas fa-check"></i> Complete Request to user</a>
									</div>
								</div>
							</div>
							
							<div class="bookings">
								<div class="booking-list">
									<div class="booking-widget">
										<a href="service-details.html" class="booking-img">
											<img src="assets/img/services/service-04.jpg" alt="User Image">
										</a>
										<div class="booking-det-info">
											<h3>
												<a href="service-details.html">Steam Car Wash</a>
											</h3>
											<ul class="booking-details">
												<li>
													<span>Booking Date</span> 21 Jul 2020 <span class="badge badge-pill badge-prof bg-warning">Pending</span>
												</li>
												<li><span>Booking time</span> 13:00:00 - 14:00:00</li>
												<li><span>Amount</span> $500</li>
												<li><span>Location</span> 596 Walton Street Ogden</li>
												<li><span>Phone</span> 410-242-3850</li>
												<li>
													<span>User</span>
													<div class="avatar avatar-xs mr-1">
														<img class="avatar-img rounded-circle" alt="User Image" src="assets/img/customer/user-03.jpg">
													</div>
													Ramona Kingsley
												</li>
											</ul>
										</div>
									</div>
									<div class="booking-action">
										<a href="javascript:;" class="btn btn-sm bg-success-light"><i class="fas fa-check"></i> User Request Accept</a>
										<a href="javascript:;" class="btn btn-sm bg-danger-light" data-toggle="modal" data-target="#myCancel">	<i class="fas fa-times"></i> Cancel the Service</a>
									</div>
								</div>
							</div>
							
							<div class="bookings">
								<div class="booking-list">
									<div class="booking-widget">
										<a href="service-details.html" class="booking-img">
											<img src="assets/img/services/service-05.jpg" alt="User Image">
										</a>
										<div class="booking-det-info">
											<h3>
												<a href="service-details.html">House Cleaning Services</a>
											</h3>
											<ul class="booking-details">
												<li>
													<span>Booking Date</span> 23 Jul 2020 <span class="badge badge-pill badge-prof bg-danger">Rejected by User</span>
												</li>
												<li><span>Booking time</span> 12:00:00 - 13:00:00</li>
												<li><span>Amount</span> $500</li>
												<li><span>Location</span> 4371 Maloy Court Rush Center</li>
												<li><span>Phone</span> 410-242-3850</li>
												<li>
													<span>User</span>
													<div class="avatar avatar-xs mr-1">
														<img class="avatar-img rounded-circle" alt="User Image" src="assets/img/customer/user-04.jpg">
													</div>
													Ricardo Lung
												</li>
											</ul>
										</div>
									</div>
									<div class="booking-action">
										<button type="button" data-id="542" class="btn btn-sm bg-default-light"><i class="fas fa-info-circle"></i> Reason</button>
									</div>
								</div>
							</div>
							<div class="bookings">
								<div class="booking-list">
									<div class="booking-widget">
										<a href="service-details.html" class="booking-img">
											<img src="assets/img/services/service-06.jpg" alt="User Image">
										</a>
										<div class="booking-det-info">
											<h3>
												<a href="service-details.html">Computer & Server AMC Service</a>
											</h3>
											<ul class="booking-details">
												<li>
													<span>Booking Date</span> 22 Jul 2020 <span class="badge badge-pill badge-prof bg-warning">Pending</span>
												</li>
												<li><span>Booking time</span> 12:00:00 - 13:00:00</li>
												<li><span>Amount</span> $4</li>
												<li><span>Location</span> 1346 Simpson Street Davenport</li>
												<li><span>Phone</span> 410-242-3850</li>
												<li>
													<span>User</span>
													<div class="avatar avatar-xs mr-1">
														<img class="avatar-img rounded-circle" alt="User Image" src="assets/img/customer/user-05.jpg">
													</div>
													Annette Silva
												</li>
											</ul>
										</div>
									</div>
									<div class="booking-action">
										<a href="javascript:;" class="btn btn-sm bg-success-light"><i class="fas fa-check"></i> User Request Accept</a>
										<a href="javascript:;" class="btn btn-sm bg-danger-light" data-toggle="modal" data-target="#myCancel"><i class="fas fa-times"></i> Cancel the Service</a>
									</div>
								</div>
							</div>
							
							
						</div>
					</div>
				</div>
			</div>
		</div>﻿
		
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