@extends('layouts.master')

@section('content')
<h1>Login</h1>

<form action="/login" method="POST">
@csrf
    <label for="email">Email:</label>
    <input type="email" name="email" id="email">
    @error('email')
        <span class="alert alert-danger">{{ $message }}</span>
    @enderror
    <br>

    <label for="password">Password:</label>
    <input type="password" name="password" id="password">
    @error('password')
        <span class="alert alert-danger">{{ $message }}</span>
    @enderror
    <br>
    <button type="submit">Submit</button>
</form>
@endsection