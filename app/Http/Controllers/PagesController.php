<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
        return view ('home');
    }
    public function dashboard(){
        return view ('dashboard');
    }
    public function SignUp(){
        return view ('SignUp');
    }
    public function SignIn(){
        return view ('SignIn');
    }
}
