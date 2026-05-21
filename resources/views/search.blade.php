@if($user)
    <h2>User Found</h2>
    <p>{{ $user->name }}</p>
    <p>{{ $user->email }}</p>
    <p>{{ $user->phone }}</p>
    <p>{{ $user->address }}</p>

    <a href="/delete/{{ $user->id }}">Delete</a>
@else
    <h3 style="color:red;">User not found</h3>
@endif

<a href="/">Back</a>