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
                                <h3 class="page-title">Ajouter une categorie</h3>
                            </div>
                        </div>
                    </div>
                    <!-- /Page Header -->

                    <div class="card">
                        <div class="card-body">

                            <!-- Form -->
                            <form action="/admin_add_category" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label> Nom de la catégorie</label>
                                    <input class="form-control" type="text" name="nom" maxlength="20" required>
                                </div>
                                <div class="form-group">
                                    <label> Image</label>
                                    <input class="form-control" type="file" name="image" accept="image/*" required>
                                </div>
                                <div class="mt-4">
                                    <button class="btn btn-primary" type="submit">Ajouter</button>
                                    <a href="/admin_categories" class="btn btn-link">Annuler</a>
                                </div>
                            </form>
                            <!-- Form -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    </body>

    </html>
