@extends('layouts/contentNavbarLayout')

@section('title', 'menus')

@section('page-script')
<script src="{{asset('assets/js/form-basic-inputs.js')}}"></script>
@endsection
<!-- In your blade template -->

@section('content')
<h4 class="fw-bold py-3 mb-4">
  <span class="text-muted fw-light">Posts Manager / </span> Posts List
 
</h4>
@if(session('success'))
<div class="alert alert-success alert-dismissible" role="alert">
    {{ session('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
    </button>
</div>
@endif
<div class="row">

    <div class="card mb-4">
      <h5 class="card-header">Filter Posts by:</h5>
      <div class="card-body">
    <form action="{{ route('menus.store') }}" method="POST" enctype="multipart/form-data">
     @csrf
        <div class="form-floating">
            <div class="row">

                <div class="col-md-3 ">
                    <label for="exampleFormControlSelect1" class="form-label">Select Category</label>
                    <select name="category_id" id="select-menus" class="form-select" id="exampleFormControlSelect1" aria-label="Default select example">
                        <option>Select Category</option>
                        @foreach ($menus as $menu)
                        <option value={{ $menu->id }}>{{ $menu->name }}</option>
                        @endforeach
                    </select>
                  </div>
                  <div class="col-md-3  ">
                    <label for="exampleFormControlSelect1" class="form-label">Select Subcategory</label>
                    <select class="form-select" name="sub_category_id" id="sub-menu" aria-label="Default select example">
                        <option value="#">Select sub-Category</option>
                        <option value="default"></option>
                    {{-- here the list come from database using ajax --}}
                    </select>
                  </div>
                  <div class="col-md-3  ">
                    <label for="exampleFormControlSelect1" class="form-label">Status</label>
                    <select class="form-select" id="exampleFormControlSelect1" aria-label="Default select example">
                      <option selected="">Select Status</option>
                      <option value="1">Active</option>
                      <option value="0">Deactive</option>
                    </select>
                  </div>
                <div class="col-md-3  ">
                    <label for="exampleFormControlInput1" class="form-label">Post ID</label>
                    <input class="form-control" type="search" value="Search ..." id="html5-search-input">
                </div>
                <div class="col-md-3  ">
                    <label for="html5-date-input" class="form-label">From</label>
                      <input class="form-control" type="date" value="2022-06-18" id="html5-date-input">
                  </div>
                  <div class="col-md-3  ">
                    <label for="html5-date-input" class="form-label">To</label>
                      <input class="form-control" type="date" value="2023-07-18" id="html5-date-input">
                  </div>
                  <div class="col-md-3 mt-3 ">
                    <div class="d-grid col-md-12 mx-auto">
                    <label for="html5-date-input" class="form-label"></label>
                    <button type="submit" class="btn btn-dark">Submit</button>
                  </div>
                </div>
                <div class="col-md-3 mt-3 ">
                  <div class="d-grid col-md-12 mx-auto">
                  <label for="html5-date-input" class="form-label"></label>
                  <button type="reset" class="btn btn-warning">clear</button>
                </div>
              </div>
            </div>

          </div>
        </form>
      </div>
    </div>

{{-- table of menus --}}
<!-- Basic Bootstrap Table -->
<!-- Striped Rows -->
<div class="card">
    <h5 class="card-header">Posts List</h5>
    <div class="table-responsive text-nowrap">
      <table class="table table-striped">
        <thead>
          <tr>
            <th>#No</th>
            <th>Post ID</th>
            <th>Cover</th>
            <th>Images</th>
            <th>Category</th>
            <th>Sub Category</th>
            <th>Name</th>
            <th>Price</th>
            <th>Poblished at</th>
            <th>Expires In</th>
            <th>Colors</th>
            {{-- <th>Description</th> --}}
            <th>Status</th>
            <th>Actions</th>
          </tr>
        </thead>
<tbody class="table-border-bottom-0">
            @php $i = 1 @endphp
         @foreach ($posts as $post )
          <tr>
            <td>{{$i++}}</td>
            <td>{{$post->puuid}}</td>
            <td><img src="../cover/{{$post->cover}}" alt="post image" style="height: auto; width:40px"></td>
            <td>
                <ul class="list-unstyled users-list mb-4 avatar-group d-flex align-items-center">
                  @if (count($post->images) > 0)
                    @foreach ($post->images as $img) 
                        <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="{{ $post->name }}">
                            <img src="/images/{{ $img->image }}" alt="post image" style="height: 40px; width:60px" >
                        </li>
                    @endforeach
                  @endif
                </ul>
              </td>
            <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{$post->menu->name}}</strong></td>
            <td>{{$post->subMenu->name}}</td>
            <td>{{$post->name}}</td>
            <td>{{$post->new_price}}</td>
            <td>{{$post->updated_at}}</td>
             <td>
              @if (\Carbon\Carbon::now()>= \Carbon\Carbon::parse($post->expired_at))
              <span style="color: red">Expired at {{\Carbon\Carbon::parse($post->expired_at)->format('Y-m-d')}}</span>
                @else
               Expires in {{ \Carbon\Carbon::parse($post->expired_at)->diffInDays(\Carbon\Carbon::now()) }} days
              @endif
            
            </td>
            {{-- <td data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="in 30 days will be expired after date of its createtion">{{$post->exprire_at == null ?  \Carbon\Carbon::parse($post->expired_at)->diffInDays(\Carbon\Carbon::now()) : $post->exprire_at}}</td> --}}
            <td>
                @php $colors = json_decode($post->colors) @endphp
                 <table>
                    <tr>
                      @if ($colors != null)
                        @foreach ($colors as $key  )
                        <td><div style="background-color:{{$key}}; border: 4px solid {{$key}};"></div></td>
                        {{-- <td>{{$key}}</td> --}}                     
                        @endforeach
                        @else
                        <td>No Colors</td>
                        @endif
                   </tr> 
                 </ul>
                 </table>
                {{-- <td> <small> {!! Str::limit($post->description,20)!!} </small> </td> --}}
                <td>
                 <div class="form-check form-switch mb-2">
                  <input data-pid="{{$post->id}}" class="form-check-input admin_post_status_btn" type="checkbox" id="flexSwitchCheckChecked" {{$post->status == 1? "checked": ""}}>
                 </div>
                <input type="hidden" name="postid" value="{{$post->id}}">   
             </td>
            <td>
              <div class="dropdown">
                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="{{route('admin-post-edit',$post->id)}}"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                  <a class="dropdown-item" href="{{route('admin-post-show',$post->id)}}"><i class="bx bx-show-alt me-1"></i> View</a>
                  <form id="delete-form" action="{{ route('admin-post-delete', $post->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button  class="dropdown-item" type="submit" ><i class="bx bx-trash me-1"></i>Delete</button>                  
                    </form>
                </div>
              </div>
            </td>
          </tr>
          @endforeach
  </tbody>
      </table>

    </div>
  {{ $posts->links() }}
<br>
  </div>

  <!--/ Striped Rows -->
@endsection


