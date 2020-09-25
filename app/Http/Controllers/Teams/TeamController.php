<?php

namespace App\Http\Controllers\Teams;
use Storage;
use App\Http\Controllers\Controller;
use App\Models\Team;

class TeamController extends Controller
{
    public function index()
    {
        $teams = Team::latest()->get();
        return view('teams.table', compact('teams'));
    }

    public function create()
    {
        $team = new Team;
        return view('teams.create', compact('team'));
    }

    public function store()
    {
        $attr = $this->validateRequest();

        $avatarRequest = request()->file('avatar');
        $username = request('username');
        $avatar = $avatarRequest->storeAs('images/teams', "{$username}.{$avatarRequest->extension()}");

        $attr['avatar'] = $avatar;
        Team::create($attr);

        return back()->with('That user has been created');
    }

    public function edit(Team $team)
    {
        return view('teams.edit', compact('team'));
    }

    public function update(Team $team)
    {
        $avatarRequest = request()->file('avatar');

        $attr = request()->validate([
            'avatar' => $avatarRequest ? 'required|image' : '',
            'name' => 'required',
            'occupation' => 'required',
            'username' => 'required|unique:teams,username,' . $team->id,
            'bio' => 'required',
        ]);

        if ($avatarRequest) {
            $username = request('username');
            Storage::delete($team->avatar);
            $avatar = $avatarRequest->storeAs('images/teams', "{$username}.{$avatarRequest->extension()}");
        } else {
            $avatar = $team->avatar;
        }

        $attr['avatar'] = $avatar;
        $team->update($attr);

        return redirect()->route('teams.table')->with('That user has been updated');
    }

    public function delete(Team $team)
    {
        Storage::delete($team->avatar);
        $team->delete();
    }

    public function validateRequest()
    {
        return request()->validate([
            'avatar' => 'required|image',
            'name' => 'required',
            'occupation' => 'required',
            'username' => 'required|unique:teams,username',
            'bio' => 'required',
        ]);
    }
}
