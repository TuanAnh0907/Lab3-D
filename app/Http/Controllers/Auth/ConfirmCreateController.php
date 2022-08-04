<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User;

class ConfirmCreateController extends Controller
{
    //
    public function showConfirmForm($token)
    {
        $account = User::where(['token' => $token])->first();

        if ($account) {
            return view('auth.confirmCreateAccount', ['token' => $token, 'account' => $account]);
        }

        return abort(404);
    }

    public function submitConfirmForm(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
        ]);

        //check account
        $user = User::where([
            'email' => $request->email,
            'token' => $request->token
        ])->first();

        if (!$user) {
            return back()->withInput()->with('message', 'Invalid token!');
        }

        User::where('email', $request->email)->update([
            'status' => 1,
            'token' => Null
        ]);

        return view('auth.login')->with('notice', 'Your confirm account success!, Now you have login');
    }
}
