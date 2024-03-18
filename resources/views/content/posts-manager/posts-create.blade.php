@extends('layouts/contentNavbarLayout')


@section('page-script')
    <script src="{{ asset('assets/js/form-basic-inputs.js') }}"></script>
@endsection
<!-- In your blade template -->

@section('content')
    <h4 class="fw-bold py-3 mb-4">
        <span class="text-muted fw-light">Post /</span> Create Post

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
            <form action="{{ route('admin-post-store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-4">
                        <img style="height:100px; width:auto" id="CoverImagePreview" src="#" alt="Preview">

                        <br>

                        <span id="MultiImagePreviewContainer"></span>
                    </div>
                    <div class="col-md-8">
                        <div class="card">
                            <h5 class="card-header">Cover and Images input</h5>
                            <div class="card-body">
                                <div class="mb-3">
                                    <label for="formFile" class="form-label">Choose Cover</label>
                                    <input class="form-control" accept="image/*" type="file" id="coverImage"
                                        name="cover">
                                </div>
                                <div class="mb-3">
                                    <label for="formFileMultiple" class="form-label">Choose Images</label>
                                    <input class="form-control" type="file" id="multiImage"name="images[]" multiple>
                                </div>
                            </div>
                        </div> <br>

                       <!--section Title End -->
                        <div class="card">
                            <h5 class="card-header">Post Details</h5>
                            <div class="card-body">
                                <div class="contact-form-wrapper contact-form">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-md-6 aos-init aos-animate" data-aos="fade-up"
                                                    data-aos-delay="300">
                                                    <div class="input-item mb-4">
                                                        <label for="name"><small>Select Category *:</small></label>
                                                        <select class="form-control" name="category_id"id="select-menus"
                                                            type="text" class="input-item">
                                                            <option>Select Category</option>
                                                            @foreach ($menus as $cat)
                                                                <option value={{ $cat->id }}>{{ $cat->name }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 aos-init aos-animate" data-aos="fade-up"
                                                    data-aos-delay="300">
                                                    <div class="input-item mb-4">
                                                        <label for="name"><small>Select Sub-Category *:</small></label>
                                                        <select class="form-control" name="sub_category_id"id="sub-menu"
                                                            type="text" class="input-item">
                                                            <option value="#">Select sub-Category</option>
                                                            {{-- here the list come from database using ajax --}}
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 aos-init aos-animate" data-aos="fade-up"
                                                    data-aos-delay="300">
                                                    <div class="input-item mb-4">
                                                        <label for="name"><small>Product Name *:</small></label>
                                                        <input class="form-control" type="text"
                                                            placeholder="Toyota Corola" name="name">
                                                    </div>
                                                </div>

                                                <div class="col-md-6 aos-init aos-animate" data-aos="fade-up"
                                                    data-aos-delay="300">
                                                    <div class="input-item mb-4">
                                                        <label for="name"><small>Product Colors *:</small></label>
                                                        <select class="form-control" multiple data-role="tagsinput"
                                                            placeholder="eg: red" name="colors[]">
                                                            {{-- <option value="">Red</option> --}}
                                                        </select>
                                                    </div>
                                                </div>

                                                <span class="row ">
                                                    <div class="col-md-6 aos-init aos-animate" data-aos="fade-up"
                                                        data-aos-delay="300">
                                                        <div class="input-item mb-5">
                                                            <label for="name"><small>old price:</small></label>
                                                            <input class="form-control" name="old_price" type="text"
                                                                placeholder="eg:1000 ">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 aos-init aos-animate" data-aos="fade-up"
                                                        data-aos-delay="300">
                                                        <div class="input-item mb-5">
                                                            <label for="name"><small>new Price *:</small></label>
                                                            <input class="form-control" name="new_price" type="text"
                                                                placeholder="eg:900 ">
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
                                                <label for="html5-search-input" class="col-md-2 col-form-label">name and
                                                    description</label>
                                                <div class="col-md-4 aos-init aos-animate" data-aos="fade-up"
                                                    data-aos-delay="300">
                                                    <div class="input-item mb-5">
                                                        <label for="name"><small>Product Key *:</small></label>
                                                        <input class="form-control" name="title[]" type="text"
                                                            placeholder="title ">
                                                    </div>
                                                </div>
                                                <div class="col-md-4 aos-init aos-animate" data-aos="fade-up"
                                                    data-aos-delay="300">
                                                    <div class="input-item mb-5">
                                                        <label for="name"><small>Product Value *:</small></label>
                                                        <input class="form-control" name="title_desc[]" type="text"
                                                            placeholder="body">
                                                    </div>
                                                </div>
                                                <div class="col-md-2 aos-init aos-animate" data-aos="fade-up"
                                                    data-aos-delay="300">
                                                    <br>
                                                    <a href="javascript:void(0)" type="button" id="addFeture"
                                                        class="btn btn-dark btn-hover-success rounded-0">+</a>
                                                </div>
                                            </span>
                                        </span>
                                        <span id="moreFeature"></span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div> <br>

                        <div class="card mb-4">
                            <h5 class="card-header">Write short Description</h5>
                            <div class="card-body">
                                <div class="mb-3 row">
                                    <div class="col-md-12">
                                        <textarea class="tinymce-editor form-control" name="short_description"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>

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
                                <button type="submit" id="submit" name="submit"
                                    class="btn btn-dark btn-hover-primary rounded-0">Create</button>
                            </div>
                        </center>

            </form>
        </div>
    </div>
@endsection
