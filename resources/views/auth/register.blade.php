@extends('layouts.auth')

@section('style')
    <style>
        html,
        body {
            height: 100%;
        }

        .form-signin {
            max-width: 330px;
            padding: 1rem;
        }

        .form-signin .form-floating:focus-within {
            z-index: 2;
        }

        .form-signin input[type="email"] {
            margin-bottom: -1px;
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0;
        }

        .form-signin input[type="password"] {
            /* margin-bottom: 10px; */
            border-top-left-radius: 0;
            border-top-right-radius: 0;
        }
    </style>
@endsection

@section('content')
    <main class="form-signin w-100 m-auto">
        <form method="POST" action="{{ route('register.post') }}">
            @csrf
            <img class="mb-4 mx-auto d-block" src={{ asset('assets/img/silly-cat-silly.gif') }} alt="" width="100"
                height="100">
            <h1 class="h3 mb-3 fw-normal">Create your account</h1>

            <div class="form-floating">
                <input name="fullname" type="text" class="form-control rounded-0 rounded-top" id="floatingInput"
                    placeholder="Enter your full name">
                <label for="floatingInput">Full Name</label>
                @error('fullname')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-floating">
                <input name="email" type="email" class="form-control rounded-0" id="floatingInput"
                    placeholder="name@example.com">
                <label for="floatingInput">Email address</label>
                @error('email')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-floating mb-2">
                <input name="password" type="password" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
                @error('password')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            @if (session()->has('success'))
                <div class="alert alert-success">
                    {{ session()->get('success') }}

                </div>
            @endif
            @if (session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif


            <button class="btn btn-primary w-100 py-2" type="submit">Register</button>

            <p class="mt-5 mb-3 text-body-secondary text-center">&copy; 2025</p>
        </form>
    </main>
@endsection
