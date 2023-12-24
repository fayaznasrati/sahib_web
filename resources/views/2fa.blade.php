@extends('layouts.app')

@section('title', 'OTP')
@section('content')
<!-- Breadcrumb Section Start -->
<div class="section">

    <!-- Breadcrumb Area Start -->
    <div class="breadcrumb-area bg-light">
        <div class="container-fluid">
            <div class="breadcrumb-content text-center">
                <h1 class="title">Authenticate User</h1>
                <ul>
                    <li>
                        <a href="/">Home </a>
                    </li>
                    <li class="active"> Authenticate </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Area End -->
    
    </div>
    <!-- Breadcrumb Section End -->
    
    <!-- OTP  Section Start -->
    <div class="section section-margin">
    <div class="container">
    
        <div class="row mb-n10">
            <div class="col-md-3"></div>
            <div class="col-lg-6 col-md-8 m-auto m-lg-0 pb-10">
                @if ($message = Session::get('activated'))
                <div class="row">
                  <div class="col-md-12">
                      <div class="alert alert-success alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button> 
                          <strong>{{ $message }}</strong>
                      </div>
                  </div>
                </div>
            @endif

            @if ($message = Session::get('incorect'))
                <div class="row">
                  <div class="col-md-12">
                      <div class="alert alert-danger alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button> 
                          <strong>{{ $message }}</strong>
                      </div>
                  </div>
                </div>
            @endif
                <!-- Login Wrapper Start -->
                <div class="login-wrapper">
    
                    <!-- Login Title & Content Start -->
                    <div class="section-content text-center mb-5">
                        <h2 class="title mb-2">OTP</h2>
                        <p class="desc-content">Enter The OTP sent To email <b style="color: brown">{{ substr(auth()->user()->email, 0, 5) . '******' . substr(auth()->user()->email,  -8) }}</b></p>
                    </div>
                    <!-- Login Title & Content End -->
    
                    <!-- Form Action Start -->
                    <form method="POST" action="{{ route('verifyotp') }}">
                        @csrf
    
                        <!-- Input Email Start -->
                        <div class="single-input-item mb-3">
                            <input id="token" type="number" placeholder="000000" class="form-control @error('token') is-invalid @enderror" name="token" value="{{ old('token') }}" required autocomplete="token" autofocus>
                            @error('token')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        </div>
                        <!-- Input Email End -->
    
                     
    
                        <!-- Checkbox/Forget Password Start -->
                        <div class="single-input-item mb-3">
                            <div class="login-reg-form-meta d-flex align-items-center justify-content-between">
                                <button type="submit" class="btn btn btn-dark btn-hover-primary rounded-0">Submit</button>
                                <a class="btn btn-link" href="{{ route('resend') }}">
                                    {{ __('Resend OTP?') }}
                                </a>
                           
                            </div>
                        </div>
    
                    </form>
                    <!-- Form Action End -->
    
                </div>
                <!-- Login Wrapper End -->
            </div>
            <div class="col-md-3"></div>
    
        </div>
    
    </div>
    </div>
    <!-- OTP Section End -->
@endsection

