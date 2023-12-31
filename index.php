﻿<?php 

require 'connection.php';

?>
<!DOCTYPE html>
<html lang="en">

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
	
	<div class="main-wrapper">
	
		<!-- Header -->
		<?php 
			require 'header.php';
		?>
		<!-- /Header -->
		
		<!-- Hero Section -->
		<section class="hero-section">
			<div class="layer">
				<div class="home-banner"></div>
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-lg-12">
							<div class="section-search">
								<h3>World's Largest <span>Marketplace</span></h3>
								<p>Search From 150 Awesome Verified Ads!</p>
								<div class="search-box">
									<form action="https://truelysell-html.dreamguystech.com/template/search.html"> 
										<div class="search-input line">
											<i class="fas fa-tv bficon"></i>
											<div class="form-group mb-0">
												<input type="text" class="form-control" placeholder="What are you looking for?">
											</div>
										</div>
										<div class="search-input">
											<i class="fas fa-location-arrow bficon"></i>
											<div class="form-group mb-0">
												<input type="text" class="form-control" placeholder="Your Location"> 
												<a class="current-loc-icon current_location" href="javascript:void(0);"><i class="fas fa-crosshairs"></i></a>
											</div>
										</div>
										<div class="search-btn">
											<button class="btn search_service" type="submit">Search</button>
										</div>
									</form>
								</div>
								<div class="search-cat">
									<i class="fas fa-circle"></i>
									<span>Popular Searches</span>
									<a href="search.html">Electrical  Works</a>
									<a href="search.html">Cleaning</a>
									<a href="search.html">AC Repair</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- /Hero Section -->
		
		<!-- Category Section -->
		<section class="category-section">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="row">
							<div class="col-md-6">
								<div class="heading">
									<h2>Featured Categories</h2>
									<span>What do you need to find?</span>
								</div>
							</div>
							<div class="col-md-6">
								<div class="viewall">
									<h4><a href="categories.php">View All <i class="fas fa-angle-right"></i></a></h4>
									<span>Featured Categories</span>
								</div>
							</div>
						</div>
						<div class="catsec">
							<div class="row">
								<?php
						  $sql = "SELECT * FROM `category`";

						$result = mysqli_query($conn,$sql) or die("query unsuccessful");

						if(mysqli_num_rows($result) > 0){
									
							while($row = $result->fetch_assoc()){
									 		
							?> 
						<div class="col-lg-4 col-md-6">
							<a href="services.php?id=<?php echo $row['category_id'] ?>">
								<div class="cate-widget">
									<img src="admin_panel/assets/img/category/<?php echo $row['category_image']?>" alt="">
									<div class="cate-title">
										<h3><span><i class="fas fa-circle"></i><?php echo $row['category_name']?></span></h3>
									</div>
									
								</div>
							</a>
						</div>


						<?php 
								} 

						}
						?>
								
							
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- /Category Section -->
		
		<!-- Popular Servides -->
		<section class="popular-services">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="row">
							<div class="col-md-6">
								<div class="heading">
									<h2>Most Popular Services</h2>
									<span>Explore the greates our services. You won’t be disappointed</span>
								</div>
							</div>
							<div class="col-md-6">
								<div class="viewall">
									<h4><a href="categories.html">View All <i class="fas fa-angle-right"></i></a></h4>
									<span>Most Popular</span>
								</div>
							</div>
						</div>
						<div class="service-carousel">
							<div class="service-slider owl-carousel owl-theme">
							
								<div class="service-widget">
									<div class="service-img">
										<a href="service-details.html">
											<img class="img-fluid serv-img" alt="Service Image" src="assets/img/services/service-01.jpg">
										</a>
										<div class="item-info">
											<div class="service-user">
												<a href="#">
													<img src="assets/img/customer/user-01.jpg" alt="">
												</a>	
												<span class="service-price">$25</span>
											</div>
											<div class="cate-list">
												<a class="bg-yellow" href="service-details.html">Cleaning</a>
											</div>
										</div>
									</div>
									<div class="service-content">
										<h3 class="title">
											<a href="service-details.html">Toughened Glass Fitting Services</a>
										</h3>
										<div class="rating">	
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star"></i>		
											<span class="d-inline-block average-rating">(4.3)</span>
										</div>
										<div class="user-info">
											<div class="row">	
												<span class="col-auto ser-contact"><i class="fas fa-phone mr-1"></i> 
													<span>xxxxxxxx49</span>
												</span>
												<span class="col ser-location">
													<span>Wayne, New Jersey</span> <i class="fas fa-map-marker-alt ml-1"></i>
												</span>
											</div>
										</div>
									</div>
								</div>
								
								<div class="service-widget">
									<div class="service-img">
										<a href="service-details.html">
											<img class="img-fluid serv-img" alt="Service Image" src="assets/img/services/service-02.jpg">
										</a>
										<div class="item-info">
											<div class="service-user">
												<a href="#">
													<img src="assets/img/customer/user-02.jpg" alt="">
												</a>
												<span class="service-price">$50</span>
											</div>
											<div class="cate-list">
												<a class="bg-yellow" href="service-details.html">Automobile</a>
											</div>
										</div>
									</div>
									<div class="service-content">
										<h3 class="title">
											<a href="service-details.html">Car Repair Services</a>
										</h3>
										<div class="rating">
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star filled"></i>
											<span class="d-inline-block average-rating">(5)</span>
										</div>
										<div class="user-info">
											<div class="row">
												<span class="col-auto ser-contact"><i class="fas fa-phone mr-1"></i> <span>xxxxxxxx85</span></span>
												<span class="col ser-location"><span>Hanover, Maryland</span>  <i class="fas fa-map-marker-alt ml-1"></i></span>
											</div>
										</div>
									</div>
								</div>
								
								<div class="service-widget">
									<div class="service-img">
										<a href="service-details.html">
											<img class="img-fluid serv-img" alt="Service Image" src="assets/img/services/service-03.jpg">
										</a>
										<div class="item-info">
											<div class="service-user">
												<a href="#">
													<img src="assets/img/customer/user-03.jpg" alt="">
												</a>
												<span class="service-price">$45</span>
											</div>
											<div class="cate-list">
												<a class="bg-yellow" href="service-details.html">Electrical</a>
											</div>
										</div>
									</div>
									<div class="service-content">
										<h3 class="title">
											<a href="service-details.html">Electric Panel Repairing Service</a>
										</h3>
										<div class="rating">
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star"></i>
											<span class="d-inline-block average-rating">(4.5)</span>
										</div>
										<div class="user-info">
											<div class="row">
												<span class="col-auto ser-contact"><i class="fas fa-phone mr-1"></i> <span>xxxxxxxx30</span></span>
												<span class="col ser-location"><span>Kalispell, Montana</span>  <i class="fas fa-map-marker-alt ml-1"></i></span>
											</div>
										</div>
									</div>
								</div>
								
								<div class="service-widget">
									<div class="service-img">
										<a href="service-details.html">
											<img class="img-fluid serv-img" alt="Service Image" src="assets/img/services/service-04.jpg">
										</a>
										<div class="item-info">
											<div class="service-user">
												<a href="#">
													<img src="assets/img/customer/user-04.jpg" alt="">
												</a>
												<span class="service-price">$14</span>
											</div>
											<div class="cate-list">
												<a class="bg-yellow" href="service-details.html">Car Wash</a>
											</div>
										</div>
									</div>
									<div class="service-content">
										<h3 class="title">
											<a href="service-details.html">Steam Car Wash</a>
										</h3>
										<div class="rating">
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<span class="d-inline-block average-rating">(0)</span>
										</div>
										<div class="user-info">
											<div class="row">
												<span class="col-auto ser-contact"><i class="fas fa-phone mr-1"></i> <span>xxxxxxxx74</span></span>
												<span class="col ser-location"><span>Electra, Texas</span>  <i class="fas fa-map-marker-alt ml-1"></i></span>
											</div>
										</div>
									</div>
								</div>
								
								<div class="service-widget">
									<div class="service-img">
										<a href="service-details.html">
											<img class="img-fluid serv-img" alt="Service Image" src="assets/img/services/service-05.jpg">
										</a>
										<div class="item-info">
											<div class="service-user">
												<a href="#">
													<img src="assets/img/customer/user-05.jpg" alt="">
												</a>
												<span class="service-price">$100</span>
											</div>
											<div class="cate-list">
												<a class="bg-yellow" href="service-details.html">Cleaning</a>
											</div>
										</div>
									</div>
									<div class="service-content">
										<h3 class="title">
											<a href="service-details.html">House Cleaning Services</a>
										</h3>
										<div class="rating">
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<span class="d-inline-block average-rating">(0)</span>
										</div>
										<div class="user-info">
											<div class="row">
												<span class="col-auto ser-contact"><i class="fas fa-phone mr-1"></i> <span>xxxxxxxx91</span></span>
												<span class="col ser-location"><span>Sylvester, Georgia</span>  <i class="fas fa-map-marker-alt ml-1"></i></span>
											</div>
										</div>
									</div>
								</div>
								
								<div class="service-widget">
									<div class="service-img">
										<a href="service-details.html">
											<img class="img-fluid serv-img" alt="Service Image" src="assets/img/services/service-06.jpg">
										</a>
										<div class="item-info">
											<div class="service-user">
												<a href="#">
													<img src="assets/img/customer/user-06.jpg" alt="">
												</a>
												<span class="service-price">$80</span>
											</div>
											<div class="cate-list">
												<a class="bg-yellow" href="service-details.html">Computer</a>
											</div>
										</div>
									</div>
									<div class="service-content">
										<h3 class="title">
											<a href="service-details.html">Computer & Server AMC Service</a>
										</h3>
										<div class="rating">
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<span class="d-inline-block average-rating">(0)</span>
										</div>
										<div class="user-info">
											<div class="row">
												<span class="col-auto ser-contact"><i class="fas fa-phone mr-1"></i> <span>xxxxxxxx92</span></span>
												<span class="col ser-location"><span>Los Angeles, California</span>  <i class="fas fa-map-marker-alt ml-1"></i></span>
											</div>
										</div>
									</div>
								</div>
								
								<div class="service-widget">
									<div class="service-img">
										<a href="service-details.html">
											<img class="img-fluid serv-img" alt="Service Image" src="assets/img/services/service-07.jpg">
										</a>
										<div class="item-info">
											<div class="service-user">
												<a href="#">
													<img src="assets/img/customer/user-07.jpg" alt="">
												</a>
												<span class="service-price">$5</span>
											</div>
											<div class="cate-list">
												<a class="bg-yellow" href="service-details.html">Interior</a>
											</div>
										</div>
									</div>
									<div class="service-content">
										<h3 class="title">
											<a href="service-details.html">Interior Designing</a>
										</h3>
										<div class="rating">
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star"></i>
											<span class="d-inline-block average-rating">(4)</span>
										</div>
										<div class="user-info">
											<div class="row">
												<span class="col-auto ser-contact"><i class="fas fa-phone mr-1"></i> <span>xxxxxxxx28</span></span>
												<span class="col ser-location"><span>Hanover, Maryland</span>  <i class="fas fa-map-marker-alt ml-1"></i></span>
											</div>
										</div>
									</div>
								</div>
								
								<div class="service-widget">
									<div class="service-img">
										<a href="service-details.html">
											<img class="img-fluid serv-img" alt="Service Image" src="assets/img/services/service-08.jpg">
										</a>
										<div class="item-info">
											<div class="service-user">
												<a href="#">
													<img src="assets/img/customer/user-08.jpg" alt="">
												</a>
												<span class="service-price">$75</span>
											</div>
											<div class="cate-list">
												<a class="bg-yellow" href="service-details.html">Construction</a>
											</div>
										</div>
									</div>
									<div class="service-content">
										<h3 class="title">
											<a href="service-details.html">Building Construction Services</a>
										</h3>
										<div class="rating">
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star"></i>
											<span class="d-inline-block average-rating">(4)</span>
										</div>
										<div class="user-info">
											<div class="row">
												<span class="col-auto ser-contact"><i class="fas fa-phone mr-1"></i> <span>xxxxxxxx62</span></span>
												<span class="col ser-location"><span>Burr Ridge, Illinois</span>  <i class="fas fa-map-marker-alt ml-1"></i></span>
											</div>
										</div>
									</div>
								</div>
								
								<div class="service-widget">
									<div class="service-img">
										<a href="service-details.html">
											<img class="img-fluid serv-img" alt="Service Image" src="assets/img/services/service-09.jpg">
										</a>
										<div class="item-info">
											<div class="service-user">
												<a href="#">
													<img src="assets/img/customer/user-09.jpg" alt="">
												</a>
												<span class="service-price">$500</span>
											</div>
											<div class="cate-list">
												<a class="bg-yellow" href="service-details.html">Painting</a>
											</div>
										</div>
									</div>
									<div class="service-content">
										<h3 class="title">
											<a href="service-details.html">Commercial Painting Services</a>
										</h3>
										<div class="rating">
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<span class="d-inline-block average-rating">(3)</span>
										</div>
										<div class="user-info">
											<div class="row">
												<span class="col-auto ser-contact"><i class="fas fa-phone mr-1"></i> <span>xxxxxxxx75</span></span>	
												<span class="col ser-location"><span>Huntsville, Alabama</span>  <i class="fas fa-map-marker-alt ml-1"></i></span>
											</div>
										</div>
									</div>
								</div>
								
								<div class="service-widget">
									<div class="service-img">
										<a href="service-details.html">
											<img class="img-fluid serv-img" alt="Service Image" src="assets/img/services/service-10.jpg">
										</a>
										<div class="item-info">
											<div class="service-user">
												<a href="#">
													<img src="assets/img/customer/user-10.jpg" alt="">
												</a>
												<span class="service-price">$150</span>
											</div>
											<div class="cate-list">
												<a class="bg-yellow" href="service-details.html">Plumbing</a>
											</div>
										</div>
									</div>
									<div class="service-content">
										<h3 class="title">
											<a href="service-details.html">Plumbing Services</a>
										</h3>
										<div class="rating">
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<span class="d-inline-block average-rating">(3)</span>
										</div>
										<div class="user-info">
											<div class="row">
												<span class="col-auto ser-contact"><i class="fas fa-phone mr-1"></i> <span>xxxxxxxx13</span></span>
												<span class="col ser-location"><span>Richmond, Virginia</span> <i class="fas fa-map-marker-alt ml-1"></i></span>
											</div>
										</div>
									</div>
								</div>
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- /Popular Servides -->
		
		<!-- How It Works -->
		<section class="how-work">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="heading howitworks">
							<h2>How It Works</h2>
							<span>Aliquam lorem ante, dapibus in, viverra quis</span>
						</div>
						<div class="howworksec">
							<div class="row">
								<div class="col-lg-4">
									<div class="howwork">
										<div class="iconround">
											<div class="steps">01</div>
											<img src="assets/img/icon-1.png" alt="">
										</div>
										<h3>Choose What To Do</h3>
										<p>Aliquam lorem ante, dapibus in, viverra quis, feugiat Phasellus viverra nulla ut metus varius laoreet.</p>
									</div>
								</div>
								<div class="col-lg-4">
									<div class="howwork">
										<div class="iconround">
											<div class="steps">02</div>
											<img src="assets/img/icon-2.png" alt="">
										</div>
										<h3>Find What You Want</h3>
										<p>Aliquam lorem ante, dapibus in, viverra quis, feugiat Phasellus viverra nulla ut metus varius laoreet.</p>
									</div>
								</div>
								<div class="col-lg-4">
									<div class="howwork">
										<div class="iconround">
											<div class="steps">03</div>
											<img src="assets/img/icon-3.png" alt="">
										</div>
										<h3>Amazing Places</h3>
										<p>Aliquam lorem ante, dapibus in, viverra quis, feugiat Phasellus viverra nulla ut metus varius laoreet.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- /How It Works -->
		
		<!-- Footer -->
		<?php
			require 'footer.php';
		 ?>
		<!-- /Footer -->
		
	</div>
	
	
	
	<script src="assets/js/jquery-3.5.0.min.js"></script>

	
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>

	<script src="assets/plugins/owlcarousel/owl.carousel.min.js"></script>

	
	<script src="assets/js/script.js"></script>
	
</body>


</html>