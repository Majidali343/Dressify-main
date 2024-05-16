{{-- This page is rendered by index() method in Front/IndexController.php --}}
@extends('front.layout.layout')
<style>
    .buynow_bt {
        width: 170px;
        margin: 0 auto;
        position: top;
        padding-top: 30px;
    }

    .buynow_bt a {
        width: 100%;
        float: left;
        font-size: 16px;
        color: #ffffff;
        background-color: #252525;
        text-align: center;
        padding: 10px 0px;
        border-radius: 5px;
        text-transform: uppercase;
        font-weight: bold;
    }

    .buynow_bt a:hover {
        background-color: #0a0400;
        color: #ffffff;
    }

    .banner_taital {
        width: 100%;
        font-size: 60px;
        position: center;
        color: #000000;
        text-align: center;
        text-transform: uppercase;
        font-weight: bold;
    }

    .layout_padding {
        padding-top: 90px;
        padding-bottom: 0px;
    }

    .container {
        width: 100%;
        padding-right: 15px;
        padding-left: 15px;
        margin-right: auto;
        margin-left: auto;
    }

    @media (min-width: 576px) {
        .container {
            max-width: 540px;
        }
    }

    @media (min-width: 768px) {
        .container {
            max-width: 720px;
        }
    }

    @media (min-width: 992px) {
        .container {
            max-width: 960px;
        }
    }

    @media (min-width: 1200px) {
        .container {
            max-width: 1140px;
        }
    }

    .container-fluid {
        width: 100%;
        padding-right: 15px;
        padding-left: 15px;
        margin-right: auto;
        margin-left: auto;
    }

    .row {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        margin-right: -15px;
        margin-left: -15px;
    }
</style>

@section('content')
    <!-- Main-Slider -->
    {{-- <div class="default-height ph-item">
        <div class="slider-main owl-carousel">

          
            @foreach ($sliderBanners as $banner)
                <div class="bg-image">
                    <div class="slide-content">
                        <h1>
                            <a @if (!empty($banner['link'])) href="{{ url($banner['link']) }}" @else href="javascript:;" @endif>
                                <img src="{{ asset('front/images/banner_images/' . $banner['image']) }}" title="{{ $banner['title'] }}" alt="{{ $banner['title'] }}">
                            </a>
                        </h1>
                        <h2>{{ $banner['title'] }}</h2>
                    </div>
                </div>
            @endforeach
        </div>
    </div> --}}

    <div style="display: flex; flex-direction:row ; width:100vw">
        <div style="width: 30%"><img height="400px"  width="100%" src="{{ asset('front/images/main-logo/banner.jpeg') }}" alt="Product"></div>
        <div class="banner_section layout_padding" style="margin-bottom: 30px ;width:40%">

            <div class="container">

                <div id="my_slider" class="carousel slide" data-ride="carousel">

                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row">
                                <div class="col-sm-12">
                                    <h1 class="banner_taital">DRESSIFY <br>Your Best option</h1>
                                    <div class="buynow_bt"><a href="/women">Buy Now</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-sm-12">
                                    <h1 class="banner_taital">Get Start <br>WITH DRESSIFY</h1>
                                    <div class="buynow_bt"><a href="/shirts">Buy Now</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-sm-12">
                                    <h1 class="banner_taital">DRESSIFY <br>BUY AND RESELL</h1>
                                    <div class="buynow_bt"><a href="/shirts">Buy Now</a></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    </a>
                </div>
            </div>
        </div>

        <div style="width: 30%"><img height="400px"  width="100%" src="{{ asset('front/images/main-logo/back2.jpeg') }}" alt="Product"></div>
    </div>


    <!-- Main-Slider /- -->



    {{-- @if (isset($fixBanners[1]['image']))
        <!-- Banner-Layer -->
        <div class="banner-layer">
            <div class="container">
                <div class="image-banner">
                    <a target="_blank" rel="nofollow" href="{{ url($fixBanners[1]['link']) }}" class="mx-auto banner-hover effect-dark-opacity">
                        <img class="img-fluid" src="{{ asset('front/images/banner_images/' . $fixBanners[1]['image']) }}" alt="{{ $fixBanners[1]['alt'] }}" title="{{ $fixBanners[1]['title'] }}">
                    </a>
                </div>
            </div>
        </div>
        <!-- Banner-Layer /- -->    
    @endif --}}



    <!-- Top Collection -->
    <section class="section-maker">
        <div class="container">
            <div class="text-center sec-maker-header">
                <h3 class="sec-maker-h3">TOP COLLECTION</h3>
                <ul class="nav tab-nav-style-1-a justify-content-center">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#men-latest-products">New Arrivals</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#men-best-selling-products">Best Sellers</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#discounted-products">Discounted Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#men-featured-products">Featured Products</a>
                    </li>
                </ul>
            </div>
            <div class="wrapper-content">
                <div class="outer-area-tab">
                    <div class="tab-content">
                        <div class="tab-pane active show fade" id="men-latest-products">
                            <div class="slider-fouc">
                                <div class="products-slider owl-carousel" data-item="4">

                                    {{-- Show 'New Arrivals'. Show the LATEST 8 products ONLY. Check the index() method in IndexController.php --}}
                                    @foreach ($newProducts as $product)
                                        @php
                                            $product_image_path = 'front/images/product_images/small/' . $product['product_image'];
                                            // dd($product['product_image']);
                                            // dd($product_image_path);
                                            // if (!empty($product['product_image']) && file_exists($product_image_path)) {
                                            //     dd('Yes');
                                            // } else {
                                            //     dd('No');
                                            // }
                                        @endphp

                                        <div class="item">
                                            <div class="image-container">
                                                <a class="item-img-wrapper-link"
                                                    href="{{ url('product/' . $product['id']) }}">
                                                    @if (!empty($product['product_image']) && file_exists($product_image_path))
                                                        {{-- if the product image exists in BOTH database table AND filesystem (on server) --}}
                                                        <img class="img-fluid" src="{{ asset($product_image_path) }}"
                                                            alt="Product">
                                                    @else
                                                        {{-- show the dummy image --}}
                                                        <img class="img-fluid"
                                                            src="{{ asset('front/images/product_images/small/no-image.png') }}"
                                                            alt="Product">
                                                    @endif
                                                </a>
                                                {{-- <div class="item-action-behaviors">
                                                    <a class="item-quick-look" data-toggle="modal" href="#quick-view">Quick
                                                        Look</a>
                                                    <a class="item-mail" href="javascript:void(0)">Mail</a>
                                                    <a class="item-addwishlist" href="javascript:void(0)">Add to
                                                        Wishlist</a>
                                                    <a class="item-addCart"
                                                        href="{{ url('product/' . $product['id']) }}">Add to Cart</a>
                                                </div> --}}
                                            </div>
                                            <div class="item-content">
                                                <div class="what-product-is">
                                                    <ul class="bread-crumb">
                                                        <li>
                                                            <a
                                                                href="{{ url('product/' . $product['id']) }}">{{ $product['product_code'] }}</a>
                                                        </li>
                                                    </ul>
                                                    <h6 class="item-title">
                                                        <a
                                                            href="{{ url('product/' . $product['id']) }}">{{ $product['product_name'] }}</a>
                                                    </h6>
                                                    <div class="item-stars">
                                                        <div class='star' title="0 out of 5 - based on 0 Reviews">
                                                            <span style='width:0'></span>
                                                        </div>
                                                        <span>(0)</span>
                                                    </div>
                                                </div>



                                                {{-- Call the static getDiscountPrice() method in the Product.php Model to determine the final price of a product because a product can have a discount from TWO things: either a `CATEGORY` discount or `PRODUCT` discout     --}}
                                                @php
                                                    $getDiscountPrice = \App\Models\Product::getDiscountPrice($product['id']);
                                                @endphp


                                                @if ($getDiscountPrice > 0)
                                                    {{-- If there's a discount on the price, show the price before (the original price) and after (the new price) the discount --}}
                                                    <div class="price-template">
                                                        <div class="item-new-price">
                                                            Rs . {{ $getDiscountPrice }}
                                                        </div>
                                                        <div class="item-old-price">
                                                            Rs . {{ $product['product_price'] }}
                                                        </div>
                                                    </div>
                                                @else
                                                    {{-- if there's no discount on the price, show the original price --}}
                                                    <div class="price-template">
                                                        <div class="item-new-price">
                                                            Rs . {{ $product['product_price'] }}
                                                        </div>
                                                    </div>
                                                @endif



                                            </div>
                                            <div class="tag new">
                                                <span>NEW</span>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane show fade" id="men-best-selling-products">
                            <div class="slider-fouc">
                                <div class="products-slider owl-carousel" data-item="4">


                                    {{-- Show the 'Best Seller' products. Check the index() method in IndexController.php --}}
                                    @foreach ($bestSellers as $product)
                                        @php
                                            $product_image_path = 'front/images/product_images/small/' . $product['product_image'];
                                            // dd($product['product_image']);
                                            // dd($product_image_path);
                                            // if (!empty($product['product_image']) && file_exists($product_image_path)) {
                                            //     dd('Yes');
                                            // } else {
                                            //     dd('No');
                                            // }
                                        @endphp

                                        <div class="item">
                                            <div class="image-container">
                                                <a class="item-img-wrapper-link"
                                                    href="{{ url('product/' . $product['id']) }}">
                                                    @if (!empty($product['product_image']) && file_exists($product_image_path))
                                                        {{-- if the product image exists in BOTH database table AND filesystem (on server) --}}
                                                        <img class="img-fluid" src="{{ asset($product_image_path) }}"
                                                            alt="Product">
                                                    @else
                                                        {{-- show the dummy image --}}
                                                        <img class="img-fluid"
                                                            src="{{ asset('front/images/product_images/small/no-image.png') }}"
                                                            alt="Product">
                                                    @endif
                                                </a>
                                                {{-- <div class="item-action-behaviors">
                                                    <a class="item-quick-look" data-toggle="modal"
                                                        href="#quick-view">Quick Look</a>
                                                    <a class="item-mail" href="javascript:void(0)">Mail</a>
                                                    <a class="item-addwishlist" href="javascript:void(0)">Add to
                                                        Wishlist</a>
                                                    <a class="item-addCart"
                                                        href="{{ url('product/' . $product['id']) }}">Add to Cart</a>
                                                </div> --}}
                                            </div>
                                            <div class="item-content">
                                                <div class="what-product-is">
                                                    <ul class="bread-crumb">
                                                        <li>
                                                            <a
                                                                href="{{ url('product/' . $product['id']) }}">{{ $product['product_code'] }}</a>
                                                        </li>
                                                    </ul>
                                                    <h6 class="item-title">
                                                        <a
                                                            href="{{ url('product/' . $product['id']) }}">{{ $product['product_name'] }}</a>
                                                    </h6>
                                                    <div class="item-stars">
                                                        <div class='star' title="0 out of 5 - based on 0 Reviews">
                                                            <span style='width:0'></span>
                                                        </div>
                                                        <span>(0)</span>
                                                    </div>
                                                </div>

                                                {{-- Call the static getDiscountPrice() method in the Product.php Model to determine the final price of a product because a product can have a discount from TWO things: either a `CATEGORY` discount or `PRODUCT` discout     --}}
                                                @php
                                                    $getDiscountPrice = \App\Models\Product::getDiscountPrice($product['id']);
                                                @endphp
                                                @if ($getDiscountPrice > 0)
                                                    {{-- If there's a discount on the price, show the price before (the original price) and after (the new price) the discount --}}
                                                    <div class="price-template">
                                                        <div class="item-new-price">
                                                            Rs . {{ $getDiscountPrice }}
                                                        </div>
                                                        <div class="item-old-price">
                                                            Rs . {{ $product['product_price'] }}
                                                        </div>
                                                    </div>
                                                @else
                                                    {{-- if there's no discount on the price, show the original price --}}
                                                    <div class="price-template">
                                                        <div class="item-new-price">
                                                            Rs . {{ $product['product_price'] }}
                                                        </div>
                                                    </div>
                                                @endif
                                            </div>
                                            <div class="tag new">
                                                <span>NEW</span>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="discounted-products">
                            <div class="slider-fouc">
                                <div class="products-slider owl-carousel" data-item="4">


                                    {{-- Show the 'Best Seller' products. Check the index() method in IndexController.php --}}
                                    @foreach ($discountedProducts as $product)
                                        @php
                                            $product_image_path = 'front/images/product_images/small/' . $product['product_image'];
                                            // dd($product['product_image']);
                                            // dd($product_image_path);
                                            // if (!empty($product['product_image']) && file_exists($product_image_path)) {
                                            //     dd('Yes');
                                            // } else {
                                            //     dd('No');
                                            // }
                                        @endphp

                                        <div class="item">
                                            <div class="image-container">
                                                <a class="item-img-wrapper-link"
                                                    href="{{ url('product/' . $product['id']) }}">
                                                    @if (!empty($product['product_image']) && file_exists($product_image_path))
                                                        {{-- if the product image exists in BOTH database table AND filesystem (on server) --}}
                                                        <img class="img-fluid" src="{{ asset($product_image_path) }}"
                                                            alt="Product">
                                                    @else
                                                        {{-- show the dummy image --}}
                                                        <img class="img-fluid"
                                                            src="{{ asset('front/images/product_images/small/no-image.png') }}"
                                                            alt="Product">
                                                    @endif
                                                </a>
                                                {{-- <div class="item-action-behaviors">
                                                    <a class="item-quick-look" data-toggle="modal"
                                                        href="#quick-view">Quick Look</a>
                                                    <a class="item-mail" href="javascript:void(0)">Mail</a>
                                                    <a class="item-addwishlist" href="javascript:void(0)">Add to
                                                        Wishlist</a>
                                                    <a class="item-addCart"
                                                        href="{{ url('product/' . $product['id']) }}">Add to Cart</a>
                                                </div> --}}
                                            </div>
                                            <div class="item-content">
                                                <div class="what-product-is">
                                                    <ul class="bread-crumb">
                                                        <li>
                                                            <a
                                                                href="{{ url('product/' . $product['id']) }}">{{ $product['product_code'] }}</a>
                                                        </li>
                                                    </ul>
                                                    <h6 class="item-title">
                                                        <a
                                                            href="{{ url('product/' . $product['id']) }}">{{ $product['product_name'] }}</a>
                                                    </h6>
                                                    <div class="item-stars">
                                                        <div class='star' title="0 out of 5 - based on 0 Reviews">
                                                            <span style='width:0'></span>
                                                        </div>
                                                        <span>(0)</span>
                                                    </div>
                                                </div>

                                                {{-- Call the static getDiscountPrice() method in the Product.php Model to determine the final price of a product because a product can have a discount from TWO things: either a `CATEGORY` discount or `PRODUCT` discout     --}}
                                                @php
                                                    $getDiscountPrice = \App\Models\Product::getDiscountPrice($product['id']);
                                                @endphp
                                                @if ($getDiscountPrice > 0)
                                                    {{-- If there's a discount on the price, show the price before (the original price) and after (the new price) the discount --}}
                                                    <div class="price-template">
                                                        <div class="item-new-price">
                                                            Rs . {{ $getDiscountPrice }}
                                                        </div>
                                                        <div class="item-old-price">
                                                            Rs . {{ $product['product_price'] }}
                                                        </div>
                                                    </div>
                                                @else
                                                    {{-- if there's no discount on the price, show the original price --}}
                                                    <div class="price-template">
                                                        <div class="item-new-price">
                                                            Rs . {{ $product['product_price'] }}
                                                        </div>
                                                    </div>
                                                @endif
                                            </div>
                                            <div class="tag new">
                                                <span>NEW</span>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="men-featured-products">
                            <div class="slider-fouc">
                                <div class="products-slider owl-carousel" data-item="4">


                                    {{-- Show the 'Best Seller' products. Check the index() method in IndexController.php --}}
                                    @foreach ($featuredProducts as $product)
                                        @php
                                            $product_image_path = 'front/images/product_images/small/' . $product['product_image'];
                                            // dd($product['product_image']);
                                            // dd($product_image_path);
                                            // if (!empty($product['product_image']) && file_exists($product_image_path)) {
                                            //     dd('Yes');
                                            // } else {
                                            //     dd('No');
                                            // }
                                        @endphp

                                        <div class="item">
                                            <div class="image-container">
                                                <a class="item-img-wrapper-link"
                                                    href="{{ url('product/' . $product['id']) }}">
                                                    @if (!empty($product['product_image']) && file_exists($product_image_path))
                                                        {{-- if the product image exists in BOTH database table AND filesystem (on server) --}}
                                                        <img class="img-fluid" src="{{ asset($product_image_path) }}"
                                                            alt="Product">
                                                    @else
                                                        {{-- show the dummy image --}}
                                                        <img class="img-fluid"
                                                            src="{{ asset('front/images/product_images/small/no-image.png') }}"
                                                            alt="Product">
                                                    @endif
                                                </a>
                                                {{-- <div class="item-action-behaviors">
                                                    <a class="item-quick-look" data-toggle="modal"
                                                        href="#quick-view">Quick Look</a>
                                                    <a class="item-mail" href="javascript:void(0)">Mail</a>
                                                    <a class="item-addwishlist" href="javascript:void(0)">Add to
                                                        Wishlist</a>
                                                    <a class="item-addCart"
                                                        href="{{ url('product/' . $product['id']) }}">Add to Cart</a>
                                                </div> --}}
                                            </div>
                                            <div class="item-content">
                                                <div class="what-product-is">
                                                    <ul class="bread-crumb">
                                                        <li>
                                                            <a
                                                                href="{{ url('product/' . $product['id']) }}">{{ $product['product_code'] }}</a>
                                                        </li>
                                                    </ul>
                                                    <h6 class="item-title">
                                                        <a
                                                            href="{{ url('product/' . $product['id']) }}">{{ $product['product_name'] }}</a>
                                                    </h6>
                                                    <div class="item-stars">
                                                        <div class='star' title="0 out of 5 - based on 0 Reviews">
                                                            <span style='width:0'></span>
                                                        </div>
                                                        <span>(0)</span>
                                                    </div>
                                                </div>

                                                {{-- Call the static getDiscountPrice() method in the Product.php Model to determine the final price of a product because a product can have a discount from TWO things: either a `CATEGORY` discount or `PRODUCT` discout     --}}
                                                @php
                                                    $getDiscountPrice = \App\Models\Product::getDiscountPrice($product['id']);
                                                @endphp
                                                @if ($getDiscountPrice > 0)
                                                    {{-- If there's a discount on the price, show the price before (the original price) and after (the new price) the discount --}}
                                                    <div class="price-template">
                                                        <div class="item-new-price">
                                                            Rs . {{ $getDiscountPrice }}
                                                        </div>
                                                        <div class="item-old-price">
                                                            Rs . {{ $product['product_price'] }}
                                                        </div>
                                                    </div>
                                                @else
                                                    {{-- if there's no discount on the price, show the original price --}}
                                                    <div class="price-template">
                                                        <div class="item-new-price">
                                                            Rs . {{ $product['product_price'] }}
                                                        </div>
                                                    </div>
                                                @endif
                                            </div>
                                            <div class="tag new">
                                                <span>NEW</span>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Top Collection /- -->




    @if (isset($fixBanners[1]['image']))
        <!-- Banner-Layer -->
        <div class="banner-layer">
            <div class="container">
                <div class="image-banner">
                    <a target="_blank" style="height: 600px" rel="nofollow" href="{{ url($fixBanners[1]['link']) }}"
                        class="mx-auto banner-hover effect-dark-opacity">
                        <img class="img-fluid" style="height: 600px"
                            src="{{ asset('front/images/banner_images/' . $fixBanners[1]['image']) }}"
                            alt="{{ $fixBanners[1]['alt'] }}" title="{{ $fixBanners[1]['title'] }}">
                    </a>
                </div>
            </div>
        </div>
        <!-- Banner-Layer /- -->
    @endif



    <!-- Site-Priorities -->
    <section class="app-priority">
        <div class="container">
            <div class="priority-wrapper u-s-p-b-80">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3">
                        <div class="single-item-wrapper">
                            <div class="single-item-icon">
                                <i class="ion ion-md-star"></i>
                            </div>
                            <h2>
                                Great Value
                            </h2>
                            <p>We offer competitive prices on our 100 million plus product range</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3">
                        <div class="single-item-wrapper">
                            <div class="single-item-icon">
                                <i class="ion ion-md-cash"></i>
                            </div>
                            <h2>
                                Shop with Confidence
                            </h2>
                            <p>Our Protection covers your purchase from click to delivery</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3">
                        <div class="single-item-wrapper">
                            <div class="single-item-icon">
                                <i class="ion ion-ios-card"></i>
                            </div>
                            <h2>
                                Cash on Delievery
                            </h2>
                            <p>Pay with the world’s most popular and secure payment methods</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3">
                        <div class="single-item-wrapper">
                            <div class="single-item-icon">
                                <i class="ion ion-md-contacts"></i>
                            </div>
                            <h2>
                                24/7 Help Center
                            </h2>
                            <p>Round-the-clock assistance for a smooth shopping experience</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Site-Priorities /- -->
@endsection
