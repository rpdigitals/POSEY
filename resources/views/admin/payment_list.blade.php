@extends('../master.admin')
@section('content')

    <div class="page-wrapper">
        <div class="content container-fluid">

            <!-- Page Header -->
            <div class="page-header">
                <div class="row">
                    <div class="col">
                        <h3 class="page-title">Payements</h3>
                    </div>
                    
                </div>
            </div>
            <!-- /Page Header -->

            {{-- <!-- Search Filter -->
            <div class="card filter-card" id="filter_inputs">
                <div class="card-body pb-0">
                    <form action="#">
                        <div class="row filter-row">
                            <div class="col-sm-6 col-md-3">
                                <div class="form-group">
                                    <label>prestataire</label>
                                    <select class="form-control select">
                                        <option>Select Provider</option>
                                        <option>Thomas Herzberg</option>
                                        <option>Matthew Garcia</option>
                                        <option>Yolanda Potter</option>
                                        <option>Ricardo Flemings</option>
                                        <option>Maritza Wasson</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3">
                                <div class="form-group">
                                    <label>Status</label>
                                    <select class="form-control select">
                                        <option>Select Status</option>
                                        <option>Pending</option>
                                        <option>Inprogress</option>
                                        <option>Completed (Provider)</option>
                                        <option>Accepted</option>
                                        <option>Rejected</option>
                                        <option>Cancelled (Provider)</option>
                                    </select>
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
                                            <th>Client</th>
                                            <th>Prestataire</th>
                                            <th>Service</th>
                                            <th>Montant</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $counter = 0; ?>
                                        @foreach ($transactions as $transaction)
                                            <tr>
                                                <td>{{ $counter += 1 }}</td>
                                                <td>{{ $transaction->created_at->format('Y-m-d') }}/td>
                                                <td>
                                                    <span class="table-avatar">
                                                        <a href="#" class="avatar avatar-sm me-2">
                                                            <img class="avatar-img rounded-circle" alt=""
                                                                src="{{ Storage::url($transaction->commande->client->photo) }}">
                                                        </a>
                                                        <a href="#">{{ $transaction->commande->client->nom . ' ' . $transaction->commande->client->prenom }}
                                                        </a>
                                                    </span>
                                                </td>
                                                <td>
                                                    <span class="table-avatar">
                                                        <a href="#" class="avatar avatar-sm me-2">
                                                            <img class="avatar-img rounded-circle" alt=""
                                                                src="{{ Storage::url($transaction->commande->prestataire->photo) }}">
                                                        </a>
                                                        <a
                                                            href="#">{{ $transaction->commande->prestataire->nom . ' ' . $transaction->commande->prestataire->prenom }}</a>
                                                    </span>
                                                </td>
                                                <td>{{ $transaction->commande->service->nom }}</td>
                                                <td> @php echo strrev(wordwrap(strrev(150350), 3, ' ', true));   @endphp XOF</td>
                                                <td>
                                                    <label class=" <?php
                                                    if ($transaction->etat == 'en attente de confirmation') {
                                                        echo 'badge bg-info';
                                                    }
                                                    if ($transaction->etat == 'Payé') {
                                                        echo 'badge bg-success';
                                                    }
                                                    if ($transaction->etat == 'innachevé') {
                                                        echo 'badge bg-danger';
                                                    } ?>">{{ $transaction->etat }}</label>
                                                </td>
                                            </tr>
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
	<script src="assets/js/admin.js"></script>  --}}

    </body>


    <!-- Mirrored from html.truelysell.com/template/admin/payment_list.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 30 May 2022 01:14:33 GMT -->

    </html>
