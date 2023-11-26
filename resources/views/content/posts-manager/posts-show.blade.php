@extends('layouts/contentNavbarLayout')

@section('title', 'menus')

@section('page-script')
<script src="{{asset('assets/js/form-basic-inputs.js')}}"></script>
@endsection
<!-- In your blade template -->

@section('content')

<div class="row">
  <!-- Bootstrap carousel -->
  {{-- <div class="col-md-2"></div> --}}
    <div class="col-md-6">
        <div class=" mb-3">
          <h5 class="my-4">Post Cover Image</h5>
          <img class="card-img-top" src="../../../cover/{{$posts->cover}}" alt="Product" style="max-height: 100%;">
       </div>
  </div>
  <div class="col-md-6">
    <h5 class="my-4">Post Images</h5>
    @php $i = 0; @endphp
    <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
      <ol class="carousel-indicators">
        <li data-bs-target="#carouselExample" data-bs-slide-to="{{$i}}" class="active"></li>

       
        @if (count($posts->images)>0)
        @foreach ($posts->images as $img)
        <li data-bs-target="#carouselExample" data-bs-slide-to="{{++$i}}"></li>
        @endforeach
        @endif
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="../../../cover/{{$posts->cover}}" alt="{{$i}}" />
        </div>

        @if (count($posts->images)>0)
        @foreach ($posts->images as $img)
        <div class="carousel-item">
          <img class="d-block w-100" src="../../../images/{{ $img->image }}" alt="{{$i++}}" />
        </div>
        {{-- <div class="carousel-item">
          <img class="d-block w-100" src="{{asset('assets/img/elements/18.jpg')}}" alt="Third slide" />
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="{{asset('assets/img/elements/18.jpg')}}" alt="Third slide" />
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="{{asset('assets/img/elements/18.jpg')}}" alt="Third slide" />
        </div> --}}
        @endforeach
        @endif
      </div>
      <a class="carousel-control-prev" href="#carouselExample" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExample" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </a>
    </div>
  </div>
  <!-- Bootstrap crossfade carousel -->
  {{-- <div class="col-md-2"></div> --}}
</div><hr>
<center><h1>Post Details</h1></center>
<div class="row">
  <div class="col-lg">
    <div class="card">
      <div class="card-body">
           <!-- Product Summery Start -->
           <div class="product-summery position-relative">
            <div class="row pt-0">
                <div class="col-md-12">
                    <!-- Product Head Start -->
                    <div class="product-head mb-3">
                        <h2 class="product-title">{{$posts->name}}</h2>
                        <b>Category: </b>{{$posts->menu->name}} <br>
                      <b>  Subcategory:</b> {{$posts->subMenu->name}}
                    </div>
                    <!-- Product Head End -->

                    <!-- Price Box Start -->
                    <div class="price-box mb-2">
                      <b>price: </b>  <span ><img  style="height: 20px;width:20px" src="{{asset('assets/images/logo/m-afg.png')}}" alt="Afg"> {{$posts->new_price}} </span><br>
                       <b>old price: </b> <span> <del><img style="height: 20px;width:20px" src="{{asset('assets/images/logo/m-afg.png')}}" alt="Afg">{{$posts->old_price}}</del> </span>
                    </div>
                    <!-- Price Box End <span class="badge bg-label-warning me-1">Pending</span> -->
                    <!-- SKU Start -->
                    <div class="sku mb-3">
                        <span><b>Status:</b><span class="badge bg-label-{{$posts->status==1? 'success':'warning'}} me-1">{{$posts->status==1? 'Active':'Deactive'}}</span></span> <br>
                        <span><b>Poblished at:</b> {{$posts->updated_at}}</span><br>
                        <span><b>Expired at:</b> {{$posts->expired_at}}</span><br>
                        <span><b>ProCode:</b> {{$posts->puid}}</span><br>
                    </div>
                    <!-- SKU End -->
                </div>
            </div>

            <!-- Description Start -->
            {{-- <p class="desc-content mb-5"><b>Description: </b> {!! $posts->description!!}</p> --}}
            <dl class="sku mb-3">
              <span><b>description:</b> {!! $posts->description!!}</span><br>
            </dl>
            <!-- Description End -->
            <!-- Product Color Variation Start -->
              <div id="show-post-colors">
                 @php
                 $colors = json_decode($posts->colors)
                 
             @endphp
             <b>Colors:</b>
             @foreach ($colors as $col)
             <div id="show-post-colors" style="background-color:{{$col}}; border: 2px solid {{$col}};"></div>
             @endforeach  
               </div>
            <!-- Product Color Variation End -->
            <div class="size-tab table-responsive-lg">
                <h4 class="title-3 mb-4"><b>Fetures</b></h4>
                <table class="table  mb-0">
                    <tbody>
                       @php
                       $title = json_decode($posts->title,true);
                       $title_desc = json_decode($posts->title_desc,true);
                       @endphp
                    @foreach ($title as $key=> $value )
                        <tr>
                            <td class="cun-name"><span>{{$value}}</span></td>
                            <td>{{$title_desc[$key]}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <!-- start table of content -->
        </div>
      </div>
      

    </div>
  </div>
  <hr>
  <center><h1>Creator Details</h1></center>
   <!-- SKU Start -->
   <div class="col-md">
    <div class="card">
      <div class="card-body">
        <div class="sku mb-3">
          <span><b>Author Name:</b>{{$posts->user->name}}</span> <br>
          <span><b>Mobile:</b> {{$posts->user->mobile}}</span><br>
          <span><b>WhatsApp:</b> {{$posts->user->whatsapp}}</span><br>
          <span><b>Email:</b> {{$posts->user->email}}</span><br>
          <span><b>Address:</b> {{$posts->user->name}}</span><br>
          <span><b>City:</b> {{$posts->user->afgCity}}</span><br>
          <span><b>zip code:</b> {{$posts->user->zip_code}}</span><br>
      </div>
      </div>
      </div>
   </div>
<!-- SKU End -->

</div>

@endsection


