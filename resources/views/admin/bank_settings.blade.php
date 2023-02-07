@extends('../master.admin')
@section('content')
		
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
                                    <a href="invoices-settings.html" class="nav-link">
                                        <i class="fe fe-git-commit"></i> <span>General Settings</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="tax-settings.html" class="nav-link">
                                        <i class="fe fe-bookmark"></i> <span>Tax Settings</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="bank-settings.html" class="nav-link active">
                                        <i class="fas fa-university"></i> <span>Bank Settings</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="col-xl-9 col-md-8">
                        <div class="card invoices-settings-card">
                            <div class="card-header">
                                <h5 class="card-title">Bank Settings</h5>
                            </div>
                            <div class="card-body">
                            
                                <!-- Form -->
                                <form action="#" class="invoices-settings-form">
                                    <div class="row align-items-center form-group">
                                        <label for="name" class="col-sm-3 col-form-label input-label">Default Bank Account</label>
                                        <div class="col-sm-9">
                                            <label class="custom_check">
                                                <input type="checkbox" name="invoice">
                                                <span class="checkmark"></span> Check to enable Bank Account default
                                            </label>
                                        </div>
                                    </div>
                                    <div class="row align-items-center form-group">
                                        <label for="email" class="col-sm-3 col-form-label input-label">Account Holder Name</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row align-items-center form-group">
                                        <label for="phone" class="col-sm-3 col-form-label input-label">Bank name</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row align-items-center form-group">
                                        <label for="phone" class="col-sm-3 col-form-label input-label">IFSC Code</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row align-items-center form-group">
                                        <label for="phone" class="col-sm-3 col-form-label input-label">Account Number</label>
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
	<script src="/assets/js/jquery-3.6.0.min.js"></script>

	<!-- Bootstrap Core JS -->
	<script src="/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Feather Icon JS -->
    <script src="/assets/js/feather.min.js"></script>

	<!-- Datepicker Core JS -->
	<script src="/assets/js/moment.min.js"></script>
	<script src="/assets/js/bootstrap-datetimepicker.min.js"></script>

	<!-- Slimscroll JS -->
	<script src="/assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Select2 JS -->
	<script src="/assets/plugins/select2/js/select2.min.js"></script>

	<!-- Datatables JS -->
	<script src="/assets/plugins/datatables/jquery.dataTables.min.js"></script>
	<script src="/assets/plugins/datatables/datatables.min.js"></script>

	<!-- Custom JS -->
	<script src="/assets/js/admin.js"></script> 

</body>


<!-- Mirrored from html.truelysell.com/template/admin/bank-settings.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 30 May 2022 01:14:52 GMT -->
</html>