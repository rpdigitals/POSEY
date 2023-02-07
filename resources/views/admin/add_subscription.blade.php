@extends('../master.admin')
@section('content')

    <div class="page-wrapper">
        <div class="content container-fluid">
            <div class="row">
                <div class="col-xl-8 offset-xl-2">

                    <!-- Page Header -->
                    <div class="page-header">
                        <div class="row">
                            <div class="col-sm-12">
                                <h3 class="page-title">Ajouter un type d'abonnement</h3>
                            </div>
                        </div>
                    </div>
                    <!-- /Page Header -->

                    <div class="card">
                        <div class="card-body">

                            <!-- Form -->
                            <form action="/admin_add_subscription" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label>Type de l'abonnement</label>
                                    <input class="form-control" type="text" placeholder="ex: VIP" name="type" required
                                        maxlength="20">
                                </div>
                                <div class="form-group">
                                    <label>Prix(XOF)</label>
                                    <input class="form-control" type="number" name="prix" required
                                        placeholder="10000">
                                </div>
                                <div class="form-group">
                                    <label>Description</label>
                                    <input class="form-control" type="text" name="description" required
                                        placeholder="ex : Valable pour 15 jours">
                                </div>
                                <div class="form-group">
                                    <label> Durée</label>
                                    <select class="form-control select" name="duree" required>
                                        <option value=30>1 Mois</option>
                                        <option value=90>3 Mois</option>
                                        <option value=180>6 Mois</option>
                                        <option value=360>1 Ans</option>
                                        <option value=720>2 Ans</option>
                                    </select>
                                </div>

                                <div class="mt-0">
                                    <button class="btn btn-primary" type="submit">Ajouter</button>
                                    <a href="/admin_subscriptions" class="btn btn-link">Annuler</a>
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


    <!-- Mirrored from html.truelysell.com/template/admin/add-subscription.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 30 May 2022 01:14:50 GMT -->

    </html>
