<div class="section section-margin">
    <div class="row">
        <div class="col-md-8"></div>
        <div class="col-md-4">
            @if(session('success'))
            <div class="bs-toast toast fade show bg-success mb-4 " role="alert" aria-live="assertive" aria-atomic="true">
                <div class="toast-header">
                  <i class='bx bx-bell me-2'></i>
                  <div class="me-auto fw-semibold">Sahib.af</div>
                  <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
                <div class="toast-body">
                    {{ session('success') }}
                </div>
              </div>
              @endif
              @if(session('error'))
              <div class="bs-toast toast fade show bg-danger mb-4 " role="alert" aria-live="assertive" aria-atomic="true">
                  <div class="toast-header">
                    <i class='bx bx-bell me-2'></i>
                    <div class="me-auto fw-semibold">Sahib.af</div>
                    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                  </div>
                  <div class="toast-body">
                      {{ session('error') }}
                  </div>
                </div>
                @endif

                @error('delete_confirm')
                <div class="bs-toast toast fade show bg-danger mb-4 " role="alert" aria-live="assertive" aria-atomic="true">
                    <div class="toast-header">
                      <i class='bx bx-bell me-2'></i>
                      <div class="me-auto fw-semibold">Sahib.af</div>
                      <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                    </div>
                    <div class="toast-body">
                        {{ $message }}
                    </div>
                  </div>
                  @enderror 
        </div>
    </div>
</div>
