@extends('../master.user')
@section('content')
    <div class="col-xl-9 col-md-8">
        <form action="/user_demand_service" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="widget">
                <h4 class="widget-title"></h4>
                <div class="row">
                    <div class="col-xl-6">
                        <h5 class="form-title">Veuillez renseignez les informations de votre commande</h5>
                    </div>


                </div>
            </div>
            <div class="row">




                <div class="col-xl-7">
                    <label class="me-sm-2">Categorie du service</label>
                    <select id="" class="form-control" required name="categorie">
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->nom }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-xl-7">
                    <label class="me-sm-2">Nom du service</label>
                    <input type="text" id="" class="form-control" required name="nom">
                </div>

                <div class="form-group col-xl-7">
                    <label class="me-sm-2">Description du service</label>
                    <textarea name="description" id="" cols="30" rows="5" maxlength="300" class="form-control" required></textarea>
                </div>
                <div class="form-group col-xl-10">

                </div>
                <label class="me-sm-2">Marge de votre budget</label>

                <div class="form-group col-xl-3">
                    <label class="me-sm-2">De</label>
                    <input type="number" title="" class="form-control" name="min_price">
                </div>
                <div class="form-group col-xl-3">
                    <label class="me-sm-2">À</label>
                    <input type="number" class="form-control" name="max_price">
                </div>
                <label class="me-sm-2">Lieu et date du service</label>

                <div class="form-group col-xl-3">
                    <label class="me-sm-2">Lieu</label>
                    <input name="lieu_du_travail" id="" type="text" class="form-control" required>
                </div>
                <div class="form-group col-xl-3">
                    <label class="me-sm-2">Date</label>
                    <input name="date_du_travail" id="" type="date" class="form-control" required>
                </div>


                <div class="form-group col-xl-12">
                    <button class="btn btn-primary ps-5 pe-5" type="submit">Valider</button>
                </div>

            </div>
        </form>
    </div>
@endsection
