@extends('../master.admin')
@section('content')
		<div class="page-wrapper">
			<div class="content container-fluid">
			
				<!-- Page Header -->
				<div class="page-header">
					<div class="row">
						<div class="col-12">
							<h3 class="page-title">Settings</h3>
						</div>
					</div>
				</div>
				<!-- /Page Header -->
				<!-- Settings Menu -->
				<div class="settings-menu-links">
					<ul class="nav nav-tabs menu-tabs">
						<li class="nav-item">
							<a class="nav-link" href="settings.html">General Settings</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="localization-details.html">Localization</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="payment-settings.html">Payment Settings</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="email-settings.html">Email Settings</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="social-settings.html">Social Media Login</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="social-links.html">Social Links</a>
						</li>
						<li class="nav-item active">
							<a class="nav-link" href="seo-settings.html">SEO Settings</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="others-settings.html">Others</a>
						</li>
					</ul>
				</div>
				<!-- Settings Menu -->
				
				<div class="row">
					<div class="col-md-6">
						<div class="card">
							<div class="card-header">
								<h5 class="card-title">SEO Settings</h5>
							</div>
							<div class="card-body pt-0">
								<form>
									<div class="settings-form">
										<div class="form-group form-placeholder">
											<label>Meta Title <span class="star-red">*</span></label>
											<input type="text" class="form-control">
										</div>
										<div class="form-group">
											<label>Meta Keywords <span class="star-red">*</span></label>
											<input type="text" data-role="tagsinput" class="input-tags form-control" placeholder="Meta Keywords" name="services" value="Lorem,Ipsum" id="services">
										</div>
										<div class="form-group">
											<label>Meta Description <span class="star-red">*</span></label>
											<textarea class="form-control"></textarea>
										</div>
										<div class="form-group mb-0">
											<div class="settings-btns">
												<button type="submit" class="btn btn-orange">Submit</button>
												<button type="submit" class="btn btn-grey">Cancel</button>
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- jQuery -->
	<script src="assets/js/jquery-3.6.0.min.js"></script>

	<!-- Bootstrap Core JS -->
	<script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

	<!-- Slimscroll JS -->
	<script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>

	<!-- Select2 JS -->
	<script src="assets/js/select2.min.js"></script>

	<!-- Bootstrap Tagsinput JS -->
	<script src="assets/plugins/bootstrap-tagsinput/js/bootstrap-tagsinput.js"></script>

	<!-- Custom JS -->
	<script src="assets/js/admin.js"></script>

</body>


<!-- Mirrored from html.truelysell.com/template/admin/seo-settings.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 30 May 2022 01:14:53 GMT -->
</html>