<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function getIndex(){

        return view('admin.home');
    }

    public function getLogin(){

        return view('web.login');
    }
}
