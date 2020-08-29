@extends('layout')

@section('title')
    Forgot-Password
@endsection

@section('content')
            <div class="col-lg-7 col-md-12 col-pad-0 form-section">
                <div class="login-inner-form">
                    <div class="details">
                        <a href="#">
                            <img src="/assets/img/logos/logo-2.png" alt="logo">
                        </a>
                        <h3>Recover your password</h3>
                        <form action="/index" method="GET">
                            <div class="form-group">
                                <input type="email" name="email" class="input-text" placeholder="Email Address">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn-md btn-theme btn-block">Login</button>
                            </div>
                            <p class="none-2">Already a member?<a href="/login"> Login here</a></p>
                        </form>
                    </div>
                </div>
            </div>
@endsection