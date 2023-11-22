@extends("layouts.user-dashboard-app")
@section("user-dashboard-content")

 <!-- Shop Section Start -->
 <div class="section section-margin">
    <div class="container">
         <div class="card">
        
               <div class="card-header">View Data</div>
               <div class="card-body">
                  
               <form action="{{ route('crud.update', $posts->id) }}" method="post">
                  <div class="row">
                     <div class="col-md-6">
                        @foreach ($posts->postImages as $img )
                        <img src="{{asset($img->url)}}" alt="{{$img->id}}" srcset="">
                          @endforeach
                       
                     </div>
                     <div class="col-md-6">
                        {{-- {{$posts->status == 1 ? 'ac' : 'dea '}} --}}
                        <select name="status" >
                           <option {{$posts->status == 1 ? 'selected': ''}} value="1">Active</option>
                           <option {{$posts->status == 0 ? "selected": ''}} value="0">deactive</option>
                       </select>
                     @csrf
                     @method('PUT')
                        <input type="text" name="name" value="{{$posts->name}}">
                        <a href="javascript:void(0)"  id="btn-add">+</a>
                        <br>
                     @php
                     $title = json_decode($posts->title,true);
                     $body = json_decode($posts->body,true);
                     @endphp
                   
                     @foreach ($title as $key=> $value )
                     <span class="addedinput">
                        <input type="text" name="title[]" value="{{$value}}">
                        <input type="text" name="body[]" value="{{$body[$key]}}">
                        <a href="javascript:void(0)"  class="remove-input">-</a>
                     </span>
                       
                     
                     @endforeach
                     <span id="moreinput"></span> <br>
                     <button type="submit">update</button>
                  </div>
                   
                  </div>
               </form>

           
         </div>                     
             
            </div>
      </div> 
      </div>  
     </div>
 

<!-- Shop Section End -->
@endsection

