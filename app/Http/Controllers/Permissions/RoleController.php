<?php

namespace App\Http\Controllers\Permissions;

use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    public function index()
    {
        $roles = Role::get();
        return view('permissions.index-role', compact('roles'));
    }

    public function store()
    {
        $attr = request()->validate([ 'name' => 'required' ]);
        Role::create($attr);
        return back()->with("success", 'Permission was created');
    }

    public function edit(Role $role)
    {
        return view('permissions.edit-role', compact('role'));
    }

    public function update(Role $role)
    {
        request()->validate([
            'name' => 'required|unique:permissions,name,' . $role->id,
        ]);

        $role->update(['name' => request('name')]);
        return redirect()->route('roles.index');
    }

    public function destroy(Role $role)
    {
        $role->delete();
    }
}
