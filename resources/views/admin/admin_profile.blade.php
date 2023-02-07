@extends('../master.admin')
@section('content')
		
		<div class="page-wrapper">
			<div class="content container-fluid">
				<div class="row">
					<div class="col-xl-8 offset-xl-2">
					
						<!-- Page Header -->
						<div class="page-header">
							<div class="row">
								<div class="col-sm-12">
									<h3 class="page-title">Profile</h3>
								</div>
							</div>
						</div>
						<!-- /Page Header -->
						
						<div class="card">
							<div class="card-body profile-menu">
								<ul class="nav nav-tabs nav-tabs-solid" role="tablist">
									<li class="nav-item home_tab">
										<a class="nav-link active" data-bs-toggle="tab" href="#profile_settings" role="tab" aria-selected="false">
											Profile Settings
										</a> 
									</li>
									<li class="nav-item home_add">
										<a class="nav-link" data-bs-toggle="tab" href="#change_password" role="tab" aria-selected="false">
											Change password
										</a> 
									</li>
								</ul>
								<div class="tab-content">
								
									<!-- Profile Tab -->
									<div class="tab-pane fade show active" id="profile_settings" role="tabpanel">
										<form>
											<div class="form-group">
												<label>Username</label>
												<input type="text" class="form-control" value="admin" disabled>
											</div>
											<div class="form-group">
												<label>Profile Image</label>
												<div class="media align-items-center d-flex">
													<div class="media-left">
														<img class="rounded-circle profile-img avatar-view-img" src="/assets/img/user.jpg" alt="" width="100" height="100">
													</div>
													<div class="media-body">
														<div class="uploader">
															<button class="btn btn-secondary btn-sm ms-3">Change profile picture</button>
														</div>
													</div>
												</div>
											</div>
											<div class="mt-4 save-form">
												<button class="btn btn-primary save-btn" type="button">Save</button>
											</div>
										</form>
									</div>
									<!-- /Profile Tab -->
									
									<!-- Password Tab -->
									<div class="tab-pane fade" id="change_password" role="tabpanel">
										<form>
											<div class="form-group">
												<label>Current Password</label>
												<input type="password" class="form-control">
											</div>
											<div class="form-group">
												<label>New Password</label>
												<input type="password" class="form-control">
											</div>
											<div class="form-group">
												<label>Repeat Password</label>
												<input type="password" class="form-control">
											</div>
											<div class="mt-4 save-form">
												<button class="btn save-btn btn-primary" type="submit">Save</button>
											</div>
										</form>
									</div>
									<!-- /Password Tab -->
									
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
	</div>

	<!-- jQuery -->
	<script src="/assets/js/jquery-3.6.0.min.js"></script>

	<!-- Bootstrap Core JS -->
	<script src="/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

	<!-- Slimscroll JS -->
	<script src="/assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>

	<!-- Custom JS -->
	<script src="/assets/js/admin.js"></script>

</body>


<!-- Mirrored from html.truelysell.com/template/admin/admin-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 30 May 2022 01:14:19 GMT -->
</html>