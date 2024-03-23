@extends('layouts/contentNavbarLayout')


@section('page-script')
<script src="{{asset('assets/js/form-basic-inputs.js')}}"></script>
@endsection 
<!-- In your blade template -->

 @section('content')
<h4 class="fw-bold py-3 mb-4">
  <span class="text-muted fw-light">Post /</span> Update Post
 
</h4>
@if(session('success'))
<div class="alert alert-success alert-dismissible" role="alert">
    {{ session('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
    </button>
</div>
@endif

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
        <form action="/admin/admin-post-update/{{ $posts->id }}" method="post" enctype="multipart/form-data">
          @csrf
          @method("put")
        <div class="card">
          <h5 class="card-header">Cover and Images input</h5>
          <div class="card-body">
            <div class="mb-3">
              <label for="formFile" class="form-label">Update Cover</label>
              <input class="form-control" type="file" id="formFile" name="cover">
            </div>
            <div class="mb-3">
              <label for="formFileMultiple" class="form-label">Update Multiple Images</label>
              <input class="form-control" type="file" id="formFileMultiple" name="images[]" multiple>
            </div>
          </div>
        </div><br>
        
        <div class="card mb-4">
          <h5 class="card-header">Post Details</h5>
          <div class="card-body">
            <div class="mb-3 row">
              {{-- <label for="html5-text-input" class="col-md-2 col-form-label">Category & SubCategory:</label> --}}
              <div class="col-md-6">
                <label for="name"><small>Select Category *:</small></label>
              <select name="category_id" id="select-menus" class="form-select" id="exampleFormControlSelect1" aria-label="Default select example">
                <option>Select Category</option>
                @foreach ($menus as $cat)
                <option {{ ($posts->menu_id == $cat->id) ? 'selected' : '' }} value={{ $cat->id }}>{{ $cat->name }}</option>
                @endforeach
            </select>
              </div>
              <div class="col-md-6">
                <label for="name"><small>Select Sub-Category *:</small></label>
                <select class="form-select" name="sub_category_id" id="sub-menu" aria-label="Default select example">
                  <option value="{{$posts->subMenu->id}}">{{$posts->subMenu->name}}</option>
              <!-- here the list come from database using ajax -->
              </select>
              </div>
          </div>
          <div class="mb-3 row">
            <div class="col-md-6">
            <label for="html5-text-input" class="col-form-label">Name:</label>
              <input class="form-control" type="text" name="name" value="{{ $posts->name }}" id="html5-text-input">
            </div>
            <div class="col-md-6">
            <label for="html5-text-input" class="col-form-label">Colors:</label>
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
            <div class="mb-3 row">
              {{-- <label for="html5-search-input" class="col-md-2 col-form-label">old Prices and New price:</label> --}}
              <div class="col-md-6">
                <label for="html5-text-input" class="col-form-label">Old Price:</label>
                <input class="form-control" type="number" value="{{$posts->old_price}}" name="old_price" value="100" id="html5-number-input">
              </div>
              <div class="col-md-6">
               <label for="html5-text-input" class="col-form-label">New Price:</label>
                <input class="form-control" type="number" name="new_price"  placeholder="eg:900 "  value="{{ $posts->new_price }}"  id="html5-number-input">
              </div>
            </div>  
          </div>
        </div>

        <div class="card mb-4">
          <h5 class="card-header">Post Features</h5>
          <div class="card-body">
            @php
            $title = json_decode($posts->title,true);
            $title_desc = json_decode($posts->title_desc,true);
            @endphp
            <div class=" row ">
             <div class="col-md-10 "></div>
              <div class="col-md-2 ">
              {{-- <button type="button"  class="btn btn-warning mt-4 removeFeature">-</button> --}}
              <button type="button" id="addFeture" class="btn btn-success mt-4">+</button>
            </div>
          </div>
          @if ($title !=  null)
          @foreach ($title as $key=> $value )

          <span class="addedinput">
           <div class="mb-3 row " >
             <label for="html5-search-input" class="col-md-2 col-form-label">name and description</label>
             <div class="col-md-4">
               <label for="name"><small>Name *:</small></label>
               <input class="form-control" type="text" name="title[]" value="{{$value}}" id="html5-number-input">
             </div>
             <div class="col-md-4">
               <label for="name"><small>Description *:</small></label>
               <input class="form-control" type="text"  name="title_desc[]" value="{{$title_desc[$key]}}" id="html5-number-input">
             </div>
             <div class="col-md-2">
               <button type="button"  class="btn btn-warning mt-4 removeFeature">-</button>
               {{-- <button type="button" id="addFeture" class="btn btn-success mt-4">+</button> --}}
             </div>
           </div>  
         </span>
           @endforeach 
          @endif
           
            <span id="moreFeature"></span>
          </div>
        </div>
        <div class="card mb-4">
          {{-- <h5 class="card-header">Update Post short Description</h5> --}}
          <div class="card-body">
            <div class="mb-3 row">
              <label for="html5-search-input" class="col-md-5 col-form-label">Update Post short Description</label>
              <div class="col-md-12">
                <textarea class="tinymce-editor form-control" name="short_description">{!! $posts->short_description !!}</textarea>

                {{-- <textarea class="form-control" name="description" id="html5-number-input" cols="30" rows="10">{!! $posts->description !!}</textarea> --}}
              </div>
             
            </div>
            
            <div class="mb-3 row">
              <label for="html5-search-input" class="col-md-5 col-form-label">Update description</label>
              <div class="col-md-12">
                <textarea class="tinymce-editor form-control" name="description">{!! $posts->description !!}</textarea>

                {{-- <textarea class="form-control" name="description" id="html5-number-input" cols="30" rows="10">{!! $posts->description !!}</textarea> --}}
              </div>
             
            </div>
          </div>
        </div>
        <div class="row mt-2 mb-5">
          <div class="d-grid gap-2 col-lg-6 mx-auto">
            <button class="btn btn-info btn-lg" type="submit">Update</button>
          </div>
        </div>
      </form>

  </div>
  </div>
</div>

  @endsection


