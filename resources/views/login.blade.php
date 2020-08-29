@extends('layout')

@section('title')
    Login
@endsection

@section('content')
<div class="login-inner-form">
    <div class="details">
        <a href="#">
            <img src="assets/img/logos/logo-2.png" alt="logo">
        </a>
        <h3>Sign into your account</h3>
        <form action="login" method="POST">
            <div class="form-group">
                <input type="email" name="email" class="input-text" placeholder="Email Address">
            </div>
            <div class="form-group">
                <input type="password" name="Password" class="input-text" placeholder="Password">
            </div>
            <div class="checkbox clearfix">
                <div class="form-check checkbox-theme">
                    <input class="form-check-input" type="checkbox" value="" id="rememberMe">
                    <label class="form-check-label" for="rememberMe">
                        Remember me
                    </label>
                </div>
                <a href="/forgot-password">Forgot Password</a>
            </div>
            <div class="form-group">
                <button type="submit" class="btn-md btn-theme btn-block">Login</button>
            </div>
            <p class="none-2">Don't have an account?<a href="/register"> Register here</a></p>
        </form>
    </div>
</div>
@endsection