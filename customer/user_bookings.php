<?php
session_start();
require '..\connection.php';

if(!isset($_SESSION['user_id']))
{
	header("Location:..\login.php");
	exit();
}
$id = $_SESSION["user_id"];
$sql = "SELECT * from `member` WHERE member_id='$id'";
$result = mysqli_query($conn,$sql) or die("query unsuccessful");
$data = mysqli_fetch_assoc($result);
$name = $data['name'];

$sql2 = "SELECT * FROM `wallet` WHERE member_id='$id' AND member_type='Customer'";
$result2 = mysqli_query($conn,$sql2);
$array = mysqli_fetch_assoc($result2);
$balance = $array['wallet_balance'];

?>
<!DOCTYPE html>
<html lang="en">

<?php 
require '..\head.php';
?>

<body>

	<div class="main-wrapper">
	
		<!-- Header -->
		<?php require'common/user_header.php'; ?>
		<!-- /Header -->
		
		<div class="content">
			<div class="container">
				<div class="row">
					<div class="col-xl-3 col-md-4">
						<?php require'common/user_sidebar.php' ?>
					</div>

					<div class="col-xl-9 col-md-8">
						<div class="row align-items-center mb-4">
							<div class="col">
								<h4 class="widget-title mb-0">My Bookings</h4>
							</div>
							<div class="col-auto">
								<div class="sort-by">
									<select class="form-control-sm custom-select">
										<option>All</option>
										<option>Pending</option>
										<option>Inprogress</option>
										<option>Complete Request</option>
										<option>Rejected</option>
										<option>Cancelled</option>
										<option>Completed</option>
									</select>
								</div>
							</div>
						</div>
						
						<div class="bookings">
							<div class="booking-list">
								<div class="booking-widget">
									<a href="service-details.html" class="booking-img">
										<img src="assets/img/services/service-08.jpg" alt="User Image">
									</a>
									<div class="booking-det-info">
										<h3>
											<a href="service-details.html">Building Construction Services</a>
										</h3>
										<ul class="booking-details">
											<li>
												<span>Booking Date</span> 23 Jul 2020 <span class="badge badge-pill badge-prof bg-primary">Inprogress</span>
											</li>
											<li><span>Booking time</span> 12:00:00 - 13:00:00</li>
											<li><span>Amount</span> $100</li>
											<li><span>Location</span> Kuala Lumpur, Malaysia</li>
											<li><span>Phone</span> 412-355-7471</li>
											<li>
												<span>Provider</span>
												<div class="avatar avatar-xs mr-1">
													<img class="avatar-img rounded-circle" alt="User Image" src="assets/img/provider/provider-01.jpg">
												</div>
												Thomas Herzberg
											</li>
										</ul>
									</div>
								</div>
								<div class="booking-action">
									<a href="#" class="btn btn-sm bg-info-light"><i class="far fa-eye"></i> Chat</a>
									<a href="javascript:;" class="btn btn-sm bg-danger-light"><i class="fas fa-times"></i> Cancel the Service</a>
								</div>
							</div>
						</div>
						
						<div class="bookings">
							<div class="booking-list">
								<div class="booking-widget">
									<a href="service-details.html" class="booking-img">
										<img src="assets/img/services/service-09.jpg" alt="User Image">
									</a>
									<div class="booking-det-info">
										<h3>
											<a href="service-details.html">Commercial Painting Services</a>
										</h3>
										<ul class="booking-details">
											<li>
												<span>Booking Date</span> 22 Jul 2020 <span class="badge badge-pill badge-prof bg-primary">Inprogress</span>
											</li>
											<li><span>Booking time</span> 11:00:00 - 12:00:00</li>
											<li><span>Amount</span> $25</li>
											<li><span>Location</span> IFL Building A, Phnom Penh, Cambodia</li>
											<li><span>Phone</span> 412-355-7471</li>
											<li>
												<span>Provider</span>
												<div class="avatar avatar-xs mr-1">
													<img class="avatar-img rounded-circle" alt="User Image" src="assets/img/provider/provider-02.jpg">
												</div>
												Matthew Garcia
											</li>
										</ul>
									</div>
								</div>
								<div class="booking-action">
									<a href="user-chat.html" class="btn btn-sm bg-info-light"><i class="far fa-eye"></i> Chat</a>
									<a href="javascript:;" class="btn btn-sm bg-danger-light"><i class="fas fa-times"></i> Cancel the Service</a>
								</div>
							</div>
						</div>
						<div class="bookings">
							<div class="booking-list">
								<div class="booking-widget">
									<a href="service-details.html" class="booking-img">
										<img src="assets/img/services/service-10.jpg" alt="User Image">
									</a>
									<div class="booking-det-info">
										<h3>
											<a href="service-details.html">Plumbing Services</a>
										</h3>
										<ul class="booking-details">
											<li>
												<span>Booking Date</span> 23 Jul 2020 <span class="badge badge-pill badge-prof bg-warning">Pending</span>
											</li>
											<li><span>Booking time</span> 09:00:00 - 10:00:00</li>
											<li><span>Amount</span> $50</li>
											<li><span>Location</span> K-JJ, Quezon City, National Capital Region, Filipijnen</li>
											<li><span>Phone</span></li>
											<li>
												<span>Provider</span>
												<div class="avatar avatar-xs mr-1">
													<img class="avatar-img rounded-circle" alt="User Image" src="assets/img/provider/provider-03.jpg">
												</div>
												Yolanda Potter
											</li>
										</ul>
									</div>
								</div>
								<div class="booking-action">
									<a href="javascript:;" class="btn btn-sm bg-danger-light"> <i class="fas fa-times"></i> Cancel the Service</a>
								</div>
							</div>
						</div>
						<div class="bookings">
							<div class="booking-list">
								<div class="booking-widget">
									<a href="service-details.html" class="booking-img">
										<img src="assets/img/services/service-11.jpg" alt="User Image">
									</a>
									<div class="booking-det-info">
										<h3>
											<a href="service-details.html">Wooden Carpentry Work</a>
										</h3>
										<ul class="booking-details">
											<li>
												<span>Booking Date</span> 23 Jul 2020 <span class="badge badge-pill badge-prof bg-warning">Pending</span>
											</li>
											<li><span>Booking time</span> 12:00:00 - 13:00:00</li>
											<li><span>Amount</span> $14</li>
											<li><span>Location</span> 223 Jehovah Drive Roanoke</li>
											<li><span>Phone</span> 412-355-7471</li>
											<li>
												<span>Provider</span>
												<div class="avatar avatar-xs mr-1">
													<img class="avatar-img rounded-circle" alt="User Image" src="assets/img/provider/provider-04.jpg">
												</div>
												Ricardo Flemings
											</li>
										</ul>
									</div>
								</div>
								<div class="booking-action">
									<a href="javascript:;" class="btn btn-sm bg-danger-light"><i class="fas fa-times"></i> Cancel the Service</a>
								</div>
							</div>
						</div>
						<div class="pagination">
							<ul>
								<li class="active">
									<a href="javascript:void(0);">1</a>
								</li>
								<li>
									<a href="javascript:void(0);">2</a>
								</li>
								<li>
									<a href="javascript:void(0);">3</a>
								</li>
								<li>
									<a href="javascript:void(0);">4</a>
								</li>
								<li class="arrow">
									<a href="javascript:void(0);"><i class="fas fa-angle-right"></i></a>
								</li>
							</ul>
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

<!-- Mirrored from truelysell-html.dreamguystech.com/template/user-bookings.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 26 Jun 2021 08:10:37 GMT -->
</html>