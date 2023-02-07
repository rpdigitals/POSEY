@extends('../master.user')
@section('content')
    <div class="col-xl-9 col-md-8">
        <form method="POST" action="/user_settings" enctype="multipart/form-data">
            @csrf
            <div class="widget">
                <h4 class="widget-title">Paramètres</h4>
                <div class="row">
                    <div class="col-xl-12">
                        <h5 class="form-title">Informations</h5>
                    </div>
                    <div class="form-group col-xl-12">
                        <div class="media align-items-center mb-3 d-flex">
                            <img class="user-image" src="{{ Storage::url($client->photo) }}" alt="">
                            <div class="media-body">
                                <h5 class="mb-0">{{ $client->nom . ' ' . $client->prenom }}</h5>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-xl-6">
                    <label class="me-sm-2">Nom</label>
                    <input class="form-control" type="text" value="{{ $client->nom }}" readonly>
                </div>
                <div class="form-group col-xl-6">
                    <label class="me-sm-2">Prenom</label>
                    <input class="form-control" type="text" value="{{ $client->prenom }}" readonly>
                </div>
                <div class="form-group col-xl-6">
                    <label class="me-sm-2">Adresse mail</label>
                    <input class="form-control" type="email" value="{{ $client->user->email }}" readonly>
                </div>

                <div class="form-group col-xl-6">
                    <label class="me-sm-2">Telephone</label>
                    <input class="form-control no_only" type="text" value="{{ $client->telephone }}" readonly required>
                </div>
            </div>


            <br>



            <div class="row">




                <div class="col-xl-6">
                    <label class="me-sm-2">Nom</label>
                    <input type="text" class="form-control" name="nom" value="{{ $client->nom }}" maxlength="15">

                </div>
                <div class="form-group col-xl-6">
                    <label class="me-sm-2">Prenom</label>
                    <input type="text" class="form-control" name="prenom" value="{{ $client->prenom }}" maxlength="15">
                </div>
                <div class="form-group col-xl-6">
                    <label class="me-sm-2">adresse mail</label>
                    <input type="email" class="form-control" name="email" value="{{ $client->user->email }}">
                </div>
                <div class="form-group col-xl-6">
                    <label class="me-sm-2">Telephone</label>
                    <input type="tel" title="Veuillez entrer un numero de télephone correct" class="form-control"
                        name="telephone" value="{{ $client->telephone }}" type="tel">
                </div>
                <div class="form-group col-xl-6">
                    <label class="me-sm-2">Photo de profil</label>
                    <input type="file" class="form-control" name="photo" value="{{ $client->photo }}">

                </div>





                <div class="form-group col-xl-12">
                    <button class="btn btn-primary ps-5 pe-5" type="submit">Valider</button>
                </div>
            </div>
        </form>
    </div>
    </div>
    </div>
    </form>
    </div>
@endsection
