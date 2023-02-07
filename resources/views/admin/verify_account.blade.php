@extends('../master.admin')
@section('content')
    <div class="page-wrapper">
        <div class="content container-fluid">

            <!-- Page Header -->
            <div class="page-header">
                <div class="row">
                    <div class="col">
                        <h3 class="page-title">
                            {{ $verify_account->prestataire->nom . ' ' . $verify_account->prestataire->prenom }}</h3>
                        <a href="/admin_confirm_verify_account/{{ $verify_account->id }}" class="btn btn-info">Vérifier</a>
                    </div>

                </div>
            </div>

            <div class="row">
                <div class="col-off-set-1"></div>
                <img class="col-lg-5" src="{{ $verify_account->identity_pic1 }}" alt="">

                <img class="col-lg-5" src="{{ $verify_account->identity_pic2 }}" alt="">
            </div>
        </div>
    </div>
@endsection
