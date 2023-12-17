@extends("layouts.seller-dashboard-app")
@section("seller-dashboard-content")

 <!-- Shop Section Start -->
 <div class="section section-margin">
    <div class="container">
        <div class="row">
            <div class="section section-margin">
                <div class="container">
                        <!-- Section Title Start -->
                        <div class="section-title aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
                            <h2 class="title pb-3">Create New Product</h2>
                            <span></span>
                            <div class="title-border-bottom"></div>
                        </div>
                        <!-- Section Title End -->
                    <form action="{{ route('post.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-4"></div>
                                <div class="col-md-8">
                            <div class="card">
                                <h5 class="card-header">Cover and Images input</h5>
                                <div class="card-body">
                                  <div class="mb-3">
                                    <label for="formFile" class="form-label">Choose Cover</label>
                                    <input class="form-control" type="file" id="formFile" name="cover">
                                  </div>
                                  <div class="mb-3">
                                    <label for="formFileMultiple" class="form-label">Choose Images</label>
                                    <input class="form-control" type="file" id="formFileMultiple"name="images[]" multiple>
                                  </div>
                                </div>
                              </div> <br>
                            {{-- </div> --}}
                        {{-- </div> --}}
                        {{-- <div class="row mb-n10"> --}}
                            {{-- <div class="col-12 col-md-4 col-lg-4 mb-10" >
                                You Can Upload Multiple image <hr>
                                <div class=" aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
                                    <span class="tips">Select Cover Image</span>
                                    <div class="input-item">
                                        <input class="input-item" type="file" name="cover" multiple>
                                    </div>
                                </div>
                                <hr>
                                <div class=" aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
                                    <span class="tips">Multiple images, press <b>Ctrl</b> & Click on images</span>
                                    <div class="input-item">
                                        <input class="input-item" type="file" name="images[]" multiple>
                                    </div>
                                </div>
                                <span class="temp-image">
                                    <img src="assets/images/banner/banner-3.jpg">
                                    <img src="assets/images/banner/banner-3.jpg">
                                    <img src="assets/images/banner/banner-3.jpg">
                                </span>
                            </div> --}}
                            {{-- <div class="col-12 col-md-8 col-lg-8 mb-10"> --}}
                                <!-- Section Title Start -->
                                {{-- <div class="section-title aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
                                    <h2 class="title pb-3">Product Information</h2>
                                    <span></span>
                                    <div class="title-border-bottom"></div>
                                </div> --}}
                                
                                <!-- Section Title End -->
                            <div class="card">
                                    <h5 class="card-header">Post Details</h5>
                                <div class="card-body">
                                    <div class="contact-form-wrapper contact-form">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="row">
                                                    <div class="col-md-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
                                                        <div class="input-item mb-4">
                                                            <label for="name"><small>Select Category *:</small></label>
                                                            <select name="category_id" id="select-category" type="text" class="input-item">
                                                                <option>Select Category</option>
                                                                @foreach ($category as $cat)
                                                                <option value={{ $cat->id }}>{{ $cat->name }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
                                                        <div class="input-item mb-4">
                                                            <label for="name"><small>Select Sub-Category *:</small></label>
                                                            <select name="sub_category_id" id="sub-category" type="text" class="input-item">
                                                                <option value="#">Select sub-Category</option>
                                                                <option value="default"></option>
                                                            {{-- here the list come from database using ajax --}}
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
                                                        <div class="input-item mb-4">
                                                            <label for="name"><small>Product Name *:</small></label>
                                                            <input class="input-item" type="text" placeholder="Toyota Corola" name="name">
                                                        </div>
                                                    </div>
                                                
                                                    <div class="col-md-12 aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
                                                        <div class="input-item mb-4">
                                                            <label for="name"><small>Product Colors *:</small></label>
                                                            <select class="input-item" multiple data-role="tagsinput"  placeholder="eg: red" name="colors[]">
                                                                {{-- <option value="red">Red</option> --}}
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <span class="row ">
                                                        <div class="col-md-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
                                                            <div class="input-item mb-5">
                                                                <label for="name"><small>old price:</small></label>
                                                                <input class="input-item" name="old_price" type="text" placeholder="eg:1000 " >
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
                                                            <div class="input-item mb-5">
                                                                <label for="name"><small>new Price *:</small></label>
                                                                <input class="input-item" name="new_price" type="text" placeholder="eg:900 " >
                                                            </div>
                                                        </div>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <br>

                                       
                                            
                        <div class="card">
                                <h5 class="card-header">Add more features</h5>
                            <div class="card-body">
                                <div class="contact-form-wrapper contact-form">
                                    <div class="row">
                                        <span id="addedinput">
                                            <span class="row ">
                                                <div class="col-md-5 aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
                                                    <div class="input-item mb-5">
                                                        <label for="name"><small>Product Key *:</small></label>
                                                        <input class="input-item" name="title[]" type="text" placeholder="title " >
                                                    </div>
                                                </div>
                                                <div class="col-md-5 aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
                                                    <div class="input-item mb-5">
                                                        <label for="name"><small>Product Value *:</small></label>
                                                        <input class="input-item"  name="title_desc[]" type="text" placeholder="body">
                                                    </div>
                                                </div>
                                                <div class="col-md-2 aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
                                                        <br>
                                                        <a href="javascript:void(0)" type="button"  id="addFeture"  class="btn btn-dark btn-hover-success rounded-0">+</a>
                                                </div>
                                            </span>
                                          </span>
                                            <span id="moreFeature"></span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div> <br>

                            <div class=" card contact-form-wrapper contact-form">
                                <h5 class="card-header">Write Description</h5>
                                <div class="col-12 aos-init aos-animate" data-aos="fade-up" data-aos-delay="400">
                                    <div class="input-item mb-8">
                                        {{-- <label for="name"><b>More informations:</b></label> --}}
                                        <textarea class="textarea-item" name="description"  placeholder="Message" style="height: 200px;"></textarea>
                                    </div>
                                </div>
                                
                            </div><br>
                            <center>
                                <div class="col-12 aos-init aos-animate" data-aos="fade-up" data-aos-delay="500">
                                    <button type="submit" id="submit" name="submit" class="btn btn-dark btn-hover-primary rounded-0">Create</button>
                                </div>
                            </center>
              
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Shop Section End -->
@endsection

