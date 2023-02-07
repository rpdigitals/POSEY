@extends('../master.admin')
@section('content')

    <div class="page-wrapper">
        <div class="content container-fluid">
            <div class="row">
                <div class="col-xl-8 offset-xl-2">

                    <!-- Page Header -->
                    <div class="page-header">
                        <div class="row">
                            <div class="col">
                                <h3 class="page-title">Modifier une catégorie</h3>
                            </div>
                        </div>
                    </div>
                    <!-- /Page Header -->

                    <div class="card">
                        <div class="card-body">

                            <!-- Form -->
                            <form action="/admin_edit_category/{{ $categorie->id }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label>Nom</label>
                                    <input class="form-control" type="text" value="{{ $categorie->nom }}" name="nom"
                                        maxlength="20">
                                </div>
                                <div class="form-group">
                                    <label>Image</label>
                                    <input class="form-control" type="file" name="image"
                                        value="{{ $categorie->photo }}">
                                </div>

                                <div class="mt-4">
                                    <button class="btn btn-primary" type="submit">Modifier</button>
                                    <a href="/admin_categories" class="btn btn-link">Cancel</a>
                                </div>
                            </form>
                            <!-- /Form -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>



    </body>


    <!-- Mirrored from html.truelysell.com/template/admin/edit-category.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 30 May 2022 01:14:48 GMT -->

    </html>
