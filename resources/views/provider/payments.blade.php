@extends('../master.providers')
@section('content')
    <div class="col-xl-9 col-md-8">
        <h4 class="widget-title">Historique de payements</h4>
        <div class="card transaction-table mb-0">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table mb-0">
                        <thead>
                            <tr>
                                <th>Service</th>
                                <th>Client</th>
                                <th>Date</th>
                                <th>Montant(XOF)</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($transactions as $transaction)
                                <tr>
                                    <td>
                                        <a href="/javascript:void(0);">
                                            <img src="{{ Storage::url($transaction->commande->service->image) }}"
                                                class="pro-avatar" alt="">
                                            {{ $transaction->commande->service->nom }}
                                        </a>
                                    </td>
                                    <td>
                                        <img class="avatar-xs rounded-circle"
                                            src="{{ Storage::url($transaction->commande->service->image) }}">
                                        {{ $transaction->commande->client->nom . ' ' . $transaction->commande->client->prenom }}
                                    </td>
                                    <td>{{ $transaction->created_at->format('d-M-Y H:i') }}</td>
                                    <td><strong>{{ $transaction->montant }} </strong></td>
                                    <td><span
                                            class="
                                                  <?php
                                                  if ($transaction->etat == 'en attente de confirmation') {
                                                      echo 'badge bg-info';
                                                  }
                                                  if ($transaction->etat == 'Pay??') {
                                                      echo 'badge bg-success';
                                                  }
                                                  if ($transaction->etat == 'innachev??') {
                                                      echo 'badge bg-danger';
                                                  } ?>">{{ $transaction->etat }}</span>
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
@endsection
