@extends('../master.admin')
@section('content')
		
		
			
				<!-- Page Header -->
				<div class="page-header">
					<div class="row">
						<div class="col-12">
							<h3 class="page-title">Settings</h3>
						</div>
					</div>
				</div>
				<!-- /Page Header -->
				
				
				<div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title">Localization Details</h5>
                            </div>
                            <div class="card-body pt-0">
                                <form>
                                    <div class="settings-form">
                                        <div class="form-group">
                                            <label>Time Zone</label>
                                            <select class="select form-control">
                                                <option selected="selected">(UTC +5:30) Antarctica/Palmer</option>
                                                <option>(UTC+05:30) India</option> 
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Date Format</label>
                                            <select class="select form-control">
                                                <option selected="selected">15 May 2016</option>
                                                <option>15/05/2016</option>
                                                <option>15.05.2016</option>
                                                <option>15-05-2016</option>
                                                <option>05/15/2016</option>
                                                <option>2016/05/15</option>
                                                <option>2016-05-15</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Time Format</label>
                                            <select class="select form-control">
                                                <option selected="selected">12 Hours</option>
                                                <option>24 Hours</option>
                                                <option>36 Hours</option>  
                                                <option>48 Hours</option>
                                                <option>60 Hours</option> 
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Currency Symbol</label>
                                            <select class="select form-control">
                                                <option selected="selected">$</option>
                                                <option>₹</option>  
                                                <option>£</option>
                                                <option>€</option> 
                                            </select>
                                        </div>
                                        <div class="form-group mb-0">
                                            <div class="settings-btns">
                                                <button type="submit" class="btn btn-orange">Update</button>
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
	<script src="/assets/js/jquery-3.6.0.min.js"></script>

	<!-- Bootstrap Core JS -->
	<script src="/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

	<!-- Slimscroll JS -->
	<script src="/assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>

	<!-- Select2 JS -->
	<script src="/assets/js/select2.min.js"></script>

	<!-- Custom JS -->
	<script src="/assets/js/admin.js"></script>
@endsection