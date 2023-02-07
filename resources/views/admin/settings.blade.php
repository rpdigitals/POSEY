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
                                <h3 class="page-title">Modifier les identifiants de l'administrateur</h3>
                            </div>
                        </div>
                    </div>
                    <!-- /Page Header -->

                    <div class="card">
                        <div class="card-body">

                            <!-- Form -->
                            <form action="/admin_email_settings" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label> Email</label>
                                    <input class="form-control" type="email" name="nom" maxlength="20"
                                        value="{{ \Auth()->user()->email }}" readonly>
                                </div>
                                <div class="form-group">
                                    <label> Mot de passe actuel</label>
                                    <input class="form-control" type="password" name="actual_password"
                                        placeholder="********" required>
                                </div>
                                <div class="form-group">
                                    <label> Nouveau mot de passe</label>
                                    <input class="form-control" type="password" name="new_password" minlength="8"
                                        placeholder="********" required>
                                </div>
                                <div class="form-group">
                                    <label>Confirmer le nouveau mot de passe</label>
                                    <input class="form-control" type="password" name="confirmed_password" minlength="8"
                                        placeholder="********" required>
                                </div>
                                <div class="mt-4">
                                    <button class="btn btn-primary" type="submit">Modifier</button>
                                    <a href="/admin_dashboard" class="btn btn-link">Annuler</a>
                                </div>
                                @if (session()->has('errorUpdateEmail'))
                                    <div class="alert alert-danger">{{ session('errorUpdateEmail') }}
                                        <div><a href="/admin_settings" class="btn btn-primary">Ok</a></div>
                                    </div>
                                @endif
                                @if (session()->has('successUpdateEmail'))
                                    <div class="alert alert-success">{{ session('successUpdateEmail') }}
                                        <div><a href="/admin_settings" class="btn btn-primary">Ok</a></div>
                                    </div>
                                @endif
                                @if (session()->has('errorConfirmation'))
                                    <div class="alert alert-danger">{{ session('errorConfirmation') }}
                                        <div><a href="/admin_settings" class="btn btn-primary">Ok</a></div>
                                    </div>
                                @endif
                            </form>
                            <!-- Form -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
