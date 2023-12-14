@extends('layout.master')

@section('title', 'Register')

@section('content')
    <!-- ==========Preloader========== -->
    <div class="preloader">
        <div class="preloader-inner">
            <div class="preloader-icon">
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- ==========Preloader========== -->

    <!-- ==========Sign-In-Section========== -->
    <section class="account-section bg_img" data-background="assets/images/account/account-bg.jpg">
        <div class="container">
            <div class="padding-top padding-bottom">
                <div class="account-area">
                    <div class="section-header-3">
                        <span class="cate">hello</span>
                        <h2 class="title">welcome back</h2>
                    </div>
                    <form method="POST" action="/user/authenticate">
                        @csrf
                        <div class="form-group">
                            <label for="email2">Email<span>*</span></label>
                            <input type="text" placeholder="Enter Your Email" id="email2" name="email"
                                value="{{ old('email') }}">
                            @error('email')
                                <p>{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="pass3">Password<span>*</span></label>
                            <input type="password" placeholder="Password" id="pass3" name="password"
                                value="{{ old('password') }}">
                            @error('password')
                                <p>{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group checkgroup">
                            <input type="checkbox" id="bal2" style="width: auto !important; height: auto;" required checked>
                            <label for="bal2">remember password</label>
                            <a href="#0" class="forget-pass">Forget Password</a>
                        </div>
                        <div class="form-group text-center">
                            <input type="submit" value="log in">
                        </div>
                    </form>
                    <div class="option">
                        Don't have an account? <a href="/user/register">sign up now</a>
                    </div>
                    <div class="or"><span>Or</span></div>
                    <ul class="social-icons">
                        <li>
                            <a href="#0">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#0" class="active">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#0">
                                <i class="fab fa-google"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- ==========Sign-In-Section========== -->
@endsection
