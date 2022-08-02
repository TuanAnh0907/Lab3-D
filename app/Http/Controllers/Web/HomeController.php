<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //

    public function getIndex(){

        return view('web.home');
    }

    public function getDetail(){

        return view('web.detail');
    }

}
