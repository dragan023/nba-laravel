@extends('layouts.master')

@section('content')
<h1>Register</h1>

<form action="/register" method="POST">
@csrf
    <label for="name">Name:</label>
    <input type="text" name="name" id="name">
    @error('name')
        <span class="alert alert-danger">{{ $message }}</span>
    @enderror
    <br>

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

    <label for="password_confirm">Confirm your password:</label>
    <input type="password" name="password_confirmation" id="password_confirm">
    <br>

    <button type="submit">Submit</button>
</form>
@endsection