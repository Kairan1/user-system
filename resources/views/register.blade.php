<h2>User Registration</h2>

@if ($errors->any())
    <div style="color:red;">
        {{ $errors->first() }}
    </div>
@endif

<form method="POST" action="/register">
    @csrf
    Name: <input type="text" name="name"><br><br>
    Email: <input type="email" name="email"><br><br>
    Phone: <input type="text" name="phone"><br><br>
    Address: <input type="text" name="address"><br><br>

    <button type="submit">Register here</button>
</form>

<hr>

<h3>Search User</h3>
<form method="POST" action="/search">
    @csrf
    Email: <input type="email" name="email">
    <button type="submit">Search</button>
</form>