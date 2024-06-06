
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
                                <button onclick="location.href = 'shop-left-sidebar.html';"
                                    class="btn btn-furniture mt-xxl-4 mt-3 home-button mend-auto">Shop Now <i
                                        class="fa-solid fa-right-long ms-2 icon"></i></button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 d-lg-inline-block d-none">
                    <div class="home-contain h-100 home-furniture">
                        <img src="{{ asset('frontend/assets/images/furniture/banner/2.jpg') }}" class="bg-img blur-up lazyload" alt="">
                        <div class="home-detail p-top-left home-p-sm feature-detail mend-auto">
                            <div>
                                <h2 class="mt-0 theme-color text-kaushan fw-normal">Exclusive</h2>
                                <h3 class="furniture-content">Furniture</h3>
                                <a href="shop-left-sidebar.html"
                                    class="shop-button btn btn-furniture mt-0 d-inline-block btn-md text-content">Shop
                                    Now <i class="fa-solid fa-right-long ms-2"></i></a>
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
                            <h3>Festival Offer</h3>
                            <h6 class="text-content">Super Sale Upto 50% off</h6>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="service-contain-2">
                        <svg class="icon-width">
                            <use xlink:href="{{ asset('frontend/assets/svg/svg/service-icon-4.svg#return') }}"></use>
                        </svg>
                        <div class="service-detail">
                            <h3>100% Original</h3>
                            <h6 class="text-content">100% Money Back</h6>
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
                    <div class="title title-flex">
                        <div>
                            <h2>Top Save Today</h2>
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
                                <h6 class="name">Expires in :</h6>
                                <div class="time" id="clockdiv-1" data-hours="1" data-minutes="2" data-seconds="3">
                                    <ul>
                                        <li>
                                            <div class="counter">
                                                <div class="days">
                                                    <h6></h6>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="counter">
                                                <div class="hours">
                                                    <h6></h6>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="counter">
                                                <div class="minutes">
                                                    <h6></h6>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="counter">
                                                <div class="seconds">
                                                    <h6></h6>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="section-b-space">
                        <div class="row row-cols-xxl-5 row-cols-md-4 row-cols-sm-3 row-cols-2 g-sm-4 g-3 no-arrow">
                            <div>
                                <div class="product-box product-white-bg wow fadeIn">
                                    <div class="product-image">
                                        <a href="product-left-thumbnail.html">
                                            <img src="{{ asset('frontend/assets/images/furniture/1.png') }}"
                                                class="img-fluid blur-up lazyload" alt="">
                                        </a>
                                        <ul class="product-option">
                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="View">
                                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                                    data-bs-target="#view">
                                                    <i data-feather="eye"></i>
                                                </a>
                                            </li>

                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                                <a href="compare.html">
                                                    <i data-feather="refresh-cw"></i>
                                                </a>
                                            </li>

                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                                <a href="wishlist.html" class="notifi-wishlist">
                                                    <i data-feather="heart"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product-detail position-relative">
                                        <a href="product-left-thumbnail.html">
                                            <h6 class="name">Home Decor Lucky Deer Family Matte Finish Ceramic Figures
                                            </h6>
                                        </a>

                                        <h6 class="sold weight text-content fw-normal">1 KG</h6>

                                        <h6 class="price theme-color">$ 80.00</h6>

                                        <div class="add-to-cart-btn-2 add-to-cart-box addtocart_btn">
                                            <button class="btn addcart-button btn buy-button"><i
                                                    class="fa-solid fa-plus"></i></button>
                                            <div class="cart_qty qty-box-2">
                                                <div class="input-group">
                                                    <button type="button" class="qty-left-minus" data-type="minus"
                                                        data-field="">
                                                        <i class="fa fa-minus"></i>
                                                    </button>
                                                    <input class="form-control input-number qty-input" type="text"
                                                        name="quantity" value="1">
                                                    <button type="button" class="qty-right-plus" data-type="plus"
                                                        data-field="">
                                                        <i class="fa fa-plus"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <div class="product-box product-white-bg wow fadeIn" data-wow-delay="0.1s">
                                    <div class="product-image">
                                        <a href="product-left-thumbnail.html">
                                            <img src="{{ asset('frontend/assets/images/furniture/2.png') }}"
                                                class="img-fluid blur-up lazyload" alt="">
                                        </a>
                                        <ul class="product-option">
                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="View">
                                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                                    data-bs-target="#view">
                                                    <i data-feather="eye"></i>
                                                </a>
                                            </li>

                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                                <a href="compare.html">
                                                    <i data-feather="refresh-cw"></i>
                                                </a>
                                            </li>

                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                                <a href="wishlist.html" class="notifi-wishlist">
                                                    <i data-feather="heart"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product-detail position-relative">
                                        <a href="product-left-thumbnail.html">
                                            <h6 class="name">luxury comfort full size 17*27 jumbo border pillow</h6>
                                        </a>

                                        <h6 class="sold weight text-content fw-normal">1 KG</h6>

                                        <h6 class="price theme-color">$ 80.00</h6>

                                        <div class="add-to-cart-btn-2 addtocart_btn">
                                            <button class="btn addcart-button btn buy-button"><i
                                                    class="fa-solid fa-plus"></i></button>
                                            <div class="cart_qty qty-box-2">
                                                <div class="input-group">
                                                    <button type="button" class="qty-left-minus" data-type="minus"
                                                        data-field="">
                                                        <i class="fa fa-minus"></i>
                                                    </button>
                                                    <input class="form-control input-number qty-input" type="text"
                                                        name="quantity" value="1">
                                                    <button type="button" class="qty-right-plus" data-type="plus"
                                                        data-field="">
                                                        <i class="fa fa-plus"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <div class="product-box product-white-bg wow fadeIn">
                                    <div class="product-image">
                                        <a href="product-left-thumbnail.html">
                                            <img src="{{ asset('frontend/assets/images/furniture/3.png') }}"
                                                class="img-fluid blur-up lazyload" alt="">
                                        </a>
                                        <ul class="product-option">
                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="View">
                                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                                    data-bs-target="#view">
                                                    <i data-feather="eye"></i>
                                                </a>
                                            </li>

                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                                <a href="compare.html">
                                                    <i data-feather="refresh-cw"></i>
                                                </a>
                                            </li>

                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                                <a href="wishlist.html" class="notifi-wishlist">
                                                    <i data-feather="heart"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product-detail position-relative">
                                        <a href="product-left-thumbnail.html">
                                            <h6 class="name">Coral Bean Bag Chair</h6>
                                        </a>

                                        <h6 class="sold weight text-content fw-normal">1 KG</h6>

                                        <h6 class="price theme-color">$ 80.00</h6>

                                        <div class="add-to-cart-btn-2 addtocart_btn">
                                            <button class="btn addcart-button btn buy-button"><i
                                                    class="fa-solid fa-plus"></i></button>
                                            <div class="cart_qty qty-box-2">
                                                <div class="input-group">
                                                    <button type="button" class="qty-left-minus" data-type="minus"
                                                        data-field="">
                                                        <i class="fa fa-minus"></i>
                                                    </button>
                                                    <input class="form-control input-number qty-input" type="text"
                                                        name="quantity" value="1">
                                                    <button type="button" class="qty-right-plus" data-type="plus"
                                                        data-field="">
                                                        <i class="fa fa-plus"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <div class="product-box product-white-bg wow fadeIn" data-wow-delay="0.1s">
                                    <div class="product-image">
                                        <a href="product-left-thumbnail.html">
                                            <img src="{{ asset('frontend/assets/images/furniture/4.png') }}"
                                                class="img-fluid blur-up lazyload" alt="">
                                        </a>
                                        <ul class="product-option">
                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="View">
                                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                                    data-bs-target="#view">
                                                    <i data-feather="eye"></i>
                                                </a>
                                            </li>

                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                                <a href="compare.html">
                                                    <i data-feather="refresh-cw"></i>
                                                </a>
                                            </li>

                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                                <a href="wishlist.html" class="notifi-wishlist">
                                                    <i data-feather="heart"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product-detail position-relative">
                                        <a href="product-left-thumbnail.html">
                                            <h6 class="name">ELSTONE HOME White Colour Bath Towel</h6>
                                        </a>

                                        <h6 class="sold weight text-content fw-normal">1 KG</h6>

                                        <h6 class="price theme-color">$ 80.00</h6>

                                        <div class="add-to-cart-btn-2 addtocart_btn">
                                            <button class="btn addcart-button btn buy-button"><i
                                                    class="fa-solid fa-plus"></i></button>
                                            <div class="cart_qty qty-box-2">
                                                <div class="input-group">
                                                    <button type="button" class="qty-left-minus" data-type="minus"
                                                        data-field="">
                                                        <i class="fa fa-minus"></i>
                                                    </button>
                                                    <input class="form-control input-number qty-input" type="text"
                                                        name="quantity" value="1">
                                                    <button type="button" class="qty-right-plus" data-type="plus"
                                                        data-field="">
                                                        <i class="fa fa-plus"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <div class="product-box product-white-bg wow fadeIn">
                                    <div class="product-image">
                                        <a href="product-left-thumbnail.html">
                                            <img src="{{ asset('frontend/assets/images/furniture/5.png') }}"
                                                class="img-fluid blur-up lazyload" alt="">
                                        </a>
                                        <ul class="product-option">
                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="View">
                                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                                    data-bs-target="#view">
                                                    <i data-feather="eye"></i>
                                                </a>
                                            </li>

                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                                <a href="compare.html">
                                                    <i data-feather="refresh-cw"></i>
                                                </a>
                                            </li>

                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                                <a href="wishlist.html" class="notifi-wishlist">
                                                    <i data-feather="heart"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product-detail position-relative">
                                        <a href="product-left-thumbnail.html">
                                            <h6 class="name">Benefits of using natural stone tile flooring</h6>
                                        </a>

                                        <h6 class="sold weight text-content fw-normal">1 KG</h6>

                                        <h6 class="price theme-color">$ 80.00</h6>

                                        <div class="add-to-cart-btn-2 addtocart_btn">
                                            <button class="btn addcart-button btn buy-button"><i
                                                    class="fa-solid fa-plus"></i></button>
                                            <div class="cart_qty qty-box-2">
                                                <div class="input-group">
                                                    <button type="button" class="qty-left-minus" data-type="minus"
                                                        data-field="">
                                                        <i class="fa fa-minus"></i>
                                                    </button>
                                                    <input class="form-control input-number qty-input" type="text"
                                                        name="quantity" value="1">
                                                    <button type="button" class="qty-right-plus" data-type="plus"
                                                        data-field="">
                                                        <i class="fa fa-plus"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <div class="product-box product-white-bg wow fadeIn" data-wow-delay="0.1s">
                                    <div class="product-image">
                                        <a href="product-left-thumbnail.html">
                                            <img src="{{ asset('frontend/assets/images/furniture/6.png') }}"
                                                class="img-fluid blur-up lazyload" alt="">
                                        </a>
                                        <ul class="product-option">
                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="View">
                                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                                    data-bs-target="#view">
                                                    <i data-feather="eye"></i>
                                                </a>
                                            </li>

                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                                <a href="compare.html">
                                                    <i data-feather="refresh-cw"></i>
                                                </a>
                                            </li>

                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                                <a href="wishlist.html" class="notifi-wishlist">
                                                    <i data-feather="heart"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product-detail position-relative">
                                        <a href="product-left-thumbnail.html">
                                            <h6 class="name">Nature Baby Merino Knit Bassinet Blanket</h6>
                                        </a>

                                        <h6 class="sold weight text-content fw-normal">1 KG</h6>

                                        <h6 class="price theme-color">$ 80.00</h6>

                                        <div class="add-to-cart-btn-2 addtocart_btn">
                                            <button class="btn addcart-button btn buy-button"><i
                                                    class="fa-solid fa-plus"></i></button>
                                            <div class="cart_qty qty-box-2">
                                                <div class="input-group">
                                                    <button type="button" class="qty-left-minus" data-type="minus"
                                                        data-field="">
                                                        <i class="fa fa-minus"></i>
                                                    </button>
                                                    <input class="form-control input-number qty-input" type="text"
                                                        name="quantity" value="1">
                                                    <button type="button" class="qty-right-plus" data-type="plus"
                                                        data-field="">
                                                        <i class="fa fa-plus"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <div class="product-box product-white-bg wow fadeIn">
                                    <div class="product-image">
                                        <a href="product-left-thumbnail.html">
                                            <img src="{{ asset('frontend/assets/images/furniture/7.png') }}"
                                                class="img-fluid blur-up lazyload" alt="">
                                        </a>
                                        <ul class="product-option">
                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="View">
                                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                                    data-bs-target="#view">
                                                    <i data-feather="eye"></i>
                                                </a>
                                            </li>

                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                                <a href="compare.html">
                                                    <i data-feather="refresh-cw"></i>
                                                </a>
                                            </li>

                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                                <a href="wishlist.html" class="notifi-wishlist">
                                                    <i data-feather="heart"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product-detail position-relative">
                                        <a href="product-left-thumbnail.html">
                                            <h6 class="name">Wooden Tea Cup Coaster Coffee Drinks</h6>
                                        </a>

                                        <h6 class="sold weight text-content fw-normal">1 KG</h6>

                                        <h6 class="price theme-color">$ 80.00</h6>

                                        <div class="add-to-cart-btn-2 addtocart_btn">
                                            <button class="btn addcart-button btn buy-button"><i
                                                    class="fa-solid fa-plus"></i></button>
                                            <div class="cart_qty qty-box-2">
                                                <div class="input-group">
                                                    <button type="button" class="qty-left-minus" data-type="minus"
                                                        data-field="">
                                                        <i class="fa fa-minus"></i>
                                                    </button>
                                                    <input class="form-control input-number qty-input" type="text"
                                                        name="quantity" value="1">
                                                    <button type="button" class="qty-right-plus" data-type="plus"
                                                        data-field="">
                                                        <i class="fa fa-plus"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div>

                                <div class="product-box product-white-bg wow fadeIn" data-wow-delay="0.1s">
                                    <div class="product-image">
                                        <a href="product-left-thumbnail.html">
                                            <img src="{{ asset('frontend/assets/images/furniture/8.png') }}"
                                                class="img-fluid blur-up lazyload" alt="">
                                        </a>
                                        <ul class="product-option">
                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="View">
                                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                                    data-bs-target="#view">
                                                    <i data-feather="eye"></i>
                                                </a>
                                            </li>

                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                                <a href="compare.html">
                                                    <i data-feather="refresh-cw"></i>
                                                </a>
                                            </li>

                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                                <a href="wishlist.html" class="notifi-wishlist">
                                                    <i data-feather="heart"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product-detail position-relative">
                                        <a href="product-left-thumbnail.html">
                                            <h6 class="name">Goddess Marble Hexagon Party Plates</h6>
                                        </a>

                                        <h6 class="sold weight text-content fw-normal">1 KG</h6>

                                        <h6 class="price theme-color">$ 80.00</h6>

                                        <div class="add-to-cart-btn-2 addtocart_btn">
                                            <button class="btn addcart-button btn buy-button"><i
                                                    class="fa-solid fa-plus"></i></button>
                                            <div class="cart_qty qty-box-2">
                                                <div class="input-group">
                                                    <button type="button" class="qty-left-minus" data-type="minus"
                                                        data-field="">
                                                        <i class="fa fa-minus"></i>
                                                    </button>
                                                    <input class="form-control input-number qty-input" type="text"
                                                        name="quantity" value="1">
                                                    <button type="button" class="qty-right-plus" data-type="plus"
                                                        data-field="">
                                                        <i class="fa fa-plus"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <div class="product-box product-white-bg wow fadeIn">
                                    <div class="product-image">
                                        <a href="product-left-thumbnail.html">
                                            <img src="{{ asset('frontend/assets/images/furniture/9.png') }}"
                                                class="img-fluid blur-up lazyload" alt="">
                                        </a>
                                        <ul class="product-option">
                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="View">
                                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                                    data-bs-target="#view">
                                                    <i data-feather="eye"></i>
                                                </a>
                                            </li>

                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                                <a href="compare.html">
                                                    <i data-feather="refresh-cw"></i>
                                                </a>
                                            </li>

                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                                <a href="wishlist.html" class="notifi-wishlist">
                                                    <i data-feather="heart"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product-detail position-relative">
                                        <a href="product-left-thumbnail.html">
                                            <h6 class="name">Handmade Brown Mango Wooden Tray Square</h6>
                                        </a>

                                        <h6 class="sold weight text-content fw-normal">1 KG</h6>

                                        <h6 class="price theme-color">$ 80.00</h6>

                                        <div class="add-to-cart-btn-2 addtocart_btn">
                                            <button class="btn addcart-button btn buy-button"><i
                                                    class="fa-solid fa-plus"></i></button>
                                            <div class="cart_qty qty-box-2">
                                                <div class="input-group">
                                                    <button type="button" class="qty-left-minus" data-type="minus"
                                                        data-field="">
                                                        <i class="fa fa-minus"></i>
                                                    </button>
                                                    <input class="form-control input-number qty-input" type="text"
                                                        name="quantity" value="1">
                                                    <button type="button" class="qty-right-plus" data-type="plus"
                                                        data-field="">
                                                        <i class="fa fa-plus"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div>

                                <div class="product-box product-white-bg wow fadeIn" data-wow-delay="0.1s">
                                    <div class="product-image">
                                        <a href="product-left-thumbnail.html">
                                            <img src="{{ asset('frontend/assets/images/furniture/10.png') }}"
                                                class="img-fluid blur-up lazyload" alt="">
                                        </a>
                                        <ul class="product-option">
                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="View">
                                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                                    data-bs-target="#view">
                                                    <i data-feather="eye"></i>
                                                </a>
                                            </li>

                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                                <a href="compare.html">
                                                    <i data-feather="refresh-cw"></i>
                                                </a>
                                            </li>

                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                                <a href="wishlist.html" class="notifi-wishlist">
                                                    <i data-feather="heart"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product-detail position-relative">
                                        <a href="product-left-thumbnail.html">
                                            <h6 class="name">heavy duty cane round basket</h6>
                                        </a>

                                        <h6 class="sold weight text-content fw-normal">1 KG</h6>

                                        <h6 class="price theme-color">$ 80.00</h6>

                                        <div class="add-to-cart-btn-2 addtocart_btn">
                                            <button class="btn addcart-button btn buy-button"><i
                                                    class="fa-solid fa-plus"></i></button>
                                            <div class="cart_qty qty-box-2">
                                                <div class="input-group">
                                                    <button type="button" class="qty-left-minus" data-type="minus"
                                                        data-field="">
                                                        <i class="fa fa-minus"></i>
                                                    </button>
                                                    <input class="form-control input-number qty-input" type="text"
                                                        name="quantity" value="1">
                                                    <button type="button" class="qty-right-plus" data-type="plus"
                                                        data-field="">
                                                        <i class="fa fa-plus"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="title">
                        <h2>Bowse by Categories</h2>
                        <span class="title-leaf">
                            <svg class="icon-width">
                                <use xlink:href="{{ asset('frontend/assets/svg/leaf.svg#leaf') }}"></use>
                            </svg>
                        </span>
                        <p>Top Categories Of The Week</p>
                    </div>

                    <div class="category-slider-2 product-wrapper no-arrow">
                        <div>
                            <a href="shop-left-sidebar.html" class="category-box category-dark">
                                <div>
                                    <img src="{{ asset('frontend/assets/images/furniture/icon/decorations.svg') }}" class="blur-up lazyload"
                                        alt="">
                                    <h5>Decorations</h5>
                                </div>
                            </a>
                        </div>

                        <div>
                            <a href="shop-left-sidebar.html" class="category-box category-dark">
                                <div>
                                    <img src="{{ asset('frontend/assets/images/furniture/icon/pillows.svg') }}" class="blur-up lazyload"
                                        alt="">
                                    <h5>Bed linen</h5>
                                </div>
                            </a>
                        </div>

                        <div>
                            <a href="shop-left-sidebar.html" class="category-box category-dark">
                                <div>
                                    <img src="{{ asset('frontend/assets/images/furniture/icon/cushions.svg') }}" class="blur-up lazyload"
                                        alt="">
                                    <h5>Cushions</h5>
                                </div>
                            </a>
                        </div>

                        <div>
                            <a href="shop-left-sidebar.html" class="category-box category-dark">
                                <div>
                                    <img src="{{ asset('frontend/assets/images/furniture/icon/blankets.svg') }}" class="blur-up lazyload"
                                        alt="">
                                    <h5>Blankets</h5>
                                </div>
                            </a>
                        </div>

                        <div>
                            <a href="shop-left-sidebar.html" class="category-box category-dark">
                                <div>
                                    <img src="{{ asset('frontend/assets/images/furniture/icon/gift.svg') }}" class="blur-up lazyload" alt="">
                                    <h5>Giftwraps</h5>
                                </div>
                            </a>
                        </div>

                        <div>
                            <a href="shop-left-sidebar.html" class="category-box category-dark">
                                <div>
                                    <img src="{{ asset('frontend/assets/images/furniture/icon/sleepware.svg') }}" class="blur-up lazyload"
                                        alt="">
                                    <h5>Sleepwear</h5>
                                </div>
                            </a>
                        </div>

                        <div>
                            <a href="shop-left-sidebar.html" class="category-box category-dark">
                                <div>
                                    <img src="{{ asset('frontend/assets/images/furniture/icon/bakeware.svg') }}" class="blur-up lazyload"
                                        alt="">
                                    <h5>Cookware & Bakeware</h5>
                                </div>
                            </a>
                        </div>
                    </div>

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
                                            <button onclick="location.href = 'shop-left-sidebar.html';"
                                                class="btn btn-furniture btn-sm mend-auto">Shop Now <i
                                                    class="fa-solid fa-arrow-right icon"></i></button>
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
                                            <button onclick="location.href = 'shop-left-sidebar.html';"
                                                class="btn btn-furniture btn-sm mend-auto">Shop Now <i
                                                    class="fa-solid fa-arrow-right icon"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="title d-block">
                        <h2>Food Cupboard</h2>
                        <span class="title-leaf">
                            <svg class="icon-width">
                                <use xlink:href="{{ asset('frontend/assets/svg/leaf.svg#leaf') }}"></use>
                            </svg>
                        </span>
                        <p>A virtual assistant collects the products from your list</p>
                    </div>

                    <div class="row row-cols-xxl-5 row-cols-md-4 row-cols-sm-3 row-cols-2 g-sm-4 g-3 no-arrow">
                        <div>
                            <div class="product-box product-white-bg wow fadeIn">
                                <div class="product-image">
                                    <a href="product-left-thumbnail.html">
                                        <img src="{{ asset('frontend/assets/images/furniture/13.png') }}" class="img-fluid blur-up lazyload" alt="">
                                    </a>
                                    <ul class="product-option">
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="View">
                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                                <i data-feather="eye"></i>
                                            </a>
                                        </li>

                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                            <a href="compare.html">
                                                <i data-feather="refresh-cw"></i>
                                            </a>
                                        </li>

                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                            <a href="wishlist.html" class="notifi-wishlist">
                                                <i data-feather="heart"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="product-detail position-relative">
                                    <a href="product-left-thumbnail.html">
                                        <h6 class="name">Elama Fine Round Gloss Dinnerware Dish Set</h6>
                                    </a>

                                    <h6 class="sold weight text-content fw-normal">1 KG</h6>

                                    <h6 class="price theme-color">$ 80.00</h6>

                                    <div class="add-to-cart-btn-2 addtocart_btn">
                                        <button class="btn addcart-button btn buy-button"><i
                                                class="fa-solid fa-plus"></i></button>
                                        <div class="cart_qty qty-box-2">
                                            <div class="input-group">
                                                <button type="button" class="qty-left-minus" data-type="minus" data-field="">
                                                    <i class="fa fa-minus"></i>
                                                </button>
                                                <input class="form-control input-number qty-input" type="text" name="quantity" value="1">
                                                <button type="button" class="qty-right-plus" data-type="plus" data-field="">
                                                    <i class="fa fa-plus"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="product-box product-white-bg wow fadeIn" data-wow-delay="0.1s">
                                <div class="product-image">
                                    <a href="product-left-thumbnail.html">
                                        <img src="{{ asset('frontend/assets/images/furniture/8.png') }}" class="img-fluid blur-up lazyload" alt="">
                                    </a>
                                    <ul class="product-option">
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="View">
                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                                <i data-feather="eye"></i>
                                            </a>
                                        </li>

                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                            <a href="compare.html">
                                                <i data-feather="refresh-cw"></i>
                                            </a>
                                        </li>

                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                            <a href="wishlist.html" class="notifi-wishlist">
                                                <i data-feather="heart"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="product-detail position-relative">
                                    <a href="product-left-thumbnail.html">
                                        <h6 class="name">Goddess Marble Hexagon Party Plates</h6>
                                    </a>

                                    <h6 class="sold weight text-content fw-normal">1 KG</h6>

                                    <h6 class="price theme-color">$ 80.00</h6>

                                    <div class="add-to-cart-btn-2 addtocart_btn">
                                        <button class="btn addcart-button btn buy-button"><i
                                                class="fa-solid fa-plus"></i></button>
                                        <div class="cart_qty qty-box-2">
                                            <div class="input-group">
                                                <button type="button" class="qty-left-minus" data-type="minus" data-field="">
                                                    <i class="fa fa-minus"></i>
                                                </button>
                                                <input class="form-control input-number qty-input" type="text" name="quantity" value="1">
                                                <button type="button" class="qty-right-plus" data-type="plus" data-field="">
                                                    <i class="fa fa-plus"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="product-box product-white-bg wow fadeIn">
                                <div class="product-image">
                                    <a href="product-left-thumbnail.html">
                                        <img src="{{ asset('frontend/assets/images/furniture/10.png') }}" class="img-fluid blur-up lazyload" alt="">
                                    </a>
                                    <ul class="product-option">
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="View">
                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                                <i data-feather="eye"></i>
                                            </a>
                                        </li>

                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                            <a href="compare.html">
                                                <i data-feather="refresh-cw"></i>
                                            </a>
                                        </li>

                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                            <a href="wishlist.html" class="notifi-wishlist">
                                                <i data-feather="heart"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="product-detail position-relative">
                                    <a href="product-left-thumbnail.html">
                                        <h6 class="name">heavy duty cane round basket</h6>
                                    </a>

                                    <h6 class="sold weight text-content fw-normal">1 KG</h6>

                                    <h6 class="price theme-color">$ 80.00</h6>

                                    <div class="add-to-cart-btn-2 addtocart_btn">
                                        <button class="btn addcart-button btn buy-button"><i
                                                class="fa-solid fa-plus"></i></button>
                                        <div class="cart_qty qty-box-2">
                                            <div class="input-group">
                                                <button type="button" class="qty-left-minus" data-type="minus" data-field="">
                                                    <i class="fa fa-minus"></i>
                                                </button>
                                                <input class="form-control input-number qty-input" type="text" name="quantity" value="1">
                                                <button type="button" class="qty-right-plus" data-type="plus" data-field="">
                                                    <i class="fa fa-plus"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="product-box product-white-bg wow fadeIn" data-wow-delay="0.1s">
                                <div class="product-image">
                                    <a href="product-left-thumbnail.html">
                                        <img src="{{ asset('frontend/assets/images/furniture/6.png') }}" class="img-fluid blur-up lazyload" alt="">
                                    </a>
                                    <ul class="product-option">
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="View">
                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                                <i data-feather="eye"></i>
                                            </a>
                                        </li>

                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                            <a href="compare.html">
                                                <i data-feather="refresh-cw"></i>
                                            </a>
                                        </li>

                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                            <a href="wishlist.html" class="notifi-wishlist">
                                                <i data-feather="heart"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="product-detail position-relative">
                                    <a href="product-left-thumbnail.html">
                                        <h6 class="name">Nature Baby Merino Knit Bassinet Blanket</h6>
                                    </a>

                                    <h6 class="sold weight text-content fw-normal">1 KG</h6>

                                    <h6 class="price theme-color">$ 80.00</h6>

                                    <div class="add-to-cart-btn-2 addtocart_btn">
                                        <button class="btn addcart-button btn buy-button"><i
                                                class="fa-solid fa-plus"></i></button>
                                        <div class="cart_qty qty-box-2">
                                            <div class="input-group">
                                                <button type="button" class="qty-left-minus" data-type="minus" data-field="">
                                                    <i class="fa fa-minus"></i>
                                                </button>
                                                <input class="form-control input-number qty-input" type="text" name="quantity" value="1">
                                                <button type="button" class="qty-right-plus" data-type="plus" data-field="">
                                                    <i class="fa fa-plus"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="product-box product-white-bg wow fadeIn">
                                <div class="product-image">
                                    <a href="product-left-thumbnail.html">
                                        <img src="{{ asset('frontend/assets/images/furniture/4.png') }}" class="img-fluid blur-up lazyload" alt="">
                                    </a>
                                    <ul class="product-option">
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="View">
                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                                <i data-feather="eye"></i>
                                            </a>
                                        </li>

                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                            <a href="compare.html">
                                                <i data-feather="refresh-cw"></i>
                                            </a>
                                        </li>

                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                            <a href="wishlist.html" class="notifi-wishlist">
                                                <i data-feather="heart"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="product-detail position-relative">
                                    <a href="product-left-thumbnail.html">
                                        <h6 class="name">ELSTONE HOME White Colour Bath Towel</h6>
                                    </a>

                                    <h6 class="sold weight text-content fw-normal">1 KG</h6>

                                    <h6 class="price theme-color">$ 80.00</h6>

                                    <div class="add-to-cart-btn-2 addtocart_btn">
                                        <button class="btn addcart-button btn buy-button"><i
                                                class="fa-solid fa-plus"></i></button>
                                        <div class="cart_qty qty-box-2">
                                            <div class="input-group">
                                                <button type="button" class="qty-left-minus" data-type="minus" data-field="">
                                                    <i class="fa fa-minus"></i>
                                                </button>
                                                <input class="form-control input-number qty-input" type="text" name="quantity" value="1">
                                                <button type="button" class="qty-right-plus" data-type="plus" data-field="">
                                                    <i class="fa fa-plus"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xxl-3 col-xl-4 d-none d-xl-block">
                    <div class="p-sticky">
                        <div class="category-menu">
                            <h3>Shop By Product</h3>
                            <ul class="border-bottom-0">
                                <li>
                                    <div class="category-list">
                                        <img src="{{ asset('frontend/assets/images/furniture/icon/decorations.svg') }}"
                                            class="blur-up lazyload" alt="">
                                        <h5>
                                            <a href="shop-left-sidebar.html">Decorations</a>
                                        </h5>
                                    </div>
                                </li>
                                <li>
                                    <div class="category-list">
                                        <img src="{{ asset('frontend/assets/images/furniture/icon/pillows.svg') }}" class="blur-up lazyload"
                                            alt="">
                                        <h5>
                                            <a href="shop-left-sidebar.html">Bed Linen</a>
                                        </h5>
                                    </div>
                                </li>
                                <li>
                                    <div class="category-list">
                                        <img src="{{ asset('frontend/assets/images/furniture/icon/cushions.svg') }}" class="blur-up lazyload"
                                            alt="">
                                        <h5>
                                            <a href="shop-left-sidebar.html">Cushions</a>
                                        </h5>
                                    </div>
                                </li>
                                <li>
                                    <div class="category-list">
                                        <img src="{{ asset('frontend/assets/images/furniture/icon/blankets.svg') }}" class="blur-up lazyload"
                                            alt="">
                                        <h5>
                                            <a href="shop-left-sidebar.html">Blankets</a>
                                        </h5>
                                    </div>
                                </li>
                                <li>
                                    <div class="category-list">
                                        <img src="{{ asset('frontend/assets/images/furniture/icon/gift.svg') }}" class="blur-up lazyload"
                                            alt="">
                                        <h5>
                                            <a href="shop-left-sidebar.html">Giftwraps</a>
                                        </h5>
                                    </div>
                                </li>
                                <li>
                                    <div class="category-list">
                                        <img src="{{ asset('frontend/assets/images/furniture/icon/sleepware.svg') }}"
                                            class="blur-up lazyload" alt="">
                                        <h5>
                                            <a href="shop-left-sidebar.html">Sleepwear</a>
                                        </h5>
                                    </div>
                                </li>
                                <li>
                                    <div class="category-list">
                                        <img src="{{ asset('frontend/assets/images/furniture/icon/bakeware.svg') }}" class="blur-up lazyload"
                                            alt="">
                                        <h5>
                                            <a href="shop-left-sidebar.html">Cookware & Bakeware</a>
                                        </h5>
                                    </div>
                                </li>
                                <li>
                                    <div class="category-list">
                                        <img src="{{ asset('frontend/assets/images/furniture/icon/room-fragrance.svg') }}"
                                            class="blur-up lazyload" alt="">
                                        <h5>
                                            <a href="shop-left-sidebar.html">Room Fragrance</a>
                                        </h5>
                                    </div>
                                </li>
                                <li>
                                    <div class="category-list">
                                        <img src="{{ asset('frontend/assets/images/furniture/icon/tableware.svg') }}"
                                            class="blur-up lazyload" alt="">
                                        <h5>
                                            <a href="shop-left-sidebar.html">Servingware & Tableware</a>
                                        </h5>
                                    </div>
                                </li>
                                <li>
                                    <div class="category-list">
                                        <img src="{{ asset('frontend/assets/images/furniture/icon/shower.svg') }}" class="blur-up lazyload"
                                            alt="">
                                        <h5>
                                            <a href="shop-left-sidebar.html">Bath & Shower</a>
                                        </h5>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="ratio_156 section-t-space">
                            <div class="home-contain hover-effect">
                                <img src="{{ asset('frontend/assets/images/furniture/banner/3.jpg') }}" class="bg-img blur-up lazyload"
                                    alt="">
                                <div class="home-detail p-top-left home-p-medium">
                                    <div>
                                        <h4 class="text-yellow home-banner text-kaushan">New Arrival</h4>
                                        <h3 class="text-uppercase theme-color fw-bold mb-1">Desk Table</h3>
                                        <p class="text-content mb-3">Top Selling Of The Week! Exclusive Offer!</p>
                                        <button onclick="location.href = 'shop-left-sidebar.html';"
                                            class="btn btn-furniture btn-md mend-auto">Shop Now <i
                                                class="fa-solid fa-arrow-right icon"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="section-t-space">
                            <div class="category-menu">
                                <h3>Trending Products</h3>

                                <ul class="product-list border-0 p-0 d-block">
                                    <li>
                                        <div class="offer-product">
                                            <a href="product-left-thumbnail.html" class="offer-image">
                                                <img src="{{ asset('frontend/assets/images/furniture/2.png') }}" class="blur-up lazyload"
                                                    alt="">
                                            </a>

                                            <div class="offer-detail">
                                                <div>
                                                    <a href="product-left-thumbnail.html" class="text-title">
                                                        <h6 class="name">Meatigo Premium Goat Curry</h6>
                                                    </a>
                                                    <span>450 G</span>
                                                    <h6 class="price theme-color">$ 70.00</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="offer-product">
                                            <a href="product-left-thumbnail.html" class="offer-image">
                                                <img src="{{ asset('frontend/assets/images/furniture/3.png') }}" class="blur-up lazyload"
                                                    alt="">
                                            </a>

                                            <div class="offer-detail">
                                                <div>
                                                    <a href="product-left-thumbnail.html" class="text-title">
                                                        <h6 class="name">Coral Bean Bag Chair</h6>
                                                    </a>
                                                    <span>450 G</span>
                                                    <h6 class="price theme-color">$ 40.00</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="mb-0">
                                        <div class="offer-product">
                                            <a href="product-left-thumbnail.html" class="offer-image">
                                                <img src="{{ asset('frontend/assets/images/furniture/5.png') }}" class="blur-up lazyload"
                                                    alt="">
                                            </a>

                                            <div class="offer-detail">
                                                <div>
                                                    <a href="product-left-thumbnail.html" class="text-title">
                                                        <h6 class="name">Benefits of using natural stone tile flooring
                                                        </h6>
                                                    </a>
                                                    <span>1 KG</span>
                                                    <h6 class="price theme-color">$ 80.00</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
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
                                    <h4 class="text-uppercase text-yellow text-kaushan furniture-title">Best of
                                        Collections <img src="../assets/images/furniture/arrow.svg" alt=""></h4>
                                    <h2 class="mt-sm-3 mt-1 mb-2 text-content">Home Decor <span
                                            class="theme-color fw-bold">LookBook</span> 2022</h2>
                                    <p class="text-content">In publishing and graphic design, Lorem ipsum is a
                                        placeholder text commonly used to demonstrate.</p>
                                    <button class="btn theme-bg-color mt-sm-4 mt-2 btn-md text-white fw-bold"
                                        onclick="location.href = 'shop-left-sidebar.html';">Shop Now</button>
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
                <div>
                    <ul class="product-list">
                        <li>
                            <div class="offer-product">
                                <a href="product-left-thumbnail.html" class="offer-image">
                                    <img src="{{ asset('frontend/assets/images/furniture/1.png') }}" class="blur-up lazyload" alt="">
                                </a>

                                <div class="offer-detail">
                                    <div>
                                        <a href="product-left-thumbnail.html" class="text-title">
                                            <h6 class="name">Home Decor Lucky Deer Family Matte Finish</h6>
                                        </a>
                                        <span>500 G</span>
                                        <h6 class="price theme-color">$ 10.00</h6>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="offer-product">
                                <a href="product-left-thumbnail.html" class="offer-image">
                                    <img src="{{ asset('frontend/assets/images/furniture/2.png') }}" class="blur-up lazyload" alt="">
                                </a>

                                <div class="offer-detail">
                                    <div>
                                        <a href="product-left-thumbnail.html" class="text-title">
                                            <h6 class="name">Potato</h6>
                                        </a>
                                        <span>500 G</span>
                                        <h6 class="price theme-color">$ 10.00</h6>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="offer-product">
                                <a href="product-left-thumbnail.html" class="offer-image">
                                    <img src="{{ asset('frontend/assets/images/furniture/3.png') }}" class="blur-up lazyload" alt="">
                                </a>

                                <div class="offer-detail">
                                    <div>
                                        <a href="product-left-thumbnail.html" class="text-title">
                                            <h6 class="name">Coral Bean Bag Chair</h6>
                                        </a>
                                        <span>200 G</span>
                                        <h6 class="price theme-color">$ 10.00</h6>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="offer-product">
                                <a href="product-left-thumbnail.html" class="offer-image">
                                    <img src="{{ asset('frontend/assets/images/furniture/4.png') }}" class="blur-up lazyload" alt="">
                                </a>

                                <div class="offer-detail">
                                    <div>
                                        <a href="product-left-thumbnail.html" class="text-title">
                                            <h6 class="name">ELSTONE HOME White Colour Bath Towel</h6>
                                        </a>
                                        <span>150 G</span>
                                        <h6 class="price theme-color">$ 10.00</h6>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>

                <div>
                    <ul class="product-list">
                        <li>
                            <div class="offer-product">
                                <a href="product-left-thumbnail.html" class="offer-image">
                                    <img src="{{ asset('frontend/assets/images/furniture/5.png') }}" class="blur-up lazyload" alt="">
                                </a>

                                <div class="offer-detail">
                                    <div>
                                        <a href="product-left-thumbnail.html" class="text-title">
                                            <h6 class="name">Benefits of using natural stone tile flooring</h6>
                                        </a>
                                        <span>500 G</span>
                                        <h6 class="price theme-color">$ 10.00</h6>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="offer-product">
                                <a href="product-left-thumbnail.html" class="offer-image">
                                    <img src="{{ asset('frontend/assets/images/furniture/6.png') }}" class="blur-up lazyload" alt="">
                                </a>

                                <div class="offer-detail">
                                    <div>
                                        <a href="product-left-thumbnail.html" class="text-title">
                                            <h6 class="name">Nature Baby Merino Knit Bassinet Blanket</h6>
                                        </a>
                                        <span>1 L</span>
                                        <h6 class="price theme-color">$ 10.00</h6>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="offer-product">
                                <a href="product-left-thumbnail.html" class="offer-image">
                                    <img src="{{ asset('frontend/assets/images/furniture/7.png') }}" class="blur-up lazyload" alt="">
                                </a>

                                <div class="offer-detail">
                                    <div>
                                        <a href="product-left-thumbnail.html" class="text-title">
                                            <h6 class="name">Wooden Tea Cup Coaster</h6>
                                        </a>
                                        <span>1 KG</span>
                                        <h6 class="price theme-color">$ 10.00</h6>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="offer-product">
                                <a href="product-left-thumbnail.html" class="offer-image">
                                    <img src="{{ asset('frontend/assets/images/furniture/8.png') }}" class="blur-up lazyload" alt="">
                                </a>

                                <div class="offer-detail">
                                    <div>
                                        <a href="product-left-thumbnail.html" class="text-title">
                                            <h6 class="name">Goddess Marble Hexagon</h6>
                                        </a>
                                        <span>150 G</span>
                                        <h6 class="price theme-color">$ 10.00</h6>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>

                <div>
                    <ul class="product-list">
                        <li>
                            <div class="offer-product">
                                <a href="product-left-thumbnail.html" class="offer-image">
                                    <img src="{{ asset('frontend/assets/images/furniture/9.png') }}" class="blur-up lazyload" alt="">
                                </a>

                                <div class="offer-detail">
                                    <div>
                                        <a href="product-left-thumbnail.html" class="text-title">
                                            <h6 class="name">Handmade Brown Mango Wooden Tray Square</h6>
                                        </a>
                                        <span>1 L</span>
                                        <h6 class="price theme-color">$ 10.00</h6>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="offer-product">
                                <a href="product-left-thumbnail.html" class="offer-image">
                                    <img src="{{ asset('frontend/assets/images/furniture/10.png') }}" class="blur-up lazyload" alt="">
                                </a>

                                <div class="offer-detail">
                                    <div>
                                        <a href="product-left-thumbnail.html" class="text-title">
                                            <h6 class="name">heavy duty cane round basket</h6>
                                        </a>
                                        <span>500 G</span>
                                        <h6 class="price theme-color">$ 10.00</h6>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="offer-product">
                                <a href="product-left-thumbnail.html" class="offer-image">
                                    <img src="{{ asset('frontend/assets/images/furniture/11.png') }}" class="blur-up lazyload" alt="">
                                </a>

                                <div class="offer-detail">
                                    <div>
                                        <a href="product-left-thumbnail.html" class="text-title">
                                            <h6 class="name">WaahKart Antique Fiber Flower Vase</h6>
                                        </a>
                                        <span>1 KG</span>
                                        <h6 class="price theme-color">$ 10.00</h6>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="offer-product">
                                <a href="product-left-thumbnail.html" class="offer-image">
                                    <img src="{{ asset('frontend/assets/images/furniture/12.png') }}" class="blur-up lazyload" alt="">
                                </a>

                                <div class="offer-detail">
                                    <div>
                                        <a href="product-left-thumbnail.html" class="text-title">
                                            <h6 class="name">Towels Cotton Soft</h6>
                                        </a>
                                        <span>160 ML</span>
                                        <h6 class="price theme-color">$ 10.00</h6>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>

                <div>
                    <ul class="product-list">
                        <li>
                            <div class="offer-product">
                                <a href="product-left-thumbnail.html" class="offer-image">
                                    <img src="{{ asset('frontend/assets/images/furniture/13.png') }}" class="blur-up lazyload" alt="">
                                </a>

                                <div class="offer-detail">
                                    <div>
                                        <a href="product-left-thumbnail.html" class="text-title">
                                            <h6 class="name">Gloss Dinnerware Dish</h6>
                                        </a>
                                        <span>500 G</span>
                                        <h6 class="price theme-color">$ 10.00</h6>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="offer-product">
                                <a href="product-left-thumbnail.html" class="offer-image">
                                    <img src="{{ asset('frontend/assets/images/furniture/14.png') }}" class="blur-up lazyload" alt="">
                                </a>

                                <div class="offer-detail">
                                    <div>
                                        <a href="product-left-thumbnail.html" class="text-title">
                                            <h6 class="name">Marble Small Amenity Tray</h6>
                                        </a>
                                        <span>1 L</span>
                                        <h6 class="price theme-color">$ 10.00</h6>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="offer-product">
                                <a href="product-left-thumbnail.html" class="offer-image">
                                    <img src="{{ asset('frontend/assets/images/furniture/5.png') }}" class="blur-up lazyload" alt="">
                                </a>

                                <div class="offer-detail">
                                    <div>
                                        <a href="product-left-thumbnail.html" class="text-title">
                                            <h6 class="name">Benefits of using natural stone tile flooring</h6>
                                        </a>
                                        <span>1 KG</span>
                                        <h6 class="price theme-color">$ 10.00</h6>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="offer-product">
                                <a href="product-left-thumbnail.html" class="offer-image">
                                    <img src="{{ asset('frontend/assets/images/furniture/9.png') }}" class="blur-up lazyload" alt="">
                                </a>

                                <div class="offer-detail">
                                    <div>
                                        <a href="product-left-thumbnail.html" class="text-title">
                                            <h6 class="name">Handmade Brown Mango Wooden Tray Square</h6>
                                        </a>
                                        <span>150 G</span>
                                        <h6 class="price theme-color">$ 10.00</h6>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- Best Seller Section End -->

    <!-- Newsletter Section Start -->
    <section class="newsletter-section section-b-space">
        <div class="container-fluid-lg">
            <div class="newsletter-box newsletter-box-2">
                <div class="newsletter-contain py-5">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-xxl-4 col-lg-5 col-md-7 col-sm-9 offset-xxl-2 offset-md-1">
                                <div class="newsletter-detail">
                                    <h2>Join our newsletter and get...</h2>
                                    <h5>Get access to the latest information.</h5>
                                    <div class="input-box">
                                        <input type="email" class="form-control" id="exampleFormControlInput1"
                                            placeholder="Enter Your Email">
                                        <i class="fa-solid fa-envelope arrow"></i>
                                        <button class="sub-btn  btn-animation">
                                            <span class="d-sm-block d-none">Subscribe</span>
                                            <i class="fa-solid fa-arrow-right icon"></i>
                                        </button>
                                    </div>
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
        @php
            $remainingTime = 0;
            if ($coupons->count() > 0)
            {
                $targetDate = strtotime($coupons[0]->enddate);
                $remainingTime = ($targetDate - time()) * 1000;
            }
            if ($remainingTime < 0) {
                $remainingTime = 0;
            }
        @endphp

        <!-- Timer Js -->
        <!-- <script src="{{ asset('frontend/assets/js/timer1.js') }}"></script>
        <script>
            var remainingTime = {{ $remainingTime }};
            var deadline = new Date(Date.parse(new Date()) + remainingTime);
            console.log(deadline);
            initializeClock('clockdiv-1', deadline);
        </script> -->

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
