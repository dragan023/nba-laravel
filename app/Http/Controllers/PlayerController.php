<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Player;

class PlayerController extends Controller
{
    public function __construct() {
        $this->middleware('checkAuth');
    }
    
    public function show(Player $player) {

        return view('layouts.players.show', compact('player'));
    }
}
