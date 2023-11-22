@extends("layouts.user-dashboard-app")
@section("user-dashboard-content")

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
<!-- Shop Section End -->
@endsection