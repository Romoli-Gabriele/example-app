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
            'username'=>'required|max:255|min:5|unique:users,username',
            'name'=>'required|max:255|min:5',
            'email'=>'required|email|max:255|min:5|unique:users,email',
            'password'=>'required|max:255|min:6'
        ]);
        ;

        auth()->login(User::create($attributes));
        
        session()->flash('success', 'Your account has been created.');

        return redirect('/');
    }
}
