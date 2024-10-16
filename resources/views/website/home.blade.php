    @extends('layouts.master')

    @section('title')
    e-commerce
    @endsection
    @push('style')
    <style>
        .card{
            box-shadow: 7px 7px 15px;
        }
        .owl-carousel .card { overflow: hidden;}
        .owl-carousel .item img{ transition: all .2s ease-in-out; }
        .owl-carousel .item img:hover { transform: scale(1.1);  }


    </style>
    @endpush
    @section('content')
        <!-- Start Hero Area -->
        <section class="hero-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-12 custom-padding-right">
                        <div class="slider-head">
                            <!-- Start Hero Slider -->
                            <div class="hero-slider">
                                <!-- Start Single Slider -->
                                    @foreach ($TopSellingProducts as $product)
                                <div class="single-slider">
                                    <div class="card mb-3" style="height: 500px;">
                                        <div class="row g-0">
                                            <div class="col-md-7">
                                            <img src="{{asset($route_products .'/'.$product->image)}}" style="height: 600px;" class="img-fluid rounded-start" alt="...">
                                            </div>
                                            <div class="col-md-5">
                                            <div class="card-body" style="margin-top: 150px">
                                                <h5 class="card-title">{{$product->name}}</h5>
                                                <p class="card-text">{{$product->meta_description}}</p>
                                                <p class="card-text"><small class="text-body-secondary">{{$product->meta_title}}</small></p>
                                                {{-- <h4><span>Price:</span></h4> --}}
                                                <h4>
                                                <h5 >Price:
                                                    {{$product->selling_price}}
                                                </h5>
                                                    <span>
                                                    <s>{{$product->price}}</s>
                                                </span></h4>
                                        <div class="button" style="margin-top: 40px">


                                            <a href="{{route('get_product_slug',[$product->category->slug,$product->slug])}}" class="btn">Shop Now</a>
                                        </div>
                                            </div>
                                            </div>
                                        </div>
                                        </div>
                                </div>

                                @endforeach

                                <!-- End Single Slider -->
                                <!-- Start Single Slider -->
                                {{-- <div class="single-slider"
                                    style="background-image: url(https://via.placeholder.com/800x500);">
                                    <div class="content">
                                        <h2><span>Big Sale Offer</span>
                                            Get the Best Deal on CCTV Camera
                                        </h2>
                                        <p>Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor incididunt ut
                                            labore dolore magna aliqua.</p>
                                        <h3><span>Combo Only:</span> $590.00</h3>
                                        <div class="button">
                                            <a href="product-grids.html" class="btn">Shop Now</a>
                                        </div>
                                    </div>
                                </div> --}}
                                <!-- End Single Slider -->
                            </div>
                            <!-- End Hero Slider -->
                        </div>
                    </div>

                    <div class="col-lg-4 col-12" style="height: 700px">
                        <h4>TopSellingProduct</h4>
                    <!-- Start Single Product -->
                    <div class="single-product">
                        <div class="product-image" style="height: 260px" >
                            <img src="{{asset($route_products .'/'.$TopSellingProduct->image)}}" alt="#">
                            {{-- <div class="button">
                                <a href="product-details.html" class="btn"><i class="lni lni-cart"></i> Add to Cart</a>
                            </div> --}}
                        </div>
                        <div class="product-info">
                            <h4 class="title">
                                <p>TopSellingProduct</p>

                            </h4>
                            <h4 class="title">
                                <a href="{{route('get_product_slug',[$TopSellingProduct->category->slug,$TopSellingProduct->slug])}}">{{$TopSellingProduct->name}}</a>
                            </h4>
                            <ul class="review">
                                @if ($TopSellingProduct->averageRating() == 5)
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                                @elseif ($TopSellingProduct->averageRating() == 4)
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star"></i></li>
                                @elseif ($TopSellingProduct->averageRating() == 3)
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star"></i></li>
                                <li><i class="lni lni-star"></i></li>
                                @elseif ($TopSellingProduct->averageRating() == 2)
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star"></i></li>
                                <li><i class="lni lni-star"></i></li>
                                <li><i class="lni lni-star"></i></li>
                                @elseif ($TopSellingProduct->averageRating() == 1)
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star"></i></li>
                                <li><i class="lni lni-star"></i></li>
                                <li><i class="lni lni-star"></i></li>
                                <li><i class="lni lni-star"></i></li>
                                @endif
                                <li><span>{{$TopSellingProduct->averageRating()}}</span></li>
                            </ul>
                            <div class="price">
                                <span class="float-start">
                                    {{$TopSellingProduct->selling_price}}
                                </span>
                                    <span class="float-end">
                                    <s>{{$TopSellingProduct->price}}</s>
                                </span>                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
        </section>
        <!-- End Hero Area -->

        <!-- Start Featured Categories Area -->

    @include('layouts.trend_category');

    @include('layouts.topselling_product');



        <!-- End Features Area -->

        <!-- Start Trending Product Area -->
    @include('layouts.trend_product');
        <!-- End Trending Product Area -->

        <!-- Start Banner Area -->
        {{-- <section class="banner section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="single-banner" style="background-image:url('https://via.placeholder.com/620x340')">
                            <div class="content">
                                <h2>Smart Watch 2.0</h2>
                                <p>Space Gray Aluminum Case with <br>Black/Volt Real Sport Band </p>
                                <div class="button">
                                    <a href="product-grids.html" class="btn">View Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="single-banner custom-responsive-margin"
                            style="background-image:url('https://via.placeholder.com/620x340')">
                            <div class="content">
                                <h2>Smart Headphone</h2>
                                <p>Lorem ipsum dolor sit amet, <br>eiusmod tempor
                                    incididunt ut labore.</p>
                                <div class="button">
                                    <a href="product-grids.html" class="btn">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
        <!-- End Banner Area -->

        <!-- Start Special Offer -->
        {{-- <section class="special-offer section">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title">
                            <h2>Special Offer</h2>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                                suffered alteration in some form.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 col-md-12 col-12">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-12">
                                <!-- Start Single Product -->
                                <div class="single-product">
                                    <div class="product-image">
                                        <img src="https://via.placeholder.com/335x335" alt="#">
                                        <div class="button">
                                            <a href="product-details.html" class="btn"><i class="lni lni-cart"></i> Add to
                                                Cart</a>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <span class="category">Camera</span>
                                        <h4 class="title">
                                            <a href="product-grids.html">WiFi Security Camera</a>
                                        </h4>
                                        <ul class="review">
                                            <li><i class="lni lni-star-filled"></i></li>
                                            <li><i class="lni lni-star-filled"></i></li>
                                            <li><i class="lni lni-star-filled"></i></li>
                                            <li><i class="lni lni-star-filled"></i></li>
                                            <li><i class="lni lni-star-filled"></i></li>
                                            <li><span>5.0 Review(s)</span></li>
                                        </ul>
                                        <div class="price">
                                            <span>$399.00</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Product -->
                            </div>
                            <div class="col-lg-4 col-md-4 col-12">
                                <!-- Start Single Product -->
                                <div class="single-product">
                                    <div class="product-image">
                                        <img src="https://via.placeholder.com/335x335" alt="#">
                                        <div class="button">
                                            <a href="product-details.html" class="btn"><i class="lni lni-cart"></i> Add to
                                                Cart</a>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <span class="category">Laptop</span>
                                        <h4 class="title">
                                            <a href="product-grids.html">Apple MacBook Air</a>
                                        </h4>
                                        <ul class="review">
                                            <li><i class="lni lni-star-filled"></i></li>
                                            <li><i class="lni lni-star-filled"></i></li>
                                            <li><i class="lni lni-star-filled"></i></li>
                                            <li><i class="lni lni-star-filled"></i></li>
                                            <li><i class="lni lni-star-filled"></i></li>
                                            <li><span>5.0 Review(s)</span></li>
                                        </ul>
                                        <div class="price">
                                            <span>$899.00</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Product -->
                            </div>
                            <div class="col-lg-4 col-md-4 col-12">
                                <!-- Start Single Product -->
                                <div class="single-product">
                                    <div class="product-image">
                                        <img src="https://via.placeholder.com/335x335" alt="#">
                                        <div class="button">
                                            <a href="product-details.html" class="btn"><i class="lni lni-cart"></i> Add to
                                                Cart</a>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <span class="category">Speaker</span>
                                        <h4 class="title">
                                            <a href="product-grids.html">Bluetooth Speaker</a>
                                        </h4>
                                        <ul class="review">
                                            <li><i class="lni lni-star-filled"></i></li>
                                            <li><i class="lni lni-star-filled"></i></li>
                                            <li><i class="lni lni-star-filled"></i></li>
                                            <li><i class="lni lni-star-filled"></i></li>
                                            <li><i class="lni lni-star"></i></li>
                                            <li><span>4.0 Review(s)</span></li>
                                        </ul>
                                        <div class="price">
                                            <span>$70.00</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Product -->
                            </div>
                            <div class="col-lg-4 col-md-4 col-12">
                                <!-- Start Single Product -->
                                <div class="single-product">
                                    <div class="product-image">
                                        <img src="https://via.placeholder.com/335x335" alt="#">
                                        <div class="button">
                                            <a href="product-details.html" class="btn"><i class="lni lni-cart"></i> Add to
                                                Cart</a>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <span class="category">Speaker</span>
                                        <h4 class="title">
                                            <a href="product-grids.html">Bluetooth Speaker</a>
                                        </h4>
                                        <ul class="review">
                                            <li><i class="lni lni-star-filled"></i></li>
                                            <li><i class="lni lni-star-filled"></i></li>
                                            <li><i class="lni lni-star-filled"></i></li>
                                            <li><i class="lni lni-star-filled"></i></li>
                                            <li><i class="lni lni-star"></i></li>
                                            <li><span>4.0 Review(s)</span></li>
                                        </ul>
                                        <div class="price">
                                            <span>$70.00</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Product -->
                            </div>
                            <div class="col-lg-4 col-md-4 col-12">
                                <!-- Start Single Product -->
                                <div class="single-product">
                                    <div class="product-image">
                                        <img src="https://via.placeholder.com/335x335" alt="#">
                                        <div class="button">
                                            <a href="product-details.html" class="btn"><i class="lni lni-cart"></i> Add to
                                                Cart</a>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <span class="category">Speaker</span>
                                        <h4 class="title">
                                            <a href="product-grids.html">Bluetooth Speaker</a>
                                        </h4>
                                        <ul class="review">
                                            <li><i class="lni lni-star-filled"></i></li>
                                            <li><i class="lni lni-star-filled"></i></li>
                                            <li><i class="lni lni-star-filled"></i></li>
                                            <li><i class="lni lni-star-filled"></i></li>
                                            <li><i class="lni lni-star"></i></li>
                                            <li><span>4.0 Review(s)</span></li>
                                        </ul>
                                        <div class="price">
                                            <span>$70.00</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Product -->
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-4 col-md-12 col-12">
                        <div class="offer-content">
                            <div class="image">
                                <img src="https://via.placeholder.com/510x600" alt="#">
                                <span class="sale-tag">-50%</span>
                            </div>
                            <div class="text">
                                <h2><a href="product-grids.html">Bluetooth Headphone</a></h2>
                                <ul class="review">
                                    <li><i class="lni lni-star-filled"></i></li>
                                    <li><i class="lni lni-star-filled"></i></li>
                                    <li><i class="lni lni-star-filled"></i></li>
                                    <li><i class="lni lni-star-filled"></i></li>
                                    <li><i class="lni lni-star-filled"></i></li>
                                    <li><span>5.0 Review(s)</span></li>
                                </ul>
                                <div class="price">
                                    <span>$200.00</span>
                                    <span class="discount-price">$400.00</span>
                                </div>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry incididunt ut
                                    eiusmod tempor labores.</p>
                            </div>
                            <div style="background: rgb(204, 24, 24);" class="alert">
                                <h1 style="padding: 50px 80px;color: white;">We are sorry, Event ended ! </h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
        <!-- End Special Offer -->

        <!-- Start Home Product List -->
        {{-- <section class="home-product-list section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-12 custom-responsive-margin">
                        <h4 class="list-title">Best Sellers</h4>
                        <!-- Start Single List -->
                        <div class="single-list">
                            <div class="list-image">
                                <a href="product-grids.html"><img src="https://via.placeholder.com/100x100" alt="#"></a>
                            </div>
                            <div class="list-info">
                                <h3>
                                    <a href="product-grids.html">GoPro Hero4 Silver</a>
                                </h3>
                                <span>$287.99</span>
                            </div>
                        </div>
                        <!-- End Single List -->
                        <!-- Start Single List -->
                        <div class="single-list">
                            <div class="list-image">
                                <a href="product-grids.html"><img src="https://via.placeholder.com/100x100" alt="#"></a>
                            </div>
                            <div class="list-info">
                                <h3>
                                    <a href="product-grids.html">Puro Sound Labs BT2200</a>
                                </h3>
                                <span>$95.00</span>
                            </div>
                        </div>
                        <!-- End Single List -->
                        <!-- Start Single List -->
                        <div class="single-list">
                            <div class="list-image">
                                <a href="product-grids.html"><img src="https://via.placeholder.com/100x100" alt="#"></a>
                            </div>
                            <div class="list-info">
                                <h3>
                                    <a href="product-grids.html">HP OfficeJet Pro 8710</a>
                                </h3>
                                <span>$120.00</span>
                            </div>
                        </div>
                        <!-- End Single List -->
                    </div>
                    <div class="col-lg-4 col-md-4 col-12 custom-responsive-margin">
                        <h4 class="list-title">New Arrivals</h4>
                        <!-- Start Single List -->
                        <div class="single-list">
                            <div class="list-image">
                                <a href="product-grids.html"><img src="https://via.placeholder.com/100x100" alt="#"></a>
                            </div>
                            <div class="list-info">
                                <h3>
                                    <a href="product-grids.html">iPhone X 256 GB Space Gray</a>
                                </h3>
                                <span>$1150.00</span>
                            </div>
                        </div>
                        <!-- End Single List -->
                        <!-- Start Single List -->
                        <div class="single-list">
                            <div class="list-image">
                                <a href="product-grids.html"><img src="https://via.placeholder.com/100x100" alt="#"></a>
                            </div>
                            <div class="list-info">
                                <h3>
                                    <a href="product-grids.html">Canon EOS M50 Mirrorless Camera</a>
                                </h3>
                                <span>$950.00</span>
                            </div>
                        </div>
                        <!-- End Single List -->
                        <!-- Start Single List -->
                        <div class="single-list">
                            <div class="list-image">
                                <a href="product-grids.html"><img src="https://via.placeholder.com/100x100" alt="#"></a>
                            </div>
                            <div class="list-info">
                                <h3>
                                    <a href="product-grids.html">Microsoft Xbox One S</a>
                                </h3>
                                <span>$298.00</span>
                            </div>
                        </div>
                        <!-- End Single List -->
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <h4 class="list-title">Top Rated</h4>
                        <!-- Start Single List -->
                        <div class="single-list">
                            <div class="list-image">
                                <a href="product-grids.html"><img src="https://via.placeholder.com/100x100" alt="#"></a>
                            </div>
                            <div class="list-info">
                                <h3>
                                    <a href="product-grids.html">Samsung Gear 360 VR Camera</a>
                                </h3>
                                <span>$68.00</span>
                            </div>
                        </div>
                        <!-- End Single List -->
                        <!-- Start Single List -->
                        <div class="single-list">
                            <div class="list-image">
                                <a href="product-grids.html"><img src="https://via.placeholder.com/100x100" alt="#"></a>
                            </div>
                            <div class="list-info">
                                <h3>
                                    <a href="product-grids.html">Samsung Galaxy S9+ 64 GB</a>
                                </h3>
                                <span>$840.00</span>
                            </div>
                        </div>
                        <!-- End Single List -->
                        <!-- Start Single List -->
                        <div class="single-list">
                            <div class="list-image">
                                <a href="product-grids.html"><img src="https://via.placeholder.com/100x100" alt="#"></a>
                            </div>
                            <div class="list-info">
                                <h3>
                                    <a href="product-grids.html">Zeus Bluetooth Headphones</a>
                                </h3>
                                <span>$28.00</span>
                            </div>
                        </div>
                        <!-- End Single List -->
                    </div>
                </div>
            </div>
        </section> --}}
        <!-- End Home Product List -->

        <!-- Start Brands Area -->
        <div class="brands">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 offset-lg-3 col-md-12 col-12">
                        <h2 class="title">Popular Brands</h2>
                    </div>
                </div>

                <div class="brands-logo-wrapper">

                    <div class="brands-logo-carousel d-flex align-items-center justify-content-between">
                        @foreach ($trend_products as $trend_product)
                        <div class="brand-logo">
                            <img src="{{asset($route_products .'/'.$trend_product->image)}}" alt="#">
                        </div>
                        @endforeach
                    </div>

                </div>

            </div>
        </div>
        <!-- End Brands Area -->

        <!-- Start Blog Section Area -->
        @include('layouts.latest_products');
        <!-- End Blog Section Area -->

        <!-- Start Shipping Info -->

        <!-- End Shipping Info -->

    @endsection

    @push('js')
    <script type="text/javascript">
        //========= Hero Slider
        tns({
            container: '.hero-slider',
            slideBy: 'page',
            autoplay: true,
            autoplayButtonOutput: false,
            mouseDrag: true,
            gutter: 0,
            items: 1,
            nav: false,
            controls: true,
            controlsText: ['<i class="lni lni-chevron-left"></i>', '<i class="lni lni-chevron-right"></i>'],
        });

        //======== Brand Slider
        tns({
            container: '.brands-logo-carousel',
            autoplay: true,
            autoplayButtonOutput: false,
            mouseDrag: true,
            gutter: 15,
            nav: false,
            controls: false,
            responsive: {
                0: {
                    items: 1,
                },
                540: {
                    items: 3,
                },
                768: {
                    items: 5,
                },
                992: {
                    items: 6,
                }
            }
        });
    </script>
    {{-- <script>
        const finaleDate = new Date("February 15, 2023 00:00:00").getTime();

        const timer = () => {
            const now = new Date().getTime();
            let diff = finaleDate - now;
            if (diff < 0) {
                document.querySelector('.alert').style.display = 'block';
                document.querySelector('.container').style.display = 'none';
            }

            let days = Math.floor(diff / (1000 * 60 * 60 * 24));
            let hours = Math.floor(diff % (1000 * 60 * 60 * 24) / (1000 * 60 * 60));
            let minutes = Math.floor(diff % (1000 * 60 * 60) / (1000 * 60));
            let seconds = Math.floor(diff % (1000 * 60) / 1000);

            days <= 99 ? days = `0${days}` : days;
            days <= 9 ? days = `00${days}` : days;
            hours <= 9 ? hours = `0${hours}` : hours;
            minutes <= 9 ? minutes = `0${minutes}` : minutes;
            seconds <= 9 ? seconds = `0${seconds}` : seconds;

            document.querySelector('#days').textContent = days;
            document.querySelector('#hours').textContent = hours;
            document.querySelector('#minutes').textContent = minutes;
            document.querySelector('#seconds').textContent = seconds;

        }
        timer();
        setInterval(timer, 1000);
    </script> --}}
    <script>
        $('.trend_product').owlCarousel({
            loop:true,
            margin:10,
            nav:true,
            rtl:true,
            dots:false,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:3
                },
                1000:{
                    items:3
                }
            }
        })

        $('.trend_category').owlCarousel({
            loop:true,
            margin:10,
            nav:true,
            rtl:true,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:3
                },
                1000:{
                    items:3
                }
            }
        })
    </script>
    @endpush
