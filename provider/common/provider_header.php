<header class="header">
			<nav class="navbar navbar-expand-lg header-nav">
				<div class="navbar-header">
					<a id="mobile_btn" href="javascript:void(0);">
						<span class="bar-icon">
							<span></span>
							<span></span>
							<span></span>
						</span>
					</a>
					<a href="..\index.php" class="navbar-brand logo">
						<img src="assets/img/logo.png" class="img-fluid" alt="Logo">
					</a>
					
				</div>
				<div class="main-menu-wrapper">
					<div class="menu-header">
						<a href="..\index.php" class="menu-logo">
							<img src="assets/img/logo.png" class="img-fluid" alt="Logo">
						</a>
						<a id="menu_close" class="menu-close" href="javascript:void(0);"> <i class="fas fa-times"></i></a>
					</div>
					<ul class="main-nav">
						<li>
							<a href="..\index.php">Home</a>
						</li>
						<li>
							<a href="..\categories.php">Categories</a>
						</li>
						<li class="has-submenu active">
							<a href="provider_dashboard.php">Providers</a>
							<ul class="submenu">
								<li class="active"><a href="provider_dashboard.php">Dashboard</a></li>
								<li><a href="my_services.php">Services</a></li>
								<li><a href="#">Bookings</a></li>
								<li><a href="provider_settings.php">Profile Settings</a></li>
								<li><a href="provider_wallet.php">Wallet</a></li>
								<li><a href="add_package.php">Subscription</a></li>
								<li><a href="#">Availability</a></li>
								<li><a href="#">Reviews</a></li>
								<li><a href="#">Payment</a></li>
							</ul>
						</li>
						
						<li class="has-submenu">
							<a href="#">Pages <i class="fas fa-chevron-down"></i></a>
							<ul class="submenu">
								<li><a href="search.html">Search</a></li>
								<li><a href="service-details.html">Service Details</a></li>
								<li><a href="add-service.html">Add Service</a></li>
								<li><a href="edit-service.html">Edit Service</a></li>
								<li><a href="chat.html">Chat</a></li>
								<li><a href="notifications.html">Notifications</a></li>
								<li><a href="about-us.html">About Us</a></li>
								<li><a href="contact-us.html">Contact Us</a></li>
								<li><a href="faq.html">Faq</a></li>
								<li><a href="#">Terms & Conditions</a></li>
								<li><a href="#">Privacy Policy</a></li>
							</ul>
						</li>
						
					</ul>
				</div>
				
				<ul class="nav header-navbar-rht">

					<li class="nav-item desc-list wallet-menu"><a class="nav-link header-login">
							<img src="assets/img/wallet.png" alt="" class="mr-2 wallet-img"><span>Wallet:</span> $<?php echo $balance ?>
						</a>
					</li>


					<li class="nav-item desc-list">
						<a href="add_package.php" class="nav-link header-login">
							<i class="fas fa-plus-circle mr-1"></i> <span>Add Service</span>
						</a>
					</li>



					<!-- Notifications -->
					<li class="nav-item dropdown logged-item">
						<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
							<i class="fas fa-bell"></i> <span class="badge badge-pill bg-yellow">1</span>
						</a>
						<div class="dropdown-menu notify-blk dropdown-menu-right notifications">
							<div class="topnav-dropdown-header">
								<span class="notification-title">Notifications</span>
								<a href="javascript:void(0)" class="clear-noti">Clear All  </a>
							</div>
							<div class="noti-content">
								<ul class="notification-list">
									<li class="notification-message">
										<a href="notifications.html">
											<div class="media">
												<span class="avatar avatar-sm">
													<img class="avatar-img rounded-circle" alt="User Image" src="assets/img/customer/user-01.jpg">
												</span>
												<div class="media-body">
													<p class="noti-details"> <span class="noti-title">Jeffrey Akridge has booked your service</span></p>
													<p class="noti-time"><span class="notification-time">Today 10:04 PM</span></p>
												</div>
											</div>
										</a>
									</li>
									<li class="notification-message">
										<a href="notifications.html">
											<div class="media">
												<span class="avatar avatar-sm">
													<img class="avatar-img rounded-circle" alt="User Image" src="assets/img/customer/user-02.jpg">
												</span>
												<div class="media-body">
													<p class="noti-details"> <span class="noti-title">Nancy Olson has booked your service</span></p>
													<p class="noti-time"><span class="notification-time">Today 9:45 PM</span></p>
												</div>
											</div>
										</a>
									</li>
									
									
								</ul>
							</div>
							<div class="topnav-dropdown-footer">
								<a href="notifications.html">View all Notifications</a>
							</div>
						</div>
					</li>
					<!-- /Notifications -->

					<!-- chat -->
					<li class="nav-item logged-item">
						<a href="chat.html" class="nav-link">
							<i class="fa fa-comments" aria-hidden="true"></i>
						</a>
					</li>
					<!-- /chat -->
					
					<!-- User Menu -->
					<li class="nav-item dropdown has-arrow logged-item">
						<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false">
							<span class="user-img">
								<img class="rounded-circle" src="assets/img/provider/<?php echo $data["provider_image"]?>" alt="" width="31">
							</span>
						</a>
						<div class="dropdown-menu dropdown-menu-right">
							<div class="user-header">
								<div class="avatar avatar-sm">
									<img class="avatar-img rounded-circle" src="assets/img/provider/<?php echo $data["provider_image"]?>" alt="">
								</div>
								<div class="user-text">
									<h6 class="text-truncate"><?php echo $name; ?></h6>  
									<p class="text-muted mb-0">Provider</p>
								</div>
							</div>
							<a class="dropdown-item" href="provider_dashboard.php">Dashboard</a>
							<a class="dropdown-item" href="my_services.php">My Services</a>
							<a class="dropdown-item" href="provider_bookings.php">Booking List</a>
							<a class="dropdown-item" href="provider_completed_service_list.php">Service completed List</a>
							<a class="dropdown-item" href="provider_settings.php">Profile Settings</a>
							<a class="dropdown-item" href="provider_wallet.php">Wallet</a>
							<a class="dropdown-item" href="add_package.php">Subscription</a>
							<a class="dropdown-item" href="#">Availability</a>
							<a class="dropdown-item" href="#">Chat</a>
							<a class="dropdown-item" href="provider_logout.php">Logout</a>
						</div>
					</li>
					<!-- /User Menu -->

				</ul>
			</nav>
		</header>