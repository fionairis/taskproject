<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{

    public function register(){
        return view('user.userregister');
    }
    public function login(){
        return view('user.userlogin');
    }

}
