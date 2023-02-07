@extends('../master.providers')
@section('content')
    <div class="col-xl-9 col-md-8">
        <h4 class="widget-title">Mes Services</h4>
        <a href="/provider_add_service" class="nav-link header-login d-lg-none ">
            <i class="fas fa-plus-circle me-1 "></i> <span>Ajouter un Service</span>
        </a>




        <div class="row">
            @foreach ($services as $service)
                @if ($service->statut == 1)
                    <div class="col-lg-4 col-md-6 d-flex">

                        <div class="service-widget flex-fill">
                            <div class="service-img">
                                <a href="/provider_edit_service/{{ $service->id }}">
                                    <img class="img-fluid serv-img" alt="Service Image"
                                        src="{{ $service->image }}">
                                </a>
                                <div class="item-info">
                                    <div class="service-user">
                                        <a href="javascript:void(0);">
                                            <img src="{{ $prestataire->photo }}" alt="">
                                        </a>
                                        <span class="service-price"></span>
                                    </div>
                                    <div class="cate-list">
                                        <a class="bg-yellow"
                                            href="/provider_edit_service/{{ $service->id }}">{{ $service->categorie->nom }}</a>
                                    </div>
                                </div>
                            </div>
                            <div class="service-content">
                                <h3 class="title">
                                    <a href="service">{{ $service->nom }}</a>
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
                                <div class="user-info">
                                    <div class="service-action">
                                        <div class="row">
                                            <div class="col">
                                                <a href="/provider_edit_service/{{ $service->id }}" class="text-success"><i
                                                        class="far fa-edit"></i> Modifier</a>
                                            </div>
                                            <div class="col text-end">
                                                <a href="/provider_delete_service/{{ $service->id }}" class="text-danger"
                                                    data-toggle="modal" data-target="#deleteNotConfirmModal"><i
                                                        class="far fa-trash-alt"></i> Supprimer</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                @endif
            @endforeach
        </div>






        <!-- Pagination Links -->
        {{-- <div class="pagination">
            <ul>
                <li class="active">
                    <a href="javascript:void(0);">1</a>
                </li>
                <li>
                    <a href="javascript:void(0);">2</a>
                </li>
                <li>
                    <a href="javascript:void(0);">3</a>
                </li>
                <li>
                    <a href="javascript:void(0);">4</a>
                </li>
                <li class="arrow">
                    <a href="javascript:void(0);"><i class="fas fa-angle-right"></i></a>
                </li>
            </ul>
        </div> --}}
    </div>
    </div>
    </div>
    </div>
    </div>

    <div class="modal fade" id="deleteConfirmModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span
                            aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-footer"> <a href="javascript:;" class="btn btn-success si_accept_confirm">Yes</a>
                    <button type="button" class="btn btn-danger si_accept_cancel" data-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="deleteNotConfirmModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="acc_title">Delete Service</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span
                            aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Service is Booked and Inprogress..</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger si_accept_cancel" data-dismiss="modal">OK</button>
                </div>
            </div>
        </div>
    </div>



    </div>
@endsection
