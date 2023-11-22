@extends("layouts.user-dashboard-app")
@section("user-dashboard-content")
======================CREATE=========================================
<div class="section section-margin">
   <div class="container">
      <form action="{{ route('crud.store') }}" method="POST" enctype="multipart/form-data">
         @csrf
      <div class="row">
      <div class="col-md-6">
         IMAGES
      </div>
      <div class="col-md-6">
         
         <span class="addedinput">
            <input type="text" name="name" placeholder="name" ><br>
            <input type="text" name="title[]">
            <input type="text" name="body[]" >
            <a href="javascript:void(0)" id="btn-add">+</a>
         </span>
            <span id="moreinput"></span>
            <br>
         <button type="submit">create</button>
         </form>
      </div>
   </div>
</div>
</div>

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
                 <th>Action</th>

              </tr>
           </thead>
           <tbody>
              @foreach($posts as $key => $post)
              <tr>
                 <td>{{ $key+1 }}</td>
                 <td>{{$post->name}}</td>
                 <td>
                 <a href="{{route('crud.show',$post->id)}}">View</a>
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
@endsection

<!-- ======================uPDATE================================= -->
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
                        images
                     </div>
                     <div class="col-md-6">
                  
                     @csrf
                     @method('PUT')
                        <input type="text" value="{{$posts->name}}">
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

