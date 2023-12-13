{{-- <div class="section"> --}}
    <div class="container">
        <div class="row">
          <form action="/search" method="post" >
  
            @csrf
           <div class="col-md-12">
            <center class="all-search-box">
                <input  type="search" name="query" id="autocomplete" placeholder="search anything here..." class="input-with-icon">
                <button type="submit" class="search-button">Search</button>
                <span id="search-results"></span>
             </center>
           </div>
          </form>
        </div>
    </div>
{{-- </div> --}}
{{-- <hr> --}}