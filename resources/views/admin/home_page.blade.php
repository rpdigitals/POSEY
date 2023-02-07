@extends('../master.admin')
@section('content')
		<div class="page-wrapper">
			<div class="content container-fluid">
				<div class="row">
					<div class="col-lg-8 m-auto">
						<!-- Page Header -->
						<div class="page-header">
							<div class="row">
								<div class="col-12">
									<h3 class="page-title">Home Page</h3>
								</div>
							</div>
						</div>
						<!-- /Page Header -->
						
						<div class="row">
							<div class=" col-lg-12 col-sm-12 col-12">
								<div class="card">
									<div class="card-header">
										<div class="card-heads">
											<h4 class="card-title">Banner Settings</h4>
											<div class="col-auto">
												<div class="status-toggle">
													<input id="banner" class="check" type="checkbox" checked="">
													<label for="banner" class="checktoggle">checkbox</label>
												</div>
											</div>
										</div>
									</div>
									<div class="card-body">
										<div class="row">
											<div class="form-group">
												<label>Title</label>
												<input type="text" class="form-control" >
											</div>
											<div class="form-group">
												<label>Content</label>
												<input type="text" class="form-control" >
											</div>
											<div class="form-group">
												<p class="settings-label">Banner image</p>
												<div class="settings-btn">
													<input type="file" accept="image/*" name="image" id="file" onchange="loadFile(event)" class="hide-input">
													<label for="file" class="upload">
														<i class="fa fa-upload"></i>
													</label>
												</div>
												<div class="upload-images d-block">
													<img src="assets/img/services/service-13.png" alt="Image">
													<a href="javascript:void(0);" class="btn-icon logo-hide-btn">
														<i class="fa fa-times"></i>
													</a>
													<h6>banner-2.jpg</h6>
													<h5>43 KB</h5>
												</div>
											</div>
											<div class="form-group">
												<div class="row">
													<div class="col-lg-5 col-12">
														<div class="card-heads mb-3">
															<h4 class="card-title f-14">Main Seacrch </h4>
															<div class="col-auto">
																<div class="status-toggle">
																	<input id="default_o" class="check" type="checkbox" checked="">
																	<label for="default_o" class="checktoggle">checkbox</label>
																</div>
															</div>
														</div>
														<div class="card-heads mb-3">
															<h4 class="card-title f-14">Popular Searches </h4>
															<div class="col-auto">
																<div class="status-toggle">
																	<input id="default" class="check" type="checkbox" checked="">
																	<label for="default" class="checktoggle">checkbox</label>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="form-group">
												<label>Popular Searches Label Name</label>
												<input type="text" class="form-control" >
											</div>
											<div class="form-groupbtn">
												<a class="btn btn-update me-2">Update</a>
												<a class="btn btn-cancel">Cancel</a>
											</div>
										</div>
									</div>
								</div>
								<div class="card">
									<div class="card-header">
										<div class="card-heads">
											<h4 class="card-title">Featured Categories</h4>
											<div class="col-auto">
												<div class="status-toggle">
													<input id="featured" class="check" type="checkbox" checked="">
													<label for="featured" class="checktoggle">checkbox</label>
												</div>
											</div>
										</div>
									</div>
									<div class="card-body">
										<div class="row">
											<div class="form-group">
												<label>Title</label>
												<input type="text" class="form-control" >
											</div>
											<div class="form-group">
												<label>Content</label>
												<input type="text" class="form-control" >
											</div>
											<div class="form-group">
												<label class="form-head mb-0">Categories<span>( Max 6 only )</span></label>
											</div>
											<div class="form-group">
												<div class="row align-items-center">
													<div class="col-lg-11 col-12">
														<select class="form-control select">
															<option>Construction</option>
															<option>Car Wash</option>
														</select>
													</div>
													<div class="col-lg-1 col-12">
														<a href="#" class="btn btn-sm bg-danger-light  delete_review_comment">
															<i class="far fa-trash-alt "></i> 
														</a>
													</div>
												</div>
											</div>
											<div class="form-group">
												<div class="row align-items-center">
													<div class="col-lg-11 col-12">
														<select class="form-control select">
															<option>Car Wash</option>
															<option>Electrical</option>
														</select>
													</div>
													<div class="col-lg-1 col-12">
														<a href="#" class="btn btn-sm bg-danger-light  delete_review_comment">
															<i class="far fa-trash-alt "></i> 
														</a>
													</div>
												</div>
											</div>

											<div class="form-group">
												<div class="row align-items-center">
													<div class="col-lg-11 col-12">
														<select class="form-control select">
															<option>Electrical</option>
															<option>Electrical</option>
														</select>
													</div>
													<div class="col-lg-1 col-12">
														<a href="#" class="btn btn-sm bg-danger-light  delete_review_comment">
															<i class="far fa-trash-alt "></i> 
														</a>
													</div>
												</div>
											</div>
											<div class="form-group">
												<div class="row align-items-center">
													<div class="col-lg-11 col-12">
														<select class="form-control select">
															<option>Cleaning</option>
															<option>Electrical</option>
														</select>
													</div>
													<div class="col-lg-1 col-12">
														<a href="#" class="btn btn-sm bg-danger-light  delete_review_comment">
															<i class="far fa-trash-alt "></i> 
														</a>
													</div>
												</div>
											</div>
											<div class="form-group">
												<div class="row align-items-center">
													<div class="col-lg-11 col-12">
														<select class="form-control select">
															<option>Interior</option>
															<option>Electrical</option>
														</select>
													</div>
													<div class="col-lg-1 col-12">
														<a href="#" class="btn btn-sm bg-danger-light  delete_review_comment">
															<i class="far fa-trash-alt "></i> 
														</a>
													</div>
												</div>
											</div>
											<div class="form-group">
												<div class="row align-items-center">
													<div class="col-lg-11 col-12">
														<select class="form-control select">
															<option>Select Category</option>
															<option>Electrical</option>
															<option>Interior</option>
														</select>
													</div>
													<div class="col-lg-1 col-12">
														<a href="#" class="btn btn-sm bg-danger-light  delete_review_comment">
															<i class="far fa-trash-alt "></i> 
														</a>
													</div>
												</div>
											</div>
											<div class="form-group">
												<div class="row align-items-center">
													<div class="col-lg-3 col-12">
														<a class="btn  btn-success"><i class="fa fa-plus me-2"></i>Add New</a>
													</div>
												</div>
											</div>
											<div class="form-groupbtn">
												<a class="btn btn-update me-2">Update</a>
												<a class="btn btn-cancel">Cancel</a>
											</div>
										</div>
									</div>
								</div>
								<div class="card">
									<div class="card-header">
										<div class="card-heads">
											<h4 class="card-title">Popular Services</h4>
											<div class="col-auto">
												<div class="status-toggle">
													<input id="popular" class="check" type="checkbox" checked="">
													<label for="popular" class="checktoggle">checkbox</label>
												</div>
											</div>
										</div>
									</div>
									<div class="card-body">
										<div class="row">
											<div class="form-group">
												<label>Title</label>
												<input type="text" class="form-control" >
											</div>
											<div class="form-group">
												<label>Content</label>
												<input type="text" class="form-control" >
											</div>
											<div class="form-group">
												<label class="form-head mb-0">Number of service<span>( Min 6 to Max 20 only )</span></label>
												<input type="text" class="form-control" >
											</div>
											<div class="form-groupbtn">
												<a class="btn btn-update me-2">Update</a>
												<a class="btn btn-cancel">Cancel</a>
											</div>
										</div>
									</div>
								</div>
								<div class="card">
									<div class="card-header">
										<div class="card-heads">
											<h4 class="card-title">How It Works</h4>
											<div class="col-auto">
												<div class="status-toggle">
													<input id="works" class="check" type="checkbox" checked="">
													<label for="works" class="checktoggle">checkbox</label>
												</div>
											</div>
										</div>
									</div>
									<div class="card-body">
										<div class="row">
											<div class="form-group">
												<label>Title</label>
												<input type="text" class="form-control" >
											</div>
											<div class="form-group">
												<label>Content</label>
												<input type="text" class="form-control" >
											</div>
											
											<div class="form-group">
												<h6 class="form-heads mb-0">Step 1</h6>
											</div>
											<div class="form-group">
												<label>Title</label>
												<input type="text" class="form-control" >
											</div>
											<div class="form-group">
												<label>Content</label>
												<input type="text" class="form-control" >
											</div>
											<div class="form-group">
												<p class="settings-label">Image</p>
												<div class="settings-btn">
													<input type="file" accept="image/*" name="image" id="file" onchange="loadFile(event)" class="hide-input">
													<label for="file" class="upload">
														<i class="fa fa-upload"></i>
													</label>
												</div>
												<div class="upload-images ">
													<img src="assets/img/break.png" class="my-4 w-auto" alt="Image">
													<a href="javascript:void(0);" class="btn-icon logo-hide-btn">
														<i class="fa fa-times"></i>
													</a>
												</div>
											</div>
											<div class="form-group">
												<h6 class="form-heads mb-0">Step 2</h6>
											</div>
											<div class="form-group">
												<label>Title</label>
												<input type="text" class="form-control" >
											</div>
											<div class="form-group">
												<label>Content</label>
												<input type="text" class="form-control" >
											</div>
											<div class="form-group">
												<p class="settings-label">Image</p>
												<div class="settings-btn">
													<input type="file" accept="image/*" name="image" id="file" onchange="loadFile(event)" class="hide-input">
													<label for="file" class="upload">
														<i class="fa fa-upload"></i>
													</label>
												</div>
												<div class="upload-images ">
													<img src="assets/img/break.png" class="my-4 w-auto" alt="Image">
													<a href="javascript:void(0);" class="btn-icon logo-hide-btn">
														<i class="fa fa-times"></i>
													</a>
												</div>
											</div>
											<div class="form-group">
												<h6 class="form-heads mb-0">Step 3</h6>
											</div>
											<div class="form-group">
												<label>Title</label>
												<input type="text" class="form-control" >
											</div>
											<div class="form-group">
												<label>Content</label>
												<input type="text" class="form-control" >
											</div>
											<div class="form-group">
												<p class="settings-label">Image</p>
												<div class="settings-btn">
													<input type="file" accept="image/*" name="image" id="file" onchange="loadFile(event)" class="hide-input">
													<label for="file" class="upload">
														<i class="fa fa-upload"></i>
													</label>
												</div>
												<div class="upload-images ">
													<img src="assets/img/break.png" class="my-4 w-auto" alt="Image">
													<a href="javascript:void(0);" class="btn-icon logo-hide-btn">
														<i class="fa fa-times"></i>
													</a>
												</div>
											</div>
											<div class="form-groupbtn">
												<a class="btn btn-update me-2">Update</a>
												<a class="btn btn-cancel">Cancel</a>
											</div>
										</div>
									</div>
								</div>
								<div class="card">
									<div class="card-header">
										<div class="card-heads">
											<h4 class="card-title">Download Section</h4>
											<div class="col-auto">
												<div class="status-toggle">
													<input id="download" class="check" type="checkbox" checked="">
													<label for="download" class="checktoggle">checkbox</label>
												</div>
											</div>
										</div>
									</div>
									<div class="card-body">
										<div class="form-group">
											<label>Title</label>
											<input type="text" class="form-control" >
										</div>
										<div class="form-group">
											<label>Content</label>
											<input type="text" class="form-control" >
										</div>
										<div class="row">
											<div class="col-lg-6 col-12">
												<div class="form-group">
													<p class="settings-label">App Store (iOs)</p>
													<div class="settings-btn">
														<input type="file" accept="image/*" name="image" id="file" onchange="loadFile(event)" class="hide-input">
														<label for="file" class="upload">
															<i class="fa fa-upload"></i>
														</label>
													</div>
													<div class="upload-images ">
														<img src="assets/img/app.png" class="my-4 w-auto" alt="Image">
														<a href="javascript:void(0);" class="btn-icon logo-hide-btn">
															<i class="fa fa-times"></i>
														</a>
													</div>
												</div>
											</div>
											<div class="col-lg-6 col-12">
												<div class="form-group">
													<label>App Link</label>
													<input type="text" class="form-control" >
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-lg-6 col-12">
												<div class="form-group">
													<p class="settings-label">Google Play Store</p>
													<div class="settings-btn">
														<input type="file" accept="image/*" name="image" id="file" onchange="loadFile(event)" class="hide-input">
														<label for="file" class="upload">
															<i class="fa fa-upload"></i>
														</label>
													</div>
													<div class="upload-images ">
														<img src="assets/img/googlepay.png" class="my-4 w-auto" alt="Image">
														<a href="javascript:void(0);" class="btn-icon logo-hide-btn">
															<i class="fa fa-times"></i>
														</a>
													</div>
												</div>
											</div>
											<div class="col-lg-6 col-12">
												<div class="form-group">
													<label>App Link</label>
													<input type="text" class="form-control" >
												</div>
											</div>
										</div>
										<div class="form-groupbtn">
											<a class="btn btn-update me-2">Update</a>
											<a class="btn btn-cancel">Cancel</a>
										</div>
									</div>
								</div>
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

	<!-- Feather Icon JS -->
	<script src="assets/js/feather.min.js"></script>

	<!-- Custom JS -->
	<script src="assets/js/admin.js"></script>

</body>


<!-- Mirrored from html.truelysell.com/template/admin/home-page.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 30 May 2022 01:14:56 GMT -->
</html>