<?php

namespace App\Http\Controllers\Permissions;

use App\Http\Controllers\Controller;
use Spatie\Permission\Models\{Role, Permission};

class RolePermissionController extends Controller
{
    public function rule()
    {
        $roles = Role::get();
        $permissions = Permission::get();
        return view('permissions.rule', compact('roles', 'permissions'));
    }

    public function confirm()
    {
        request()->validate([
            'role' => 'required',
            'permissions' => 'required',
        ]);

        $role = Role::findOrFail(request('role'));
        $permissions = request('permissions');
        $role->syncPermissions($permissions);

        return back()->with("success", 'The rule was submitted.');
    }
}
