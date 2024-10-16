<!-- Start Topbar -->
<div class="topbar">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-4 col-md-4 col-12">
                <div class="top-left">

                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <div class="top-middle">
                    <ul class="useful-links">
                        <li><a href="{{route('home')}}">Home</a></li>
                        <li><a href="{{route('about')}}">About Us</a></li>
                        <li><a href="{{route('contact')}}">Contact Us</a></li>
                    </ul>
                </div>

            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <div class="top-end">
                    @auth

                    <div class="user">
                        <i class="lni lni-user"></i>
                        Hello: {{ Auth::user()->fname ??'' }}
                    </div>
                    @endauth
                    <ul class="user-login">
                        @guest
                        @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif
                            @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                        @else
                        <li class="nav-item ">
                            {{-- <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a> --}}

                            {{-- <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown"> --}}
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            {{-- </div> --}}
                        </li>
                    @endguest
                    </ul>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- End Topbar -->
<!-- Start Header Middle -->
{{-- <div class="header-middle">
    <div class="container">

        <div class="row align-items-center">

            <div class="col-lg-3 col-md-3 col-7">
                <!-- Start Header Logo -->
                <a class="navbar-brand" href="{{route('home')}}">
                    <img src="/images/logo/logo.svg" alt="Logo">
                </a>
                <!-- End Header Logo -->
            </div>
            <div class="col-lg-5 col-md-7 d-xs-none">
                <!-- Start Main Menu Search -->
                <div class="main-menu-search">
                    <!-- navbar search start -->
                    <div class="navbar-search search-style-5">
                        <div class="search-select">
                            <div class="select-position">
                                <select id="select1">
                                    <option selected>All</option>
                                    <option value="1">option 01</option>
                                    <option value="2">option 02</option>
                                    <option value="3">option 03</option>
                                    <option value="4">option 04</option>
                                    <option value="5">option 05</option>
                                </select>
                            </div>
                        </div>
                        <div class="search-input">
                            <input type="text" placeholder="Search">
                        </div>
                        <div class="search-btn">
                            <button><i class="lni lni-search-alt"></i></button>
                        </div>
                    </div>
                    <!-- navbar search Ends -->
                </div>
                <!-- End Main Menu Search -->
            </div>
            <div class="col-lg-4 col-md-2 col-5">
                <div class="middle-right-area">
                    <div class="nav-hotline">
                        <i class="lni lni-phone"></i>
                        <h3>Hotline:
                            <span>01113604940</span>
                        </h3>
                    </div>
                    <div class="navbar-cart">
                        <div class="wishlist">
                            <a href="javascript:void(0)">
                                <i class="lni lni-heart"></i>
                                <span class="total-items">0</span>
                            </a>
                        </div>
                        <div class="cart-items">
                            <a href="javascript:void(0)" class="main-btn">
                                <i class="lni lni-cart"></i>
                                <span class="total-items">2</span>
                            </a>
                            <!-- Shopping Item -->
                            <div class="shopping-item">
                                <div class="dropdown-cart-header">
                                    <span>2 Items</span>
                                    <a href="cart.html">View Cart</a>
                                </div>
                                <ul class="shopping-list">
                                    <li>
                                        <a href="javascript:void(0)" class="remove" title="Remove this item"><i
                                                class="lni lni-close"></i></a>
                                        <div class="cart-img-head">
                                            <a class="cart-img" href="product-details.html"><img
                                                    src="/images/header/cart-items/item1.jpg" alt="#"></a>
                                        </div>

                                        <div class="content">
                                            <h4><a href="product-details.html">
                                                    Apple Watch Series 6</a></h4>
                                            <p class="quantity">1x - <span class="amount">$99.00</span></p>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" class="remove" title="Remove this item"><i
                                                class="lni lni-close"></i></a>
                                        <div class="cart-img-head">
                                            <a class="cart-img" href="product-details.html"><img
                                                    src="/images/header/cart-items/item2.jpg" alt="#"></a>
                                        </div>
                                        <div class="content">
                                            <h4><a href="product-details.html">Wi-Fi Smart Camera</a></h4>
                                            <p class="quantity">1x - <span class="amount">$35.00</span></p>
                                        </div>
                                    </li>
                                </ul>
                                <div class="bottom">
                                    <div class="total">
                                        <span>Total</span>
                                        <span class="total-amount">$134.00</span>
                                    </div>
                                    <div class="button">
                                        <a href="{{route('checkout')}}" class="btn animate">Checkout</a>
                                    </div>
                                </div>
                            </div>
                            <!--/ End Shopping Item -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}
<!-- End Header Middle -->
<!-- Start Header Bottom -->
<div class="container" style="margin-top: 30px">
    <div class="row align-items-center">
        <div class="col-lg-8 col-md-6 col-12">
            <div class="nav-inner">
                <!-- Start Mega Category Menu -->

                    <div class="col-lg-3 col-md-3 col-5" style="margin-right: 70px">
                        <!-- Start Header Logo -->
                        <a class="navbar-brand" href="{{route('home')}}">
                            <img src="/images/logo/logo.svg" alt="Logo">
                        </a>
                        <!-- End Header Logo -->
                    </div>

                <!-- End Mega Category Menu -->
                <!-- Start Navbar -->
                <nav class="navbar navbar-expand-lg">
                    <button class="navbar-toggler mobile-menu-btn" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="toggler-icon"></span>
                        <span class="toggler-icon"></span>
                        <span class="toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                        <ul id="nav" class="navbar-nav ms-auto">
                            <li class="nav-item">
                                <a href="/" class="" aria-label="Toggle navigation">Home</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('get_categories')}}" class="" aria-label="Toggle navigation">Categories</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('getproducts')}}" class="" aria-label="Toggle navigation">Products</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('cart.index')}}" class="" aria-label="Toggle navigation">Cart</a>
                            </li>
                            @if (Auth::check() && Auth::user()->orders->count()>0)

                            <li class="nav-item">
                                <a href="{{route('showmyorders')}}" class="" aria-label="Toggle navigation">MyOrders</a>
                            </li>
                            @endif

                            <li class="nav-item">
                                <a href="{{route('contact')}}" aria-label="Toggle navigation">ContactUs</a>
                            </li>
                        </ul>

                    </div> <!-- navbar collapse -->

                </nav>
                <!-- End Navbar -->

            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-12">
            <!-- Start Nav Social -->
            <div class="nav-social">
                <h5 class="title">Follow Us:</h5>
                <ul>
                    <li>
                        <a href="https://www.facebook.com"><i class="lni lni-facebook-filled"></i></a>
                    </li>
                    <li>
                        <a href="https://www.instagram.com"><i class="lni lni-instagram"></i></a>
                    </li>
                    <li>
                        <a href="https://www.skype.com/en"><i class="lni lni-skype"></i></a>
                    </li>
                </ul>
            </div>
            <!-- End Nav Social -->
        </div>
    </div>
</div>
<!-- End Header Bottom -->
