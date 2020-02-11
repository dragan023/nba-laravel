<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
</head>

<style>
.player-card {
    border: 1px solid #bbb; 
    border-radius: 4px; 
    padding: 8px; 
    cursor: pointer;
    background-color: #f2f2f2;
    max-width: 30%;
}

.player-card:hover {
    background-color: #ebebeb;
}

a {
    color: #123;
}
</style>
<body>

@if (Auth::check())
<a href="/logout">Logout</a>
@endif


    @yield('content')
</body>
</html>