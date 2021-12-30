<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function create(){
        return view('register.create');
    }
    public function store()
    {
        $attributes = request()->validate([
            'username'=>'required|max:255|min:5',
            'name'=>'required|max:255|min:5',
            'email'=>'required|email|max:255|min:5',
            'password'=>'required|max:255|min:6'
        ]);
        
        User::create($attributes);
        return redirect('/');
    }
}