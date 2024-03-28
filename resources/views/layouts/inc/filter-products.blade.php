<!-- Product Section Start -->
<div class="section ">
    <div class="container">
        <!-- Section Title & Tab Start -->
        <div class="row">
            <!-- Tab Start -->
            <div class="col-12">
                <ul class="product-tab-nav nav justify-content-center mb-10 title-border-bottom mt-n3">
                    <!-- Example category links -->


                    <a href="#" id="factories" class="category-link nav-link  mt-3" hidden data-category="0"></a>
                    <li class="nav-item" data-aos="fade-up" data-aos-delay="300">
                        <a href="#" id="factories" class="category-link nav-link active  mt-3"
                            data-category="1">Factories</a>
                    </li>
                    <li class="nav-item" data-aos="fade-up" data-aos-delay="400">
                        <a href="#" id="wholesallers" class="category-link nav-link  mt-3"
                            data-category="2">Wholesallers</a>
                    </li>
                    <li class="nav-item" data-aos="fade-up" data-aos-delay="500">
                        <a href="#" class="service-category-link nav-link mt-3 "
                            data-services="services">Hotels/Resturants</a>
                    </li>
                </ul>
            </div>
            <!-- Tab End -->
        </div>
        <!-- Section Title & Tab End -->

        <!-- Products Tab Start -->
        <div class="row data-container">
            {{-- the list of products come here using Ajax request --}}
        </div>
        <!-- Products Tab End -->
        {{-- <hr> --}}
        
        <!-- Products Tab Start -->
        <div class="row mydata-contdainer">
            {{-- the list of products come here using Ajax request --}}
        </div>
        <br>
        <center>
            <a class="btn btn-outline-dark btn-hover-primary load-more-btn loadbtnfact " href="#" data-category="1">Load More</a>
            <a class="btn btn-outline-dark btn-hover-primary load-more-btn loadbtnwhol hiddenbtn" href="#" data-category="2">Load More</a>    
        </center>
        <br><br>
    </div>
</div>
<!-- Product Section End -->
