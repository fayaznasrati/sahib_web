@extends("layouts.user-dashboard-app")
@section("user-dashboard-content")

 <!-- Shop Section Start -->
 <div class="section section-margin">
    <div class="container">
        <div class="row">
            <div class="section section-margin">
                <div class="container">
                    <div class="row mb-n10">
                        <div class="col-12 col-md-4 col-lg-4 mb-10" >
                            You Can Upload Multiple image <hr>
                            <div class=" aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
                                <span class="tips">Multiple images, press <b>Ctrl</b> & Click on images</span>
                                <div class="input-item">
                                    <input class="input-item" type="file" multiple id="input-file" name="image">
                                    <label for="input-file" class="custom-file-label">Choose files</label>
                                </div>
                            </div>
                            <span class="temp-image">
                                <img src="assets/images/banner/banner-3.jpg">
                                <img src="assets/images/banner/banner-3.jpg">
                                <img src="assets/images/banner/banner-3.jpg">
                            </span>
                        </div>
                        <div class="col-12 col-md-8 col-lg-8 mb-10">
                            <!-- Section Title Start -->
                            <div class="section-title aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
                                <h2 class="title pb-3">Product Information</h2>
                                <span></span>
                                <div class="title-border-bottom"></div>
                            </div>
                            <!-- Section Title End -->
                            <!-- Contact Form Wrapper Start -->
                            <div class="contact-form-wrapper contact-form">
                                {{-- <h1 id="targetTable">Target Table</h1> --}}

                                <form action="{{ route('crud.submit') }}" method="POST" enctype="multipart/form-data">
                                    {{-- <form id="data-form"> --}}
                                    @csrf
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="row">
                                           
                                                <div class="col-md-12 aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
                                                    <div class="input-item mb-4">
                                                        <label for="name"><small>Product Name *:</small></label>
                                                        <input class="input-item" type="text" placeholder="Toyota Corola" name="name">
                                                    </div>
                                                </div>
                                                <span class="row ">
                                                <span id="moreInfo">
                                                      <span class="row ">
                                                        <div class="col-md-5 aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
                                                            <div class="input-item mb-5">
                                                                <label for="name"><small>Feature Name *:</small></label>
                                                                <input class="input-item" name="features[]" type="text" placeholder="Key " >
                                                            </div>
                                                        </div>
                                                        <div class="col-md-5 aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
                                                            <div class="input-item mb-5">
                                                                <label for="name"><small>Feature Value *:</small></label>
                                                                <input class="input-item"  name="features[]" type="text" placeholder="Value">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2 aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
                                                                <br>
                                                                <button  id="add-btn"  class="btn btn-dark btn-hover-success rounded-0" >Add More</button>
                                                        </div>
                                                    </span>
                                                </span>
                                                
                                            </span>
                                                <div class="col-12 aos-init aos-animate" data-aos="fade-up" data-aos-delay="500">
                                                    <button type="submit" id="submit" name="submit" class="btn btn-dark btn-hover-primary rounded-0">Create</button>
                                                </div>
                                                <p class="col-8 form-message mb-0"></p>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <p class="form-messege"></p>
                            </div>
                            <!-- Contact Form Wrapper End -->
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Shop Section End -->
<hr>
 <!-- Shop Section Start -->
 <div class="section section-margin">

    <div class="container">
        <a href="/crud/create">create</a>
        <table class="table">
           <thead>
              <tr>
                 <th>S.no</th>
                 <th>Name</th>
                 <th>post-ID</th>
                 <th>Exprired Data</th>
                 <th>Action</th>

              </tr>
           </thead>
           <tbody>
              @foreach($posts as $key => $post)
              <tr>
                 <td>{{ $key+1 }}</td>
                 <td>{{$post->name}}</td>
                 <td>{{$post->puid}}</td>
                 {{-- <td>{{$post->expired_at}}</td> --}}
                 <td>
                    <a href="/crud2/{{$post->id}}/edit">Edit</a>
                 <form action="{{ route('crud.destroy', $post->id) }}" method="post">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                </form>
               </td>
              </tr>
           </tbody>
           @endforeach
        </table>
     </div>
<!-- Shop Section End -->
@endsection

