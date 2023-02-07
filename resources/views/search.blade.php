@extends('../master.master')
@section('content')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Breadcrumb -->
    <div class="breadcrumb-bar">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <div class="breadcrumb-title">
                        <h2>Trouver un professionel</h2>
                    </div>
                </div>

            </div>
        </div>

    </div>

    <!-- /Breadcrumb -->
    {{-- @php
        if (isset($allservices)) {
            $services = $allservices;
        }
    @endphp --}}

    <div class="content">
        <div class="container-fluid">
            <div class="row" id="app">
                <div class="col-lg-3 theiaStickySidebar">
                    <div class="card filter-card">
                        <div class="card-body">
                            <h4 class="card-title mb-4">Filtrer la recherche</h4>
                            <form id="search_form" method="POST" action="/filtre_recherche" enctype="multipart/form-data">
                                @csrf
                                <div class="filter-widget">

                                    <div class="filter-list">
                                        <h4 class="filter-title">Trier par</h4>
                                        <select class="form-control selectbox select form-select" name="trie">
                                            <option
                                                @php
if (isset($filtre)) {
                                                if ($filtre == 'recent') {
                                                    echo ' selected ';
                                                }
                                            } @endphp
                                                value="recent">
                                                Les plus recents</option>
                                            <option
                                                @php
if (isset($filtre)) {
                                                if ($filtre == 'moins_cher') {
                                                    echo ' selected ';
                                                }
                                            } @endphp
                                                value="moins_cher">Les Moins Chers</option>
                                            <option
                                                @php
if (isset($filtre)) {
                                                if ($filtre == 'plus_cher') {
                                                    echo ' selected ';
                                                }
                                            } @endphp
                                                value="plus_cher">Prix élevés</option>
                                        </select>

                                    </div>
                                    <div class="filter-list">
                                        <h4 class="filter-title">Categories</h4>
                                        <select class="form-control form-control selectbox select form-select"
                                            name="categorie">
                                            <option value="all">Tout</option>
                                            @foreach ($categories as $categorie)
                                                <option
                                                    @php
if (isset($selected)) {
                                                if ($selected == $categorie->id ) {
                                                    echo ' selected ';
                                                }
                                            } @endphp
                                                    value="{{ $categorie->id }}">{{ $categorie->nom }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                </div>
                                <button class="btn btn-primary pl-5 pr-5 btn-block get_services w-100"
                                    type="submit">Rechercher</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="row align-items-center mb-4">


                        <div class="col-md-6 col">
                            {{-- Comtage du nombre de services dont les categories ne sont pas supprimées
                            Comtage du nombre de services dont les categories ne sont pas supprimées --}}
                            @php
                                $nbreServices = 0;
                                foreach ($services as $service) {
                                    # code...
                                    if ($service->categorie->statut !== 0) {
                                        $nbreServices += 1;
                                    }
                                }
                            @endphp

                            {{-- Comtage du nombre de services actifs et dont les categories ne sont pas supprimées
                            Comtage du nombre de services actifs et dont les categories ne sont pas supprimées --}}
                            <h4 id="counter-container"><span>{{ $nbreServices }}</span> Services</h4>

                        </div>

                        @if ($selected !== 'all')
                            @if ($services->count() > 0)
                                <div class="col-md-6 col">
                                    <input type="search" id="search" class="form-control " name="recherche"
                                        placeholder="Rechercher dans la categorie {{ $services[0]->categorie->nom }} . . ."
                                        style="border:2px solid #EFD807;border-radius:15px" id="dynamic_search"
                                        onkeyup="search(this)">

                                </div>
                            @endif
                        @else
                            <div class="col-md-6 col">
                                <input type="search" id="search" class="form-control " name="recherche"
                                    placeholder="Rechercher parmis nos services   . . ."
                                    style="border:2px solid #EFD807;border-radius:15px" id="dynamic_search"
                                    onkeyup="search(this)">

                            </div>
                        @endif




                        <div class="col-md-6 col-auto">

                        </div>
                    </div>
                    <div>

                        <div class="row " id="content-container">
                            @php $counter=0; @endphp
                            @foreach ($services as $service)
                                @if ($service->statut !== 0 && $service->categorie->statut !== 0)
                                    @php $counter+=1 @endphp
                                    <div class=" col-lg-4 col-md-6 service-container" id="{{ $service->id }}">

                                        <div class="service-widget">
                                            <div class="service-img">
                                                <a href="/details/{{ $service->id }}">
                                                    <img class="img-fluid serv-img" alt="Service Image"
                                                        src="{{ $service->image }}">
                                                </a>
                                                @if (\Auth()->user())
                                                    @if (\Auth()->user()->client())
                                                        @if ($service->likedBy($client->id))
                                                            <div class="fav-btn">
                                                                <button class="fav-icon fa fa-heart"
                                                                    style="font-size:16px;color:red;"
                                                                    onclick="changeFavorisStatus(this,{{ $service->id }})">
                                                                </button>
                                                            </div>
                                                        @else
                                                            <div class="fav-btn">
                                                                <button class="fav-icon fa fa-heart" style="font-size:16px;"
                                                                    onclick="changeFavorisStatus(this,{{ $service->id }})">
                                                                </button>
                                                            </div>
                                                        @endif
                                                    @else
                                                        <div class="fav-btn">
                                                            <button class="fav-icon fa fa-heart" style="font-size:16px;">
                                                            </button>
                                                        </div>
                                                    @endif
                                                    @else
                                                    <div class="fav-btn">
                                                            <button class="fav-icon fa fa-heart" style="font-size:16px;">
                                                            </button>
                                                        </div>

                                                @endif
                                                <div class="item-info">
                                                    <div class="service-user">
                                                        <a href="/details/{{ $service->id }}">
                                                            <img src="{{ Storage::url($service->prestataire->photo) }}"
                                                                alt="">
                                                        </a>
                                                        <span class="service-price"> @php echo strrev(wordwrap(strrev($service->prix), 3, ' ', true));   @endphp XOF</span>

                                                    </div>
                                                    <div class="cate-list">
                                                        <a class="bg-yellow"
                                                            href="/details/{{ $service->id }}">{{ $service->categorie->nom }}</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="service-content">
                                                <h3 class="title">
                                                    <a href="/details/{{ $service->id }}">{{ $service->nom }}</a>
                                                </h3>
                                                <div class="rating">
                                                    @php
                                                        $counter = number_format($service->moyenne_notations());
                                                    @endphp
                                                    @for ($i = 0; $i < $counter; $i++)
                                                        <i class="fas fa-star filled"></i>
                                                    @endfor
                                                    @for ($j = 5; $j > $counter; $j--)
                                                        <i class="fas fa-star "></i>
                                                    @endfor
                                                    <span class="d-inline-block average-rating">
                                                        {{ '(' . $service->moyenne_notations() . ') ' . $service->notations()->count() . ' vote(s)' }}
                                                    </span>
                                                </div>

                                                <div class="row">

                                                </div>

                                                <div class="user-info">
                                                    <div class="row">
                                                        <span class="col-auto ser-contact"><i class="fas fa-phone me-1"></i>
                                                            <span>{{ $service->prestataire->telephone }}</span>
                                                        </span>

                                                    </div>
                                                </div>




                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach

                        </div>

                        <div class="row " id="new-content-container">
                            {{-- @php $counter=0; @endphp
                            @foreach ($services as $service)
                                @if ($service->statut !== 0 && $service->categorie->statut !== 0)
                                    @php $counter+=1 @endphp
                                    <div class="col-lg-4 col-md-6">
                                        <div class="service-widget">
                                            <div class="service-img">
                                                <a href="/details/{{ $service->id }}">
                                                    <img class="img-fluid serv-img" alt="Service Image"
                                                        src="{{ $service->image }}">
                                                </a>
                                                @if (session()->has('id'))
                                                    @if ($service->likedBy($client->id))
                                                        <div class="fav-btn">
                                                            <button class="fav-icon fa fa-heart"
                                                                style="font-size:16px;color:red;"
                                                                onclick="changeFavorisStatus(this,{{ $service->id }})">
                                                            </button>
                                                        </div>
                                                    @else
                                                        <div class="fav-btn">
                                                            <button class="fav-icon fa fa-heart" style="font-size:16px;"
                                                                onclick="changeFavorisStatus(this,{{ $service->id }})">
                                                            </button>
                                                        </div>
                                                    @endif
                                                @else
                                                    <div class="fav-btn">
                                                        <button class="fav-icon fa fa-heart" style="font-size:16px;">
                                                        </button>
                                                    </div>
                                                @endif
                                                <div class="item-info">
                                                    <div class="service-user">
                                                        <a href="#">
                                                            <img src="{{ Storage::url($service->prestataire->photo) }}"
                                                                alt="">
                                                        </a>
                                                        <span class="service-price"> @php echo strrev(wordwrap(strrev($service->prix), 3, ' ', true));   @endphp f</span>

                                                    </div>
                                                    <div class="cate-list">
                                                        <a class="bg-yellow"
                                                            href="/details/{{ $service->id }}">{{ $service->categorie->nom }}</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="service-content">
                                                <h3 class="title">
                                                    <a href="/details/{{ $service->id }}">{{ $service->nom }}</a>
                                                </h3>
                                                <div class="rating">
                                                    @php
                                                        $counter = number_format($service->moyenne_notations());
                                                    @endphp
                                                    @for ($i = 0; $i < $counter; $i++)
                                                        <i class="fas fa-star filled"></i>
                                                    @endfor
                                                    @for ($j = 5; $j > $counter; $j--)
                                                        <i class="fas fa-star "></i>
                                                    @endfor
                                                    <span class="d-inline-block average-rating">
                                                        {{ '(' . $service->moyenne_notations() . ') ' . $service->notations()->count() . ' vote(s)' }}
                                                    </span>
                                                </div>

                                                <div class="row">

                                                </div>

                                                <div class="user-info">
                                                    <div class="row">
                                                        <span class="col-auto ser-contact"><i
                                                                class="fas fa-phone me-1"></i>
                                                            <span>{{ $service->prestataire->telephone }}</span>
                                                        </span>

                                                    </div>
                                                </div>




                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach --}}



                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    {{-- 
    Like ajax
    Like ajax
    Like ajax
    Like ajax
    Like ajax
     --}}
    <script>
        function changeFavorisStatus(currentElement, service_id) {

            switch (currentElement.style.color) {
                case '':
                    currentElement.style.color = 'red'
                    break;
                case 'red':
                    currentElement.style.color = ''
                    break;
                default:
                    break;
            }
            var service_id = service_id;


            $.ajax({
                url: "/favoris",
                //dataType: 'json',
                headers: {
                    "X-CSRF-Token": $('meta[name="csrf-token"]').attr('content'),
                },
                type: 'post',
                data: {
                    "service_id": service_id
                    // },
                    // data: JSON.stringify(service_id),
                },


                success: function(data) {
                    // do what ever you want to do with this response data

                },
                error: function(xhr, ajaxOptions, thrownError) {
                    // do what ever you want to do when error happens
                    alert(xhr.status);
                    alert(thrownError);
                },
            });


        }
    </script>
    {{-- end like ajax end like ajax
    end like ajax end like ajax --}}

    {{-- 
    dynamic search 
    dynamic search 
    dynamic search 
    dynamic search  
    --}}
    <script>
        function searcht(keyword) {

            var keyword = keyword.value;
            if (keyword.length > 0) {
                let service_list = document.getElementsByClassName("service-container");

                for (var i = 0; i < service_list.length; i++) {
                    service_list[i].style.display = 'none';
                }


                $.ajax({
                    url: "/dynamic_search",
                    //dataType: 'json',
                    headers: {
                        "X-CSRF-Token": $('meta[name="csrf-token"]').attr('content'),
                    },
                    type: 'post',
                    data: {
                        "keyword": keyword
                        // },
                        // data: JSON.stringify(service_id),
                    },


                    success: function(data) {
                        // do what ever you want to do with this response data
                        //   alert(data)

                        //var data = Json.stringify(data);

                        // document.getElementById("new-content-container").innerHTML = '';
                        document.getElementById("counter-container").innerHTML = data[0].nom;



                    },
                    error: function(xhr, ajaxOptions, thrownError) {
                        // do what ever you want to do when error happens
                        alert(xhr.status);
                        alert(thrownError);
                    },
                });


            }
        }
    </script>
    <script>
        function search(keyword) {
            var keyword = keyword.value;
            if (keyword.length > 0) {
                let service_list = document.getElementsByClassName("service-container");

                for (var i = 0; i < service_list.length; i++) {
                    service_list[i].style.display = 'none';
                }
            }
            $.ajax({
                url: "/dynamic_search",
                //dataType: 'json',
                headers: {
                    "X-CSRF-Token": $('meta[name="csrf-token"]').attr('content'),
                },
                type: 'post',
                data: {
                    "keyword": keyword
                    // },
                    // data: JSON.stringify(service_id),
                },


                success: function(data) {
                    // do what ever you want to do with this response data
                    //   alert(data)

                    //var data = Json.stringify(data);

                    // document.getElementById("new-content-container").innerHTML = '';

                    var numberOfServiceMatched = 0;



                    for (var i = 0; i < data.length; i++) {

                        var serviceToDisplay = document.getElementById(data[i].id);
                        if (serviceToDisplay !== null) {
                            serviceToDisplay.style.display = 'block';
                            numberOfServiceMatched = numberOfServiceMatched + 1;

                        }
                    }
                    let accord = " service";

                    if (numberOfServiceMatched > 1) {
                        accord = " services";
                    }
                    document.getElementById("counter-container").innerHTML = numberOfServiceMatched + accord;



                },
                error: function(xhr, ajaxOptions, thrownError) {
                    // do what ever you want to do when error happens
                    alert(xhr.status);
                    alert(thrownError);
                },
            });
        }
    </script>
@endsection
