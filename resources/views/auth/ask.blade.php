@extends('layouts.app')
@section('content')
    <!-- Breadcrumb Section Start -->
    <div class="section">

        <!-- Breadcrumb Area Start -->
        <div class="breadcrumb-area bg-light">
            <div class="container-fluid">
                <div class="breadcrumb-content text-center">
                    <h1 class="title"> Select Type Of Your Account</h1>
                    <ul>
                        <li>
                            <a href="/">Home </a>
                        </li>
                        <li class="active"> Select Account Types</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Breadcrumb Area End -->


    <!-- Breadcrumb Section End -->

    <!--  ASK Section Start -->
    <div class="section section-margin">
        <div class=" container">
<div class="row">  
    <div class="col-lg-3"></div>
    <div class="col-lg-6 col-md-6 m-auto m-lg-0 pb-10 col-offset-2">
        <!-- Register Wrapper Start -->
        <div class="register-wrapper">

            <!-- Login Title & Content Start -->
            <div class="section-content text-center mb-5">
                <h2 class="title mb-2">Choose</h2>
                {{-- <p class="desc-content">Please Register using account detail bellow.</p> --}}
            </div>
               
                 <label><input checked type="radio" name="selectType" value="buyer"><b class="desc-content">I am Buyer </b><p>(buying Products).</p></label><br>

                 <label><input type="radio" name="selectType"  value="seller"> <b class="desc-content">I am Seller</b><p> (Selleing Products).</p></label><br>
                 <br>
                 <div class="section-content text-center mb-5">
                    <br>
                    <a href="register/seller" id="seller" style="display: none" >
                        <button id="mc-submit" class="newsletter-btn btn btn-primary btn-hover-dark" type="submit">Submit (Seller)</button>
                    </a>    
                    <a href="/register" id="buyer" >
                        <button id="mc-submit" class="newsletter-btn btn btn-primary btn-hover-dark" type="submit">Submit (Buyer)</button>
                    </a>
                 </div>
            <!-- Login Title & Content End -->
          

        </div>
        <!-- Register Wrapper End -->
    </div>

</div>


        </div>
    </div>
    <!-- Login | ASK Section End -->
@endsection

