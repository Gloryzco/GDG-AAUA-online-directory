<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use App\Member;

class MemberController extends Controller
{

    public function member(){
        $members = Member::all();
        return view('members', ['members' => $members]);
    }

    public function SignUp(Request $request){
        $this -> validate ($request, [
            'email' => 'required|email|unique:members',
            'password' => 'required|min:6',
            'c_password' => 'required|min:6'
        ]);

        $firstname = $request['firstname'];
        $lastname = $request['lastname'];
        $email = $request['email'];
        $dob = $request['dob'];
        $phone = $request['phone'];
        $specification = $request['spec'];
        $password = $request['password'];
        $c_password = $request['c_password'];
        
        $user = new Member();
        $user -> firstname = $firstname;
        $user -> lastname = $lastname;
        $user -> email = $email;
        $user -> dob = $dob;
        $user -> phone = $phone;
        $user -> specification = $specification;
        $user -> password = $password;
        $user -> c_password = $c_password;
        if($password == $c_password){
            $user -> save();
            
            return redirect()->route('home');          
        }  
        elseif($password != $c_password){
            $msg="password do not match";
            return redirect()->back()->with(['message' => $msg]);
        }
        Auth::login($user);
    }
        
    public function SignIn(Request $request){

         $this -> validate($request, [
            'email'         => 'required',
            'password'     => 'required'
        ]);

        $email  = $request['email'];
        $password = $request['password'];
        
        if (Auth::attempt ([ 'email' => $email, 'password' => $password]))
        {
            return redirect()->route('dashboard');
        }
        else
        {
            $message = "error loggin in";
            return redirect()-> back()->with(['message' => $message]);
            
        }
        
    }
       
}
