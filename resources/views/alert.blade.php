{{-- @if(session('success'))
<div>
  {{ session('success') }}
</div>
@endif

@if(session('error'))
<div>
  {{ session('error') }}
</div>
@endif --}}
{{-- @if(session('success'))
<div class="card">
  <h5 class="card-header">Dismissible Alerts</h5>
  <div class="card-body">
<div class="alert alert-success alert-dismissible" role="alert">
    {{ session('success') }}
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
  </button>
</div>
@endif
</div>
</div>

@if(session('error'))
<div class="card">
  <h5 class="card-header">Dismissible Alerts</h5>
  <div class="card-body">
<div class="alert alert-danger alert-dismissible" role="alert">
    {{ session('error') }}
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
  </button>
</div>
@endif
</div>
</div> --}}






{{-- <div class="col-md"> --}}
    {{-- <div class="card"> --}}
      {{-- <h5 class="card-header">Dismissible Alerts</h5>
      <div class="card-body"> --}}
        @if(session('error'))
        <div class="alert alert-primary alert-dismissible" role="alert">
          {{session('error')}}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
          </button>
        </div>
        @endif
        @if(session('success'))
        <div class="alert alert-info alert-dismissible" role="alert">
            {{ session('success') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
          </button>
        </div>
        @endif
        {{-- </div> --}}
        {{-- </div> --}}
      {{-- </div> --}}
{{-- 
        <div class="alert alert-secondary alert-dismissible" role="alert">
          This is a secondary dismissible alert — check it out!
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
          </button>
        </div>
        @if(session('success'))
        <div class="alert alert-success alert-dismissible" role="alert">
            {{ session('sucess') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
          </button>
        </div>
        @endif

        @if(session('error'))
        <div class="alert alert-danger alert-dismissible" role="alert">
            {{ session('error') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
          </button>
        </div>
        @endif
        <div class="alert alert-danger alert-dismissible" role="alert">
          This is a danger dismissible alert — check it out!
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
          </button>
        </div>

        <div class="alert alert-warning alert-dismissible" role="alert">
          This is a warning dismissible alert — check it out!
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
          </button>
        </div>

        <div class="alert alert-info alert-dismissible" role="alert">
          This is an info dismissible alert — check it out!
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
          </button>
        </div>

        <div class="alert alert-dark alert-dismissible mb-0" role="alert">
          This is a dark dismissible alert — check it out!
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
          </button>
        </div>
      </div>
    </div>
  </div> --}}