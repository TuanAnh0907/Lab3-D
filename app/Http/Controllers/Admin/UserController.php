<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Models\User;

class UserController extends Controller
{
    //
    public function index()
    {

        $users = User::paginate(20);

        return view('admin.user.list', compact('users'));
    }

    public function edit($id)
    {
        $users = User::find($id);
        return view('admin.user.edit', compact('users',));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'is_admin' => 'required'
        ]);

        $user = User::find($id);

        $data = [
            'name' => $request->name,
            'is_admin' => $request->is_admin
        ];

        if ($request->password) {
            $this->validate($request, [
                'password' => 'required|min:6|max:32',
                'confirm' => 'same:password',
            ]);
            $data['password'] = bcrypt($request->password);
        }

        $user->update($data);

        return redirect()->route('admin.user.index');
    }

    public function delete($id)
    {
        User::where('id', $id)->delete();
        return Redirect()->route('admin.user.index');
    }
}
