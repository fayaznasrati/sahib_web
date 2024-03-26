@extends("layouts.service-dashboard-app")
@section("service-dashboard-content")

 <!-- Shop Section Start -->
 <div class="section section-margin">
    <div class="container">
        <div class="row">
            <div class="section section-margin">
                <div class="container">
                     <!-- Shop Section Start -->

              <div class="card mb-4">
                <div class="card-header">
                    <p>Profile Details</p>
                </div>
                <div class="card-body">
                    <button class="btn btn-primary me-2 mb-4" id="createFood"> Create new Food Menu </button>
                    <button class="btn btn-primary me-2 mb-4" id="createRoom"> Create new Roome/Halls </button>

                <div class="createFoodMenu">
                    this food 
                  <div class="row">
                            <div class="col-md-4">
                        <!-- Company Name Input Start -->
                        <div class="col-md-12">
                            <div class="checkout-form-list">
                                <label>Name</label>
                                <input placeholder="" type="text">
                            </div>
                        </div>
                        <!-- Company Name Input End -->

                        <!-- Address Input Start -->
                        <div class="col-md-12">
                            <div class="checkout-form-list">
                                <label>Address <span class="required">*</span></label>
                                <input placeholder="Street address" type="text">
                            </div>
                        </div>
                        <!-- Address Input End -->

                        <!-- Optional Text Input Start -->
                        <div class="col-md-12">
                            <div class="checkout-form-list">
                                <input placeholder="Apartment, suite, unit etc. (optional)" type="text">
                            </div>
                        </div>
                        <!-- Optional Text Input End -->

                        <!-- Town or City Name Input Start -->
                        <div class="col-md-12">
                            <div class="checkout-form-list">
                                <label>Town / City <span class="required">*</span></label>
                                <input type="text">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                          <!-- Order Notes Textarea Start -->
                          <div class="order-notes mt-3 mb-n2">
                            <div class="checkout-form-list checkout-form-list-2">
                                <label>Order Notes</label>
                                <textarea id="checkout-mess" cols="30" rows="10" placeholder="Notes about your order, e.g. special notes for delivery."></textarea>
                            </div>
                          </div>
                    </div>
                  </div>
                        <!-- Order Notes Textarea End -->
                </div>
                    <div class="createRoomOr">
                        <div class="row">
                            <div class="col-md-4">
                        <!-- Company Name Input Start -->
                        <div class="col-md-12">
                            <div class="checkout-form-list">
                                <label>Name</label>
                                <input placeholder="" type="text">
                            </div>
                        </div>
                        <!-- Company Name Input End -->

                        <!-- Address Input Start -->
                        <div class="col-md-12">
                            <div class="checkout-form-list">
                                <label>Address <span class="required">*</span></label>
                                <input placeholder="Street address" type="text">
                            </div>
                        </div>
                        <!-- Address Input End -->

                        <!-- Optional Text Input Start -->
                        <div class="col-md-12">
                            <div class="checkout-form-list">
                                <input placeholder="Apartment, suite, unit etc. (optional)" type="text">
                            </div>
                        </div>
                        <!-- Optional Text Input End -->

                        <!-- Town or City Name Input Start -->
                        <div class="col-md-12">
                            <div class="checkout-form-list">
                                <label>Town / City <span class="required">*</span></label>
                                <input type="text">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                          <!-- Order Notes Textarea Start -->
                          <div class="order-notes mt-3 mb-n2">
                            <div class="checkout-form-list checkout-form-list-2">
                                <label>Order Notes</label>
                                <textarea id="checkout-mess" cols="30" rows="10" placeholder="Notes about your order, e.g. special notes for delivery."></textarea>
                            </div>
                          </div>
                    </div>
                    </div>

                </div>
                </div>
              </div>

              {{-- <button class="btn btn-primary me-2 mb-4" id="createFood">Create new Food Menu</button>
              <button class="btn btn-primary me-2 mb-4" id="createRoom">Create new Rooms/Halls</button>

<div class="createFoodMenu" style="display: none;">
    <!-- Content for creating new food menu -->
    Food menu content goes here...
</div>

<div class="createRoomOr" style="display: none;">
    <!-- Content for creating new rooms/halls -->
    Rooms/Halls content goes here...
</div>
            </div>
        </div>
    </div>
</div> --}}
<!-- Shop Section End -->

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
       
       // When the "Create new Food Menu" button is clicked
       $("#createFood").click(function() {
        // alert('hi');
           // Show the createFoodMenuDiv and hide the createRoomOrDiv
           $(".createFoodMenu").show();
           $(".createRoomOr").hide();
       });

       // When the "Create new Rooms/Halls" button is clicked
       $("#createRoom").click(function() {
        // alert('hdd i');

           // Show the createRoomOrDiv and hide the createFoodMenuDiv
           $(".createRoomOr").show();
           $(".createFoodMenu").hide();
       });
   });
</script>
@endsection
