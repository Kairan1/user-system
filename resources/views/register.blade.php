<h2>User Registration</h2>

@if ($errors->any())
    <div style="color:red;">
        {{ $errors->first() }}
    </div>
@endif

@extends('layouts.app')

@section('content')

<div class="card p-4 shadow">
    <h2 class="mb-4">Register User</h2>

    <form method="POST" action="/register">
        @csrf

        <input class="form-control mb-3" type="text" name="name" placeholder="Name">
        <input class="form-control mb-3" type="email" name="email" placeholder="Email">
        <input class="form-control mb-3" type="text" name="phone" placeholder="Phone">
        <input class="form-control mb-3" type="text" name="address" placeholder="Address">

        <button class="btn btn-primary">Register</button>
    </form>
</div>

@endsection

<hr>

<h3>Search User</h3>
@extends('layouts.app')

@section('content')

<div class="card p-4 shadow">
    <h2 class="mb-4">Search User</h2>

    <form method="POST" action="/search">
        @csrf
        <input class="form-control mb-3" type="text" name="search" placeholder="Enter name or email">
        <button class="btn btn-success">Search</button>
    </form>
</div>

@endsection