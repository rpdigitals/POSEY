@extends('../master.admin')
@section('content')
		<div class="page-wrapper">
			<div class="content container-fluid">
			
				<!-- Page Header -->
				<div class="page-header">
					<div class="row">
						<div class="col">
							<h3 class="page-title">Pages</h3>
						</div>
					</div>
				</div>
				<!-- /Page Header -->
				
				<div class="row">
					<div class="col-md-12">
						<div class="card">
							<div class="card-body">
								<div class="table-responsive">
									<table class="table custom-table mb-0 datatable">
										<thead>
											<tr>
												<th>Page </th>
												<th>Slug</th>
												<th >Status</th>
												<th class="text-end">Action</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>Home</td>
												<td>home</td>
												<td class="text-center">
													<div class="status-toggle">
														<input id="home" class="check" type="checkbox" checked>
														<label for="home" class="checktoggle">checkbox</label>
													</div>
												</td>
												<td class="text-end">
													<a href="home-page.html" class="btn btn-sm bg-success-light me-2">
														<i class="far fa-edit me-1"></i>Edit
													</a>
												</td>
											</tr>
											<tr>
												<td>About Us</td>
												<td>about-us</td>
												<td class="text-center">
													<div class="status-toggle">
														<input id="about-us" class="check" type="checkbox" checked>
														<label for="about-us" class="checktoggle">checkbox</label>
													</div>
												</td>
												<td class="text-end">
													<a href="#" class="btn btn-sm bg-success-light me-2">
														<i class="far fa-edit me-1"></i>Edit
													</a>
												</td>
											</tr>
											<tr>
												<td>Cookie Policy</td>
												<td>cookie-policy</td>
												<td class="text-center">
													<div class="status-toggle">
														<input id="cookie" class="check" type="checkbox" checked>
														<label for="cookie" class="checktoggle">checkbox</label>
													</div>
												</td>
												<td class="text-end">
													<a href="#" class="btn btn-sm bg-success-light me-2">
														<i class="far fa-edit me-1"></i>Edit
													</a>
												</td>
											</tr>
											<tr>
												<td>Terms of Service</td>
												<td>terms-of-service</td>
												<td class="text-center">
													<div class="status-toggle">
														<input id="terms" class="check" type="checkbox" checked>
														<label for="terms" class="checktoggle">checkbox</label>
													</div>
												</td>
												<td class="text-end">
													<a href="#" class="btn btn-sm bg-success-light me-2">
														<i class="far fa-edit me-1"></i>Edit
													</a>
												</td>
											</tr>
											<tr>
												<td>Privacy Policy</td>
												<td>privacy-policy</td>
												<td class="text-center">
													<div class="status-toggle">
														<input id="privacy" class="check" type="checkbox" checked>
														<label for="privacy" class="checktoggle">checkbox</label>
													</div>
												</td>
												<td class="text-end">
													<a href="privacy-policy.html" class="btn btn-sm bg-success-light me-2">
														<i class="far fa-edit me-1"></i>Edit
													</a>
												</td>
											</tr>
											<tr>
												<td>Help</td>
												<td>help</td>
												<td class="text-center">
													<div class="status-toggle">
														<input id="help" class="check" type="checkbox" checked>
														<label for="help" class="checktoggle">checkbox</label>
													</div>
												</td>
												<td class="text-end">
													<a href="#" class="btn btn-sm bg-success-light me-2">
														<i class="far fa-edit me-1"></i>Edit
													</a>
												</td>
											</tr>
											<tr>
												<td>FAQ</td>
												<td>faq</td>
												<td class="text-center">
													<div class="status-toggle">
														<input id="rating_1" class="check" type="checkbox" checked>
														<label for="rating_1" class="checktoggle">checkbox</label>
													</div>
												</td>
												<td class="text-end">
													<a href="add-faq.html" class="btn btn-sm bg-success-light me-2">
														<i class="far fa-edit me-1"></i>Edit
													</a>
												</td>
											</tr>
										</tbody>
									</table>
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

	<!-- Datepicker Core JS -->
	<script src="assets/js/moment.min.js"></script>
	<script src="assets/js/bootstrap-datetimepicker.min.js"></script>

	<!-- Slimscroll JS -->
	<script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>

	<!-- Datatables JS -->
	<script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>
	<script src="assets/plugins/datatables/datatables.min.js"></script>

	<!-- Select2 JS -->
	<script src="assets/js/select2.min.js"></script>

	<!-- Custom JS -->
	<script src="assets/js/admin.js"></script> 

</body>


<!-- Mirrored from html.truelysell.com/template/admin/pages.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 30 May 2022 01:14:45 GMT -->
</html>