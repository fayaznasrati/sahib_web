@extends("layouts.user-dashboard-app")
@section("user-dashboard-content")

 <!-- Shop Section Start -->
 <div class="section section-margin">
    <div class="container">
         <div class="card">
               <div class="contact-form-wrapper contact-form">
                <form action="{{ route('crud.update', $post->id) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="row" id="moreinput">
                       <div class="row">
                        <div class="col-md-6">
                           
                            <input type="text" name="name" value="{{$post->name}}">
                            <button id="add-btn">+</button>
                        </div>
                       </div>
                        @php
                        $features = json_decode($post->post_details,true);
                        // $body = json_decode($post->body,true);
                    @endphp
                    <div class="row" >
                    @foreach ($features as $key )
                        <div class="col-md-8  ">
                            <input type="text" name="features[key]" value="{{$key['key']}}">
                            <input type="text" name="features[value]"value="{{$key['value']}}" >
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

