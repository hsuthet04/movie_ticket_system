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
                            <span class="cate">welcome</span>
                            <h2 class="title">to Teddy Cine </h2>
                        </div>
                        <form method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="name">Name<span>*</span></label>
                                <input type="text" placeholder="Enter Your Name" id="name" name="name"
                                    value="{{ old('name') }}">
                                @error('name')
                                    <p>{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="email1">Email<span>*</span></label>
                                <input type="text" placeholder="Enter Your Email" id="email1" name="email"
                                    value="{{ old('email') }}">
                                @error('email')
                                    <p>{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="phone">Phone Number<span>*</span></label>
                                <input type="tel" placeholder="Enter Your Phone Number" id="phone" name="phone"
                                    value="{{ old('phone') }}">
                                @error('phone')
                                    <p>{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="pass1">Password<span>*</span></label>
                                <input type="password" placeholder="Password" id="pass1" name="password"
                                    value="{{ old('password') }}">
                                @error('password')
                                    <p>{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="pass2">Confirm Password<span>*</span></label>
                                <input type="password" placeholder="Password" id="pass2" name="password_confirmation"
                                    value="{{ old('password_confirmation') }}">
                                @error('password_confirmation')
                                    <p>{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="form-group checkgroup">
                                <input type="checkbox" id="bal" style="width: auto !important; height: auto;" checked>
                                <label for="bal">I agree to the <a href="#0">Terms, Privacy Policy</a> and <a
                                        href="#0">Fees</a></label>
                            </div>
                            <div class="form-group text-center">
                                <input type="submit" value="Sign Up">
                            </div>
                        </form>
                        <div class="option">
                            Already have an account? <a href="/user/login">Login</a>
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
