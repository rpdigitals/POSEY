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
						<li class="nav-item active">
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
						<li class="nav-item">
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
							<div class="card-header d-flex justify-content-between align-items-center">
								<h5 class="card-title">Paypal</h5>
								<div class="status-toggle d-flex justify-content-between align-items-center">
									<input type="checkbox" id="status_1" class="check">
									<label for="status_1" class="checktoggle">checkbox</label>
								</div>
							</div>
							<div class="card-body pt-0">
								<form>
									<div class="settings-form">
										<div class="form-group">
											<p class="pay-cont">Paypal Option</p>
											<label class="custom_radio me-4">
												<input type="radio" name="budget" value="Yes" checked="">
												<span class="checkmark"></span> Sandbox
											</label>
											<label class="custom_radio">
												<input type="radio" name="budget" value="Yes">
												<span class="checkmark"></span> Live
											</label>
										</div>
										<div class="form-group form-placeholder">
											<label>Braintree Tokenization key <span class="star-red">*</span></label>
											<input type="text" class="form-control" placeholder="sandbox_pgjcppvs_pd6gznv7zbrx9hb8">
										</div>
										<div class="form-group form-placeholder">
											<label>Braintree Merchant ID <span class="star-red">*</span></label>
											<input type="text" class="form-control" placeholder="pd6gznv7zbrx9hb8">
										</div>
										<div class="form-group form-placeholder">
											<label>Braintree Public key <span class="star-red">*</span></label>
											<input type="text" class="form-control" placeholder="h8bydrz7gcjkp7d4">
										</div>
										<div class="form-group form-placeholder">
											<label>Braintree Private key <span class="star-red">*</span></label>
											<input type="text" class="form-control" placeholder="sandbox_pgjcppvs_pd6gznv7zbrx9hb8">
										</div>
										<div class="form-group form-placeholder">
											<label>Paypal APP ID <span class="star-red">*</span></label>
											<input type="text" class="form-control" placeholder="pd6gznv7zbrx9hb8">
										</div>
										<div class="form-group form-placeholder">
											<label>Paypal Secret Key <span class="star-red">*</span></label>
											<input type="text" class="form-control" placeholder="h8bydrz7gcjkp7d4">
										</div>
										<div class="form-group mb-0">
											<div class="settings-btns">
												<button type="submit" class="btn btn-orange">Save</button>
												<button type="submit" class="btn btn-grey">Cancel</button>
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="card">
							<div class="card-header d-flex justify-content-between align-items-center">
								<h5 class="card-title">Stripe</h5>
								<div class="status-toggle d-flex justify-content-between align-items-center">
									<input type="checkbox" id="status_2" class="check" checked="">
									<label for="status_2" class="checktoggle">checkbox</label>
								</div>
							</div>
							<div class="card-body pt-0">
								<form>
									<div class="settings-form">
										<div class="form-group">
											<p class="pay-cont">Stripe Option</p>
											<label class="custom_radio me-4">
												<input type="radio" name="budget" value="Yes" checked="">
												<span class="checkmark"></span> Sandbox
											</label>
											<label class="custom_radio">
												<input type="radio" name="budget" value="Yes">
												<span class="checkmark"></span> Live
											</label>
										</div>
										<div class="form-group form-placeholder">
											<label>Gateway Name <span class="star-red">*</span></label>
											<input type="text" class="form-control" placeholder="Stripe">
										</div>
										<div class="form-group form-placeholder">
											<label>API Key <span class="star-red">*</span></label>
											<input type="text" class="form-control" placeholder="pk_test_AealxxOygZz84AruCGadWvUV00mJQZdLvr">
										</div>
										<div class="form-group form-placeholder">
											<label>Rest Key <span class="star-red">*</span></label>
											<input type="text" class="form-control" placeholder="sk_test_8HwqAWwBd4C4E77bgAO1jUgk00hDlERgn3">
										</div>
										<div class="form-group mb-0">
											<div class="settings-btns">
												<button type="submit" class="btn btn-orange">Save</button>
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

	<!-- Custom JS -->
	<script src="assets/js/admin.js"></script>

</body>


<!-- Mirrored from html.truelysell.com/template/admin/payment-settings.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 30 May 2022 01:14:53 GMT -->
</html>