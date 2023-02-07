@extends('../master.admin')
@section('content')
		<div class="page-wrapper">
			<div class="content container-fluid">
			
				<!-- Page Header -->
				<div class="page-header">
					<div class="row">
						<div class="col">
							<h3 class="page-title">Rating Type</h3>
						</div>
						<div class="col-auto text-end">
							<a href="add-ratingstype.html" class="btn btn-primary add-button">
								<i class="fas fa-plus"></i>
							</a>
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
												<th>#</th>
												<th>Rating Type</th>
												<th>Status</th>
												<th class="text-end">Action</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>1</td>
												<td>Good</td>
												<td>
													<div class="status-toggle">
														<input id="rating_1" class="check" type="checkbox" checked>
														<label for="rating_1" class="checktoggle">checkbox</label>
													</div>
												</td>
												<td class="text-end">
													<a href="edit-ratingstype.html" class="table-action-btn btn btn-sm bg-success-light">
														<i class="far fa-edit me-1"></i> Edit
													</a>
												</td>
											</tr>
											<tr>
												<td>2</td>
												<td>Very Good</td>
												<td>
													<div class="status-toggle">
														<input id="rating_2" class="check" type="checkbox" checked>
														<label for="rating_2" class="checktoggle">checkbox</label>
													</div>
												</td>
												<td class="text-end">
													<a href="edit-ratingstype.html" class="table-action-btn btn btn-sm bg-success-light">
														<i class="far fa-edit me-1"></i> Edit
													</a>
												</td>
											</tr>
											<tr>
												<td>3</td>
												<td>Poor</td>
												<td>
													<div class="status-toggle">
														<input id="rating_3" class="check" type="checkbox" checked>
														<label for="rating_3" class="checktoggle">checkbox</label>
													</div>
												</td>
												<td class="text-end">
													<a href="edit-ratingstype.html" class="table-action-btn btn btn-sm bg-success-light">
														<i class="far fa-edit me-1"></i> Edit
													</a>
												</td>
											</tr>
											<tr>
												<td>4</td>
												<td>Fair</td>
												<td>
													<div class="status-toggle">
														<input id="rating_4" class="check" type="checkbox">
														<label for="rating_4" class="checktoggle">checkbox</label>
													</div>
												</td>
												<td class="text-end">
													<a href="edit-ratingstype.html" class="table-action-btn btn btn-sm bg-success-light">
														<i class="far fa-edit me-1"></i> Edit
													</a>
												</td>
											</tr>
											<tr>
												<td>5</td>
												<td>Excellent</td>
												<td>
													<div class="status-toggle">
														<input id="rating_5" class="check" type="checkbox">
														<label for="rating_5" class="checktoggle">checkbox</label>
													</div>
												</td>
												<td class="text-end">
													<a href="edit-ratingstype.html" class="table-action-btn btn btn-sm bg-success-light">
														<i class="far fa-edit me-1"></i> Edit
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


<!-- Mirrored from html.truelysell.com/template/admin/ratingstype.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 30 May 2022 01:14:33 GMT -->
</html>