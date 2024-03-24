
@extends("layouts.app")
@section("content")

<!-- Breadcrumb Section Start -->
<div class="section">

<!-- Breadcrumb Area Start -->
<div class="breadcrumb-area bg-light">
    <div class="container-fluid">
        <div class="breadcrumb-content text-center">
            <h1 class="title">Login</h1>
            <ul>
                <li>
                    <a href="index.html">Home </a>
                </li>
                <li class="active"> Login </li>
            </ul>
        </div>
    </div>
</div>
<!-- Breadcrumb Area End -->

</div>
<!-- Breadcrumb Section End -->

<!-- Login  Section Start -->
<div class="section section-margin">
<div class="container">

    <div class="row mb-n10">
        <div class="col-md-3"></div>
        <div class="col-lg-6 col-md-8 m-auto m-lg-0 pb-10">
            <!-- Login Wrapper Start -->
            <div class="login-wrapper">

                <!-- Login Title & Content Start -->
                <div class="section-content text-center mb-5">
                    <h2 class="title mb-2">Login</h2>
                    <p class="desc-content">Please login using account detail bellow.</p>
                </div>
                <!-- Login Title & Content End -->

                <!-- Form Action Start -->
                {{-- <form method="POST" action="{{ route('login') }}"> --}}
                    <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <!-- Input Email Start -->
                    <div class="single-input-item mb-3">
                        {{-- <input type="email" placeholder="Email or Username"> --}}
                        <input id="email" type="text" placeholder="Email or Username" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>
                    <!-- Input Email End -->

                    <!-- Input Password Start -->
                    <div class="single-input-item mb-3">
                        {{-- <input type="password" placeholder="Enter your Password"> --}}
                        <input id="password" type="password" placeholder="Enter your Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <!-- Input Password End -->

                    <!-- Checkbox/Forget Password Start -->
                    <div class="single-input-item mb-3">
                        <div class="login-reg-form-meta d-flex align-items-center justify-content-between">
                            <div class="remember-meta mb-3">
                                <div class="custom-control custom-checkbox">
                                    {{-- <input type="checkbox" class="custom-control-input" id="rememberMe"> --}}
                                    <input  class="custom-control-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label class="custom-control-label" for="rememberMe">  {{ __('Remember Me') }}</label>

                                    
                                </div>
                            </div>
                            {{-- <a href="#" class="forget-pwd mb-3">Forget Password?</a> --}}
                            @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif
                        </div>
                    </div>
                    <!-- Checkbox/Forget Password End -->

                    <!-- Login Button Start -->
                    <div class="single-input-item mb-3">
                        <button class="btn btn btn-dark btn-hover-primary rounded-0">Login</button>
                    </div>
                    <!-- Login Button End -->

                    <!-- Lost Password & Creat New Account Start -->
                    <div class="lost-password">
                        <a href="/register">Create Account</a>
                    </div>
                    <!-- Lost Password & Creat New Account End -->

                </form>
                <!-- Form Action End -->

            </div>
            <!-- Login Wrapper End -->
        </div>
        <div class="col-md-3"></div>

    </div>

</div>
</div>
<!-- Login | Register Section End -->
@endsection
{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}
