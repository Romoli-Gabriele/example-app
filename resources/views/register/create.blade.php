@extends('layout')
@section('content')
    <main class="max-w-lg mx-auto">
        <form method="POST" action="/register">
            <div>
                @csrf
                <h1>Register</h1>
                <p>Please fill in this form to create an account.</p>
                <hr>
                <label for="name"><b>Name</b></label>
                <input type="text" placeholder="Enter Name" name="name" required>
                <br>
                <label for="username"><b>Username</b></label>
                <input type="text" placeholder="Enter Username" name="username" required>
                <br>
                <label for="email"><b>Email</b></label>
                <input type="text" placeholder="Enter Email" name="email" required>
                <br>
                <label for="psw"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="password" required>
                <br>
                <hr>
              <button type="submit" >Register</button>
            </div>                
            <div>
              <p>Already have an account? <a href="#">Sign in</a>.</p>
            </div>
        </form>
    </main>
@endsection