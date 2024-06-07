
<x-guest-layout>
    @php $error = $errors->toArray();
    @endphp
    <style>
        .home-section pt-2
        {
        background-image: url(../assets/images/vegetable/banner/1.jpg);
        background-size: cover;
        background-position: center center;
        background-repeat: no-repeat;
        display: block;
        }

    </style>
        <!-- Home Section Start -->
    <section class="home-section pt-2 ratio_50">
        <div class="container-fluid-lg">
            <div class="row g-4">
                <div class="col-xl-9 col-lg-8 ratio_50_1">
                    <div class="home-contain furniture-contain-2">
                        <img src="{{ asset('frontend/assets/images/furniture/banner/1.jpg') }}" class="bg-img blur-up lazyload" alt="">
                        <div class="home-detail p-top-left mend-auto w-100">
                            <div>
                                <h6>Exclusive offer <span>30% Off</span></h6>
                                <h1 class="text-uppercase poster-1 text-content furniture-heading">Stay home &
                                    delivered your <span class="daily">Daily Needs</span></h1>
                                @if ($productsGroupedByDiscount[30] != null)
                                <button onclick="location.href = '{{ route('show-discount-product', ['ids' => $productsGroupedByDiscount[30]]) }}';"
                                    class="btn btn-furniture mt-xxl-4 mt-3 home-button mend-auto">Shop Now <i
                                        class="fa-solid fa-right-long ms-2 icon"></i></button>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 d-lg-inline-block d-none">
                    <div class="home-contain h-100 home-furniture">
                        <img src="{{ asset('frontend/assets/images/furniture/banner/2.jpg') }}" class="bg-img blur-up lazyload" alt="">
                        <div class="home-detail p-top-left home-p-sm feature-detail mend-auto">
                            <div>
                                <h2 class="mt-0 text-danger">
                                    50% <span class="discount text-title">OFF</span>
                                </h2>
                                <h2 class="mt-0 theme-color text-kaushan fw-normal">Exclusive</h2>
                                <h3 class="furniture-content">Furniture</h3>
                                @if ($productsGroupedByDiscount[50] != null)
                                    <a href="{{ route('show-discount-product', ['ids' => $productsGroupedByDiscount[50]]) }}"
                                    class="shop-button btn btn-furniture mt-0 d-inline-block btn-md text-content">Shop
                                    Now <i class="fa-solid fa-right-long ms-2"></i></a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Home Section End -->

    <!-- Service Section Start -->
    <section class="service-section">
        <div class="container-fluid-lg">
            <div class="row g-3 row-cols-xxl-5 row-cols-lg-3 row-cols-md-2">
                <div>
                    <div class="service-contain-2">
                        <svg class="icon-width">
                            <use xlink:href="{{ asset('frontend/assets/svg/svg/service-icon-4.svg#shipping') }}"></use>
                        </svg>
                        <div class="service-detail">
                            <h3>Free Shipping</h3>
                            <h6 class="text-content">Free Shipping world wide</h6>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="service-contain-2">
                        <svg class="icon-width">
                            <use xlink:href="{{ asset('frontend/assets/svg/svg/service-icon-4.svg#service') }}"></use>
                        </svg>
                        <div class="service-detail">
                            <h3>24 x 7 Service</h3>
                            <h6 class="text-content">Online Service For 24 x 7</h6>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="service-contain-2">
                        <svg class="icon-width">
                            <use xlink:href="{{ asset('frontend/assets/svg/svg/service-icon-4.svg#pay') }}"></use>
                        </svg>
                        <div class="service-detail">
                            <h3>Online Pay</h3>
                            <h6 class="text-content">Online Payment Avaible</h6>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="service-contain-2">
                        <svg class="icon-width">
                            <use xlink:href="{{ asset('frontend/assets/svg/svg/service-icon-4.svg#offer') }}"></use>
                        </svg>
                        <div class="service-detail">
                            <h3>Discount</h3>
                            <h6 class="text-content">Daily Mega Discounts</h6>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="service-contain-2">
                        <svg class="icon-width">
                            <use xlink:href="{{ asset('frontend/assets/svg/svg/service-icon-4.svg#return') }}"></use>
                        </svg>
                        <div class="service-detail">
                            <h3>Coupon</h3>
                            <h6 class="text-content">Get Cash Back By Using Coupon</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Service Section End -->

    <!-- Product Section Start -->
    <section class="product-section">
        <div class="container-fluid-lg">
            <div class="row g-sm-4 g-3">
                <div class="col-xxl-9 col-xl-8">
                    @if ($coupons->count() > 0)
                    @if(count($couponProducts) > 0)
                    <div class="title title-flex">
                        <div>
                            <h2>Today Coupon Items</h2>
                            <span class="title-leaf">
                                <svg class="icon-width">
                                    <use xlink:href="{{ asset('frontend/assets/svg/leaf.svg#leaf') }}"></use>
                                </svg>
                            </span>
                            <p>Don't miss this opportunity at a special discount just for this week.</p>
                        </div>
                        <div class="timing-box">
                            <div class="timing">
                                <i data-feather="clock"></i>
                                <h6 class="name">Today :</h6>
                                <h6 class="name" id="formatted-date"></h6>
                            </div>
                        </div>
                    </div>

                    <div class="section-b-space">
                        <div class="row row-cols-xxl-5 row-cols-md-4 row-cols-sm-3 row-cols-2 g-sm-4 g-3 no-arrow">
                            @foreach($couponProducts as $couponProduct)
                                <div>
                                    <div class="product-box product-white-bg wow fadeIn" data-wow-delay="0.1s">
                                        <div class="product-image">
                                            <a href="{{ route('show-product-left-thumbnail', ['id' => $couponProduct->id]) }}">
                                                <img src="{{ asset('upload/product_thambnail/'.$couponProduct->product_thambnail)}}"
                                                    class="img-fluid blur-up lazyload" alt="">
                                            </a>
                                            <ul class="product-option">
                                                <li data-bs-toggle="tooltip" data-bs-placement="top" title="View">
                                                    <a href="javascript:void(0)" data-bs-toggle="modal"
                                                    data-bs-target="#view-product{{ $couponProduct->id }}" 
                                                    data-product="{{ $couponProduct->id }}">
                                                        <i data-feather="eye"></i>
                                                    </a>
                                                </li>

                                                <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                                    <a href="{{ route('show-comparelist', ['id' => $couponProduct->id ]) }}">
                                                        <i data-feather="refresh-cw"></i>
                                                    </a>
                                                </li>

                                                <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                                    <a href="{{ route('show-wishlist', ['id' => $couponProduct->id]) }}" class="notifi-wishlist">
                                                        <i data-feather="heart"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product-detail position-relative">
                                            <a href="{{ route('show-product-left-thumbnail', ['id' => $couponProduct->id]) }}">
                                                <h6 class="name">{{ $couponProduct->product_name }}
                                                </h6>
                                            </a>

                                            <h6 class="sold weight text-content fw-normal">
                                                {{ $couponProduct->product_color }}
                                            </h6>

                                            <span class="price theme-color">¥{{ number_format($couponProduct->selling_price, 0, '.', ',') }}</span>
                                            @if ($couponProduct->discount_percent != 0)
                                                <del>¥{{ number_format($couponProduct->original_price, 0, '.', ',') }}</del>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <!-- Quick View Modal Box Start -->
                                @if ($couponProduct->status == 1)
                                @php
                                    $starRating = 0;
                                    $count = 0;
                                @endphp
                                @foreach ($reviews as $review)
                                    @if ($couponProduct->id == $review->product_id)
                                        @php
                                            $count += 1;
                                            $starRating += $review->stars_rated;
                                        @endphp
                                    @endif
                                @endforeach
                                @if ($count != 0)
                                    @php
                                        $starRating = $starRating / $count;
                                    @endphp
                                @endif
                                <div class="modal fade theme-modal view-modal" id="view-product{{ $couponProduct->id }}" tabindex="-1">
                                    <div class="modal-dialog modal-dialog-centered modal-xl">
                                        <div class="modal-content">
                                            <div class="modal-header p-0">
                                                <button type="button" class="btn-close" data-bs-dismiss="modal">
                                                    <i class="fa-solid fa-xmark"></i>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row g-sm-4 g-2">
                                                    <div class="col-lg-6">
                                                        <div class="slider-image">
                                                            <img src="{{ asset('upload/product_thambnail/'.$couponProduct-> product_thambnail) }}"
                                                                class="img-fluid blur-up lazyload" alt="">
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6">
                                                        <div class="right-sidebar-modal">
                                                            <h4 class="title-name">{{ $couponProduct->product_name }}</h4>
                                                            @if ($couponProduct->discount_percent != 0)
                                                                <h4 class="price"><span class="theme-color">¥{{ number_format($couponProduct->selling_price, 0, '', ',') }}</span>
                                                                <del>¥{{ number_format($couponProduct->original_price, 0, '', ',') }}</del>
                                                            @else
                                                                <h4 class="price"><span class="theme-color">¥{{ number_format($couponProduct->selling_price, 0, '', ',') }}</span>
                                                            @endif
                                                            <div class="product-rating">
                                                                <ul class="rating">
                                                                    @for ($i = 1; $i <= 5; $i++)
                                                                        @if ($i <= $starRating)
                                                                            <li><i data-feather="star" class="fill"></i></li>
                                                                        @else
                                                                            <li><i data-feather="star"></i></li>
                                                                        @endif
                                                                    @endfor
                                                                </ul>
                                                                <span class="ms-2">{{ $count}} Reviews</span>
                                                            </div>

                                                            <div class="product-detail">
                                                                <h4>Product Details :</h4>
                                                                <p>{!! ($couponProduct->long_desc) !!}</p>
                                                            </div>

                                                            <ul class="brand-list">
                                                                <li>
                                                                    <div class="brand-box">
                                                                        <h5>Brand Name:</h5>
                                                                        <h6>
                                                                            @php
                                                                                $brand = DB::table('brands')->where('id',$couponProduct->brand_id)->first();
                                                                            @endphp
                                                                            {{ $brand->brand_name }}
                                                                        </h6>
                                                                    </div>
                                                                </li>

                                                                <li>
                                                                    <div class="brand-box">
                                                                        <h5>Product Code:</h5>
                                                                        <h6>{{ $couponProduct->product_code }}</h6>
                                                                    </div>
                                                                </li>

                                                                <li>
                                                                    <div class="brand-box">
                                                                        <h5>Category:</h5>
                                                                        <h6>
                                                                            @php
                                                                                $category = DB::table('categories')->where('id',$couponProduct->category_id)->first();
                                                                            @endphp
                                                                            {{ $category->category_name }}
                                                                        </h6>
                                                                    </div>
                                                                </li>

                                                                <li>
                                                                    <div class="brand-box">
                                                                        <h5>In Stock:</h5>
                                                                        <h6>{{ $couponProduct->in_stock }}</h6>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                            <div class="modal-button">
                                                                <button onclick="location.href = '{{ route('show_carts', ['id' => $couponProduct->id]) }}';"
                                                                    class="btn btn-md add-cart-button icon" @if ($couponProduct->in_stock < 1) disabled @endif>
                                                                    Add To Cart</button>

                                                                <button onclick="location.href = '{{ route('show-product-left-thumbnail', ['id' => $couponProduct->id]) }}';"
                                                                    class="btn theme-bg-color view-button icon text-white fw-bold btn-md">
                                                                    View More Details</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Quick View Modal Box End -->
                                @endif
                            @endforeach
                        </div>
                    </div>
                    @endif
                    @endif
                    <div class="slider-1 product-wrapper no-arrow">
                        @if ($coupons->count() > 0)
                            @foreach($coupons as $coupon)
                                <a href="{{ route('show-coupon-product', ['id' => $coupon->id]) }}">
                                <div class="">
                                    <div class="banner-contain">
                                        <img src="{{ asset('frontend/assets/images/homepage/coupon1.jpg') }}" class="bg-img blur-up lazyload" alt="">
                                        <div class="banner-details p-center p-4 text-white text-center">
                                            <div>
                                                <h3 class="lh-base fw-bold offer-text">{{ $coupon->name }}</h3>
                                                <h4 class="lh-base fw-bold offer-text">
                                                    Get ¥{{ number_format($coupon->discount_amount, 0, '', ',') }} Cashback! Min Order of
                                                        ¥{{ number_format($coupon->mini_amount, 0, '', ',') }}
                                                </h4>
                                                <h5 class="lh-base fw-bold offer-text">Expired Date :
                                                    {{ date('Y/m/d', strtotime($coupon->startdate)) }} ~
                                                    {{ date('Y/m/d', strtotime($coupon->enddate)) }}
                                                </h5>
                                                @if ($coupon->seller)
                                                    @if ($coupon->seller->coupon_status == 1)
                                                    <h4 class="lh-base fw-bold offer-text">Publisher : {{ $coupon->seller->shop_name }}</h4>
                                                    @endif
                                                @elseif ($coupon->product->first())
                                                    @if ($coupon->product->first()->coupon_status == 1)
                                                    <h4 class="lh-base fw-bold offer-text">Publisher : Asian Food Museum</h4>
                                                    @endif
                                                @endif
                                                <h6 class="coupon-code">Use Code : {{ $coupon->coupon_code}}</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </a>
                            @endforeach
                        @endif
                    </div>

                    @if(count($categories) > 0)
                    <div class="title">
                        <h2>Browse by Categories</h2>
                        <span class="title-leaf">
                            <svg class="icon-width">
                                <use xlink:href="{{ asset('frontend/assets/svg/leaf.svg#leaf') }}"></use>
                            </svg>
                        </span>
                        <p>Top Categories Of The Week</p>
                    </div>

                    <div class="category-slider-2 product-wrapper no-arrow">
                        @foreach($categories as $list)
                            <div>
                                <a href="{{ route('show-category-left-side-bar', ['categoryid' => $list->id]) }}" class="category-box category-dark">
                                    <div>
                                        <img src="{{ asset('images/'.$list->category_icon) }}" class="blur-up lazyload"
                                            alt="">
                                        <h5>{{ $list->category_name }}</h5>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                    @endif

                    <div class="section-t-space section-b-space">
                        <div class="row g-md-4 g-3">
                            <div class="col-md-6">
                                <div class="banner-contain hover-effect">
                                    <img src="{{ asset('frontend/assets/images/furniture/banner/4.jpg') }}" class="bg-img blur-up lazyload"
                                        alt="">
                                    <div class="banner-details p-center-left p-4">
                                        <div>
                                            <h3 class="text-kaushan text-yellow">50% offer</h3>
                                            <h4 class="theme-color mb-2 fw-normal"><span
                                                    class="theme-color fw-bold">Restyling</span> your Home</h4>
                                            @if($meatHalfDiscount != null)
                                                <button onclick="location.href = '{{ route('show-discount-product', ['ids' => $meatHalfDiscount]) }}';"
                                                    class="btn btn-furniture btn-sm mend-auto">Shop Now <i
                                                        class="fa-solid fa-arrow-right icon"></i></button>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="banner-contain hover-effect">
                                    <img src="{{ asset('frontend/assets/images/furniture/banner/5.jpg') }}" class="bg-img blur-up lazyload"
                                        alt="">
                                    <div class="banner-details p-center-left p-4">
                                        <div>
                                            <h3 class="text-kaushan text-yellow">50% offer</h3>
                                            <h4 class="theme-color mb-2 fw-normal"><span class="theme-color fw-bold">New
                                                    Elite</span> Collections</h4>
                                            @if($vegetableHalfDiscount != null)
                                                <button onclick="location.href = '{{ route('show-discount-product', ['ids' => $vegetableHalfDiscount]) }}';"
                                                    class="btn btn-furniture btn-sm mend-auto">Shop Now <i
                                                        class="fa-solid fa-arrow-right icon"></i></button>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    @if(count($latestProducts) > 0)
                    <div class="title d-block">
                        <h2>Newest Products</h2>
                        <span class="title-leaf">
                            <svg class="icon-width">
                                <use xlink:href="{{ asset('frontend/assets/svg/leaf.svg#leaf') }}"></use>
                            </svg>
                        </span>
                        <p>A virtual assistant collects the products from your list</p>
                    </div>

                    <div class="row row-cols-xxl-5 row-cols-md-4 row-cols-sm-3 row-cols-2 g-sm-4 g-3 no-arrow">
                        @foreach($latestProducts as $latestProduct)
                        <div>
                            <div class="product-box product-white-bg wow fadeIn" data-wow-delay="0.1s">
                                <div class="product-image">
                                    <a href="{{ route('show-product-left-thumbnail', ['id' => $latestProduct->id]) }}">
                                        <img src="{{ asset('upload/product_thambnail/'.$latestProduct->product_thambnail)}}" 
                                        class="img-fluid blur-up lazyload" alt="">
                                    </a>
                                    <ul class="product-option">
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="View">
                                            <a href="javascript:void(0)" data-bs-toggle="modal"
                                            data-bs-target="#view-newest-product{{ $latestProduct->id }}" 
                                            data-product="{{ $latestProduct->id }}">
                                                <i data-feather="eye"></i>
                                            </a>
                                        </li>

                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                            <a href="{{ route('show-comparelist', ['id' => $latestProduct->id ]) }}">
                                                <i data-feather="refresh-cw"></i>
                                            </a>
                                        </li>

                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                            <a href="{{ route('show-wishlist', ['id' => $latestProduct->id]) }}" class="notifi-wishlist">
                                                <i data-feather="heart"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="product-detail position-relative">
                                    <a href="{{ route('show-product-left-thumbnail', ['id' => $latestProduct->id]) }}">
                                        <h6 class="name">{{ $latestProduct->product_name }}</h6>
                                    </a>

                                    <h6 class="sold weight text-content fw-normal">{{ $latestProduct->product_color }}</h6>

                                    <span class="price theme-color">¥{{ number_format($latestProduct->selling_price, 0, '.', ',') }}</span>
                                    @if ($latestProduct->discount_percent != 0)
                                        <del>¥{{ number_format($latestProduct->original_price, 0, '.', ',') }}</del>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <!-- Quick View Modal Box Start -->
                        @if ($latestProduct->status == 1)
                        @php
                            $starRating = 0;
                            $count = 0;
                        @endphp
                        @foreach ($reviews as $review)
                            @if ($latestProduct->id == $review->product_id)
                                @php
                                    $count += 1;
                                    $starRating += $review->stars_rated;
                                @endphp
                            @endif
                        @endforeach
                        @if ($count != 0)
                            @php
                                $starRating = $starRating / $count;
                            @endphp
                        @endif
                        @endif
                        <div class="modal fade theme-modal view-modal" id="view-newest-product{{ $latestProduct->id }}" tabindex="-1">
                            <div class="modal-dialog modal-dialog-centered modal-xl">
                                <div class="modal-content">
                                    <div class="modal-header p-0">
                                        <button type="button" class="btn-close" data-bs-dismiss="modal">
                                            <i class="fa-solid fa-xmark"></i>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row g-sm-4 g-2">
                                            <div class="col-lg-6">
                                                <div class="slider-image">
                                                    <img src="{{ asset('upload/product_thambnail/'.$latestProduct-> product_thambnail) }}"
                                                        class="img-fluid blur-up lazyload" alt="">
                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="right-sidebar-modal">
                                                    <h4 class="title-name">{{ $latestProduct->product_name }}</h4>
                                                    @if ($latestProduct->discount_percent != 0)
                                                        <h4 class="price"><span class="theme-color">¥{{ number_format($latestProduct->selling_price, 0, '', ',') }}</span>
                                                        <del>¥{{ number_format($latestProduct->original_price, 0, '', ',') }}</del>
                                                    @else
                                                        <h4 class="price"><span class="theme-color">¥{{ number_format($latestProduct->selling_price, 0, '', ',') }}</span>
                                                    @endif
                                                    <div class="product-rating">
                                                        <ul class="rating">
                                                            @for ($i = 1; $i <= 5; $i++)
                                                                @if ($i <= $starRating)
                                                                    <li><i data-feather="star" class="fill"></i></li>
                                                                @else
                                                                    <li><i data-feather="star"></i></li>
                                                                @endif
                                                            @endfor
                                                        </ul>
                                                        <span class="ms-2">{{ $count}} Reviews</span>
                                                    </div>

                                                    <div class="product-detail">
                                                        <h4>Product Details :</h4>
                                                        <p>{!! ($latestProduct->long_desc) !!}</p>
                                                    </div>

                                                    <ul class="brand-list">
                                                        <li>
                                                            <div class="brand-box">
                                                                <h5>Brand Name:</h5>
                                                                <h6>
                                                                    @php
                                                                        $brand = DB::table('brands')->where('id',$latestProduct->brand_id)->first();
                                                                    @endphp
                                                                    {{ $brand->brand_name }}
                                                                </h6>
                                                            </div>
                                                        </li>

                                                        <li>
                                                            <div class="brand-box">
                                                                <h5>Product Code:</h5>
                                                                <h6>{{ $latestProduct->product_code }}</h6>
                                                            </div>
                                                        </li>

                                                        <li>
                                                            <div class="brand-box">
                                                                <h5>Category:</h5>
                                                                <h6>
                                                                    @php
                                                                        $category = DB::table('categories')->where('id',$latestProduct->category_id)->first();
                                                                    @endphp
                                                                    {{ $category->category_name }}
                                                                </h6>
                                                            </div>
                                                        </li>

                                                        <li>
                                                            <div class="brand-box">
                                                                <h5>In Stock:</h5>
                                                                <h6>{{ $latestProduct->in_stock }}</h6>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                    <div class="modal-button">
                                                        <button onclick="location.href = '{{ route('show_carts', ['id' => $latestProduct->id]) }}';"
                                                            class="btn btn-md add-cart-button icon" @if ($latestProduct->in_stock < 1) disabled @endif>
                                                            Add To Cart</button>

                                                        <button onclick="location.href = '{{ route('show-product-left-thumbnail', ['id' => $latestProduct->id]) }}';"
                                                            class="btn theme-bg-color view-button icon text-white fw-bold btn-md">
                                                            View More Details</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Quick View Modal Box End -->
                        @endforeach
                    </div>
                    @endif
                </div>

                <div class="col-xxl-3 col-xl-4 d-none d-xl-block">
                    <div class="p-sticky">
                        @if(count($shops) > 0)
                        <div class="category-menu">
                            <h3>Shop By Product</h3>
                            <ul class="border-bottom-0">
                                @foreach($shops as $shop)
                                <li>
                                    <div class="category-list">
                                        <img src="{{ asset('upload/shop/'.($shop->shop_logo)) }}"
                                            class="blur-up lazyload" alt="">
                                        <h5>
                                            <a href="{{ route('show-shop-left-side-bar', ['shopid' => $shop->user_id ]) }}">
                                                {{ $shop->shop_name }}
                                            </a>
                                        </h5>
                                    </div>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                        @endif

                        <div class="ratio_156 section-t-space">
                            <div class="home-contain hover-effect">
                                <img src="{{ asset('frontend/assets/images/furniture/banner/3.jpg') }}" class="bg-img blur-up lazyload"
                                    alt="">
                                <div class="home-detail p-top-left home-p-medium">
                                    <div>
                                        <h4 class="text-yellow home-banner text-kaushan">New Arrival</h4>
                                        <h3 class="text-uppercase theme-color fw-bold mb-1">Desk Table</h3>
                                        <p class="text-content mb-3">Top Selling Of The Week! Exclusive Offer!</p>
                                        <button onclick="location.href = '{{ route('show-discount-product', ['topic' => 'new-arrivals']) }}';"
                                            class="btn btn-furniture btn-md mend-auto">Shop Now <i
                                                class="fa-solid fa-arrow-right icon"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        @if(count($trendingProducts) > 0)
                        <div class="section-t-space">
                            <div class="category-menu">
                                <h3>Trending Products</h3>

                                <ul class="product-list border-0 p-0 d-block">
                                    @foreach($trendingProducts as $trending)
                                    <li>
                                        <div class="offer-product">
                                            <a href="{{ route('show-product-left-thumbnail', ['id' => $trending->id]) }}" class="offer-image">
                                                <img src="{{ asset('upload/product_thambnail/'.$trending->product_thambnail)}}"
                                                class="blur-up lazyload" alt="">
                                            </a>

                                            <div class="offer-detail">
                                                <div>
                                                    <a href="{{ route('show-product-left-thumbnail', ['id' => $trending->id]) }}" class="text-title">
                                                        <h6 class="name">{{ $trending->product_name }}</h6>
                                                    </a>
                                                    <span>{{ $trending->product_color}}</span>
                                                    <span class="price theme-color">¥{{ number_format($latestProduct->selling_price, 0, '.', ',') }}</span>
                                                    @if ($latestProduct->discount_percent != 0)
                                                        <del>¥{{ number_format($latestProduct->original_price, 0, '.', ',') }}</del>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Section End -->

    <!-- Banner Section Start -->
    <section class="banner-section">
        <div class="container-fluid-lg">
            <div class="row">
                <div class="col-12">
                    <div class="banner-contain-3 section-b-space section-t-space hover-effect overflow-visible">
                        <img src="{{ asset('frontend/assets/images/furniture/banner/6.jpg') }}" class="bg-img" alt="">
                        <img src="{{ asset('frontend/assets/images/furniture/banner/7.jpg') }}" class="flower-pot img-fluid" alt="">
                        <div
                            class="banner-detail p-center-left position-relative d-block py-0 banner-furniture mend-auto">
                            <div class="row">
                                <div class="col-xl-6 offset-xxl-2 offset-xl-1 col-md-8 col-sm-9">
                                    <h4 class="text-uppercase text-yellow text-kaushan furniture-title">
                                        Value Of The Day
                                        <img src="{{ asset('frontend/assets/images/furniture/arrow.svg') }}" alt="">
                                    </h4>
                                    <h2 class="mt-sm-3 mt-1 mb-2 text-content">Home Decor <span
                                            class="theme-color fw-bold">LookBook</span> 2022</h2>
                                    <p class="text-content">In publishing and graphic design, Lorem ipsum is a
                                        placeholder text commonly used to demonstrate.</p>
                                    <button class="btn theme-bg-color mt-sm-4 mt-2 btn-md text-white fw-bold"
                                        onclick="location.href = '{{ route('show-discount-product', ['topic' => 'value-of-the-day']) }}';">
                                        Shop Now
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner Section End -->

    <!-- Best Seller Section Start -->
    <section>
        <div class="container-fluid-lg">
            @if(count($bestSellerProducts) > 0)
            <div class="title d-block">
                <div>
                    <h2>Our best Seller</h2>
                    <span class="title-leaf">
                        <svg class="icon-width">
                            <use xlink:href="{{ asset('frontend/assets/svg/leaf.svg#leaf') }}"></use>
                        </svg>
                    </span>
                    <p>A virtual assistant collects the products from your list</p>
                </div>
            </div>
            <div class="banner-slider product-wrapper wow fadeInUp">
                @php
                    $productCount = $bestSellerProducts->count();
                @endphp
                @for ($i = 0; $i < ceil($productCount / 4); $i++)
                    <div>
                        <ul class="product-list">
                    @php
                        $index = $i * 4;
                    @endphp
                    @for ($j = 0; $j < 4 && ($index + $j) < $productCount; $j++)
                            @php
                                $product = $bestSellerProducts[$index + $j];
                            @endphp
                            <li>
                                <div class="offer-product">
                                    <a href="{{ route('show-product-left-thumbnail', ['id' => $product->id]) }}" class="offer-image">
                                        <img src="{{ asset('upload/product_thambnail/'.$product->product_thambnail)}}"
                                            class="blur-up lazyload" alt="">
                                    </a>

                                    <div class="offer-detail">
                                        <div>
                                            <a href="{{ route('show-product-left-thumbnail', ['id' => $product->id]) }}" class="text-title">
                                                <h6 class="name">{{ $product->product_name }}</h6>
                                            </a>
                                            <span>{{ $product->product_size }}</span>
                                            <h6 class="price theme-color">¥{{ number_format($product->selling_price, 0, '.', ',') }}</h6>
                                        </div>
                                    </div>
                                </div>
                            </li>
                    @endfor
                        </ul>
                    </div>
                @endfor
            </div>
            @endif
        </div>
    </section>
    <!-- Best Seller Section End -->

    <!-- Newsletter Section Start -->
    <section class="newsletter-section section-b-space">
        <div class="container-fluid-lg">
            <div class="newsletter-box newsletter-box-2">
                <div class="newsletter-contain py-5">
                    <div class="container-fluid">
                        @include('components.messagebox')
                        <div class="row">
                            <div class="col-xxl-4 col-lg-5 col-md-7 col-sm-9 offset-xxl-2 offset-md-1">
                                <div class="newsletter-detail">
                                    <h2>Join Our Newsletter And Get...</h2>
                                    <h5>Get access to the latest information.</h5>
                                    @php $action= route('registernewsletter'); @endphp
                                    <form class="theme-form theme-form-2 mega-form" id="registernewsletter" class="contact-form" method="POST" action="{{ $action }}" enctype="multipart/form-data">
                                        @csrf
                                        <div class="input-box">
                                            <input type="email" class="form-control" id="newsletter" name="newsletter"
                                                placeholder="Enter Your Email">
                                            <i class="fa-solid fa-envelope arrow"></i>
                                            <button class="sub-btn btn-submit  btn-animation">
                                                <span class="d-sm-block d-none">Subscribe</span>
                                                <i class="fa-solid fa-arrow-right icon"></i>
                                            </button>
                                        </div>
                                        <p style="display:none" class="newsletter error text-danger"></p>
                                        @if (!empty($error['newsletter']))
                                            @foreach ($error['newsletter'] as  $key => $value)
                                                <p class="newsletter error text-danger">{{ $value }}</p>
                                            @endforeach
                                        @endif
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Newsletter Section End -->

    <!-- Cookie Bar Box Start -->
    <div class="cookie-bar-box">
        <div class="cookie-box">
            <div class="cookie-image">
                <img src="{{ asset('frontend/assets/images/cookie-bar.png') }}" class="blur-up lazyload" alt="">
                <h2>Cookies!</h2>
            </div>

            <div class="cookie-contain">
                <h5 class="text-content">We use cookies to make your experience better</h5>
            </div>
        </div>

        <div class="button-group">
            <a href="{{ url('/privacy-policy') }}" class="text-content">
                <button class="btn privacy-button">Privacy Policy</button>
            </a>
            <button class="btn ok-button">OK</button>
        </div>
    </div>
    <!-- Cookie Bar Box End -->

    <script>
        var today = new Date();
        var formattedDate = today.getFullYear() + '/' + ('0' + (today.getMonth() + 1)).slice(-2) + '/' + ('0' + today.getDate()).slice(-2);
        document.getElementById("formatted-date").innerText = formattedDate;
    </script>
    <script>
        $('.btn-submit').click(function() {
            $('.error').hide();
            var email = $.trim($("#newsletter").val());
            var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;

            if (email === "") {
                $('.error.newsletter').text('Email is required');
                $('.error.newsletter').show();
                return false;
            } else if (!emailPattern.test(email)) {
                $('.error.newsletter').text('Invalid email format');
                $('.error.newsletter').show();
                return false;
            } else {
                $('.error').hide();
                $('#confirmModal').modal('show');
            }
        });
    </script>
</x-guest-layout>

