@extends('../master.admin')
@section('content')
    <div class="page-wrapper">
        <div class="content container-fluid">
            <!-- Page Header -->
            <div class="page-header">
                <div class="row">
                    <div class="col">
                        <h3 class="page-title">Prestataires ({{ $prestataires->count() }})</h3>
                    </div>
                    <div class="col-auto text-end">
                        <a class="btn btn-white filter-btn" href="/admin_account_to_verify" id="filter_search">
                            <i class="fas fa-user"></i>
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
                                <table class="table table-hover table-center mb-0 datatable">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Prestataires</th>
                                            <th>Contact</th>
                                            <th>Email</th>
                                            <th>Date d'inscription</th>
                                            <th>Abonnement</th>
                                            <th>Compte</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $counter = 0; ?>
                                        @foreach ($prestataires as $prestataire)
                                            <tr>
                                                <?php $counter += 1; ?>

                                                <td>{{ $counter }}</td>
                                                <td>
                                                    <h2 class="table-avatar">
                                                        <a href="#" class="avatar avatar-sm me-2">
                                                            <img class="avatar-img rounded-circle" alt=""
                                                                src="{{ $prestataire->photo }}">
                                                        </a>
                                                        <a
                                                            href="#">{{ $prestataire->nom . ' ' . $prestataire->prenom }}</a>
                                                    </h2>
                                                </td>
                                                <td>{{ $prestataire->telephone }}</td>
                                                <td>{{ $prestataire->user->email }}</td>
                                                <td>{{ $prestataire->created_at->format('d-M-Y') }}</td>
                                                <td>{{ $prestataire->abonnement->type }}</td>
                                                @if ($prestataire->verify_account())
                                                    @if ($prestataire->verify_account()->verify_account == 'en cours de verification')
                                                        <td><a class="btn btn-info " style="color:aliceblue"
                                                                href="/admin_verify_account/{{ $prestataire->id }}">Vérifier</a>
                                                        </td>
                                                    @endif
                                                    @if ($prestataire->verify_account()->verify_account == 'non vérifié')
                                                        <td class="text-danger">
                                                            {{ $prestataire->verify_account()->verify_account }}</td>
                                                    @endif
                                                    @if ($prestataire->verify_account()->verify_account == 'vérifié')
                                                        <td class="text-success">
                                                            {{ $prestataire->verify_account()->verify_account }}</td>
                                                    @endif
                                                @endif
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
