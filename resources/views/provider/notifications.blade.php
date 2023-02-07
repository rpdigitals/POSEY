@extends('../master.providers')
@section('content')
    <div class="col-xl-9 col-md-8">


        <div class="noti-content">
            @foreach ($notification as $notif)
                <ul class="notification-list">
                    <li class="notification-message">
                        <a href="/provider_booking_list">
                            <div class="media">
                                <span class="avatar avatar-sm">
                                    <img class="avatar-img rounded-circle" alt="User Image"
                                        src="{{ Storage::url($notif->client->photo) }}">
                                </span>
                                <div class="media-body">
                                    <p class="noti-details"> <span
                                            class="noti-title">{{ $notif->client->nom .
                                                ' ' .
                                                $notif->client->prenom .
                                                ' ' .
                                                $notif->contenu .
                                                ' <<' .
                                                $notif->service->nom .
                                                ' >>' }}</span>
                                    </p>
                                    <p class="noti-time"><span
                                            class="notification-time">{{ $notif->created_at->format('d-M-Y à H:i') }}</span>
                                    </p>
                                </div>
                            </div>
                        </a>
                    </li>

                </ul>
            @endforeach
        </div>

    </div>
@endsection
