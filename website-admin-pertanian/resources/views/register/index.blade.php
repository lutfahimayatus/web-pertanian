@extends('layouts.main')

<h1>MAYASARI</h1>
<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="register-container">
                <h3>Create an account</h3>

                <form method="post" action="/register">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Enter your name" required autofocus value="{{ old('name') }}">
                        @error('name')
                        <div class="alert alert-danger">
                            {{$message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="Enter your username" required autofocus value="{{ old('username') }}">
                        @error('username')
                        <div class="alert alert-danger">
                            {{$message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" required autofocus value="{{ old('email') }}">
                        @error('email')
                        <div class="alert alert-danger">
                            {{$message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Enter your password" required autofocus>
                        @error('password')
                        <div class="alert alert-danger">
                            {{$message }}
                        </div>
                        @enderror
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Create Account <i class="bi bi-person-add"></i></button>
                    </div>
                </form>

                <p>You have an account ? <a href="/login" class="text-decoration-none"> Login</a></p>
            </div>
        </div>
    </div>
</div>