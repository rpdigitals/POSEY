@extends('../master.admin')
@section('content')
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <div class="page-wrapper">
        <div class="content container-fluid">

            <!-- Page Header -->
            <div class="page-header">
                <div class="row">
                    <div class="col">
                        <h3 class="page-title">Categories</h3>
                    </div>
                    <div class="col-auto text-end">
                        <a class="btn btn-white filter-btn" href="" id="filter_search">
                            <i class="fas fa-filter"></i>
                        </a>
                        <a href="/admin_add_category" class="btn btn-primary add-button ms-3">
                            <i class="fas fa-plus"></i>
                        </a>
                    </div>
                </div>
            </div>
            <!-- /Page Header -->

            <!-- Search Filter -->


            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover table-center mb-0 datatable">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Categorie</th>
                                            <th>nom</th>
                                            <th>Statut</th>
                                            <th class="text-start" colspan="1">Action</th>
                                        </tr>
                                    </thead>

                                    <?php $counter = 0;
                                    ?>
                                    <tbody>
                                        @foreach ($categories as $categorie)
                                            <tr>
                                                <?php $counter += 1; ?>
                                                <td>{{ $counter }}</td>
                                                <td>
                                                    <img class="rounded service-img me-1"
                                                        src="{{ $categorie->image }}"
                                                        alt="Category Image">{{ $categorie->type }}
                                                </td>
                                                <td>{{ $categorie->nom }}</td>
                                                <td>
                                                    <div class="status-toggle">
                                                        <input id="{{ $categorie->nom }}" class="check" type="checkbox"
                                                            onchange="changeCategoryStatut(this)"
                                                            @php if($categorie->statut== 1){echo'checked';} @endphp>
                                                        <label for="{{ $categorie->nom }}"
                                                            class="checktoggle">checkbox</label>
                                                    </div>
                                                </td>
                                                <td class="text-start">
                                                    <a href="/admin_edit_category/{{ $categorie->id }}"
                                                        class="btn btn-sm bg-success-light me-2"> <i
                                                            class="far fa-edit me-1"></i> Modifier</a>

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

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script>
        function changeCategoryStatut(categories) {

            var category_name = categories.id;
            $.ajax({
                url: "/admin_change_category_statut",
                //dataType: 'json',
                headers: {
                    "X-CSRF-Token": $('meta[name="csrf-token"]').attr('content'),
                },
                type: 'post',
                data: {
                    "category_name": category_name
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
@endsection
