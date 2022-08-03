<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //

    public function index(){

        return view('web.home');
    }

    public function detail(){

        return view('web.detail');
    }

    public function category(){

        return view('web.categories');
    }

}
