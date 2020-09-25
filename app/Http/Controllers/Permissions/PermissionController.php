<?php

namespace App\Http\Controllers\Permissions;

use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Permission;

class PermissionController extends Controller
{
    public function index()
    {
        $permissions = Permission::get();
        return view('permissions.index-permission', compact('permissions'));
    }

    public function store()
    {
        request()->validate([ 'name' => 'required' ]);

        Permission::create(['name' => request('name')]);

        return back()->with("success", 'Permission was created');
    }

    public function edit(Permission $permission)
    {
        return view('permissions.edit-permission', compact('permission'));
    }

    public function update(Permission $permission)
    {
        request()->validate([
            'name' => 'required|unique:permissions,name,' . $permission->id,
        ]);

        $permission->update(['name' => request('name')]);

        return redirect()->route('permission.index');
    }

    public function destroy(Permission $permission)
    {
        $permission->delete();
    }
}
