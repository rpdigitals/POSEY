@extends('../master.user')
@section('content')
    <div class="col-xl-9 col-md-8">
        <form method="POST" action="/user_book_service/{{ $service->id }}" enctype="multipart/form-data">
            @csrf
            <div class="widget">
                <h4 class="widget-title">Commander</h4>
                <div class="row">
                    <div class="col-xl-12">
                        <h5 class="form-title"> @php echo strrev(wordwrap(strrev($service -> prix), 3, ' ', true)); @endphp XOF
                        </h5>
                    </div>
                    <div class="form-group col-xl-12">
                        <div class="media align-items-center mb-3 d-flex">
                            <img class="user-image" src="{{ $service->image }}" alt="">
                            <div class="media-body">
                                <h5 class="mb-0">{{ $service->nom }}</h5>


                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <br>



            <div class="row">




                <div class="col-xl-7">
                    <label class="me-sm-2">Lieu du travail</label>
                    <input type="text" class="form-control" name="lieu_du_travail" maxlength="30" required
                        placeholder="ex: Foire TOGO 2000">

                </div>
                <div class="form-group col-xl-7">
                    <label class="me-sm-2">Date du travail</label>
                    <input type="date" class="form-control " name="date_du_travail" required
                        title="veuillez entrer une date valide" min="2022-10-19" max="2040-12-31">
                </div>
                <div class="form-group col-xl-7">
                    <label class="me-sm-2">Expliquer votre commande</label>
                    <textarea class="form-control" name="note_explicative" required></textarea>
                </div>






                <div class="form-group col-xl-12">
                    <button class="btn btn-primary ps-5 pe-5" type="submit">Commander maintenant</button>
                </div>
            </div>
        </form>
    </div>
    </div>
    </div>
    </form>
    </div>
@endsection
