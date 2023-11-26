@extends('layouts/contentNavbarLayout')

@section('title', 'menus')

@section('page-script')
<script src="{{asset('assets/js/form-basic-inputs.js')}}"></script>
@endsection
<!-- In your blade template -->

@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
            
  <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">User Management /</span><a href="/admin/users-manager">Users</a>/ User Details</h4>
</div>
<div class="row">
  <div class="col-lg">
    <div class="card">
      <div class="card-body">
           <!-- Product Summery Start -->
           <div class="product-summery position-relative">
            <div class="row pt-0">
              <div class="col-md-4">
                @if ($users->dp_image !=null)
                  <img class="card-img-top" src="../../../dp_images/{{$users->dp_image}}" alt="user-image" style="max-height: 100%;">
                  @else
                  <img src="{{asset('assets/img/avatars/no-user-img.png')}}" alt="No-Image" style="max-height: 100%;"/>
                @endif
              </div>
              <div class="col-md-8">
          <span><b>Role:</b>{{$users->role == 1 ? "admin": "user"}}</span> <br>
          <span><b>Name:</b>{{$users->name}}</span> <br>
          <span><b>Status:</b><span class="badge bg-label-{{$users->status==1? 'success': 'danger'}} me-1">{{$users->status==1? 'Active': 'Deactive'}}</span> <br>
          <span><b>Mobile:</b> {{$users->mobile}}</span><br>
          <span><b>WhatsApp:</b> {{$users->whatsapp}}</span><br>
          <span><b>Email:</b> {{$users->email}}</span><br>
          <span><b>Address:</b> {{$users->address}}</span><br>
          <span><b>City:</b> {{$users->afgCity}}</span><br>
          <span><b>zip code:</b> {{$users->zip_code}}</span><br>
          <span><b>Nomber of Posts: </b>{{count($posts) <=0 ? " No Post Yet!" : count($posts) }} Created </span>
          <ul>
            @foreach ($posts as $post )
            <li class="mb-2">
              <img  src="../../../cover/{{$post->cover}}" alt="user-image" style="max-height: 30px;max-width: 30px;">
              <a target="_blank" href="{{$post->puuid}}">{{$post->name}}</a></li> 
            @endforeach
          </ul> <br>
              </div>
            </div>
        </div>
      </div>
      

    </div>
  </div>


</div>

@endsection


