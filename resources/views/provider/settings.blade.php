@extends('../master.providers')
@section('content')
    <div class="col-xl-9 col-md-8">
        <form method="POST" action="/provider_settings" enctype="multipart/form-data">
            @csrf
            <div class="widget">
                <h4 class="widget-title">Paramètres</h4>
                <div class="row">
                    <div class="col-xl-12">
                        <h5 class="form-title">Informations</h5>
                    </div>
                    <div class="form-group col-xl-12">
                        <div class="media align-items-center mb-3 d-flex">
                            <img class="user-image" src="{{ Storage::url($prestataire->photo) }}" alt="">
                            <div class="media-body">
                                <h5 class="mb-0">{{ $prestataire->nom . ' ' . $prestataire->prenom }}</h5>

                                @if ($prestataire->verify_account()->verify_account == 'vérifié')
                                    <div class="mb-0 text-success">Compte vérifié</div>
                                @endif
                                @if ($prestataire->verify_account()->verify_account == 'en cours de verification')
                                    <div class="mb-0 text-primary">Compte en cours de vérification</div>
                                @endif
                                @if ($prestataire->verify_account()->verify_account == 'non vérifié')
                                    <div class="mb-0 text-danger">Compte non vérifié</div>
                                @endif
                                @if ($prestataire->verify_account()->verify_account == 'echec')
                                    <div class="mb-0 text-danger">Compte non vérifié</div>
                                @endif
                            </div>
                        </div>
                    </div>
                    @if (session()->has('verify_account'))
                        <div class="alert-primary col-xl-6">
                            <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                            <strong>{{ session('verify_account') }} </strong>
                        </div>
                    @endif
                    @if ($prestataire->verify_account()->verify_account == 'echec')
                        <div class="alert-danger col-xl-6">
                            <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                            <strong>Votre identité n'a pas été vérifié. </strong><br>
                            vérifiez si vous avez donné les bonnes informations et réessayez
                        </div>
                    @endif
                </div>
            </div>
            <hr style="height: 3px;color:red">
            <div class="widget">
                <h5 class="widget-title">Vos informations</h5>

            </div>
            <div class="row">
                <div class="form-group col-xl-6">
                    <label class="me-sm-2">Nom</label>
                    <input class="form-control" type="text" value="{{ $prestataire->nom }}" readonly>
                </div>
                <div class="form-group col-xl-6">
                    <label class="me-sm-2">Prenom</label>
                    <input class="form-control" type="text" value="{{ $prestataire->prenom }}" readonly>
                </div>
                <div class="form-group col-xl-6">
                    <label class="me-sm-2">Adresse mail</label>
                    <input class="form-control" type="email" value="{{ $prestataire->user->email }}" readonly>
                </div>
                <div class="form-group col-xl-6">
                    <label class="me-sm-2">Telephone</label>
                    <input class="form-control no_only" type="text" value="{{ $prestataire->telephone }}" readonly
                        required>
                </div>

            </div>
            <hr style="height: 3px;color:red">
            <div class="widget">
                <h5 class="widget-title">Modifiez vos informations</h5>

            </div>
            <br>
            <div class="row">
                <div class="col-xl-6">
                    <label class="me-sm-2">Nom</label>
                    <input type="text" class="form-control" name="nom" value="{{ $prestataire->nom }}"
                        maxlength="15">

                </div>
                <div class="form-group col-xl-6">
                    <label class="me-sm-2">Prenom</label>
                    <input type="text" class="form-control" name="prenom" value="{{ $prestataire->prenom }}"
                        maxlength="15">
                </div>
                <div class="form-group col-xl-6">
                    <label class="me-sm-2">adresse mail</label>
                    <input type="email" class="form-control" name="email" value="{{ $prestataire->user->email }}">
                </div>
                <div class="form-group col-xl-6">
                    <label class="me-sm-2">Telephone</label>
                    <input type="tel" title="Veuillez entrer un numero de télephone correct" class="form-control"
                        name="telephone" value="{{ $prestataire->telephone }}">
                </div>
                <div class="form-group col-xl-6">
                    <label class="me-sm-2">Photo de profil</label>
                    <input type="file" class="form-control" name="photo" value="{{ $prestataire->photo }}"
                        accept="image/*">
                </div>
                <div class="form-group col-xl-6">
                    <label class="me-sm-2">Votre Biographie</label>
                    <textarea class="form-control" name="biographie" maxlength="300">{{ $prestataire->biographie }}</textarea>
                </div>
                <div class="form-group col-xl-12">
                    <button class="btn btn-primary ps-5 pe-5" type="submit">Valider</button>
                </div>
            </div>
        </form>
        <br>
        <br>
        <hr style="height: 3px;color:red">
        <form method="POST" action="/provider_verify_account" enctype="multipart/form-data">
            @csrf
            <div class="widget">
                <h5 class="widget-title">Vérifiez votre compte</h5>
                <div class="row">
                    <div class="col-xl-12">
                        <h6 class="form-title">La vérification de votre compte vous permet de mettre vos clients en
                            confiance</h6>
                    </div>

                </div>
            </div>
            <div class="row">



                <div class="form-group col-xl-6">
                    <label class="me-sm-2">Photo de votre carte d'identité</label>
                    <input type="file" class="form-control" name="identity_pic1" accept="image/*">
                </div>
                <div class="form-group col-xl-6">
                    <label class="me-sm-2">Photo de votre carte d'identité</label>
                    <input type="file" class="form-control" name="identity_pic2" accept="image/*">
                </div>

                <div class="form-group col-xl-12">
                    <button class="btn btn-primary ps-5 pe-5" type="submit">Valider</button>
                </div>
            </div>
        </form>
    </div>
@endsection
