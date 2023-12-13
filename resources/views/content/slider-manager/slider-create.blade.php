@extends('layouts/contentNavbarLayout')


@section('page-script')
<script src="{{asset('assets/js/form-basic-inputs.js')}}"></script>
@endsection 
<!-- In your blade template -->

 @section('content')
<h4 class="fw-bold py-3 mb-4">
  <span class="text-muted fw-light">Slider /</span>  Create Slider
 
</h4>
@include('content.alert.alert')

<div class="section section-margin">
    <div class="container">
            <!-- Section Title Start -->
            <div class="section-title aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
                {{-- <h2 class="title pb-3">Create New Product</h2> --}}
                <span></span>
                <div class="title-border-bottom"></div>
            </div>
            <!-- Section Title End -->
        <form action="{{ route('slider.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-4"></div>
                    <div class="col-md-8">
                <div class="card">
                    <h5 class="card-header">Cover input</h5>
                    <div class="card-body">
                      <div class="mb-3">
                        <label for="formFile" class="form-label">Choose Cover</label>
                        <input class="form-control" type="file" id="formFile" name="cover">
                      </div>
                    </div>
                  </div> <br>

                <div class="card">
                        <h5 class="card-header">Slid Details</h5>
                    <div class="card-body">
                        <div class="contact-form-wrapper contact-form">
                            <div class="row">
                                <div class="col-12">
                                    <div class="row">
                                   
                                    
                                        <div class="col-md-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
                                            <div class="input-item mb-4">
                                                <label for="name"><small>Slider Name *:</small></label>
                                                <input class="form-control" type="text" placeholder="Air Pro PC" name="name">
                                            </div>
                                        </div>
                                        <div class="col-md-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
                                            <div class="input-item mb-4">
                                                <label for="name"><small>Slider Url *:</small></label>
                                                <input class="form-control" type="text" placeholder="https://sahib.af/xxx" name="url">
                                            </div>
                                        </div>
                                        <div class="col-md-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
                                            <div class="input-item mb-4">
                                                <label for="name"><small>Slider Offer % *:</small></label>
                                                <input class="form-control" type="text" placeholder="30%" name="offer">
                                            </div>
                                        </div>
                                    
                                       
                                        
                                        <span class="row ">
                                            <div class="col-md-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
                                                <div class="input-item mb-5">
                                                    <label for="name"><small>old price:</small></label>
                                                    <input class="form-control" name="old_price" type="text" placeholder="eg:1000 " >
                                                </div>
                                            </div>
                                            <div class="col-md-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
                                                <div class="input-item mb-5">
                                                    <label for="name"><small>new Price *:</small></label>
                                                    <input class="form-control" name="new_price" type="text" placeholder="eg:900 " >
                                                </div>
                                            </div>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <br>

                           

            <div class="card mb-4">
                <h5 class="card-header">Write Description</h5>
                <div class="card-body">
                  <div class="mb-3 row">
                     <div class="col-md-12">
                      <textarea class="tinymce-editor form-control" name="description"></textarea>
                   </div>
                  </div>    
                </div>
              </div>
                <center>
                    <div class="col-12 aos-init aos-animate" data-aos="fade-up" data-aos-delay="500">
                        <button type="submit" id="submit" name="submit" class="btn btn-dark btn-hover-primary rounded-0">Create</button>
                    </div>
                </center>
  
        </form>
    </div>
</div>

  @endsection


