<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function page(){
        return view('register.login');
    }
    public function login(User $user){
        auth()->login($user);
    }
}
