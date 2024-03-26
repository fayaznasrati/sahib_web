@extends("layouts.seller-dashboard-app")
@section("seller-dashboard-content")



<!-- Shop Section Start -->
<div class="section section-margin ml-5">
    <div class="container">
        <div class="row">
            <div class="section section-margin">
                <div class="container">
                    
                    <!-- Stepper Navigation -->
                    <div class="stepper-navigation">
                        <button class="btn btn-primary" onclick="prevStep()">Previous</button>
                        <button class="btn btn-primary" onclick="nextStep()">Next</button>
                    </div> <br>
                    <!-- Progress Bar -->
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <!-- Steps Content -->
                    <div class="steps-content">
                        <!-- Step 1: Cover and Images Input -->
                        <div class="step" id="step1">
                            <form action="{{ route('post.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <!-- Cover and Images Input Fields -->
                                <div class="card">
                                    <h5 class="card-header">Cover and Images input</h5>
                                    <div class="card-body">
                                      <div class="mb-3">
                                        <label for="formFile" class="form-label">Choose Cover</label>
                                        <input class="form-control" type="file" id="formFile" name="cover">
                                      </div>
                                      <div class="mb-3">
                                        <label for="formFileMultiple" class="form-label">Choose Images</label>
                                        <input class="form-control" type="file" id="formFileMultiple"name="images[]" multiple>
                                      </div>
                                    </div>
                                  </div>
                           
                        </div>
                        <!-- Step 2: Post Details -->
                        <div class="step" id="step2">
                            <!-- Your existing code for post details goes here -->
                            <div class="card">
                                <h5 class="card-header">Post Details</h5>
                            <div class="card-body">
                                <div class="contact-form-wrapper contact-form">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-md-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
                                                    <div class="input-item mb-4">
                                                        <label for="name"><small>Select Category *:</small></label>
                                                        <select name="category_id" id="select-category" type="text" class="input-item">
                                                            <option>Select Category</option>
                                                            @foreach ($category as $cat)
                                                            <option value={{ $cat->id }}>{{ $cat->name }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
                                                    <div class="input-item mb-4">
                                                        <label for="name"><small>Select Sub-Category *:</small></label>
                                                        <select name="sub_category_id" id="sub-category" type="text" class="input-item">
                                                            <option value="#">Select sub-Category</option>
                                                            <option value="default"></option>
                                                        {{-- here the list come from database using ajax --}}
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
                                                    <div class="input-item mb-4">
                                                        <label for="name"><small>Product Name *:</small></label>
                                                        <input class="input-item" type="text" placeholder="Toyota Corola" name="name">
                                                    </div>
                                                </div>
                                            
                                                <div class="col-md-12 aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
                                                    <div class="input-item mb-4">
                                                        <label for="name"><small>Product Colors *:</small></label>
                                                        <select class="input-item" multiple data-role="tagsinput"  placeholder="eg: red" name="colors[]">
                                                            {{-- <option value="red">Red</option> --}}
                                                        </select>
                                                    </div>
                                                </div>
                                                <span class="row ">
                                                    <div class="col-md-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
                                                        <div class="input-item mb-5">
                                                            <label for="name"><small>old price:</small></label>
                                                            <input class="input-item" name="old_price" type="text" placeholder="eg:1000 " >
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
                                                        <div class="input-item mb-5">
                                                            <label for="name"><small>new Price *:</small></label>
                                                            <input class="input-item" name="new_price" type="text" placeholder="eg:900 " >
                                                        </div>
                                                    </div>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> <br>
                        </div>
                        <!-- Step 3: Write Short Description -->
                        <div class="step" id="step3">
                            <!-- Your existing code for writing short description goes here -->
                            <div class=" card contact-form-wrapper contact-form">
                                <h5 class="card-header">Write short Description</h5>
                                <div class="col-12 aos-init aos-animate" data-aos="fade-up" data-aos-delay="400">
                                    <div class="input-item mb-8">
                                        <input type="text" name="short_description">
                                        {{-- <label for="name"><b>More informations:</b></label> --}}
                                        {{-- <textarea  name="description"  placeholder="Message" style="height: 200px;"></textarea> --}}
                                    </div>
                                </div>
                                
                            </div><br>
    
                            <div class=" card contact-form-wrapper contact-form">
                                <h5 class="card-header">Write Description</h5>
                                <div class="col-12 aos-init aos-animate" data-aos="fade-up" data-aos-delay="400">
                                    <div class="input-item mb-8">
                                        <input type="text" name="description">
                                        {{-- <label for="name"><b>More informations:</b></label> --}}
                                        {{-- <textarea  name="description"  placeholder="Message" style="height: 200px;"></textarea> --}}
                                    </div>
                                </div>
                                
                            </div><br>
                        </div>
                        <!-- Step 4: Add More Features -->
                        <div class="step" id="step4">
                            <!-- Your existing code for adding more features goes here -->
                            <div class="card">
                                <h5 class="card-header">Add more features</h5>
                            <div class="card-body">
                                <div class="contact-form-wrapper contact-form">
                                    <div class="row">
                                        <span id="addedinput">
                                            <span class="row ">
                                                <div class="col-md-5 aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
                                                    <div class="input-item mb-5">
                                                        <label for="name"><small>Product Key *:</small></label>
                                                        <input class="input-item" name="title[]" type="text" placeholder="title " >
                                                    </div>
                                                </div>
                                                <div class="col-md-5 aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
                                                    <div class="input-item mb-5">
                                                        <label for="name"><small>Product Value *:</small></label>
                                                        <input class="input-item"  name="title_desc[]" type="text" placeholder="body">
                                                    </div>
                                                </div>
                                                <div class="col-md-2 aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
                                                        <br>
                                                        <a href="javascript:void(0)" type="button"  id="addFeture"  class="btn btn-dark btn-hover-success rounded-0">+</a>
                                                </div>
                                            </span>
                                          </span>
                                            <span id="moreFeature"></span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div> <br>
                        </div>
                        <!-- Step 5: Write Description -->
                        <div class="step" id="step5">
                            <!-- Your existing code for writing description goes here -->
                            <div class="card">
                                <h5 class="card-header">Complete and Submit</h5>
                            <div class="card-body">
                                <div class="contact-form-wrapper contact-form">
                                    <div class="row">
                                        <center>
                                            <div class="col-12 aos-init aos-animate" data-aos="fade-up" data-aos-delay="500">
                                                <button type="submit" id="submit" name="submit" class="btn btn-dark btn-hover-primary rounded-0">Create</button>
                                            </div>
                                        </center>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        
                        </div>
                    </div> 
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Shop Section End -->

<script>
   let currentStep = 1;
    const totalSteps = 5; // Change this value to the total number of steps

    function showStep(step) {
        // Hide all steps
        document.querySelectorAll('.step').forEach(step => {
            step.style.display = 'none';
        });

        // Show the current step
        document.getElementById('step' + step).style.display = 'block';

        // Update progress bar
        const progressBar = document.querySelector('.progress-bar');
        const progress = (step / totalSteps) * 100;
        progressBar.style.width = progress + '%';
        progressBar.setAttribute('aria-valuenow', progress);

        // Update progress bar text
        progressBar.innerText = `Step ${step} of ${totalSteps}`;
    }

    function prevStep() {
        if (currentStep > 1) {
            currentStep--;
            showStep(currentStep);
        }
    }

    function nextStep() {
        if (currentStep < totalSteps) {
            currentStep++;
            showStep(currentStep);
        }
    }

    // Show the initial step
    showStep(currentStep);

<!-- Shop Section End -->
</script>
@endsection

