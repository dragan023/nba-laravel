@extends('layouts.master')

@section('content')
<h1>{{ $team->name }}</h1>
<p>Email: {{ $team->email }}</p>
<p>City: {{ $team->city }}</p>
<p>Adress: {{ $team->adress }}</p>

<hr>

<h4>Players:</h4>
    @foreach($team->players as $player)
        <div class="player-card">
            <a href="/players/{{ $player->id }}">
                <p>First name: {{ $player->first_name }}</p>
                <p>Last name: {{ $player->last_name }}</p>
                <p>Player email: {{ $player->email }}</p>
            </div>
        </a>
        <hr>
    @endforeach

<h4>Comments:</h4>
    @foreach($team->comments as $comment)
        <div class="player-card">
            <p>{{ $comment->content }}</p>
        </div>
        <p>By: {{ $comment->user->name }}</p>
        <hr>
    @endforeach

    <form action="/teams/{{ $team->id }}/comments" method="POST">
        @csrf
        <label for="content">Add comment</label>
        <input type="text" name="content" id="content">
        
        <button type="submit">Comment</button>
    </form>
@endsection