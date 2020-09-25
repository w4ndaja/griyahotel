<?php

namespace App\Http\Controllers\Api\Teams;

use App\Http\Controllers\Controller;
use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function index()
    {
        return Team::get();
    }

    public function show(Team $team)
    {
        return $team;
    }

    public function theFirst()
    {
        return Team::first();
    }
}
