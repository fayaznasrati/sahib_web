@extends("layouts.seller-dashboard-app")
@section("seller-dashboard-content")

 <!-- Shop Section Start -->
 <div class="section ">
  <br><br>
    <div class="container">
        <div class="row">
          <div class="card">
            <h5 class="card-header">Product List</h5>
            <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Cover</th>
                      <th>Name</th>
                      <th>Price</th>
                      <th>Expires</th>
                      <th>Post ID</th>
                      <th>Category</th>
                      <th>Subcategory</th>
                      <th>color</th>
                      <th>Status</th>
                      <th>Description</th>
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    @php
                        $i = 1
                    @endphp
                   @foreach ($posts as $post )
                    <tr style="font-size:12px;">
                        <td>{{$i++}}</td>
                        <td><img src="../../../cover/{{$post->cover}}" alt="{{$post->name}}" style="height: auto; width:50px"></td>
                        <td>{{$post->name}}</td>
                        <td>{{$post->new_price}}</td>
                        <td>
                          @if (\Carbon\Carbon::now()> \Carbon\Carbon::parse($post->expired_at))
                          <span style="color: red">Expired at {{\Carbon\Carbon::parse($post->expired_at)->format('Y-m-d')}}</span>

                            @else
                           Expires in {{ \Carbon\Carbon::parse($post->expired_at)->diffInDays(\Carbon\Carbon::now()) }} days
                          @endif
                        
                        </td>
                        <td>{{$post->puuid}}</td>
                        <td>{{$post->menu->name}}</td>
                        <td>{{$post->subMenu->name}}</td>
                        <td>
                        @php
                            $colors = json_decode($post->colors)
                        @endphp
                         <table>
                          @if ($colors != null)
                          @foreach ($colors as $key  )
                          <tr>
                            <td><div id="post-colors" style="background-color:{{$key}}; border: 2px solid {{$key}};"></div></td>
                            <td>{{$key}}</td>
                          </tr>                        
                          @endforeach 
                          @else
                          <td>No Colors</td>                           
                          @endif
                         </ul>
                         </table>
                         <td
                         data-toggle="tooltip" data-placement="top" title="{{$post->status==0? 'Will be Activated After Review': 'Approved'}}"
                          style="color: {{$post->status==0? "red": 'green'}};width:40px">{{$post->status==0? 'pending': 'active'}}</td>
                        <td>
                          <small>
                           View to see descriptions
                            {{-- {!!  Str::limit($post->description,20) == null? "" : ""!!} --}}
                          </small>
                        </td>
                        <td class="data-table-action">
                          <a href="product/{{$post->id}}/edit" data-toggle="tooltip" data-placement="left" title="Edit Item"><i class="pe-7s-pen"></i></a>
                          <a href="product/{{$post->id}}"data-toggle="tooltip" data-placement="left" title="View Item"><i class="pe-7s-look"></i></a>
              
                          <form action="product/{{ $post->id }}" method="post">
                            @csrf
                            @method('delete')
                           <button id="deleteBtn" type="submit" onclick="return confirm('Are you sure?');" >
                            <a href="javascript:void(0)" class="delete-icon"data-toggle="tooltip" data-placement="left"  title="Delete Item">
                              <i class="pe-7s-trash"></i>
                            </a>
                          </button>
                        </form>
                        </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
                {{ $posts->links() }} 
              </div>
            </div>
            </div>
          </div>
    </div>
</div>

@endsection