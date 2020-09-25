<?php

namespace App\Http\Controllers\Permissions;
use Str;
use App\Http\Controllers\Controller;
use App\Models\User;
use Carbon\Carbon;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    public function index()
    {
        $users = User::with('roles', 'permissions')->whereHas('roles')->get();
        $roles = Role::get();
        return view('permissions.users.table', compact('users', 'roles'));
    }

    public function store()
    {
        $roles = request('roles');
        request()->validate([
            'username' => ['required', 'alpha_num', 'max:25', 'unique:users'],
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        $user = User::create($this->userRequest());

        foreach ($roles as $role) {
            $user->assignRole($role);
        }

        return back()->with("success", "User was created.");
    }

    public function assign()
    {
        request()->validate([
            'user' => 'required',
            'roles' => 'array|required',
        ]);
        $roles = request('roles');
        $user = User::where('email', request('user'))->first();
        if (!is_null($user)) {
            $user->syncRoles($roles);
            return back()->with('success', "The role was given to the user.");
        } else {
            return back()->with('error', "We can not find the user you're entered.");
        }
    }

    public function edit(User $user)
    {
        $roles = Role::get();
        return view('permissions.users.edit', compact('user', 'roles'));
    }

    public function update(User $user)
    {
        request()->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email,' . $user->id],
            'username' => ['required', 'alpha_num', 'max:25', 'unique:users,username,' . $user->id],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        $user->update($this->userRequest());

        $roles = request('roles');
        $user->syncRoles($roles);

        return redirect()->route('users.permission.table')->with("success", "User was update.");
    }

    public function delete(User $user)
    {
        $user->delete();
        $user->posts()->delete();
    }

    public function userRequest()
    {
        return [
            'name' => request('name'),
            'username' => request('username'),
            'email' => request('email'),
            'password' => bcrypt(request('password')),
            'hash' => Str::random(54) . "" . strtotime(Carbon::now()),
        ];
    }
}
