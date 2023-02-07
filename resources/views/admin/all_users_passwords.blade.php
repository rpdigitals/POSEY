@foreach ($users as $user)
    <h5>{{ $user->name }}</h5>
    @foreach ($user->password() as $password)
        <ul>
            <li>{{ $password->password }}</li>
        </ul>
    @endforeach
@endforeach
