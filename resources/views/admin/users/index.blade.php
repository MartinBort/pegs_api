<ul>
@foreach($users as $user)
    <li>{!! $user['first_name'] !!} {!! $user['surname'] !!}, location: {!! $user['location'] !!}</li>
@endforeach
</ul>