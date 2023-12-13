@extends("layouts.user-dashboard-app")
@section("user-dashboard-content")

 <!-- Shop Section Start -->
 <div class="section" > <br>

    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <p>Cover:</p>
                <form action="/deletecover/{{ $posts->id }}" method="post">
                <button class="btn text-danger">X</button>
                @csrf
                @method('delete')
                </form>
                <img src="/cover/{{ $posts->cover }}" class="img-responsive" style="max-height: 100px; max-width: 100px;">
                <br>
                 @if (count($posts->images)>0)
                 <p>Images:</p>
                <div class="images-parents row">
                    @foreach ($posts->images as $img)
                    <div class="images-child col-md-4">
                        <form action="/deleteimage/{{ $img->id }}" method="post">
                            <button class="btn text-danger">X</button>
                            @csrf
                            @method('delete')
                        </form>
                        <img src="/images/{{ $img->image }}" class="img-responsive" style="max-height: 100px; max-width: 100px;">
                    </div>
                    @endforeach
                </div>
                 @endif
            </div>
            <div class="col-md-8">
                <form action="/user/post/{{ $posts->id }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method("put")
                        <!-- Section Title Start -->
                        <div class="section-title aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
                            <h2 class="title pb-3">Product Information</h2>
                            <span></span>
                            <div class="title-border-bottom"></div>
                        </div>
                        <div class="card">
                            <h5 class="card-header">Cover and Images input</h5>
                            <div class="card-body">
                              <div class="mb-3">
                                <label for="formFile" class="form-label">Update Cover</label>
                                <input class="form-control" type="file" id="formFile" name="cover">
                              </div>
                              <div class="mb-3">
                                <label for="formFileMultiple" class="form-label">Update Images</label>
                                <input class="form-control" type="file" id="formFileMultiple"name="images[]" multiple>
                              </div>
                            </div>
                          </div> <br>
                        {{-- <label class="m-2">Cover Image</label>
                        <input type="file" id="input-file-now-custom-3" class="form-control m-2" name="cover">
                        <label class="m-2">Images</label>
                        <input type="file" id="input-file-now-custom-3" class="form-control m-2" name="images[]" multiple>
                    --}}
                    <div class="card">
                        <h5 class="card-header">Post Details</h5>
                        <div class="card-body">
                        <div class="contact-form-wrapper contact-form">
                          <div class="row">
                            <div class="col-md-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
                                <div class="input-item mb-4">
                                    <label for="name"><small>Select Category *:</small></label>
                                    <select name="category_id" id="select-category" type="text" class="input-item">
                                        <option>Select Category</option>
                                        @foreach ($menus as $menu)
                                        <option {{ ($posts->menu_id == $menu->id) ? 'selected' : '' }} value={{ $menu->id }}>{{ $menu->name }}</option>
                                        @endforeach
                                        <option></option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
                                <div class="input-item mb-4">
                                    <label for="name"><small>Select Sub-Category *:</small></label>
                                    <select id="sub-category" name="sub_category_id">
                                        <option value="{{$posts->subMenu->id}}">{{$posts->subMenu->name}}</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                       
                        <div class="col-md-12 aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
                            <div class="input-item mb-4">
                                <label for="name"><small>Product Name *:</small></label>
                                <input class="input-item" type="text" placeholder="Toyota Corola" name="name" value="{{ $posts->name }}">
                            </div>
                        </div>
                    
                        <div class="col-md-12 aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
                            <div class="input-item mb-4">
                                <label for="name"><small>Product Colors *:</small></label>
                                @php
                                    $colors = json_decode($posts->colors,true);
                                @endphp
                                
                               @if ($colors != null)
                               <select class="input-item" multiple data-role="tagsinput"  placeholder="eg: red" name="colors[]" >
                                @foreach ($colors as $color )
                                    <option value="{{$color}}">{{$color}}</option>
                                @endforeach
                            </select>
                               @else
                               <select class="input-item" multiple data-role="tagsinput"  placeholder="eg: red" name="colors[]">
                                   {{-- <option value="red">Red</option> --}}
                               </select>
                               @endif
                            </div>
                        </div>
                        <span class="row ">
                            <div class="col-md-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
                                <div class="input-item mb-5">
                                    <label for="name"><small>old price:</small></label>
                                    <input class="input-item" name="old_price" type="text" placeholder="eg:1000 " value="{{ $posts->old_price }}" >
                                </div>
                            </div>
                            <div class="col-md-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
                                <div class="input-item mb-5">
                                    <label for="name"><small>new Price *:</small></label>
                                    <input class="input-item" name="new_price" type="text" placeholder="eg:900 "  value="{{ $posts->new_price }}" >
                                </div>
                            </div>
                        </span>
                    </div>
                </div>
            </div>
            <br>
            <div class="card">
                <h5 class="card-header"><b>Add more features</b></h5>
                <div class="card-body">
                <div class="contact-form-wrapper contact-form">
                        <span class="row ">
                            <div class="col-md-10"></div>
                            <div class="col-md-2">
                            <a href="javascript:void(0)" type="button"  id="addFeture"  class="btn btn-dark btn-hover-success rounded-0">+</a>
                            </div>
                         </span>
                            @php
                            $title = json_decode($posts->title,true);
                            $title_desc = json_decode($posts->title_desc,true);
                            @endphp
                        @foreach ($title as $key=> $value )
                        <span class="addedinput">
                            <span class="row ">
                                <div class="col-md-5 aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
                                    <div class="input-item mb-5">
                                        <label for="name"><small>Product Key *:</small></label>
                                        <input class="input-item" name="title[]" type="text" placeholder="title "  value="{{$value}}" >
                                    </div>
                                </div>
                                <div class="col-md-5 aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
                                    <div class="input-item mb-5">
                                        <label for="name"><small>Product Value *:</small></label>
                                        <input class="input-item"  name="title_desc[]" type="text" placeholder="description" value="{{$title_desc[$key]}}">
                                    </div>
                                </div>
                                <div class="col-md-2 aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
                                        <br>
                                        <a href="javascript:void(0)"  class="btn btn-dark btn-hover-success rounded-0 removeFeature">-</a>
                                </div>
                            </span>
                        </span>
                        @endforeach
                        <span id="moreFeature"></span>

                </div>
                </div>
            </div><br>
            {{-- <div class="card ">
                <h5 class="card-header"><b>More informations:</h5>
                <div class="card-body pr-4" > --}}
                <div class=" card contact-form-wrapper contact-form">
                    <h5 class="card-header">Update Description</h5>
                        <div class=" aos-init aos-animate" data-aos="fade-up" data-aos-delay="400">
                            <div class="input-item mb-8">
                                {{-- <label for="name"><small>More informations:</small></label> --}}
                                <textarea style="margin-right: 20px" class="textarea-item" name="description"  placeholder="Message" style="height: 200px;">
                                    {!! $posts->description !!}
                                </textarea>
                            </div>
                        </div>

               </div> <br>
                     <center>
                        <div class="col-12 aos-init aos-animate" data-aos="fade-up" data-aos-delay="500">
                            <button type="submit" id="submit" name="submit" class="btn btn-dark btn-hover-primary rounded-0">َUpdate</button>
                        </div>
                    </center>
                        <p class="col-8 form-message mb-0"></p>
                    </div>
                </form>      
            </div>
        </div>
    </div>
 </div>
@endsection


