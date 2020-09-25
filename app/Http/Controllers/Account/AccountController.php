<?php

namespace App\Http\Controllers\Account;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function edit()
    {
        return view('account.edit');
    }

    public function update()
    {
        $attr = request()->validate([
            'username' => ['required', 'alpha_num', 'max:25', 'unique:users,username,' . auth()->id()],
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email,' . auth()->id()],
        ]);

        auth()->user()->update($attr);

        return back()->with("success", "Your account has been updated.");
    }
}
