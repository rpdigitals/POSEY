@extends('../master.user')
@section('content')
    <div class="col-xl-9 col-md-8">
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Porte-feuille </h4>
                        <div class="wallet-details">
                            <span>Balance</span>
                            <h3>{{ \Auth()->user()->porte_feuille()->valeur }}</h3>
                            <div class="d-flex justify-content-between my-4">
                                <div>
                                    <p class="mb-1">Total ajouté</p>
                                    <h4>{{ $total_debite +\Auth()->user()->porte_feuille()->valeur }}</h4>
                                </div>
                                <div>
                                    <p class="mb-1">Total débité</p>
                                    <h4>{{ $total_debite }}</h4>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Rechargez votre porte-feuille</h4>
                        <form action="/add_to_wallet" enctype="multipart/form-data" method="POST">
                            @csrf
                            <div class="form-group">
                                <div class="form-group form-focus">
                                    <label class="focus-label">Operateur</label>
                                    <select class="form-control " required name="operator">
                                        <option value="1">T-Money</option>
                                        <option value="2">Flooz</option>

                                    </select>
                                </div>

                                <div class="form-group form-focus">
                                    <label class="focus-label">Votre numero de telephone</label>
                                    <input type="tel" class="form-control" value="228" name="number" required>
                                </div>
                                <div class="form-group form-focus">
                                    <label class="focus-label">Montant (XOF)</label>
                                    <input type="number" class="form-control" name="amount" required>
                                </div>

                        </form>

                        <button type="submit" class="btn btn-primary btn-block withdraw-btn w-100">Rechargez votre
                            porte-feuille</button>
                    </div>
                </div>
            </div>
        </div>
        <h4 class="mb-4"> Transactions</h4>
        <div class="card transaction-table mb-0">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-center mb-0">
                        <thead>
                            <tr>
                                <th>S.No</th>
                                <th>Date</th>
                                <th>Montant</th>
                                <th>Service</th>
                                <th>Status du service</th>

                            </tr>
                        </thead>
                        <?php $counter = 0; ?>
                        <tbody>
                            @foreach ($transactions as $transaction)
                                <tr>
                                    <td>{{ $counter += 1 }}</td>
                                    <td>{{ $transaction->created_at->format('Y-m-d') }}</td>
                                    <td>{{ $transaction->montant }}</td>
                                    <td><a
                                            href="/details/{{ $transaction->commande->service->id }}">{{ $transaction->commande->service->nom }}</a>
                                    </td>
                                    @if ($transaction->commande->service->statut == 1)
                                        <td> Disponible</td>
                                    @else
                                        <td> Supprimé</td>
                                    @endif

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
@endsection
