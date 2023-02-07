@extends('../master.admin')
@section('content')
	
		<div class="page-wrapper">
			<div class="content container-fluid">
				<div class="row">
					<div class="col-lg-12">
						<!-- Page Header -->
						<div class="page-header">
							<div class="row">
								<div class="col-12">
									<h3 class="page-title">Frontend Settings</h3>
								</div>
							</div>
						</div>
						<!-- /Page Header -->
						
						<div class="row">
							<div class=" col-lg-6 col-sm-12 col-12">
								<div class="card">
									<div class="card-header">
										<div class="card-heads">
											<h4 class="card-title">Categories Widget</h4>
											<div class="col-auto">
												<div class="status-toggle">
													<input id="categories" class="check" type="checkbox" checked="">
													<label for="categories" class="checktoggle">checkbox</label>
												</div>
											</div>
										</div>
									</div>
									<div class="card-body">
										<div class="form-group">
											<label>Title</label>
											<input type="text" class="form-control">
										</div>
										<div class="form-group">
											<label class="form-head mb-0">Categories<span>( Max 6 only )</span></label>
										</div>
										<div class="settings-form">
											<div class="form-group links-cont">
												<div class="row align-items-center">
													<div class="col-lg-3 col-12">
														<input type="text" class="form-control" value="Appliance">
													</div>
													<div class="col-lg-8 col-12">
														<input type="text" class="form-control" value="https://truelysell.com/appliance">
													</div>
													<div class="col-lg-1 col-12">
														<a href="#" class="btn btn-sm bg-danger-light  delete_review_comment">
															<i class="far fa-trash-alt "></i> 
														</a>
													</div>
												</div>
											</div>
											<div class="form-group links-cont">
												<div class="row align-items-center">
													<div class="col-lg-3 col-12">
														<input type="text" class="form-control" value="Carpentry">
													</div>
													<div class="col-lg-8 col-12">
														<input type="text" class="form-control" value="https://truelysell.com/carpentry">
													</div>
													<div class="col-lg-1 col-12">
														<a href="#" class="btn btn-sm bg-danger-light  delete_review_comment">
															<i class="far fa-trash-alt "></i> 
														</a>
													</div>
												</div>
											</div>
											<div class="form-group links-cont">
												<div class="row align-items-center">
													<div class="col-lg-3 col-12">
														<input type="text" class="form-control" value="Plumbing">
													</div>
													<div class="col-lg-8 col-12">
														<input type="text" class="form-control" value="https://truelysell.com/plumbing">
													</div>
													<div class="col-lg-1 col-12">
														<a href="#" class="btn btn-sm bg-danger-light  delete_review_comment">
															<i class="far fa-trash-alt "></i> 
														</a>
													</div>
												</div>
											</div>
											<div class="form-group links-cont">
												<div class="row align-items-center">
													<div class="col-lg-3 col-12">
														<input type="text" class="form-control" value="Construction">
													</div>
													<div class="col-lg-8 col-12">
														<input type="text" class="form-control" value="https://truelysell.com/construction">
													</div>
													<div class="col-lg-1 col-12">
														<a href="#" class="btn btn-sm bg-danger-light  delete_review_comment">
															<i class="far fa-trash-alt "></i> 
														</a>
													</div>
												</div>
											</div>
											<div class="form-group links-cont">
												<div class="row align-items-center">
													<div class="col-lg-3 col-12">
														<input type="text" class="form-control" placeholder="Label">
													</div>
													<div class="col-lg-8 col-12">
														<input type="text" class="form-control" placeholder="Link with http:// Or https://">
													</div>
													<div class="col-lg-1 col-12">
														<a href="#" class="btn btn-sm bg-danger-light  delete_review_comment">
															<i class="far fa-trash-alt "></i> 
														</a>
													</div>
												</div>
											</div>
										</div>
										<div class="form-group">
											<a class="btn  btn-success addlinks"><i class="fa fa-plus me-2"></i>Add New</a>
										</div>
										<div class="form-groupbtn">
											<a class="btn btn-update">Save</a>
										</div>
									</div>
								</div>
								<div class="card">
									<div class="card-header">
										<div class="card-heads">
											<h4 class="card-title">Contact Widget</h4>
											<div class="col-auto">
												<div class="status-toggle">
													<input id="widget" class="check" type="checkbox" checked="">
													<label for="widget" class="checktoggle">checkbox</label>
												</div>
											</div>
										</div>
									</div>
									<div class="card-body">
										<div class="form-group">
											<label>Title</label>
											<input type="text" class="form-control">
										</div>
										<div class="form-group">
											<label>Address</label>
											<input type="text" class="form-control">
										</div>
										<div class="form-group">
											<label>Phone</label>
											<input type="text" class="form-control">
										</div>
										<div class="form-group">
											<label>Email</label>
											<input type="text" class="form-control">
										</div>
										<div class="form-groupbtn">
											<a class="btn btn-update">Save</a>
										</div>
									</div>
								</div>
								<div class="card">
									<div class="card-header">
										<div class="card-heads">
											<h4 class="card-title">Copyright</h4>
											<div class="col-auto">
												<div class="status-toggle">
													<input id="Copyright" class="check" type="checkbox" checked="">
													<label for="Copyright" class="checktoggle">checkbox</label>
												</div>
											</div>
										</div>
									</div>
									<div class="card-body">
										<div class="form-group">
											<label>Copyright</label>
											<!--<textarea class="form-control summernote"></textarea>-->
											<div id="editor"></div>
										</div>
										<div class="form-group">
											<h6 class="form-heads mb-0">Links</h6>
										</div>
										<div class="form-group">
											<label class="form-head mb-0">Footer bottom links<span>( Max 3 only )</span></label>
										</div>
										<div class="settingset">
											<div class="form-group links-conts">
												<div class="row align-items-center">
													<div class="col-lg-3 col-12">
														<input type="text" class="form-control" value="Terms and Condition">
													</div>
													<div class="col-lg-8 col-12">
														<input type="text" class="form-control" value="https://truelysell.com/search/terms-condition">
													</div>
													<div class="col-lg-1 col-12">
														<a href="#" class="btn btn-sm bg-danger-light  delete_review_comment">
															<i class="far fa-trash-alt "></i> 
														</a>
													</div>
												</div>
											</div>
											<div class="form-group links-conts">
												<div class="row align-items-center">
													<div class="col-lg-3 col-12">
														<input type="text" class="form-control" value="Privacy">
													</div>
													<div class="col-lg-8 col-12">
														<input type="text" class="form-control" value="https://truelysell.com/search/privacy">
													</div>
													<div class="col-lg-1 col-12">
														<a href="#" class="btn btn-sm bg-danger-light  delete_review_comment">
															<i class="far fa-trash-alt "></i> 
														</a>
													</div>
												</div>
											</div>
											<div class="form-group links-conts">
												<div class="row align-items-center">
													<div class="col-lg-3 col-12">
														<input type="text" class="form-control" placeholder="Label">
													</div>
													<div class="col-lg-8 col-12">
														<input type="text" class="form-control" placeholder="Link with http:// Or https://">
													</div>
													<div class="col-lg-1 col-12">
														<a href="#" class="btn btn-sm bg-danger-light  delete_review_comment">
															<i class="far fa-trash-alt "></i> 
														</a>
													</div>
												</div>
											</div>
										</div>
										<div class="form-group">
											<a class="btn  btn-success addnew"><i class="fa fa-plus me-2"></i>Add New</a>
										</div>
										<div class="form-groupbtn">
											<a class="btn btn-update">Save</a>
										</div>
									</div>
								</div>
							</div>
							<div class=" col-lg-6 col-sm-12 col-12">
								<div class="card">
									<div class="card-header">
										<div class="card-heads">
											<h4 class="card-title">Links Widget</h4>
											<div class="col-auto">
												<div class="status-toggle">
													<input id="links" class="check" type="checkbox" checked="">
													<label for="links" class="checktoggle">checkbox</label>
												</div>
											</div>
										</div>
									</div>
									<div class="card-body">
										<div class="form-group">
											<label>Title</label>
											<input type="text" class="form-control" placeholder=""/>
										</div>
										<div class="form-group">
											<label class="form-head mb-0">Categories<span>( Max 6 only )</span></label>
										</div>
										<div class="settings-forms">
											<div class="form-group links-cont">
												<div class="row align-items-center">
													<div class="col-lg-3 col-12">
														<input type="text" class="form-control" value="About us">
													</div>
													<div class="col-lg-8 col-12">
														<input type="text" class="form-control" value="https://truelysell.com/about-us">
													</div>
													<div class="col-lg-1 col-12">
														<a href="#" class="btn btn-sm bg-danger-light  delete_review_comment">
															<i class="far fa-trash-alt "></i> 
														</a>
													</div>
												</div>
											</div>
											<div class="form-group links-cont">
												<div class="row align-items-center">
													<div class="col-lg-3 col-12">
														<input type="text" class="form-control" value="Contact Us">
													</div>
													<div class="col-lg-8 col-12">
														<input type="text" class="form-control" value="https://truelysell.com/contact-us">
													</div>
													<div class="col-lg-1 col-12">
														<a href="#" class="btn btn-sm bg-danger-light  delete_review_comment">
															<i class="far fa-trash-alt "></i> 
														</a>
													</div>
												</div>
											</div>
											<div class="form-group links-cont">
												<div class="row align-items-center">
													<div class="col-lg-3 col-12">
														<input type="text" class="form-control" value="Help">
													</div>
													<div class="col-lg-8 col-12">
														<input type="text" class="form-control" value="https://truelysell.com/help">
													</div>
													<div class="col-lg-1 col-12">
														<a href="#" class="btn btn-sm bg-danger-light  delete_review_comment">
															<i class="far fa-trash-alt "></i> 
														</a>
													</div>
												</div>
											</div>
											<div class="form-group links-cont">
												<div class="row align-items-center">
													<div class="col-lg-3 col-12">
														<input type="text" class="form-control" value="FAQ">
													</div>
													<div class="col-lg-8 col-12">
														<input type="text" class="form-control" value="https://truelysell.com/faq">
													</div>
													<div class="col-lg-1 col-12">
														<a href="#" class="btn btn-sm bg-danger-light  delete_review_comment">
															<i class="far fa-trash-alt "></i> 
														</a>
													</div>
												</div>
											</div>
											<div class="form-group links-cont">
												<div class="row align-items-center">
													<div class="col-lg-3 col-12">
														<input type="text" class="form-control" placeholder="Label">
													</div>
													<div class="col-lg-8 col-12">
														<input type="text" class="form-control" placeholder="Link with http:// Or https://">
													</div>
													<div class="col-lg-1 col-12">
														<a href="#" class="btn btn-sm bg-danger-light  delete_review_comment">
															<i class="far fa-trash-alt "></i> 
														</a>
													</div>
												</div>
											</div>
										</div>
										<div class="form-group">
											<a class="btn  btn-success addlinknew"><i class="fa fa-plus me-2"></i>Add New</a>
										</div>
										<div class="form-groupbtn">
											<a class="btn btn-update">Save</a>
										</div>
									</div>
								</div>
								<div class="card">
									<div class="card-header">
										<div class="card-heads">
											<h4 class="card-title">Social Widget</h4>
											<div class="col-auto">
												<div class="status-toggle">
													<input id="social" class="check" type="checkbox" checked="">
													<label for="social" class="checktoggle">checkbox</label>
												</div>
											</div>
										</div>
									</div>
									<div class="card-body">
										<div class="form-group">
											<label>Title</label>
											<input type="text" class="form-control" />
										</div>
										<div class="setings">
											<div class="form-group countset">
												<div class="row align-items-center">
													<div class="col-lg-2 col-12">
														<div class="socail-links-set">
															<ul>
																<li class=" dropdown has-arrow main-drop">
																	<a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown" aria-expanded="false">
																		<span class="user-img">
																			<i class="fab fa-facebook-f"></i>
																		</span>
																	</a>
																	<div class="dropdown-menu">
																		<a class="dropdown-item" href="#"><i class="fab fa-twitter me-2"></i>Twitter</a>
																		<a class="dropdown-item" href="#"><i class="fab fa-youtube me-2"></i> You Tube</a>
																		<a class="dropdown-item" href="#"><i class="fab fa-linkedin me-2"></i> linkedin</a>
																	</div>
																</li>
															</ul>
														</div>
													</div>
													<div class="col-lg-9 col-12">
														<input type="text" class="form-control" value="https://www.facebook.com/">
													</div>
													<div class="col-lg-1 col-12">
														<a href="#" class="btn btn-sm bg-danger-light  delete_review_comment">
															<i class="far fa-trash-alt "></i> 
														</a>
													</div>
												</div>
											</div>
											<div class="form-group countset">
												<div class="row align-items-center">
													<div class="col-lg-2 col-12">
														<div class="socail-links-set">
															<ul>
																<li class=" dropdown has-arrow main-drop">
																	<a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown" aria-expanded="false">
																		<span class="user-img">
																			<i class="fab fa-twitter me-2"></i>
																		</span>
																	</a>
																	<div class="dropdown-menu">
																		<a class="dropdown-item" href="#"><i class="fab fa-facebook-f me-2"></i>Facebook</a>
																		<a class="dropdown-item" href="#"><i class="fab fa-youtube me-2"></i> You Tube</a>
																		<a class="dropdown-item" href="#"><i class="fab fa-linkedin me-2"></i> linkedin</a>
																	</div>
																</li>
															</ul>
														</div>
													</div>
													<div class="col-lg-9 col-12">
														<input type="text" class="form-control" value="https://www.twitter.com/">
													</div>
													<div class="col-lg-1 col-12">
														<a href="#" class="btn btn-sm bg-danger-light  delete_review_comment">
															<i class="far fa-trash-alt "></i> 
														</a>
													</div>
												</div>
											</div>
											<div class="form-group countset">
												<div class="row align-items-center">
													<div class="col-lg-2 col-12">
														<div class="socail-links-set">
															<ul>
																<li class=" dropdown has-arrow main-drop">
																	<a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown" aria-expanded="false">
																		<span class="user-img">
																			<i class="fab fa-youtube me-2"></i>
																		</span>
																	</a>
																	<div class="dropdown-menu">
																		<a class="dropdown-item" href="#"><i class="fab fa-facebook-f me-2"></i>Facebook</a>
																		<a class="dropdown-item" href="#"><i class="fab fa-twitter me-2"></i>twitter</a>
																		<a class="dropdown-item" href="#"><i class="fab fa-linkedin me-2"></i> linkedin</a>
																	</div>
																</li>
															</ul>
														</div>
													</div>
													<div class="col-lg-9 col-12">
														<input type="text" class="form-control" value="https://www.youtube.com/">
													</div>
													<div class="col-lg-1 col-12">
														<a href="#" class="btn btn-sm bg-danger-light  delete_review_comment">
															<i class="far fa-trash-alt "></i> 
														</a>
													</div>
												</div>
											</div>
											<div class="form-group countset">
												<div class="row align-items-center">
													<div class="col-lg-2 col-12">
														<div class="socail-links-set">
															<ul>
																<li class=" dropdown has-arrow main-drop">
																	<a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown" aria-expanded="false">
																		<span class="user-img">
																			<i class="fab fa-linkedin me-2"></i>
																		</span>
																	</a>
																	<div class="dropdown-menu">
																		<a class="dropdown-item" href="#"><i class="fab fa-facebook-f me-2"></i>Facebook</a>
																		<a class="dropdown-item" href="#"><i class="fab fa-twitter me-2"></i>twitter</a>
																		<a class="dropdown-item" href="#"><i class="fab fa-youtube me-2"></i> Youtube</a>
																	</div>
																</li>
															</ul>
														</div>
													</div>
													<div class="col-lg-9 col-12">
														<input type="text" class="form-control" value="https://www.linkedin.com/">
													</div>
													<div class="col-lg-1 col-12">
														<a href="#" class="btn btn-sm bg-danger-light  delete_review_comment">
															<i class="far fa-trash-alt "></i> 
														</a>
													</div>
												</div>
											</div>
											<div class="form-group countset">
												<div class="row align-items-center">
													<div class="col-lg-2 col-12">
														<div class="socail-links-set">
															<ul>
																<li class=" dropdown has-arrow main-drop">
																	<a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown" aria-expanded="false">
																		<span class="user-img">
																			<i class="fab fa-github me-2"></i>
																		</span>
																	</a>
																	<div class="dropdown-menu">
																		<a class="dropdown-item" href="#"><i class="fab fa-facebook-f me-2"></i>Facebook</a>
																		<a class="dropdown-item" href="#"><i class="fab fa-twitter me-2"></i>twitter</a>
																		<a class="dropdown-item" href="#"><i class="fab fa-youtube me-2"></i> Youtube</a>
																	</div>
																</li>
															</ul>
														</div>
													</div>
													<div class="col-lg-9 col-12">
														<input type="text" class="form-control" placeholder="Link with http:// Or https://">
													</div>
													<div class="col-lg-1 col-12">
														<a href="#" class="btn btn-sm bg-danger-light  delete_review_comment">
															<i class="far fa-trash-alt "></i> 
														</a>
													</div>
												</div>
											</div>
										</div>
										<div class="form-group">
											<a class="btn  btn-success addsocail"><i class="fa fa-plus me-2"></i>Add New</a>
										</div>
										<div class="form-groupbtn">
											<a class="btn btn-update">Save</a>
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

	<!-- ckeditor JS -->
	<script src="assets/js/ckeditor.js"></script>

	<!-- Feather Icon JS -->
	<script src="assets/js/feather.min.js"></script>

	<!-- Custom JS -->
	<script src="assets/js/admin.js"></script>

</body>


<!-- Mirrored from html.truelysell.com/template/admin/footer-settings.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 30 May 2022 01:14:45 GMT -->
</html>