@extends('layouts.app')
@section('content')
    <!-- Breadcrumb Section Start -->
    <div class="section">

        <!-- Breadcrumb Area Start -->
        <div class="breadcrumb-area bg-light">
            <div class="container-fluid">
                <div class="breadcrumb-content text-center">
                    <h1 class="title"> Register As Seller</h1>
                    <ul>
                        <li>
                            <a href="index.html">Home </a>
                        </li>
                        <li class="active"> Register</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Breadcrumb Area End -->

    </div>
    <!-- Breadcrumb Section End -->

    <!--  Register Section Start -->
    <div class="section section-margin">
        <div class="container">

            <div class="row mb-n10">
                <div class="col-lg-6 col-md-8 m-auto m-lg-0 pb-10">
                    <div class="register-wrapper">
                        <!-- Login Title & Content Start -->
                        <div class="section-content text-center mb-5">
                            <h2 class="title mb-2">Tearm & Condations</h2>
                            <p class="desc-content">Please Read our Tearms and Condations.</p>
                        </div>

                        @foreach ($tearms as $tearm)
                            <div id="scrollableDiv" class="tearm_condation_box">
                                {!! $tearm->tearm_and_condation !!}

                            </div>
                        @endforeach

                        <br>
                        <!-- Checkbox & Subscribe Label Start -->
                        <div class="single-input-item mb-3">
                            <div class="login-reg-form-meta d-flex align-items-center justify-content-between">
                                <div class="remember-meta mb-3">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" disabled class="custom-control-input"
                                            id="im-agree-with-tearm">
                                        <label class="custom-control-label" for="im-agree-with-tearm">I am Agree With Tearm
                                            and Condation Of Sahib.Af</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Checkbox & Subscribe Label End -->
                    </div>

                </div>
                <div class="col-lg-6 col-md-8 m-auto m-lg-0 pb-10">
                    <!-- Register Wrapper Start -->
                    <div class="register-wrapper">

                        <!-- Login Title & Content Start -->
                        <div class="section-content text-center mb-5">
                            <h2 class="title mb-2">Create Account</h2>
                            <p class="desc-content">Please Register using account detail bellow.</p>
                        </div>
                        <!-- Login Title & Content End -->

                        <!-- Form Action Start -->
                        <form method="POST" action="{{ route('register') }}">
                            @csrf


                            <!-- Input First Name Start -->
                            <div class="single-input-item mb-3">
                                <input type="text" name="role" hidden value="2">
                                <input id="name" placeholder="Full Name" type="text"
                                    class="form-control @error('name') is-invalid @enderror" name="name"
                                    value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <!-- Input First Name End -->
                          
                            <!-- Input Email Or Username Start -->
                            <div class="single-input-item mb-3">
                                {{-- <input type="email" placeholder="Your Email"> --}}
                                <input id="email" placeholder="Your Email" type="email"
                                    class="form-control @error('email') is-invalid @enderror" name="email"
                                    value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <!-- Input Email Or Username End -->

                            <!-- Input Password Start -->
                            <div class="single-input-item mb-3">
                                {{-- <input type="password" placeholder="Enter your Password"> --}}
                                <input id="password" placeholder="Enter your Password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password" required
                                    autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <!-- Input Password End -->

                            <!-- Input Password Start -->
                            <div class="single-input-item mb-3">
                                {{-- <input type="password" placeholder="Confirm your Password"> --}}
                                <input id="password-confirm" placeholder="Confirm your Password" type="password"
                                    class="form-control" name="password_confirmation" required autocomplete="new-password">

                            </div>
                            <!-- Input Password End -->

                            <div class="col-md-12 mb-3">
                                <div class="country-select">
                                    <select name="seller_type" class="myniceselect nice-select wide rounded-0" required style="display: none;">
                                        <option >Select Category </option>
                                        <option value="1">I have a factory </option>
                                        <option value="2">I am a wholesaller </option>
                                    
                                    </select> 
                                </div>
                            </div>
                                    <!-- Input First Name End -->

                              <!-- Input Password Start -->
                        
                            <!-- Input Password End -->

                            <!-- Checkbox & Subscribe Label Start -->
                            {{-- <div class="single-input-item mb-3">
                                <div class="login-reg-form-meta d-flex align-items-center justify-content-between">
                                    <div class="remember-meta mb-3">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" checked class="custom-control-input" id="im-buyer">
                                            <label class="custom-control-label" for="im-buyer">I'm a buyer</label>

                                            <input type="checkbox" class="custom-control-input" id="im-seller">
                                            <label class="custom-control-label" for="im-seller">I'm a sller</label>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                            <!-- Checkbox & Subscribe Label End -->
                            {{-- <div id="seller-phone-whatsapp">
                                <!-- Input phone Or Username Start -->
                                <div class="single-input-item mb-3">
                                    <input type="text" placeholder="Your Phone Number">
                                    <input id="mobile_number" placeholder="Enter your mobile number" type="text"
                                        class="form-control @error('mobile') is-invalid @enderror" name="mobile"
                                        autocomplete="mobile">

                                    @error('mobile')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                                </div>
                                <!-- Input phone Or Username End -->

                                <!-- Input WhatsApp Number Or Username Start -->
                                <div class="single-input-item mb-3">
                                    <input type="text" placeholder="Your WhatsApp Number">
                                    <input id="whatsapp_number" placeholder="Enter your WhatsApp number" type="text"
                                        class="form-control @error('whatsapp') is-invalid @enderror" name="whatsapp"
                                        autocomplete="whatsapp">

                                    @error('whatsapp')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <!-- Input WhatsApp Number Or Username End -->
                            </div> --}}

                            <!-- Checkbox & Subscribe Label Start -->
                            <br><br>
                            <div class="single-input-item mb-3">
                            <div class="login-reg-form-meta d-flex align-items-center justify-content-between">
                                <div class="remember-meta mb-3">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" name="subscription" class="custom-control-input" id="rememberMe-2">
                                        <label class="custom-control-label" for="rememberMe-2">Subscribe For Beast Offers And Our Newsletter</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        {{-- <input type="checkbox" name="subscription" class="custom-control-input" id="rememberMe-2"> --}}
                                        <label class="custom-control-label" for="rememberMe-2">Already have an account <a href="/login">login</a></label>
                                    </div>
                                </div>
                            </div>
                         </div>
                            <!-- Checkbox & Subscribe Label End -->

                            <!-- Register Button Start -->
                            <div class="single-input-item mb-3">

                                <button type="submit" disabled id="registerBtn"
                                    class="btn btn btn-dark btn-hover-primary rounded-0">Register</button>
                                <p id="show-when-deactive">First! Agree with terms and conditions to register.</p>

                            </div>
                            <!-- Register Button End -->

                        </form>
                        <!-- Form Action End -->

                    </div>
                    <!-- Register Wrapper End -->
                </div>

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
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

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
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}
