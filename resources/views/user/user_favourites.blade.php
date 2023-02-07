@extends('../master.user')
@section('content')
    <div class="col-xl-9 col-md-8">
        <h4 class="widget-title">Favoris</h4>
        <div class="row">
            @foreach ($likes as $like)
                <div class="col-lg-4 col-md-6 d-flex">
                    <div class="service-widget flex-fill">
                        <div class="service-img">
                            <a href="/details/{{ $like->service->id }}">
                                <img class="img-fluid serv-img" alt="Service Image"
                                    src="{{ Storage::url($like->service->image) }}">
                            </a>
                            <div class="fav-btn">
                                <a class="fav-icon fa fa-heart" style="font-size:16px;color:red;"
                                    href="/user_delete_favoris/{{ $like->id }})">
                                </a>
                            </div>
                            <div class="item-info">
                                <div class="service-user">
                                    <a href="#">
                                        <img src="{{ Storage::url($like->service->prestataire->photo) }}" alt="">
                                    </a>
                                    <span class="service-price">{{ $like->service->prix . ' f' }}</span>
                                </div>
                                <div class="cate-list">
                                    <a class="bg-yellow"
                                        href="/details/{{ $like->service->id }}">{{ $like->service->categorie->nom }}</a>
                                </div>
                            </div>
                        </div>
                        <div class="service-content">
                            <h3 class="title">
                                <a href="/details/{{ $like->service->id }}">{{ $like->service->nom }}</a>
                            </h3>
                            <div class="rating">
                                @php
                                    $counter = number_format($like->service->moyenne_notations());
                                @endphp
                                @for ($i = 0; $i < $counter; $i++)
                                    <i class="fas fa-star filled"></i>
                                @endfor
                                @for ($j = 5; $j > $counter; $j--)
                                    <i class="fas fa-star "></i>
                                @endfor
                                <span class="d-inline-block average-rating">
                                    {{ '(' . $like->service->moyenne_notations() . ') ' . $like->service->notations()->count() . ' vote(s)' }}
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach



            <!-- Pagination Links -->
            {{-- <div class="pagination">
                <ul>
                    <li class="active">
                        <a href="#">1</a>
                    </li>
                    <li>
                        <a href="#">2</a>
                    </li>
                    <li>
                        <a href="#">3</a>
                    </li>
                    <li>
                        <a href="#">4</a>
                    </li>
                    <li class="arrow">
                        <a href="#"><i class="fas fa-angle-right"></i></a>
                    </li>
                </ul>
            </div> --}}
        </div>
    </div>
    </div>
    </div>
    </div>
@endsection
