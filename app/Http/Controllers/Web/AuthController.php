<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Facades\Cookie;

use Illuminate\Support\Facades\Mail;

use Illuminate\Support\Str;

use Illuminate\Http\Request;

use App\Models\User;

class AuthController extends Controller
{
    //
    public function login()
    {
        return view('auth.login');
    }

    function checkLogin(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:6|max:32',
        ]);

        $arr = [
            'email' => $request->email,
            'password' => $request->password,
            'status' => 1,
        ];

        if (Auth::attempt($arr)) {

            if ($request->has('remember')) {
                # code...
                Cookie::queue('email', $request->email, 1440);
                Cookie::queue('password', $request->password, 1440);
            }

            return redirect()->route('admin.home');
        }

        return redirect()->back()->with('notice', 'Failed login');
    }


    function logout()
    {
        Auth::logout();
        return redirect()->route('web.home');
    }

    public function register()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        # code...
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|unique:users|email',
            'password' => 'required|min:6|max:32',
            'confirm' => 'same:password',
        ]);

        $token = Str::random(64);

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'is_admin' => 0,
            'status' => 0,
            'token' => $token
        ];

        Mail::send('auth.email.createAcount', ['token' => $token], function ($message) use ($request) {
            $message->to($request->email);
            $message->subject('Create Account by Email');
        });

        User::create($data);

        return redirect()->route('web.register')->with('notice', 'We send e-mail to your email, please confirm');
    }

    public function profile()
    {
        return view('web.editprofile');
    }

    public function updateProfile(Request $request)
    {

        $this->validate($request, [
            'name' => 'required',
        ]);

        $user = User::find(Auth::user()->id);

        $data = [
            'name' => $request->name,
        ];

        if (Hash::check($request->old_password, $user->password) == true) {
            # code...
            if ($request->new_password) {
                $this->validate($request, [
                    'new_password' => 'required|min:6|max:32',
                    'confirm' => 'same:new_password',
                ]);
                $data['password'] = bcrypt($request->new_password);
            }

            // return response()->json($data);

            $user->update($data);

            return redirect()->route('web.profile')->with('notice', 'Updated successfully');
        } else {
            return redirect()->route('web.profile')->with('notice', 'Updated Failed! Password check false ');
        }
    }
}
