@extends('../master.admin')
@section('content')
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <div class="page-wrapper">
        <div class="content container-fluid">

            <!-- Page Header -->
            <div class="page-header">
                <div class="row">
                    <div class="col">
                        <h3 class="page-title">Services</h3>
                    </div>

                </div>
            </div>
        </div>
        <!-- /Page Header -->



        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover table-center mb-0 datatable">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Service</th>
                                        <th>Categorie</th>
                                        <th>Montant</th>
                                        <th>Date</th>
                                        <th>Statut</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <?php $counter = 0; ?>
                                @foreach ($services as $service)
                                    <tbody>
                                        <tr>
                                            <?php $counter += 1; ?>
                                            <td>{{ $counter }}</td>
                                            <td>
                                                <a href="admin_service_details/{{ $service->id }}">
                                                    <img class="rounded service-img me-1"
                                                        src="{{ $service->image }}" alt="">
                                                    {{ $service->nom }}
                                                </a>
                                            </td>
                                            <td>{{ $service->categorie->nom }}</td>
                                            <td> @php echo strrev(wordwrap(strrev($service->prix), 3, ' ', true));   @endphp XOF</td>
                                            <td>{{ $service->created_at->format('d-M-Y') }}</td>
                                            <td>
                                                <div class="status-toggle">
                                                    <input id="{{ $service->nom }}" class="check" type="checkbox"
                                                        onchange="changeServiceStatut(this)"
                                                        @php if($service->statut== 1){echo'checked';} @endphp>
                                                    <label for="{{ $service->nom }}" class="checktoggle">checkbox</label>
                                                </div>
                                            </td>
                                            <td>
                                                <a href="/admin_service_details/{{ $service->id }}"
                                                    class="btn btn-sm bg-info-light">
                                                    <i class="far fa-eye me-1"></i> Voir
                                                </a>
                                            </td>
                                        </tr>
                                @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>



    </body>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script>
        function changeServiceStatut(service) {

            var service_name = service.id;
            $.ajax({
                url: "/admin_change_service_statut",
                //dataType: 'json',
                headers: {
                    "X-CSRF-Token": $('meta[name="csrf-token"]').attr('content'),
                },
                type: 'post',
                data: {
                    "service_name": service_name
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


    <!-- Mirrored from html.truelysell.com/template/admin/service-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 30 May 2022 01:14:30 GMT -->

    </html>
