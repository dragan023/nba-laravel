<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Http\Requests\CommentRequest;
use \App\Comment;
use \App\Team;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function store(Team $team, CommentRequest $request) {
        $comment = $request->all();
        $comment['user_id'] = Auth::user()->id;
        $team->comments()->create($comment);

        return redirect()->route('team', [$team->id]);
    }
}
