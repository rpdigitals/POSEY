@extends('../master.admin')
@section('content')
		<div class="page-wrapper">
			<div class="content container-fluid">
				<div class="row">
					<div class="col-xl-8 offset-xl-2">
					
						<!-- Page Header -->
						<div class="page-header">
							<div class="row">
								<div class="col">
									<h3 class="page-title">Edit Sub Category</h3>
								</div>
							</div>
						</div>
						<!-- /Page Header -->
						
						<div class="card">
							<div class="card-body">
							
								<!-- Form -->
								<form action="https://html.truelysell.com/template/admin/subcategories.html">
									<div class="form-group">
										<label>Category</label>
										<select class="form-control select">
											<option>Select Category</option>
											<option>Automobile</option>
											<option>Construction</option>
											<option>Interior</option>
											<option>Cleaning</option>
											<option>Electrical</option>
											<option>Carpentry</option>
											<option>Computer</option>
										</select>
									</div>
									<div class="form-group">
										<label>Subcategory Name</label>
										<input class="form-control" type="text" value="Bus Service">
									</div>
									<div class="form-group">
										<label>Category Image</label>
										<input class="form-control" type="file">
									</div>
									<div class="form-group">
										<div class="avatar">
											<img class="avatar-img rounded" alt="" src="assets/img/sub-category/sub-category-01.jpg">
										</div>
									</div>
									<div class="mt-4">
										<button class="btn btn-primary" type="submit">Save Changes</button>
										<a href="subcategories-2.html" class="btn btn-link">Cancel</a>
									</div>
								</form>
								<!-- /Form -->
								
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


<!-- Mirrored from html.truelysell.com/template/admin/edit-subcategory.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 30 May 2022 01:14:48 GMT -->
</html>