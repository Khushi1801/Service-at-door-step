<?php 
require 'connection.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Service Provider Registration</title>
</head>
<?php 
require 'head.php';
?>
<body>
	<!-- Loader -->
	<div class="page-loading">
		<div class="preloader-inner">
			<div class="preloader-square-swapping">
				<div class="cssload-square-part cssload-square-green"></div>
				<div class="cssload-square-part cssload-square-pink"></div>
				<div class="cssload-square-blend"></div>
			</div>
		</div>
	</div>
	<!-- /Loader -->
	
<!-- Header -->
        <?php 
			require 'header.php';
		?>
		<!-- /Header -->


		<div class="modal-dialog modal-dialog-centered" style="margin-top:150px;">
			<div class="modal-content">
				
				<div class="modal-body">
					<div class="login-header">
						<h3>Join as a Provider</h3>
					</div>
					
					<!-- Register Form -->
					<form action="service_provider_data.php" method="post">
						<div class="form-group form-focus">
							<label class="focus-label">Name</label>
							<input type="text" name="name" class="form-control" placeholder="Enter Name" required>
						</div>
						<div class="form-group form-focus">
							<label class="focus-label">Email</label>
							<input type="email" name="email" class="form-control" placeholder="Enter Email Id" required>
						</div>
						<div class="form-group form-focus">
							<label class="focus-label">Address</label>
							<input type="text" name="address" class="form-control" placeholder="Enter Your Address" required>
						</div>
						<div class="form-group form-focus">
							<label class="focus-label">City</label>
							<input type="text" name="city" class="form-control" placeholder="Enter City" required>
						</div>						
						<div class="form-group form-focus">
							<label class="focus-label">Pin-Code</label>
							<input type="tel" name="pincode" class="form-control" placeholder="Enter Pin-Code" maxlength="6" required>
						</div>
						<div class="form-group form-focus">
							<label class="focus-label">State</label>
							<input type="text" name="state" class="form-control" placeholder="Enter State" required>
						</div>
						<div class="form-group form-focus">
							<label class="focus-label">What Service do you Provide?</label>
							
							<select class="form-control" name="service" required>
										<option value="">Select</option>	
								<?php
									 $sql = "SELECT * FROM `services` where status='Available'";

									 $result = mysqli_query($conn,$sql) or die("query unsuccessful");

									 if(mysqli_num_rows($result) > 0){
									 	
									 	while($row = $result->fetch_assoc()){
									 		
									?>
									<option value="<?php echo $row['service_id']?>"><?php echo $row['service_name']?></option>


								<?php 
										} 

									}
								?>
								</select>
						</div>

						<div class="form-group form-focus">
							<label class="focus-label">Mobile Number</label>
							<input type="tel" name="mobile_no" class="form-control" placeholder="Enter Phone No" maxlength="10" required>
						</div>
						<div class="form-group form-focus">
							<label class="focus-label">Create Password</label>
							<input type="password" class="form-control" placeholder="Create Password"
							name="password" id="myInput" required>
						</div>
						<input type="checkbox" onclick="myFunction()"> Show Password
						<script>
							function myFunction() {
							  var x = document.getElementById("myInput");
							  if (x.type === "password") {
							    x.type = "text";
							  } else {
							    x.type = "password";
							  }
							}
						</script>
						<div class="text-right">
							<a class="forgot-link" href="login.php">Already have an account?</a>
						</div>
						<button class="btn btn-primary btn-block btn-lg login-btn" name="signup" type="submit">Signup</button>
						
					</form>
					<!-- /Register Form -->
					
				</div>
			</div>
		</div>
	
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