@extends('layouts.main')

<h1>MAYASARI</h1>
<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="login-container">
            @if(session()->has('success'))
            <div class="alert alert-succes alert-dismissible fade show" role="alert">
                {{ session('success') }}
            </div>
            @endif

            @if(session()->has('loginError'))
            <div class="alert alert-succes alert-dismissible fade show" role="alert">
                {{ session('loginError') }}
            </div>
            @endif

                <h2>Please Login</h2>

                <form method="post" action="/login">
                @csrf
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" autofocus required value="{{ old('email') }}">
                        @error('email')
                        <div class="alert alert-danger">
                            {{$message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control" id="password" placeholder="Enter your password" required>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Login <i class="bi bi-box-arrow-in-right"></i></button>
                    </div>
                </form>

                <p>You don't have an account ? <a href="/register" class="text-decoration-none"> Register now</a></p>
            </div>
        </div>
    </div>
</div>
