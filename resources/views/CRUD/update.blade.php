@extends("layouts.user-dashboard-app")
@section("user-dashboard-content")

 <!-- Shop Section Start -->
 <div class="section section-margin">
    <div class="container">
         <div class="card">
               <div class="contact-form-wrapper contact-form">
                <form action="{{ route('crud.update2', $post->id) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="row" id="moreinput">
                       <div class="row">
                       
                        <div class="col-md-6">
                           
                            <input type="text" name="name" value="{{$post->name}}">
                            <button id="btn-add">+</button>
                        </div>
                       </div>
                        @php
                        $title = json_decode($post->title,true);
                        $body = json_decode($post->body,true);
                    @endphp
                    <div class="row" >
                    @foreach ($title as $key=> $value )
                        <div class="col-md-8  " id="moreinput">
                            <input type="text" name="title[]" value="{{$value}}">
                            <input type="text" name="body[]"value="{{$body[$key]}}" >
                            <button class="remove-input">-</button>
                        </div>
                    @endforeach
                  </div>
                    </div>
                    <button type="submit">update</button>
                </form>
                <p class="form-messege"></p>
            </div>
              <div class="col-md-3"> 
                  &nbsp;<a href="{{route('crud.index')}}">Go Back</a>
               </div>
               <br/>
         </div>
         </form>
      </div>
</div>
<!-- Shop Section End -->
@endsection

