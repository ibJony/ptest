@extends('app.layout.header')

@section('content')

<!-- Hero Slider Area Start -->
<div class="hero-area hero-slider-one bg-gray">
    <div class="single-hero-slider-one">

        <div class="container section-space--ptb_100 mt-100">
            <div class="row align-middle">
                <div class="col-lg-4">
                    <div class="hero-text-two section-space--pt_100">

                        <h2 class="section-space--mt_100"><b> The easiest way <br> to buy furniture </b></h2>

                        <p class="mt-30">Order artisan-made furniture from brands you love <br /> and discover new
                            ones, all in one place.</p>
                        <div class="button-box section-space--mt_20">
                            <a href="#" class="btn--text-icon btn btn-dark">Explore Collection <i class="arrow_carrot-2right"></i></a>
                            <br>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-6 order-lg-1 order-1">
                    <div class="product-thumbnail">
                        <a href="#"><img src="{{ asset('sanaaspace/assets/images/banner.jpeg')}}" class="img-fluid w-80" alt="Featured Image"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Hero Slider Area End style="height: 50%" -->

<!-- Shopping Support Area Start -->
<div class="shopping-support-area section-space--pt_60">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="single-shopping-support">
                    <div class="content">
                        <h6><b>1. Create an account</b></h6>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-shopping-support">
                    <div class="content">
                        <h6><b>2. Shop for furniture</b></h6>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6s">
                <div class="single-shopping-support">
                    <div class="content">
                        <h6><b>3. Get it delivered and enjoy!</b></h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Shopping Support Area End -->

<div class="featuted-product-wrap section-space--pt_20">
    <div class="container">
        <div class="tab-content mt-30">
            <div class="tab-pane fade show active" id="tab_list_01">
                <!-- product-slider-active -->
                <div class="row">
                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                        <!-- Single Product Item Start -->
                        <div class="single-product-item text-center">
                            <div class="products-images">
                                <a href="#" class="product-thumbnail featuted-product-one">
                                    <img src="{{ asset('sanaaspace/assets/images/living.jpeg') }}" class="img-fluid"
                                        alt="Product Images">
                                </a>
                            </div>
                            <div class="product-content">
                                <h6 class="prodect-title"><a href="#l">Living Room Furniture</a></h6>
                            </div>
                        </div><!-- Single Product Item End -->
                    </div>

                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                        <!-- Single Product Item Start -->
                        <div class="single-product-item text-center">
                            <div class="products-images">
                                <a href="#" class="product-thumbnail featuted-product-one">
                                    <img src="{{ asset('sanaaspace/assets/images/bedroom.jpeg') }}" class="img-fluid"
                                        alt="Product Images">
                                </a>
                            </div>
                            <div class="product-content">
                                <h6 class="prodect-title"><a href="#">Bedroom Furniture</a></h6>
                            </div>
                        </div><!-- Single Product Item End -->
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                        <!-- Single Product Item Start -->
                        <div class="single-product-item text-center">
                            <div class="products-images">
                                <a href="#" class="product-thumbnail featuted-product-one">
                                    <img src="{{ asset('sanaaspace/assets/images/dining.jpeg') }}" class="img-fluid"
                                        alt="Product Images">
                                </a>
                            </div>
                            <div class="product-content">
                                <h6 class="prodect-title"><a href="#">Dining Room Furniture</a></h6>
                            </div>
                        </div><!-- Single Product Item End -->
                    </div>

                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                        <!-- Single Product Item Start -->
                        <div class="single-product-item text-center">
                            <div class="products-images">
                                <a href="#" class="product-thumbnail featuted-product-one">
                                    <img src="{{ asset('sanaaspace/assets/images/storage.jpeg') }}" class="img-fluid"
                                        alt="Product Images">
                                </a>
                            </div>
                            <div class="product-content">
                                <h6 class="prodect-title"><a href="#">Storage & Organization</a></h6>
                            </div>
                        </div><!-- Single Product Item End -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="featuted-product-wrap section-space--pt_60">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8 col-md-6 order-lg-1 order-1">
                <div class="product-thumbnail">
                    <a href="#"><img src="{{ asset('sanaaspace/assets/images/aboutus.jpg')}}" class="img-fluid" alt="Featured Image"></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 order-lg-2 order-2">
                <div class="featured-product-contect">
                    <h2 class="mb-0"><b>We make furniture shopping simple</b></h2>
                    <p class="pb-lg-5">Sanaa Space is an online artisan-made furniture
                        marketplace. <br /> 
                        <br/> Enjoy a familiar e-commerce experience with all your
                        favorite brands to choose from - and easily find what best suits your
                        needs.</p>
                    
                    <div class="button-box">
                        <a href="#" class="btn--text-icon btn btn-dark">Explore Collection </a>
                        <br>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Product Area Start -->
<div class="product-wrapper section-space--ptb_60">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title text-center mb-20">
                    <h3 class="section-title">Featured Products</h3>
                </div>
            </div>
        </div>

        <div class="tab-content">
            <div class="tab-pane fade show active" id="tab_list_01">
                <!-- product-slider-active -->
                <div class="row product-slider-active">

                    <div class="col-lg-12">
                        <!-- Single Product Item Start -->
                        <div class="single-product-item text-center">
                            <div class="products-images">
                                <a href="#" class="product-thumbnail img-fluid">
                                    <img src="{{ asset('sanaaspace/assets/images/Benchi.jpg') }}"
                                        class="h-100 img-fluid" alt="Product Images">
                                </a>
                            </div>
                            <div class="product-content">
                                <h6 class="prodect-title"><a href="#">Benchi tiled bench</a></h6>
                                <h2 class="prodect-title"><a href="#">Achuli Design</a></h2>
                                <div class="prodect-price">
                                    <p class="new-price">Ksh. 70,000</p>
                                </div>
                            </div>
                        </div>
                        <!-- Single Product Item End -->
                    </div>

                    <div class="col-lg-12">
                        <!-- Single Product Item Start -->
                        <div class="single-product-item text-center">
                            <div class="products-images">
                                <a href="#" class="product-thumbnail img-fluid">
                                    <img src="{{ asset('sanaaspace/assets/images/coffeetable.jpg') }}"
                                        class="h-100 img-fluid" alt="Product Images">
                                </a>
                            </div>
                            <div class="product-content">
                                <h6 class="prodect-title"><a href="#">Mchemraba coffee table</a></h6>
                                <h2 class="prodect-title"><a href="#">Achuli Design</a></h2>
                                <div class="prodect-price">
                                    <p class="new-price">Ksh. 38,000</p>
                                </div>
                            </div>
                        </div>
                        <!-- Single Product Item End -->
                    </div>

                    <div class="col-lg-12">
                        <!-- Single Product Item Start -->
                        <div class="single-product-item text-center">
                            <div class="products-images">
                                <a href="" class="product-thumbnail">
                                    <img src="{{ asset('sanaaspace/assets/images/steelarmw.jpg') }}"
                                        class="h-100 img-fluid" alt="Product Images">

                                </a>
                            </div>
                            <div class="product-content">
                                <h6 class="prodect-title"><a href="#">The Achuli Armchair</a></h6>
                                <h2 class="prodect-title"><a href="#">Achuli Design</a></h2>
                                <div class="prodect-price">
                                    <p class="new-price">Ksh. 25,000</p>
                                </div>
                            </div>
                        </div>
                        <!-- Single Product Item End -->
                    </div>

                    <div class="col-lg-12">
                        <!-- Single Product Item Start -->
                        <div class="single-product-item text-center">
                            <div class="products-images">
                                <a href="" class="product-thumbnail">
                                    <img src="{{ asset('sanaaspace/assets/images/steeleather.jpg') }}"
                                        class="h-100 img-fluid" alt="Product Images">
                                </a>
                            </div>
                            <div class="product-content">
                                <h6 class="prodect-title"><a href="#">The Steeler Armchair</a></h6>
                                <h2 class="prodect-title"><a href="#">Achuli Design</a></h2>
                                <div class="prodect-price">
                                    <p class="new-price">Ksh. 28,000</p>
                                </div>
                            </div>
                        </div>
                        <!-- Single Product Item End -->
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>
<!-- Product Area End -->

<div class="our-newsletter-area section-space--pb_20 newsletter--box">

    <div class="container">
        <div class="row">
            <div class="col-lg-10">
                <div class="newsletter--box">
                    <div class="row align-items-center">
                        <div class="col-lg-10 col-md-4">
                            <div class="section-title small-mb__40 tablet-mb__20">
                                <h4 class="section-title">Are you an artisan-made furniture brand?</h4>
                                <p class="section-space--pt_30">We would love to add your furniture to our collection. Connect with us - add
                                    an additional online sales channel for your brand.</p>
                            </div>
                            <div class="button-box section-space--mt_20">
                                <a href="#" class="btn--text-icon btn btn-dark">Contact us </a>
                                <br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection