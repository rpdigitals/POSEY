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
						<li class="nav-item active">
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
                    <div class="col-lg-6 col-md-8">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title">Social Link Settings</h5>
                            </div>
                            <div class="card-body pt-0">
                                <form>
                                    <div class="settings-form">
                                        <div class="links-info">
                                            <div class="row form-row links-cont">
                                                <div class="form-group form-placeholder d-flex">
                                                    <button class="btn social-icon">
                                                        <i class="feather-facebook"></i>
                                                    </button>
                                                    <input type="text" class="form-control" placeholder="https://www.facebook.com/">
                                                    <div>
                                                        <a href="#" class="btn trash">
                                                            <i class="feather-trash-2"></i>
                                                        </a>
                                                    </div>
                                                </div> 
                                            </div>
                                        </div>
                                        <div class="links-info">
                                            <div class="row form-row links-cont">
                                                <div class="form-group form-placeholder d-flex">
                                                    <button class="btn social-icon">
                                                        <i class="feather-twitter"></i>
                                                    </button>
                                                    <input type="text" class="form-control" placeholder="https://www.twitter.com/">
                                                    <div>
                                                        <a href="#" class="btn trash">
                                                            <i class="feather-trash-2"></i>
                                                        </a>
                                                    </div>
                                                </div> 
                                                
                                            </div>
                                        </div>
                                        <div class="links-info">
                                            <div class="row form-row links-cont">
                                                <div class="form-group form-placeholder d-flex">
                                                    <button class="btn social-icon">
                                                        <i class="feather-youtube"></i>
                                                    </button>
                                                    <input type="text" class="form-control" placeholder="https://www.youtube.com/">
                                                    <div>
                                                        <a href="#" class="btn trash">
                                                            <i class="feather-trash-2"></i>
                                                        </a>
                                                    </div>
                                                </div> 
                                            </div>
                                        </div>
                                        <div class="links-info">
                                            <div class="row form-row links-cont">
                                                <div class="form-group form-placeholder d-flex">
                                                    <button class="btn social-icon">
                                                        <i class="feather-linkedin"></i>
                                                    </button>
                                                    <input type="text" class="form-control" placeholder="https://www.linkedin.com/">
                                                    <div>
                                                        <a href="#" class="btn trash">
                                                            <i class="feather-trash-2"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <a href="javascript:void(0);" class="btn add-links">
                                            <i class="fas fa-plus me-1"></i> Add More
                                        </a>
                                    </div>
                                    <div class="form-group mb-0">
                                        <div class="settings-btns">
                                            <button type="submit" class="btn btn-orange">Submit</button>
                                            <button type="submit" class="btn btn-grey">Cancel</button>
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


<!-- Mirrored from html.truelysell.com/template/admin/social-links.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 30 May 2022 01:14:53 GMT -->
</html>