@extends('layout')
@section('content')
    <main class="max-w-lg mx-auto">
        <br>
        <br>
        <form method="POST" action="/register" class="rounded-xl">
            <li class="list-group-item "
                style="--tw-bg-opacity: 1;background-color: rgba(59,130,246,var(--tw-bg-opacity)); color:white">
                @csrf
                <h1>Register</h1>
                <p>Please fill in this form to create an account.</p>
                <hr>
                <div class="row mb-3">
                    <label class="col-sm-4 col-form-label" for="name"><b>Name</b></label>
                    <div class="col-sm-7">
                        <input class="form-control" style="width: 12rem; margin: 0" type="text" placeholder="Enter Name"
                            name="name" value="{{ old('name') }}" required>
                        @error('name')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-4 col-form-label" for="username"><b>Username</b></label>
                    <div class="col-sm-7">
                        <input class="form-control" style="width: 12rem; margin: 0" type="text"
                            placeholder="Enter Userame" name="username" value="{{ old('username') }}" required>
                        @error('username')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-4 col-form-label" for="email"><b>Email</b></label>
                    <div class="col-sm-7">
                        <input class="form-control" style="width: 12rem; margin: 0" type="email" placeholder="Enter Email"
                            name="email" value="{{ old('email') }}" required>
                        @error('email')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-4 col-form-label" for="password"><b>Password</b></label>
                    <div class="col-sm-7">
                        <input class="form-control" style="width: 12rem; margin: 0" type="password"
                            placeholder="Enter Password" name="password" value="{{ old('password') }}" required>
                        @error('password')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <hr>
                
                <div class="d-grid gap-2 d-md-flex justify-content-md-end mx-auto">
                    <button class="btn btn btn-danger mx-auto btn-lg" type="reset">Login</button>
                    <button class="btn btn btn-success mx-auto btn-lg" type="submit">Register</button>
                </div>

                </div>
                <br>
                <div>
                    <p style="text-align: center">Already have an account? <a style="color: white" href="#">Sign in</a>.</p>
                </div>
            </li>
        </form>
    </main>
@endsection