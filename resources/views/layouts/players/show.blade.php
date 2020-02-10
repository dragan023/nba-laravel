@extends('layouts.master')

@section('content')
<h1>{{ $player->first_name }}</h1>
<p>Last name: {{ $player->last_name }}</p>
<p>Player email: {{ $player->email }}</p>
<a href="/teams/{{ $player->team->id }}">Player team: {{ $player->team->name }}</a>
@endsection