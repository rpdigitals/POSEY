@extends('../master.admin')
@section('content')
    <div class="page-wrapper">
        <div class="content container-fluid">
            <!-- Page Header -->
            <div class="page-header">
                <div class="row">
                    <div class="col">
                        <h3 class="page-title">Clients ({{ $clients->count() }})</h3>
                    </div>
                   
                </div>
            </div>
            <!-- /Page Header -->


            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover table-center mb-0 datatable">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Clients</th>
                                            <th>Contact</th>
                                            <th>Email</th>
                                            <th>Date d'inscription</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $counter = 0; ?>
                                        @foreach ($clients as $client)
                                            <tr>
                                                <?php $counter += 1; ?>

                                                <td>{{ $counter }}</td>
                                                <td>
                                                    <h2 class="table-avatar">
                                                        <a href="#" class="avatar avatar-sm me-2">
                                                            <img class="avatar-img rounded-circle" alt=""
                                                                src="{{ $client->photo }}">
                                                        </a>
                                                        <a href="#">{{ $client->nom . ' ' . $client->prenom }}</a>
                                                    </h2>
                                                </td>
                                                <td>{{ $client->telephone }}</td>
                                                <td>{{ $client->user->email }}</td>
                                                <td>{{ $client->created_at->format('d-M-Y') }}</td>
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


    <!-- Mirrored from html.truelysell.com/template/admin/service-providers.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 30 May 2022 01:14:35 GMT -->

    </html>
