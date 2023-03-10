@extends('master.master')
@section('content')
    <!-- Breadcrumb -->
    <div class="breadcrumb-bar">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="breadcrumb-title">
                        <h2>Categories</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Breadcrumb -->

    <div class="content">
        <div class="container">
            <div class="catsec clearfix">
                <div class="row">
                    @foreach ($categories as $categorie)
                        @if ($categorie->statut == 1)
                            <div class="col-lg-4 col-md-6">
                                <a href="/search/{{ $categorie->id }}">
                                    <div class="cate-widget">
                                        <img src="{{ $categorie->image }}" alt="">
                                        <div class="cate-title">
                                            <h3><span><i class="fas fa-circle"></i> {{ $categorie->nom }}</span></h3>
                                        </div>
                                        <div class="cate-count">
                                            <i class="fas fa-clone"></i> {{ $categorie->nombre_de_services_actifs() }}
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endif
                    @endforeach


                </div>
                {{-- <div class="pagination">
                    <ul>
                        <li class="active"><a href="/javascript:void(0);">1</a></li>
                        <li><a href="/javascript:void(0);">2</a></li>
                        <li><a href="/javascript:void(0);">3</a></li>
                        <li><a href="/javascript:void(0);">4</a></li>
                        <li class="arrow"><a href="/javascript:void(0);"><i class="fas fa-angle-right"></i></a></li>
                    </ul>
                </div> --}}
            </div>
        </div>
    </div>
@endsection
