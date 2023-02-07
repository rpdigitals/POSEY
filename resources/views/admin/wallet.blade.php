@extends('../master.admin')
@section('content')
    <div class="page-wrapper">
        <div class="content container-fluid">

            <!-- Page Header -->
            <div class="page-header">
                <div class="row">
                    <div class="col">
                        <h3 class="page-title">Porte-Feuilles</h3>
                    </div>
                    <div class="col-auto text-end">
                        <a class="btn btn-white filter-btn" href="#" id="filter_search">
                            <i class="fas fa-filter"></i>
                        </a>
                    </div>
                </div>
            </div>
            <!-- /Page Header -->

            {{-- <!-- Search Filter -->
            <div class="card filter-card" id="filter_inputs">
                <div class="card-body pb-0">
                    <form>
                        <div class="row filter-row">
                            <div class="col-sm-6 col-md-3">
                                <div class="form-group">
                                    <label>Nom</label>
                                    <input class="form-control" type="text">
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3">
                                <div class="form-group">
                                    <label>From Date</label>
                                    <div class="cal-icon">
                                        <input class="form-control datetimepicker" type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3">
                                <div class="form-group">
                                    <label>To Date</label>
                                    <div class="cal-icon">
                                        <input class="form-control datetimepicker" type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3">
                                <div class="form-group">
                                    <button class="btn btn-primary btn-block w-100" type="submit">Submit</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- /Search Filter --> --}}

            {{-- <ul class="nav nav-tabs menu-tabs">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Wallet Report</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Wallet History</a>
                </li>
            </ul> --}}

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover table-center mb-0 datatable">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Date</th>
                                            <th>Nom</th>
                                            <th>Numero</th>
                                            <th>Montant</th>
                                            <th>Role</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $counter = 0; ?>
                                        @foreach ($wallets as $wallet)
                                            @if ($wallet->user->name !== 'admin')
                                                <tr>
                                                    <td>{{ $counter += 1 }}</td>
                                                    <td>{{ $wallet->created_at->format('Y-m-d') }}</td>
                                                    <td>
                                                        <h2 class="table-avatar">
                                                            <a href="#" class="avatar avatar-sm me-2">
                                                                <img class="avatar-img rounded-circle" alt=""
                                                                    src="{{ $wallet->user->photo() }}">
                                                            </a>
                                                            <a href="#"> {{ $wallet->user->name }}</a>
                                                        </h2>
                                                    </td>
                                                    <td>{{ $wallet->user->telephone() }}</td>
                                                    <td> @php echo strrev(wordwrap(strrev( $wallet->valeur ), 3, ' ', true));   @endphp XOF</td>
                                                    <td>
                                                        <label class="badge badge-success">
                                                            <?php
                                                            if ($wallet->user->client()) {
                                                                echo 'client';
                                                            }
                                                            if ($wallet->user->prestataire()) {
                                                                echo 'prestataire';
                                                            }
                                                            ?>
                                                        </label>
                                                    </td>
                                                </tr>
                                            @endif
                                        @endforeach

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

    {{-- <!-- jQuery -->
	<script src="/assets/js/jquery-3.6.0.min.js"></script>

	<!-- Bootstrap Core JS -->
	<script src="/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

	<!-- Datepicker Core JS -->
	<script src="/assets/js/moment.min.js"></script>
	<script src="/assets/js/bootstrap-datetimepicker.min.js"></script>

	<!-- Slimscroll JS -->
	<script src="/assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>

	<!-- Datatables JS -->
	<script src="/assets/plugins/datatables/datatables.min.js"></script>

	<!-- Custom JS -->
	<script src="/assets/js/admin.js"></script> --}}

    </body>


    <!-- Mirrored from html.truelysell.com/template/admin/wallet.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 30 May 2022 01:14:35 GMT -->

    </html>
