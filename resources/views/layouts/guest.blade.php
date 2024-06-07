<!DOCTYPE html>
<html lang="en">

<head>
    {{-- <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="New Style Life">
    <meta name="keywords" content="New Style Life">
    <link rel="icon" href="../assets/images/favicon/7.png" type="image/x-icon">
    <title>New Style Life</title> --}}

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="New Style Life">
    <meta name="keywords" content="New Style Life">

    <link rel="icon" href="{{ asset('frontend/assets/logos/newstyle_slogo.png') }}" type="image/x-icon">
    <title>New Style Life</title>

    <!-- Google font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Russo+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Exo+2:wght@400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap">

    <!-- bootstrap css -->
    <link id="rtl-link" rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/vendors/bootstrap.css') }}">

    <!-- wow css -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/animate.min.css') }}">

    <!-- Iconly css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/bulk-style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/vendors/animate.css') }}">

    <!-- Template css -->
    <link id="color-link" rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/style.css') }}">
</head>

<body class="bg-effect">

    <!-- latest jquery-->
    <script src="{{ asset('frontend/assets/js/jquery-3.6.0.min.js') }}"></script>

    <!-- jquery ui-->
    <script src="{{ asset('frontend/assets/js/jquery-ui.min.js') }}"></script>

    <!-- Price Range Js -->
    <script src="{{ asset('frontend/assets/js/ion.rangeSlider.min.js') }}"></script>

    <!-- Loader Start -->
    <div class="fullpage-loader">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
    </div>
    <!-- Loader End -->

    @php
        if (!empty(Auth::user()) && (Auth::user()->role != 'buyer'))
        {
            Auth::logout();
        }
    @endphp

    <!-- Header Start -->
    <header class="pb-md-4 pb-0">
        <div class="header-top">
            <div class="container-fluid-lg">
                <div class="row">
                    <div class="col-xxl-3 d-xxl-block d-none">
                        <div class="top-left-header">
                            <i class="iconly-Location icli text-white"></i>
                            <span class="text-white">4-27-5 Ikebukuro, Toshima-ku, Tokyo</span>
                        </div>
                    </div>

                    <div class="col-xxl-6 col-lg-9 d-lg-block d-none">
                        <div class="header-offer">
                            <div class="notification-slider">
                                <div>
                                    <div class="timer-notification">
                                        <h6><strong class="me-1">Welcome to the New Style Life EC site!</strong>
                                        </h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <ul class="about-list right-nav-about">
                            <li class="right-nav-list">
                                <div class="dropdown theme-form-select" style="display: flex;">
                                        <img src="{{ asset('frontend/assets/images/country/japan.png')}}"
                                            class="img-fluid blur-up lazyload" alt="" width="30px">
                                        <img src="{{ asset('frontend/assets/images/country/united-states.png')}}"
                                                class="img-fluid blur-up lazyload" alt="" width="30px" style="margin-left: 5px;">
                                </div>
                            </li>
                            <li class="right-nav-list">
                                <div class="dropdown theme-form-select">
                                        <span>JPY</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="top-nav top-header sticky-header">
            <div class="container-fluid-lg">
                <div class="row">
                    <div class="col-12">
                        <div class="navbar-top">
                            <button class="navbar-toggler d-xl-none d-inline navbar-menu-button" type="button"
                                data-bs-toggle="offcanvas" data-bs-target="#primaryMenu">
                                <span class="navbar-toggler-icon">
                                    <i class="fa-solid fa-bars"></i>
                                </span>
                            </button>
                            <a href="/" class="web-logo nav-logo">
                                <img src="{{ asset('images/logos/newstyle_logo.png') }}" class="img-fluid blur-up lazyload" alt="">
                            </a>

                            <div class="middle-box">
                                <div class="search-box">
                                    <form id="mainSearchForm" action="{{ route('show-product') }}" method="GET">
                                        <div class="input-group">
                                            <input type="search" class="form-control" name="mainSearch" placeholder="I'm searching for...">
                                            <button class="btn" type="submit" id="button-addon2">
                                                <i data-feather="search"></i>
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class="rightside-box">
                                <div class="search-full">
                                    <div class="input-group">
                                        <span class="input-group-text">
                                            <i data-feather="search" class="font-light"></i>
                                        </span>
                                        <input type="text" class="form-control search-type" placeholder="Search here..">
                                        <span class="input-group-text close-search">
                                            <i data-feather="x" class="font-light"></i>
                                        </span>
                                    </div>
                                </div>
                                <ul class="right-side-menu">
                                    <li class="right-side">
                                        <div class="delivery-login-box">
                                            <div class="delivery-icon">
                                                <div class="search-box">
                                                    <i data-feather="search"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="right-side">
                                        <a href="{{ url('/contact') }}" class="delivery-login-box">
                                            <div class="delivery-icon">
                                                <i data-feather="phone-call"></i>
                                            </div>
                                            <div class="delivery-detail">
                                                <h6>24/7 Delivery</h6>
                                                <h5>+91 888 104 2340</h5>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="right-side">
                                        <a href="{{ url('/wishlist') }}" class="btn p-0 position-relative header-wishlist">
                                            <i data-feather="heart"></i>
                                        </a>
                                    </li>
                                    <li class="right-side">
                                        <div class="onhover-dropdown header-badge">
                                            <a href="{{ route('show_carts') }}">
                                            <button type="button" class="btn p-0 position-relative header-wishlist">
                                                <i data-feather="shopping-cart"></i>
                                                @php
                                                    $userCarts = collect([]);
                                                    $count = 0;
                                                @endphp
                                                @if(!empty(Auth::user()))
                                                @php
                                                    $userCarts = DB::table('carts')
                                                                    ->join('products', 'carts.product_id', '=', 'products.id')
                                                                    ->join('buyers', 'carts.buyer_id', '=', 'buyers.id')
                                                                    ->where('buyers.user_id', Auth::user()->id)->get();

                                                    $count = $userCarts->count();
                                                @endphp
                                                @endif
                                                <span class="position-absolute top-0 start-100 translate-middle badge" id="unreadMessages">
                                                    {{ $count }}
                                                    <span class="visually-hidden">unread messages</span>
                                                </span>
                                            </button>
                                            </a>

                                            @if (!empty(Auth::user()))
                                                <div class="onhover-div">
                                                    <ul class="cart-list">
                                                    @php
                                                        $total = 0;
                                                    @endphp
                                                    @foreach ($userCarts as $cart)
                                                        <li class="product-box-contain">
                                                            <div class="drop-cart">
                                                                <a href="{{ route('show-product-left-thumbnail', ['id' => $cart->product_id]) }}">
                                                                    <img src="{{ asset('upload/product_thambnail/'.$cart-> product_thambnail) }}"
                                                                        class="blur-up lazyload" alt="" width="87" height="73">
                                                                </a>

                                                                <div class="drop-contain">
                                                                    <a href="{{ route('show-product-left-thumbnail', ['id' => $cart->product_id]) }}">
                                                                        <h5>{{ $cart->product_name }}</h5>
                                                                    </a>
                                                                    <h6><span>{{ $cart->quantity }} x</span> ¥{{ number_format($cart->selling_price , 0, '.', ',') }}</h6>
                                                                    <button class="close-button close_button" data-product-id="{{ $cart->product_id }}">
                                                                        <i class="fa-solid fa-xmark"></i>
                                                                    </button>
                                                                </div>
                                                                <div class="drop-contain">
                                                                    <h5>Total</h5>

                                                                    <h6>¥{{ number_format($cart->quantity * $cart->selling_price , 0, '.', ',') }}</h6>
                                                                    <button class="close-button close_button" data-product-id="{{ $cart->product_id }}">
                                                                        <i class="fa-solid fa-xmark"></i>
                                                                    </button>
                                                                </div>

                                                            </div>
                                                        </li>
                                                        @php
                                                            $total += $cart->selling_price * $cart->quantity;
                                                        @endphp
                                                    @endforeach
                                                    </ul>

                                                    <div class="price-box">
                                                        <h5>Total :</h5>
                                                        <h4 class="theme-color fw-bold">¥{{ number_format($total , 0, '.', ',') }}</h4>
                                                    </div>

                                                    <div class="button-group">
                                                        <a href="{{ route('show_carts') }}" class="btn btn-sm cart-button">View Cart</a>
                                                        {{--<a href="{{ url('/checkout') }}" class="btn btn-sm cart-button theme-bg-color
                                                        text-white">Checkout</a> --}}
                                                    </div>
                                                </div>
                                            @endif
                                        </div>
                                    </li>
                                    <li class="profile-nav onhover-dropdown pe-0 me-0">
                                        @if(empty(Auth::user()))
                                            <div class="delivery-login-box">
                                                <div class="delivery-icon">
                                                    <i data-feather="user"></i>
                                                </div>
                                            </div>
                                            <div class="onhover-div onhover-div-login">
                                                <ul class="user-box-name">
                                                    <li class="product-box-contain">
                                                        <a href="{{ route('login') }}">Log In</a>
                                                    </li>
                                                    <li class="product-box-contain">
                                                        <a href="{{route ('user_register')}}">Buyer Register</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        @else
                                            <div class="media profile-media">
                                                <img src="{{ (!empty(Auth::user()->user_photo)) ? url('upload/profile/'.Auth::user()->user_photo) : url('backend/assets/images/users/4.jpg') }}"
                                                class="user-profile rounded-circle" width="30px" height="30px">

                                                <div class="user-name-hide media-body">
                                                    @if(mb_strlen(Auth::user()->name) > 5)
                                                    <span>{!! substr(Auth::user()->name, 0, 5) !!}</span>
                                                    @else
                                                        {!! nl2br(e(Auth::user()->name)) !!}
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="onhover-div onhover-div-login">
                                                <ul class="profile-dropdown onhover-show-div">
                                                    <li>
                                                        <a data-bs-toggle="modal" data-bs-target="#staticBackdrop"
                                                            href="javascript:void(0)">
                                                            <i data-feather="log-out"></i>
                                                            <span style="margin-left: 10px;">Log out</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        @endif
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid-lg">
            <div class="row">
                <div class="col-12">
                    <div class="header-nav">
                        <div class="header-nav-left">
                            <button class="dropdown-category">
                                <i data-feather="align-left"></i>
                                <span>All Categories</span>
                            </button>

                            <div class="category-dropdown">
                                <div class="category-title">
                                    <h5>All Categories</h5>
                                    <button type="button" class="btn p-0 close-button text-content">
                                        <i class="fa-solid fa-xmark"></i>
                                    </button>
                                </div>
                            @foreach ($categories as $category)
                                <ul class="category-list">
                                    <li class="onhover-category-list">
                                        <a href="javascript:void(0)" class="category-name">
                                            <img src="{{ asset('images/'.$category->category_icon) }}" alt="">
                                            <h6>{{ $category->category_name }}</h6>
                                            <i class="fa-solid fa-angle-right"></i>
                                        </a>

                                        <div class="onhover-category-box" style="height: fit-content;">
                                        @foreach ($category->subCategoryTitle as $subCategoryTitle)
                                            <div class="list-1">
                                                <div class="category-title-box">
                                                    <h5>{{ $subCategoryTitle->sub_category_titlename }}</h5>
                                                </div>
                                                @foreach ($subCategoryTitle->subCategory as $subCategory)
                                                <ul>
                                                    <li>
                                                        <a href="{{ url('/subcategorysidebar/'.$subCategory->id)}}">{{ $subCategory->sub_category_name }}</a>
                                                    </li>
                                                </ul>
                                                @endforeach
                                            </div>
                                        @endforeach
                                        </div>
                                    </li>
                                </ul>
                            @endforeach
                            </div>
                        </div>

                        <div class="header-nav-middle">
                            <div class="main-nav navbar navbar-expand-xl navbar-light navbar-sticky">
                                <div class="offcanvas offcanvas-collapse order-xl-2" id="primaryMenu">
                                    <div class="offcanvas-header navbar-shadow">
                                        <h5>Menu</h5>
                                        <button class="btn-close lead" type="button"
                                            data-bs-dismiss="offcanvas"></button>
                                    </div>

                                    <div class="offcanvas-body">
                                        <ul class="navbar-nav">
                                            @if(empty(Auth::user()))
                                            <li class="nav-item dropdown">
                                                <a class="nav-link " href="{{ url('/') }}">Home</a>
                                            </li>
                                            @endif

                                            @if(!empty(Auth::user()))
                                            <li class="nav-item dropdown">
                                                <a class="nav-link" href="{{ url('/user') }}">My Menu</a>

                                            </li>
                                            @endif

                                             <li class="nav-item dropdown">
                                                <a class="nav-link " href="{{ url('/products') }}">Products</a>
                                            </li>


                                            <li class="nav-item dropdown">
                                                <a class="nav-link " href="{{ route('shoplist') }}">Shop</a>
                                            </li>

                                            @if ($specialCorner->isNotEmpty())
                                                <li class="nav-item dropdown dropdown-mega">
                                                    <a class="nav-link menu dropdown-toggle ps-xl-2 ps-0" href="javascript:void(0)" data-bs-toggle="dropdown">
                                                        <span class="menu">Special Corner</span>
                                                    </a>

                                                    <div class="dropdown-menu dropdown-menu-2">
                                                        @foreach ($specialCorner as $category)
                                                            @foreach ($category->subCategoryTitle as $index => $subCategoryTitle)
                                                                @if ($index % 3 == 0)
                                                                    @if ($index > 1)
                                                                        <div class="row" style="margin-top: 10px;">
                                                                    @else
                                                                        <div class="row">
                                                                    @endif
                                                                @endif
                                                                <div class="dropdown-column col-xl-3">
                                                                    <h5 class="dropdown-header">{{ $subCategoryTitle->sub_category_titlename }}</h5>
                                                                    @foreach ($subCategoryTitle->subCategory as $subCategory)
                                                                        <a class="dropdown-item" href="{{ url('/specialsubcategorysidebar/'.$subCategory->id)}}">
                                                                            {{ $subCategory->sub_category_name }}
                                                                        </a>
                                                                    @endforeach
                                                                </div>
                                                                @if ($index % 3 == 2 || $loop->last)
                                                                    </div>
                                                                @endif
                                                            @endforeach
                                                        @endforeach
                                                    </div>
                                                </li>
                                            @endif


                                            @if(empty(Auth::user()))
                                            <li class="nav-item dropdown">
                                                <a class="nav-link" href="{{ url('/faq') }}">FAQ</a>

                                            </li>
                                            @endif

                                            @if(empty(Auth::user()))
                                            <li class="nav-item dropdown new-nav-item">
                                                @if ($newBlogsExist)
                                                    <label class="new-dropdown">New</label>
                                                @endif
                                                <a class="nav-link"  href="{{ url('/news') }}">Blog</a>
                                            </li>
                                            @endif

                                        </ul>
                                    </div>


                                </div>
                            </div>
                        </div>
                        @if(!empty(Auth::user()))
                            <div class="header-nav-right">
                                <button class="btn deal-button" data-bs-toggle="modal" data-bs-target="#deal-box">
                                    <i data-feather="zap"></i>
                                    <span>Deal Today</span>
                                </button>
                            </div>
                        @else
                            <div class="header-nav-right">
                                <button class="btn deal-button" data-bs-toggle="modal">
                                    <i data-feather="zap"></i>
                                <a href="{{ route('login') }}" style="color: var(--theme-color)"><span> Deal Today</span></a>
                                </button>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header End -->

    <!-- mobile fix menu start -->
    <div class="mobile-menu d-md-none d-block mobile-cart">
        <ul>
            <li class="active">
                <a href="{{ url('/') }}">
                    <i class="iconly-Home icli"></i>
                    <span>Home</span>
                </a>
            </li>

            <li class="mobile-category">
                <a href="javascript:void(0)">
                    <i class="iconly-Category icli js-link"></i>
                    <span>Category</span>
                </a>
            </li>

            <li>
                <a href="{{ url('/search') }}" class="search-box">
                    <i class="iconly-Search icli"></i>
                    <span>Search</span>
                </a>
            </li>

            <li>
                <a href="{{ url('/wishlist') }}" class="notifi-wishlist">
                    <i class="iconly-Heart icli"></i>
                    <span>My Wish</span>
                </a>
            </li>

            <li>
                <a href="{{ url('/carts') }}">
                    <i class="iconly-Bag-2 icli fly-cate"></i>
                    <span>Cart</span>
                </a>
            </li>
        </ul>
    </div>
    <!-- mobile fix menu end -->

    {{ $slot }}


     <!-- Footer Section Start -->
    <footer class="section-t-space footer-section-2 footer-color-3">
        <div class="container-fluid-lg">
            <div class="main-footer">
                <div class="row g-md-4 gy-sm-5">
                    <div class="col-xxl-3 col-xl-4 col-sm-6">
                        <a href="index.html" class="foot-logo theme-logo">
                            <img src="../assets/images/logo/4.png" class="img-fluid blur-up lazyload" alt="">
                        </a>
                        <p class="information-text information-text-2">Specializing in Asian cuisine, we're dedicated to providing fresh, top-quality food to Japan daily.</p>
                        <ul class="social-icon">
                            <li class="light-bg">
                                <a href="https://www.facebook.com/" class="footer-link-color">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>
                            <li class="light-bg">
                                <a href="https://accounts.google.com/signin/v2/identifier?flowName=GlifWebSignIn&flowEntry=ServiceLogin" class="footer-link-color">
                                    <i class="fab fa-google"></i>
                                </a>
                            </li>
                            <li class="light-bg">
                                <a href="https://twitter.com/i/flow/login" class="footer-link-color">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </li>
                            <li class="light-bg">
                                <a href="https://www.instagram.com/" class="footer-link-color">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </li>
                            <li class="light-bg">
                                <a href="https://in.pinterest.com/" class="footer-link-color">
                                    <i class="fab fa-pinterest-p"></i>
                                </a>
                            </li>
                        </ul>
                    </div>



                    <div class="col-xxl-2 col-xl-4 col-sm-6">
                        <div class="footer-title">
                            <h4 class="text-white">Useful Link</h4>
                        </div>
                        <ul class="footer-list footer-list-light footer-contact">
                            <li>
                                <a href="{{ url('/') }}" class="light-text">Home</a>
                            </li>
                            <li>
                                <a class="light-text" href="{{ url('/products') }}">Products</a>
                            </li>
                            <li>
                                <a href="{{ route('shoplist') }}" class="light-text">Shop</a>
                            </li>
                            <li>
                                <a href="{{ url('/news') }}" class="light-text">Blog</a>
                            </li>
                            <li>
                                <a href="{{ url('/contact') }}" class="light-text">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-xxl-2 col-xl-4 col-sm-6">
                        <div class="footer-title">
                            <h4 class="text-white">Help Center</h4>
                        </div>
                        <ul class="footer-list footer-contact footer-list-light">
                            @if(empty(Auth::user()))
                                <li>
                                    <a href="{{ route('seller.register') }}" class="light-text">Seller Register</a>
                                </li>
                                @endif
                                @if(!empty(Auth::user()))
                                <li>
                                    <a href="{{route ('user_profile')}}" class="light-text">Your Account</a>
                                </li>
                                <li>
                                    <a href="{{route ('user_order')}}" class="light-text">Track Order</a>
                                </li>
                                @endif
                                <li>
                                    <a href="{{ url('/wishlist') }}" class="light-text">Your Wishlist</a>
                                </li>
                                <li>
                                    <a href="{{ url('/comparelist') }}" class="light-text">Your Compare List</a>
                                </li>
                                <li>
                                    <a href="{{ route('footer_search') }}" class="light-text">Search</a>
                                </li>
                                <li>
                                    <a href="{{ url('/faq') }}" class="light-text">FAQ</a>
                                </li>
                                <li>
                                    <a href="{{ url('/term-and-condition') }}" class="light-text">Terms and Conditions</a>
                                </li>
                                <li>
                                    <a href="{{ url('/privacy-policy') }}" class="light-text">Privacy Policy</a>
                                </li>
                        </ul>
                    </div>

                    <div class="col-xxl-2 col-xl-4 col-sm-6">
                        <div class="footer-title">
                            <h4 class="text-white">Categories</h4>
                        </div>
                        <ul class="footer-list footer-list-light footer-contact">
                            @foreach ($categories as $category)
                                <li>
                                    <a href="{{ url('/categorysidebar/'.$category->id)}}" class="light-text">{{ $category->category_name }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>

                    <div class="col-xxl-3 col-xl-4 col-sm-6">
                        <div class="footer-title">
                            <h4 class="text-white">Contact Us</h4>
                        </div>
                        <ul class="footer-address footer-contact">
                            <li>
                                <a href="javascript:void(0)" class="light-text">
                                    <div class="inform-box flex-start-box">
                                        <i data-feather="map-pin"></i>
                                        <p>4-27-5 Ikebukuro, Toshima-ku, Tokyo</p>
                                    </div>
                                </a>
                            </li>

                            <li>
                                <a href="javascript:void(0)" class="light-text">
                                    <div class="inform-box">
                                        <i data-feather="phone"></i>
                                        <p>Call us: (+81)03-3981-5090</p>
                                    </div>
                                </a>
                            </li>

                            <li>
                                <a href="javascript:void(0)" class="light-text">
                                    <div class="inform-box">
                                        <i data-feather="mail"></i>
                                        <p>Email Us: support@new-style.life</p>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="sub-footer sub-footer-lite section-b-space section-t-space">
                <div class="left-footer">
                    <p class="light-text">©2024 Asia Human Development, Inc. All rights reserved</p>
                </div>

                <ul class="payment-box">
                    <li>
                        <img src="{{ asset('frontend/assets/images/icon/paymant/visa.png') }}" class="blur-up lazyload" alt="">
                    </li>
                    <li>
                        <img src="{{ asset('frontend/assets/images/icon/paymant/discover.png') }}" alt="" class="blur-up lazyload">
                    </li>
                    <li>
                        <img src="{{ asset('frontend/assets/images/icon/paymant/american.png') }}" alt="" class="blur-up lazyload">
                    </li>
                    <li>
                        <img src="{{ asset('frontend/assets/images/icon/paymant/master-card.png') }}" alt="" class="blur-up lazyload">
                    </li>
                    <li>
                        <img src="{{ asset('frontend/assets/images/icon/paymant/giro-pay.png') }}" alt="" class="blur-up lazyload">
                    </li>
                </ul>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Deal Box Modal Start -->
    @php
        if (Auth::check()) {
            $buyer = DB::table('buyers')
                        ->where('user_id', Auth::user()->id)
                        ->first();
            if ($buyer) {
                // $todayDate = Carbon::today()->toDateString();
                $todayDate = date('Y-m-d');

                // Perform the query to get today's deals
                $deal = DB::table('products')
                            ->leftJoin('order_details', 'products.id', '=', 'order_details.product_id')
                            ->leftJoin('orders', 'order_details.order_id', '=', 'orders.id')
                            ->select('products.*', 'order_details.payment_approved')
                            ->where('order_details.buyer_id', $buyer->id)
                            ->whereDate('order_details.created_at', $todayDate)
                            ->orderBy('orders.order_code', 'desc')
                            ->get();
            } else {
                $deal = collect();
            }
        } else {
            $deal = collect();
        }
    @endphp
    <div class="modal fade theme-modal deal-modal" id="deal-box" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <div>
                        @if ($deal->count() > 0)
                        <h5 class="modal-title w-100" id="deal_today">Deal Today</h5>
                        <p class="mt-1 text-content">Your ordered items for today.</p>
                        @else
                        <p class="mt-1 text-content">Today, no order yet.</p>
                        @endif
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="modal">
                        <i class="fa-solid fa-xmark"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="deal-offer-box">
                        <ul class="deal-offer-list">
                            @foreach($deal as $list)
                            <li class="list-1">
                                <div class="deal-offer-contain">
                                    <a href="{{ route('show-product-left-thumbnail', ['id' => $list->id]) }}" class="deal-image">
                                        <img src="{{ asset('upload/product_thambnail/'.$list-> product_thambnail) }}" class="blur-up lazyload"
                                            alt="">
                                    </a>

                                    <a href="{{ route('show-product-left-thumbnail', ['id' => $list->id]) }}" class="deal-contain">
                                        <h5>{{ $list->product_name }}</h5>
                                        @if ($list->discount_percent != 0)
                                        <h6>¥{{ number_format($list->selling_price, '0','',',') }}<del>¥{{ number_format($list->original_price, '0','',',') }}</del></h6>
                                        @else
                                        <h6>¥{{ number_format($list->selling_price, '0','',',') }}</h6>
                                        @endif
                                        @if ($list->payment_approved == 0)
                                            <span style="color: red">Payment transfer not yet!</span>
                                        @else
                                            @if ($list->estimate_date)
                                            <span>Estimated Waiting Time : {{ $list->estimate_date}} {{ $list->estimate_date > 1 ? 'days' : 'day' }}</span>
                                            @endif
                                        @endif
                                    </a>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Deal Box Modal End -->

    <!-- Tap to top and theme setting button start -->
    <div class="theme-option">
        <div class="setting-box">
            <button class="btn setting-button">
                <i class="fa-solid fa-gear"></i>
            </button>

            <div class="theme-setting-2">
                <div class="theme-box">
                    <ul>
                        <li>
                            <div class="setting-name">
                                <h4>Color</h4>
                            </div>
                            <div class="theme-setting-button color-picker">
                                <form class="form-control">
                                    <label for="colorPick" class="form-label mb-0">Theme Color</label>
                                    <input type="color" class="form-control form-control-color" id="colorPick"
                                        value="#417394" title="Choose your color">
                                </form>
                            </div>
                        </li>

                        <li>
                            <div class="setting-name">
                                <h4>Dark</h4>
                            </div>
                            <div class="theme-setting-button">
                                <button class="btn btn-2 outline" id="darkButton">Dark</button>
                                <button class="btn btn-2 unline" id="lightButton">Light</button>
                            </div>
                        </li>

                        <li>
                            <div class="setting-name">
                                <h4>RTL</h4>
                            </div>
                            <div class="theme-setting-button rtl">
                                <button class="btn btn-2 rtl-unline">LTR</button>
                                <button class="btn btn-2 rtl-outline">RTL</button>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="back-to-top">
            <a id="back-to-top" href="#">
                <i class="fas fa-chevron-up"></i>
            </a>
        </div>
    </div>
    <!-- Tap to top and theme setting button end -->
    <!-- Logout modal start -->
    <div class="modal fade theme-modal remove-profile" id="staticBackdrop" aria-hidden="true" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header d-block text-center">
                    <h5 class="modal-title w-100" id="exampleModalLabel">Logging Out</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal">
                        <i class="fa-solid fa-xmark"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="remove-box">
                        <p>Are you sure you want to log out?</p>
                    </div>
                </div>
                <div class="modal-footer">
                    <form method="POST" action="{{ route('adminlogout') }}">
                        @csrf
                        <button type="submit" class="btn btn-animation btn-md fw-bold"
                            style="background: #417394; !important;">Yes</button>
                    </form>
                    <button type="button" class="btn btn-animation btn-md fw-bold" data-bs-dismiss="modal"
                        style="background: #6c757d;">No</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Logout modal end -->

    <!-- Bg overlay Start -->
    <div class="bg-overlay"></div>
    <!-- Bg overlay End -->

    <!-- Bootstrap js-->
    <script src="{{ asset('frontend/assets/js/bootstrap/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/bootstrap/bootstrap-notify.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/bootstrap/popper.min.js') }}"></script>

    <!-- feather icon js-->
    <script src="{{ asset('frontend/assets/js/feather/feather.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/feather/feather-icon.js') }}"></script>

    <!-- Lazyload Js -->
    <script src="{{ asset('frontend/assets/js/lazysizes.min.js') }}"></script>

    <!-- Slick js-->
    <script src="{{ asset('frontend/assets/js/slick/slick.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/slick/slick-animation.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/slick/custom_slick.js') }}"></script>

    <!-- Auto Height Js -->
    <script src="{{ asset('frontend/assets/js/auto-height.js') }}"></script>

    <!-- Timer Js -->
    <script src="{{ asset('frontend/assets/js/timer1.js') }}"></script>

    <!-- Fly Cart Js -->
    <script src="{{ asset('frontend/assets/js/fly-cart.js') }}"></script>

    <!-- Quantity js -->
    <script src="{{ asset('frontend/assets/js/quantity-2.js') }}"></script>

    <!-- WOW js -->
    <script src="{{ asset('frontend/assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/custom-wow.js') }}"></script>

    <!-- script js -->
    <script src="{{ asset('frontend/assets/js/script.js') }}"></script>

    <!-- theme setting js -->
    <script src="{{ asset('frontend/assets/js/theme-setting.js') }}"></script>

    <!-- latest jquery-->
    <script src="{{ asset('frontend/assets/js/jquery-3.6.0.min.js') }}"></script>

    <!-- jquery ui-->
    <script src="{{ asset('frontend/assets/js/jquery-ui.min.js') }}"></script>

    <!-- Bootstrap js-->
    <script src="{{ asset('frontend/assets/js/bootstrap/bootstrap.bundle.min.js') }}"></script>

    <script src="{{ asset('frontend/assets/js/bootstrap/bootstrap-notify.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/bootstrap/popper.min.js') }}"></script>

    <!-- feather icon js-->
    <script src="{{ asset('frontend/assets/js/feather/feather.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/feather/feather-icon.js') }}"></script>

    <!-- Lazyload Js -->
    <script src="{{ asset('frontend/assets/js/lazysizes.min.js') }}"></script>

    <!-- Slick js-->
    <script src="{{ asset('frontend/assets/js/slick/slick.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/slick/slick-animation.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/slick/custom_slick.js') }}"></script>

    <!-- Auto Height Js -->
    <script src="{{ asset('frontend/assets/js/auto-height.js') }}"></script>

    <!-- Timer Js -->
    <script src="{{ asset('frontend/assets/js/timer1.js') }}"></script>

    <!-- Quantity js -->
    <script src="{{ asset('frontend/assets/js/quantity-2.js') }}"></script>

    <!-- WOW js -->
    <script src="{{ asset('frontend/assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/custom-wow.js') }}"></script>

    <!-- script js -->
    <script src="{{ asset('frontend/assets/js/script.js') }}"></script>

    <!-- theme setting js -->
    <script src="{{ asset('frontend/assets/js/theme-setting.js') }}"></script>

    <script>
        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $('.close_button').click(function() {
                var productId = $(this).data('product-id');

                $.ajax({
                    url: '/remove-cart-product/' + productId,
                    method: 'get',
                    success: function(response) {
                        console.log(response);
                        var countElement = $('#unreadMessages');
                        var count = parseInt(countElement.text());
                        countElement.text(count - 1);
                    },
                    error: function(xhr, status, error) {
                        console.error('Error deleting cart item:', error);
                    }
                });
            });
        });
    </script>
</body>

</html>
