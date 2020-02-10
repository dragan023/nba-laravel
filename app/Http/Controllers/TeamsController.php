<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Team;

class TeamsController extends Controller
{
    //
    public function index() {
        $teams = Team::all();

        return view('layouts.teams.index', compact('teams'));
    }

    public function show(Team $team) {

        return view('layouts.teams.show', compact('team'));
    }
}
