<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Mail\WelcomeMail;
use Illuminate\Support\Facades\Mail;

class UserController extends Controller
{
    public function layout(){
        return view('layout');
    }

    public function login(){
        return view('login');
    }

    public function create(){
        return view('register');
    }

    public function store(Request $request){
        $stmt=$request->validate([
            'name'=>['required','min:3'],
            'email'=>['required','email',Rule::unique('users','email')],
            'password'=>'required|confirmed|min:6'
        ]);

        $stmt['password']=bcrypt($stmt['password']);
        $user=User::create($stmt);
        Mail::to($user->email)->send(new WelcomeMail($user));
        auth()->login($user);
        return redirect('/')->with('message','Register successfully');
    }

    public function logout(Request $request){
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        
        return redirect('/')->with('message','You Have Been Logged Out');
    }
}