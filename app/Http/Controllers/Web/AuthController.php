<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Facades\Cookie;

use Illuminate\Http\Request;

use App\Models\User;



use App\Mail\UserVerification;

use Illuminate\Support\Facades\Mail;

use Illuminate\Support\Facades\Validator;

use Carbon\Carbon;

class AuthController extends Controller
{
    //
    public function getLogin()
    {
        return view('web.login');
    }

    function postlogin(Request $request)
    {
        $email = $request->email;

        $arr = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::attempt($arr)) {

            if ($request->has('remember')) {
                # code...
                Cookie::queue('email', $request->email, 1440);
                Cookie::queue('password', $request->password, 1440);
            }

            return redirect('admin/home');
        }

        return redirect()->back()->with('error', 'Failed login')->with('email', $email);
    }


    function logout()
    {
        Auth::logout();
        return redirect('/');
    }

    public function getRegister()
    {
        return view('web.register');
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

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'is_admin' => 0
        ];

        User::create($data);
        return redirect()->route('web.register')->with('notice', 'Create User Successfully');
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
