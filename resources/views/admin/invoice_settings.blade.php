@extends('../master.admin')
@section('content')
<body>
	
	
		<!-- Header -->
		<div class="header">
			<div class="header-left"> 
				<a href="index.html" class="logo logo-small">
					<img src="assets/img/logo-icon.png" alt="Logo" width="30" height="30">
				</a>
			</div>
			<a href="javascript:void(0);" id="toggle_btn">
				<i class="fas fa-align-left"></i>
			</a>
			<a class="mobile_btn" id="mobile_btn" href="javascript:void(0);">
				<i class="fas fa-align-left"></i>
			</a>
			
			<ul class="nav user-menu">
				<!-- Notifications -->
				<li class="nav-item dropdown noti-dropdown">
					<a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
						<i class="far fa-bell"></i>  <span class="badge badge-pill"></span>
					</a>
					<div class="dropdown-menu notifications">
						<div class="topnav-dropdown-header">
							<span class="notification-title">Notifications</span>
							<a href="javascript:void(0)" class="clear-noti"> Clear All </a>
						</div>
						<div class="noti-content">
							<ul class="notification-list">
								<li class="notification-message">
									<a href="admin-notification.html">
										<div class="media d-flex">
											<span class="avatar avatar-sm flex-shrink-0">
												<img class="avatar-img rounded-circle" alt="" src="assets/img/provider/provider-01.jpg">
											</span>
											<div class="media-body flex-grow-1">
												<p class="noti-details">
													<span class="noti-title">Thomas Herzberg have been subscribed</span>
												</p>
												<p class="noti-time">
													<span class="notification-time">15 Sep 2020 10:20 PM</span>
												</p>
											</div>
										</div>
									</a>
								</li>
								<li class="notification-message">
									<a href="admin-notification.html">
										<div class="media d-flex">
											<span class="avatar avatar-sm flex-shrink-0">
												<img class="avatar-img rounded-circle" alt="" src="assets/img/provider/provider-02.jpg">
											</span>
											<div class="media-body flex-grow-1">
												<p class="noti-details">
													<span class="noti-title">Matthew Garcia have been subscribed</span>
												</p>
												<p class="noti-time">
													<span class="notification-time">13 Sep 2020 03:56 AM</span>
												</p>
											</div>
										</div>
									</a>
								</li>
								<li class="notification-message">
									<a href="admin-notification.html">
										<div class="media d-flex">
											<span class="avatar avatar-sm flex-shrink-0">
												<img class="avatar-img rounded-circle" alt="" src="assets/img/provider/provider-03.jpg">
											</span>
											<div class="media-body flex-grow-1">
												<p class="noti-details">
													<span class="noti-title">Yolanda Potter have been subscribed</span>
												</p>
												<p class="noti-time">
													<span class="notification-time">12 Sep 2020 09:25 PM</span>
												</p>
											</div>
										</div>
									</a>
								</li>
								<li class="notification-message">
									<a href="admin-notification.html">
										<div class="media d-flex">
											<span class="avatar avatar-sm flex-shrink-0">
												<img class="avatar-img rounded-circle" alt="User Image" src="assets/img/provider/provider-04.jpg">
											</span>
											<div class="media-body flex-grow-1">
												<p class="noti-details">
													<span class="noti-title">Ricardo Flemings have been subscribed</span>
												</p>
												<p class="noti-time">
													<span class="notification-time">11 Sep 2020 06:36 PM</span>
												</p>
											</div>
										</div>
									</a>
								</li>
								<li class="notification-message">
									<a href="admin-notification.html">
										<div class="media d-flex">
											<span class="avatar avatar-sm flex-shrink-0">
												<img class="avatar-img rounded-circle" alt="User Image" src="assets/img/provider/provider-05.jpg">
											</span>
											<div class="media-body flex-grow-1">
												<p class="noti-details">
													<span class="noti-title">Maritza Wasson have been subscribed</span>
												</p>
												<p class="noti-time">
													<span class="notification-time">10 Sep 2020 08:42 AM</span>
												</p>
											</div>
										</div>
									</a>
								</li>
								<li class="notification-message">
									<a href="admin-notification.html">
										<div class="media d-flex">
											<span class="avatar avatar-sm flex-shrink-0">
												<img class="avatar-img rounded-circle" alt="User Image" src="assets/img/provider/provider-06.jpg">
											</span>
											<div class="media-body flex-grow-1">
												<p class="noti-details">
													<span class="noti-title">Marya Ruiz have been subscribed</span>
												</p>
												<p class="noti-time">
													<span class="notification-time">9 Sep 2020 11:01 AM</span>
												</p>
											</div>
										</div>
									</a>
								</li>
								<li class="notification-message">
									<a href="admin-notification.html">
										<div class="media d-flex">
											<span class="avatar avatar-sm flex-shrink-0">
												<img class="avatar-img rounded-circle" alt="User Image" src="assets/img/provider/provider-07.jpg">
											</span>
											<div class="media-body flex-grow-1">
												<p class="noti-details">
													<span class="noti-title">Richard Hughes have been subscribed</span>
												</p>
												<p class="noti-time">
													<span class="notification-time">8 Sep 2020 06:23 AM</span>
												</p>
											</div>
										</div>
									</a>
								</li>
							</ul>
						</div>
						<div class="topnav-dropdown-footer">
							<a href="admin-notification.html">View all Notifications</a>
						</div>
					</div>
				</li>
				<!-- /Notifications -->
				
				<!-- User Menu -->
				<li class="nav-item dropdown">
					<a href="javascript:void(0)" class="dropdown-toggle user-link  nav-link" data-bs-toggle="dropdown">
						<span class="user-img">
							<img class="rounded-circle" src="assets/img/user.jpg" width="40" alt="Admin">
						</span>
					</a>
					<div class="dropdown-menu dropdown-menu-end">
						<a class="dropdown-item" href="admin-profile.html">Profile</a>
						<a class="dropdown-item" href="login.html">Logout</a>
					</div>
				</li>
				<!-- /User Menu -->
			</ul>
		</div>
		<!-- /Header -->
		
		<!-- Sidebar -->
		<div class="sidebar" id="sidebar">
			<div class="sidebar-logo">
				<a href="index.html">
					<img src="assets/img/logo-icon.png" class="img-fluid" alt="">
				</a>
			</div>
			<div class="sidebar-inner slimscroll">
				<div id="sidebar-menu" class="sidebar-menu">
					<ul>
						<li>
							<a href="index.html"><i class="fas fa-columns"></i> <span>Dashboard</span></a>
						</li>
						<li>
							<a href="categories.html"><i class="fas fa-layer-group"></i> <span>Categories</span></a>
						</li>
						<li>
							<a href="subcategories.html"><i class="fab fa-buffer"></i> <span>Sub Categories</span></a>
						</li>
						<li>
							<a href="service-list.html"><i class="fas fa-bullhorn"></i> <span> Services</span></a>
						</li>
						<li>
							<a href="total-report.html"><i class="far fa-calendar-check"></i> <span> Booking List</span></a>
						</li>
						<li>
							<a href="payment_list.html"><i class="fas fa-hashtag"></i> <span>Payments</span></a>
						</li>
						<li>
							<a href="ratingstype.html"><i class="fas fa-star-half-alt"></i> <span>Rating Type</span></a>
						</li>
						<li>
							<a href="review-reports.html"><i class="fas fa-star"></i> <span>Ratings</span></a>
						</li>
						<li>
							<a href="subscriptions.html"><i class="far fa-calendar-alt"></i> <span>Subscriptions</span></a>
						</li>
						<li>
							<a href="wallet.html"><i class="fas fa-wallet"></i> <span> Wallet</span></a>
						</li>
						<li>
							<a href="service-providers.html"><i class="fas fa-user-tie"></i> <span> Service Providers</span></a>
						</li>
						<li>
							<a href="users.html"><i class="fas fa-user"></i> <span>Users</span></a>
						</li>
						<li class="submenu">
							<a href="#"><i class="fas fa-clipboard"></i> <span> Invoices</span>
								<span class="menu-arrow"><i class="fas fa-angle-right"></i></span>
							</a>
							<ul>
								<li><a href="invoices.html">Invoices List</a></li>
								<li><a href="invoice-grid.html">Invoices Grid</a></li>
								<li><a href="add-invoice.html">Add Invoices</a></li>
								<li><a href="edit-invoice.html">Edit Invoices</a></li>
								<li><a href="view-invoice.html">Invoices Details</a></li>
								<li><a href="invoices-settings.html" class="active">Invoices Settings</a></li>
							</ul>
						</li>
						<li> 
							<a href="settings.html"><i class="fas fa-cog"></i> <span>Settings</span></a>
						</li>
						<li class="submenu">
							<a href="#"><i class="fas fa-cog"></i> <span> Frontend Settings</span>
								<span class="menu-arrow"><i class="fas fa-angle-right"></i></span>
							</a>
							<ul>
								<li>
									<a href="front-settings.html"> <span> Header Settings</span></a>
								</li> 
								<li>
									<a href="footer-settings.html"> <span>Footer Settings</span></a>
								</li>
								<li>
									<a href="pages.html"> <span>Pages </span></a>
								</li>	
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- /Sidebar -->
		
			<!-- Page Wrapper -->
			<div class="page-wrapper">
				<div class="content container-fluid">

					<!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col-sm-6">
								<h3 class="page-title">Invoice settings</h3>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
				
					<div class="row">
						<div class="col-xl-3 col-md-4">
							<div class="widget settings-menu">
								<ul>
									<li class="nav-item">
										<a href="invoices-settings.html" class="nav-link active">
											<i class="fe fe-git-commit"></i> <span>General Settings</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="tax-settings.html" class="nav-link">
											<i class="fe fe-bookmark"></i> <span>Tax Settings</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="bank-settings.html" class="nav-link">
											<i class="fas fa-university"></i> <span>Bank Settings</span>
										</a>
									</li>
								</ul>
							</div>
						</div>
						
						<div class="col-xl-9 col-md-8">
							<div class="card invoices-settings-card">
								<div class="card-header">
									<h5 class="card-title">General Settings</h5>
								</div>
								<div class="card-body">
								
									<!-- Form -->
									<form action="#" class="invoices-settings-form">
										<div class="row align-items-center form-group">
											<label for="name" class="col-sm-3 col-form-label input-label">Invoice Status</label>
											<div class="col-sm-9">
												<label class="custom_check">
													<input type="checkbox" name="invoice">
													<span class="checkmark"></span>  Change invoice status to paid after an order is complete
												</label>
											</div>
										</div>
										<div class="row align-items-center form-group">
											<label for="email" class="col-sm-3 col-form-label input-label">Invoice Amount</label>
											<div class="col-sm-9">
												<input type="text" class="form-control">
											</div>
										</div>
										<div class="row align-items-center form-group">
											<label for="phone" class="col-sm-3 col-form-label input-label">Invoice number starts with</label>
											<div class="col-sm-9">
												<input type="text" class="form-control" placeholder="$" value="$">
											</div>
										</div>
										<div class="row align-items-center form-group">
											<label for="addressline1" class="col-sm-3 col-form-label input-label">Prefix</label>
											<div class="col-sm-9">
												<input type="text" class="form-control">
											</div>
										</div>
										<div class="row align-items-center form-group">
											<label for="addressline2" class="col-sm-3 col-form-label input-label">Number Reset</label>
											<div class="col-sm-9">
												<input type="text" class="form-control">
											</div>
										</div>
										<div class="row align-items-center form-group">
											<label for="zipcode" class="col-sm-3 col-form-label input-label">Default Due Time</label>
											<div class="col-sm-9">
												<input type="text" class="form-control">
											</div>
										</div>
										<div class="row align-items-center form-group ">
											<label for="zipcode" class="col-sm-3 col-form-label input-label">Default Digital Signatory</label>
											<div class="col-sm-9">
												<div class="invoices-upload-btn">
													<input type="file" accept="image/*" name="image" id="file" onchange="loadFile(event)" class="hide-input">
													<label for="file" class="upload">
														upload File
													</label>
												</div>
											</div>
										</div>
										<div class="row align-items-center form-group">
											<label for="zipcode" class="col-sm-3 col-form-label input-label">Default Digital Name</label>
											<div class="col-sm-9">
												<input type="text" class="form-control">
											</div>
										</div>
										<div class="invoice-setting-btn text-end">
											<button type="submit" class="btn cancel-btn me-2">Cancel</button>
											<button type="submit" class="btn btn-primary-save-bg">Save Changes</button>
										</div>
									</form>
									<!-- /Form -->
									
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /Page Wrapper -->
	</div>
	<!-- jQuery -->
	<script src="assets/js/jquery-3.6.0.min.js"></script>

	<!-- Bootstrap Core JS -->
	<script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Feather Icon JS -->
    <script src="assets/js/feather.min.js"></script>

	<!-- Datepicker Core JS -->
	<script src="assets/js/moment.min.js"></script>
	<script src="assets/js/bootstrap-datetimepicker.min.js"></script>

	<!-- Slimscroll JS -->
	<script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Select2 JS -->
	<script src="assets/plugins/select2/js/select2.min.js"></script>

	<!-- Datatables JS -->
	<script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>
	<script src="assets/plugins/datatables/datatables.min.js"></script>

	<!-- Custom JS -->
	<script src="assets/js/admin.js"></script> 
@endsection