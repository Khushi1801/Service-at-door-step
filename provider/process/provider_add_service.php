<?php
session_start();
require '..\..\connection.php';

if(!isset($_POST['submit']))
{
	header("Location:..\add_service.php");
	exit();
}

$pid = $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];
$contact = $_POST['contact'];

$category_name = $_POST['category_name'];
$service_title = $_POST['service_title'];
$service_amount = $_POST['service_amount'];

$package_name = $_POST['package_name'];
$package_price = $_POST['package_price'];
$package_start_date = $_POST['start_date'];
$package_end_date = $_POST['end_date'];

if($package_name == "silver")
{
	$no_of_days = 30;
}
else if($package_name == "gold")
{
	$no_of_days = 60;
}
else
{
	$no_of_days = 90;
}

$description = $_POST['description'];

$sql = "INSERT INTO `provider_member`(`pid`,`name`, `email`, `contact`, `category`, `service_title`, `service_amount`, `package_name`, `package_price`, `package_start_date`, `package_end_date`,`no_of_days`,`description`) VALUES ('$pid','$name','$email','$contact','$category_name','$service_title','$service_amount','$package_name','$package_price','$package_start_date','$package_end_date', '$no_of_days' , '$description')";



$result = mysqli_query($conn,$sql) or die("query unsuccessful");

if($result)
{
		// header("Location:signup.php");
		echo "<script type='text/javascript'> 
		alert('Your request has been send to admin.');
		window.location.replace('http://localhost/service_provider/provider/provider_dashboard.php'); 
		</script>
		";
		exit();
}
else
{
		echo "<script type='text/javascript'> 
		alert('Error!!.');
		window.location.replace('http://localhost/service_provider/provider/add_service.php'); 
		</script>
		";
		exit();
}


?>
