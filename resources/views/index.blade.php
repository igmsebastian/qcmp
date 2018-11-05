@extends('layouts.master')

@section('catagory')
<div class="container">
    <div class="row justify-content-center">
        <!-- Single Catagory -->
        <div class="col-12 col-sm-6 col-md-4">
            <div class="single_catagory_area d-flex align-items-center justify-content-center bg-img" style="background-image: url({{ asset('img/bg-img/support_head.jpg') }});">
                <div class="catagory-content">
                    <a href="#">Support Devices</a>
                </div>
            </div>
        </div>
        <!-- Single Catagory -->
        <div class="col-12 col-sm-6 col-md-4">
            <div class="single_catagory_area d-flex align-items-center justify-content-center bg-img" style="background-image: url({{ asset('img/bg-img/device_head.jpg') }});">
                <div class="catagory-content">
                    <a href="#">Health Devices</a>
                </div>
            </div>
        </div>
        <!-- Single Catagory -->
        <div class="col-12 col-sm-6 col-md-4">
            <div class="single_catagory_area d-flex align-items-center justify-content-center bg-img" style="background-image: url({{ asset('img/bg-img/pills_head.jpg') }});">
                <div class="catagory-content">
                    <a href="#">Health Care</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('carousel')
<div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading text-center">
                    <h2>Popular Products</h2>
                </div>
            </div>
        </div>
</div>
<div class="container">
        <div class="row">
            <div class="col-12">
                <div class="popular-products-slides owl-carousel">

                    <!-- Single Product -->
                    <div class="single-product-wrapper">
                        <!-- Product Image -->
                        <div class="product-img">
                            <img src="img/product-img/product-1.jpg" alt="">
                            <!-- Hover Thumb -->
                            <img class="hover-img" src="img/product-img/product-2.jpg" alt="">
                            <!-- Favourite -->
                            <div class="product-favourite">
                                <a href="#" class="favme fa fa-heart"></a>
                            </div>
                        </div>
                        <!-- Product Description -->
                        <div class="product-description">
                            <span>topshop</span>
                            <a href="single-product-details.html">
                                <h6>Knot Front Mini Dress</h6>
                            </a>
                            <p class="product-price">$80.00</p>

                            <!-- Hover Content -->
                            <div class="hover-content">
                                <!-- Add to Cart -->
                                <div class="add-to-cart-btn">
                                    <a href="#" class="btn essence-btn">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Single Product -->
                    <div class="single-product-wrapper">
                        <!-- Product Image -->
                        <div class="product-img">
                            <img src="img/product-img/product-2.jpg" alt="">
                            <!-- Hover Thumb -->
                            <img class="hover-img" src="img/product-img/product-3.jpg" alt="">
                            <!-- Favourite -->
                            <div class="product-favourite">
                                <a href="#" class="favme fa fa-heart"></a>
                            </div>
                        </div>
                        <!-- Product Description -->
                        <div class="product-description">
                            <span>topshop</span>
                            <a href="single-product-details.html">
                                <h6>Poplin Displaced Wrap Dress</h6>
                            </a>
                            <p class="product-price">$80.00</p>

                            <!-- Hover Content -->
                            <div class="hover-content">
                                <!-- Add to Cart -->
                                <div class="add-to-cart-btn">
                                    <a href="#" class="btn essence-btn">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Single Product -->
                    <div class="single-product-wrapper">
                        <!-- Product Image -->
                        <div class="product-img">
                            <img src="img/product-img/product-3.jpg" alt="">
                            <!-- Hover Thumb -->
                            <img class="hover-img" src="img/product-img/product-4.jpg" alt="">

                            <!-- Product Badge -->
                            <div class="product-badge offer-badge">
                                <span>-30%</span>
                            </div>

                            <!-- Favourite -->
                            <div class="product-favourite">
                                <a href="#" class="favme fa fa-heart"></a>
                            </div>
                        </div>
                        <!-- Product Description -->
                        <div class="product-description">
                            <span>mango</span>
                            <a href="single-product-details.html">
                                <h6>PETITE Crepe Wrap Mini Dress</h6>
                            </a>
                            <p class="product-price"><span class="old-price">$75.00</span> $55.00</p>

                            <!-- Hover Content -->
                            <div class="hover-content">
                                <!-- Add to Cart -->
                                <div class="add-to-cart-btn">
                                    <a href="#" class="btn essence-btn">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Single Product -->
                    <div class="single-product-wrapper">
                        <!-- Product Image -->
                        <div class="product-img">
                            <img src="img/product-img/product-4.jpg" alt="">
                            <!-- Hover Thumb -->
                            <img class="hover-img" src="img/product-img/product-5.jpg" alt="">

                            <!-- Product Badge -->
                            <div class="product-badge new-badge">
                                <span>New</span>
                            </div>

                            <!-- Favourite -->
                            <div class="product-favourite">
                                <a href="#" class="favme fa fa-heart"></a>
                            </div>
                        </div>
                        <!-- Product Description -->
                        <div class="product-description">
                            <span>mango</span>
                            <a href="single-product-details.html">
                                <h6>PETITE Belted Jumper Dress</h6>
                            </a>
                            <p class="product-price">$80.00</p>

                            <!-- Hover Content -->
                            <div class="hover-content">
                                <!-- Add to Cart -->
                                <div class="add-to-cart-btn">
                                    <a href="#" class="btn essence-btn">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
@endsection

@section('inline-content')
<!-- Brand Logo -->
<div class="single-brands-logo">
    <img src="{{ asset('img/core-img/rcai_logo.png') }}" alt="">
</div>
<!-- Brand Logo -->
<div class="single-brands-logo">
    <img src="{{ asset('img/core-img/therafirm_logo.png') }}" alt="">
</div>
<!-- Brand Logo -->
<div class="single-brands-logo">
    <img src="{{ asset('img/core-img/EASE_logo.png') }}" alt="">
</div>
<!-- Brand Logo -->
<div class="single-brands-logo">
    <img src="{{ asset('img/core-img/ambit_logo.png') }}" alt="">
</div>
@endsection

@push('scripts')

@endpush
