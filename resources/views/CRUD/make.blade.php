@extends("layouts.user-dashboard-app")
@section("user-dashboard-content")

<div class="section section-margin">
   <div class="container">
      <form action="{{ route('crud.store') }}" method="POST" enctype="multipart/form-data">
         @csrf
      <div class="row">
      <div class="col-md-6">
         <input type="file" name="images[]" multiple>
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
 {{-- <div class="section section-margin"> --}}
    <div class="container">
        <a href="/crud/create">create</a>
        <table id="mytable" class="table">
           <thead>
              <tr>
                 <th>S.no</th>
                 <th>Name</th>
                 <th>Post ID</th>
                 <th>Poblished at</th>
                 <th>Expired at</th>
                 <th>Status</th>
                 <th>Action</th>

              </tr>
           </thead>
           <tbody>
              @foreach($posts as $key => $post)
              <tr>
                 <td>{{ $key+1 }}</td>
                 <td>{{$post->name}}</td>
                 <td>{{$post->puid}}</td>
                 <td>{{$post->updated_at}}</td>
                 <td>{{$post->expired_at}}</td>

                 <td>
                  <label class="switch">
                     <input data-pid="{{$post->id}}" class="active_deactive_btn" name="status" value={{$post->status}} type="checkbox" {{$post->status == 1? "checked": ""}}>
                     <span class="slider round"></span>
                  </label> 
                  <input type="hidden" name="postid" value="{{$post->id}}">
                   
               </td>

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

