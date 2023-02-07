@extends('../master.admin')
@section('content')

    <div class="page-wrapper">
        <div class="content container-fluid">

            <!-- Page Header -->
            <div class="page-header">
                <div class="row">
                    <div class="col">
                        <h3 class="page-title">Ratings</h3>
                    </div>
                    <div class="col-auto text-end">
                        <a class="btn btn-white filter-btn" href="javascript: void(0);" id="filter_search">
                            <i class="fas fa-filter"></i>
                        </a>
                    </div>
                </div>
            </div>
            <!-- /Page Header -->

            <!-- Search Filter -->
            <div class="card filter-card" id="filter_inputs">
                <div class="card-body pb-0">

                </div>
            </div>
            <!-- /Search Filter -->

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
                                            <th>Evaluation</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($notations as $notation)
                                            <tr>
                                                <td>1</td>
                                                <td>{{ $notation->created_at->format('d-M-Y') }}</td>
                                                <td>
                                                    <span class="table-avatar">
                                                        <a href="#" class="avatar avatar-sm me-2">
                                                            <img class="avatar-img rounded-circle" alt=""
                                                                src="{{ $notation->client->photo }}">
                                                        </a>
                                                        <a href="#">{{ $notation->client->nom . ' ' . $notation->client->prenom }}
                                                        </a>
                                                    </span>
                                                </td>
                                                <td>
                                                    <span class="table-avatar">
                                                        <a href="#" class="avatar avatar-sm me-2">
                                                            <img class="avatar-img rounded-circle" alt=""
                                                                src="{{ $notation->service->prestataire->photo }}">
                                                        </a>
                                                        <a
                                                            href="#">{{ $notation->service->prestataire->nom . ' ' . $notation->service->prestataire->prenom }}</a>
                                                    </span>
                                                </td>
                                                <td>{{ $notation->service->nom }}</td>
                                                <td>{{ $notation->evaluation }}</td>

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



    </body>


    <!-- Mirrored from html.truelysell.com/template/admin/review-reports.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 30 May 2022 01:14:34 GMT -->

    </html>
