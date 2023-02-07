@extends('../master.user')
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
                                <th>Prestataire</th>
                                <th>Date</th>
                                <th>Montant(XOF)</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($transactions as $transaction)
                                <tr>
                                    <td>
                                        <a href="/details/{{ $transaction->commande->service->id }}">
                                            <img src="{{ Storage::url($transaction->commande->service->image) }}"
                                                class="pro-avatar" alt="">
                                            {{ $transaction->commande->service->nom }}
                                        </a>
                                    </td>
                                    <td>
                                        <img class="avatar-xs rounded-circle"
                                            src="{{ Storage::url($transaction->commande->service->image) }}">
                                        {{ $transaction->commande->service->prestataire->nom . ' ' . $transaction->commande->service->prestataire->nom }}
                                    </td>
                                    <td>{{ $transaction->created_at->format('d-M-Y H:i') }}</td>
                                    <td><strong>{{ $transaction->montant }} </strong></td>
                                    <td><span
                                            class="
                                          <?php
                                          if ($transaction->etat == 'en attente de confirmation') {
                                              echo 'badge bg-info';
                                          }
                                          if ($transaction->etat == 'Payé') {
                                              echo 'badge bg-success';
                                          }
                                          if ($transaction->etat == 'innachevé') {
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
