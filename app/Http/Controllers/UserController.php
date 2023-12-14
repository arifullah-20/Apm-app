<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{


    public function index(){
        return view('user.layout');
    }

    public function tentang(){
        return view('user.layout');
    }
}
