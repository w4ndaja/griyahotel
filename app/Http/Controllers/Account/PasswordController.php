<?php

namespace App\Http\Controllers\Account;
use Hash;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PasswordController extends Controller
{
    public function edit()
    {
        return view('account.password.edit');
    }

    public function update()
    {
        $this->validate(request(), [
            'password' => ['required', 'string', 'min:6', 'confirmed'],
            'old_password' => ['required'],
            // 'password_confirmation' => ['required'],
        ]);

        $user_password = auth()->user()->password;
        $old_password = request('old_password');
        $password = bcrypt(request('password'));

        if (Hash::check($old_password, $user_password)) {
            auth()->user()->update([
                'password' => $password
            ]);
            return back()->with("success", "Your password was changed.");
        } else {
            return back()->with("error", "Make sure you type your old password!");
        }
    }
}
