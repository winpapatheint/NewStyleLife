<x-guest-layout>

    <!-- Breadcrumb Section Start -->
    <section class="breadcrumb-section pt-0">
        <div class="container-fluid-lg">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-contain">
                        <h2>Product List</h2>
                        <nav>
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item">
                                    <a href="{{ url('/') }}">
                                        <i class="fa-solid fa-house"></i>
                                    </a>
                                </li>
                                <li class="breadcrumb-item active">Coupon</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Shop Section Start -->
    <section class="section-b-space shop-section">
        <div class="container-fluid-lg">
            <div class="row">
                <div class="col-custom-3">
                    <div class="left-box wow fadeInUp">
                    <form id="searchForm" action="{{ route('show-coupon-product') }}" method="GET">
                        <div class="shop-left-sidebar">
                            <div class="back-button">
                                <h3><i class="fa-solid fa-arrow-left"></i> Back</h3>
                            </div>
                            <div class="filter-category">
                                <div class="filter-title">
                                    <h2>Filters</h2>
                                    <a href="{{ route('show-coupon-product', ['id' => $id]) }}">Clear All</a>
                                </div>
                                {{-- <ul>
                                @if(!empty($searchHistory))
                                @foreach($searchHistory as $searchHist)
                                    <li style="background-color: {{ $searchHist === $sHistory ? '#ffcccb' : 'transparent' }}">
                                        <a href="#" onclick="updateSearchHist('{{ $searchHist }}')">{{ $searchHist }}</a>
                                        <span class="remove-search-item" data-search="{{ $searchHist }}" onclick="removeSearchItem(this)" style="margin-left: 5px;padding-top: 5px;">
                                        <i class="fa-solid fa-xmark"></i></span>
                                    </li>
                                @endforeach
                                @endif
                                </ul> --}}
                            </div>
                            <div class="accordion custom-accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <div style="display: flex; align-items: center;">
                                        <input class="form-control form-control-sm mr-sm-2" type="search" placeholder="Search" aria-label="Search" id="search" name="search" value="{{ $search }}"
                                        style="font-size: 15px; padding: 0.25rem 0.5rem;">
                                        <button class="btn btn-outline-success btn-sm my-2 my-sm-0" type="submit" id="searchBtn"
                                        style="font-size: 15px; padding: 0.25rem 0.5rem;"><i data-feather="search"></i></button>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseOne">
                                            <span>Categories</span>
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show">
                                        <div class="accordion-body">
                                            <ul class="category-list custom-padding custom-height">
                                            @foreach ($categoryWithProductCount as $category)
                                                <li>
                                                    <div class="form-check ps-0 m-0 category-list-box">
                                                        <input class="checkbox_animated" type="checkbox" id="{{ $category->id }}"
                                                        name="categories[]" value= "{{ $category->id }}" data-category="{{ $category->id }}"
                                                        {{ in_array($category->id, $categories) ? 'checked' : '' }}>
                                                        <label class="form-check-label" for="{{ $category->category_name }}">
                                                            <span class="name">{{ $category->category_name }}</span>
                                                            <span class="number">({{ $category->product_count }})</span>
                                                        </label>
                                                    </div>
                                                </li>
                                            @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseThree">
                                            <span>Price</span>
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse show">
                                        <div class="accordion-body">
                                            <div class="range-slider">
                                                <input type="text" class="js-range-slider" name="price" value="{{ $price }}">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingSix">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseSix">
                                            <span>Rating</span>
                                        </button>
                                    </h2>
                                    <div id="collapseSix" class="accordion-collapse collapse show">
                                        <div class="accordion-body">
                                            <ul class="category-list custom-padding">
                                                <li>
                                                    <div class="form-check ps-0 m-0 category-list-box">
                                                        <input class="checkbox_animated" type="checkbox" name="rating[]" value="5"
                                                        {{ in_array("5", $rating) ? 'checked' : '' }}>
                                                        <div class="form-check-label">
                                                            <ul class="rating">
                                                                <li>
                                                                    <i data-feather="star" class="fill"></i>
                                                                </li>
                                                                <li>
                                                                    <i data-feather="star" class="fill"></i>
                                                                </li>
                                                                <li>
                                                                    <i data-feather="star" class="fill"></i>
                                                                </li>
                                                                <li>
                                                                    <i data-feather="star" class="fill"></i>
                                                                </li>
                                                                <li>
                                                                    <i data-feather="star" class="fill"></i>
                                                                </li>
                                                            </ul>

                                                            @if($ratingWithProductCount->has(5))
                                                                <span class="text-content">({{ $ratingWithProductCount[5] }})</span>
                                                            @else
                                                                <span class="text-content">(0)</span>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </li>

                                                <li>

                                                    <div class="form-check ps-0 m-0 category-list-box">
                                                        <input class="checkbox_animated" type="checkbox" name="rating[]" value="4"
                                                        {{ in_array("4", $rating) ? 'checked' : '' }}>

                                                        <div class="form-check-label">
                                                            <ul class="rating">
                                                                <li>
                                                                    <i data-feather="star" class="fill"></i>
                                                                </li>
                                                                <li>
                                                                    <i data-feather="star" class="fill"></i>
                                                                </li>
                                                                <li>
                                                                    <i data-feather="star" class="fill"></i>
                                                                </li>
                                                                <li>
                                                                    <i data-feather="star" class="fill"></i>
                                                                </li>
                                                                <li>
                                                                    <i data-feather="star"></i>
                                                                </li>
                                                            </ul>
                                                            @if($ratingWithProductCount->has(4))
                                                                <span class="text-content">({{ $ratingWithProductCount[4] }})</span>
                                                            @else
                                                                <span class="text-content">(0)</span>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </li>

                                                <li>
                                                    <div class="form-check ps-0 m-0 category-list-box">
                                                        <input class="checkbox_animated" type="checkbox" name="rating[]" value="3"
                                                        {{ in_array("3", $rating) ? 'checked' : '' }}>
                                                        <div class="form-check-label">
                                                            <ul class="rating">
                                                                <li>
                                                                    <i data-feather="star" class="fill"></i>
                                                                </li>
                                                                <li>
                                                                    <i data-feather="star" class="fill"></i>
                                                                </li>
                                                                <li>
                                                                    <i data-feather="star" class="fill"></i>
                                                                </li>
                                                                <li>
                                                                    <i data-feather="star"></i>
                                                                </li>
                                                                <li>
                                                                    <i data-feather="star"></i>
                                                                </li>
                                                            </ul>
                                                            @if($ratingWithProductCount->has(3))
                                                                <span class="text-content">({{ $ratingWithProductCount[3] }})</span>
                                                            @else
                                                                <span class="text-content">(0)</span>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </li>

                                                <li>
                                                    <div class="form-check ps-0 m-0 category-list-box">
                                                        <input class="checkbox_animated" type="checkbox" name="rating[]" value="2"
                                                        {{ in_array("2", $rating) ? 'checked' : '' }}>
                                                        <div class="form-check-label">
                                                            <ul class="rating">
                                                                <li>
                                                                    <i data-feather="star" class="fill"></i>
                                                                </li>
                                                                <li>
                                                                    <i data-feather="star" class="fill"></i>
                                                                </li>
                                                                <li>
                                                                    <i data-feather="star"></i>
                                                                </li>
                                                                <li>
                                                                    <i data-feather="star"></i>
                                                                </li>
                                                                <li>
                                                                    <i data-feather="star"></i>
                                                                </li>
                                                            </ul>
                                                            @if($ratingWithProductCount->has(2))
                                                                <span class="text-content">({{ $ratingWithProductCount[2] }})</span>
                                                            @else
                                                                <span class="text-content">(0)</span>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </li>

                                                <li>
                                                    <div class="form-check ps-0 m-0 category-list-box">
                                                        <input class="checkbox_animated" type="checkbox" name="rating[]" value="1"
                                                        {{ in_array("1", $rating) ? 'checked' : '' }}>
                                                        <div class="form-check-label">
                                                            <ul class="rating">
                                                                <li>
                                                                    <i data-feather="star" class="fill"></i>
                                                                </li>
                                                                <li>
                                                                    <i data-feather="star"></i>
                                                                </li>
                                                                <li>
                                                                    <i data-feather="star"></i>
                                                                </li>
                                                                <li>
                                                                    <i data-feather="star"></i>
                                                                </li>
                                                                <li>
                                                                    <i data-feather="star"></i>
                                                                </li>
                                                            </ul>
                                                            @if($ratingWithProductCount->has(1))
                                                                <span class="text-content">({{ $ratingWithProductCount[1] }})</span>
                                                            @else
                                                                <span class="text-content">(0)</span>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingFour">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseFour">
                                            <span>Discount</span>
                                        </button>
                                    </h2>
                                    <div id="collapseFour" class="accordion-collapse collapse show">
                                        <div class="accordion-body">
                                            <ul class="category-list custom-padding">
                                                <li>
                                                    <div class="form-check ps-0 m-0 category-list-box">
                                                        <input class="checkbox_animated" type="checkbox"
                                                            id="flexCheckDefault" name="discount[]" value="1"
                                                            {{ in_array("1", $discount) ? 'checked' : '' }}>
                                                        <label class="form-check-label" for="flexCheckDefault">
                                                            <span class="name">upto 5%</span>
                                                            <span class="number">({{ $discountWithProductCount->group_1_count }})</span>
                                                        </label>
                                                    </div>
                                                </li>

                                                <li>
                                                    <div class="form-check ps-0 m-0 category-list-box">
                                                        <input class="checkbox_animated" type="checkbox"
                                                            id="flexCheckDefault1" name="discount[]" value="2"
                                                            {{ in_array("2", $discount) ? 'checked' : '' }}>
                                                        <label class="form-check-label" for="flexCheckDefault1">
                                                            <span class="name">5% - 10%</span>
                                                            <span class="number">({{ $discountWithProductCount->group_2_count }})</span>
                                                        </label>
                                                    </div>
                                                </li>

                                                <li>
                                                    <div class="form-check ps-0 m-0 category-list-box">
                                                        <input class="checkbox_animated" type="checkbox"
                                                            id="flexCheckDefault2" name="discount[]" value="3"
                                                            {{ in_array("3", $discount) ? 'checked' : '' }}>
                                                        <label class="form-check-label" for="flexCheckDefault2">
                                                            <span class="name">10% - 15%</span>
                                                            <span class="number">({{ $discountWithProductCount->group_3_count }})</span>
                                                        </label>
                                                    </div>
                                                </li>

                                                <li>
                                                    <div class="form-check ps-0 m-0 category-list-box">
                                                        <input class="checkbox_animated" type="checkbox"
                                                            id="flexCheckDefault3" name="discount[]" value="4"
                                                            {{ in_array("4", $discount) ? 'checked' : '' }}>
                                                        <label class="form-check-label" for="flexCheckDefault3">
                                                            <span class="name">15% - 25%</span>
                                                            <span class="number">({{ $discountWithProductCount->group_4_count }})</span>
                                                        </label>
                                                    </div>
                                                </li>

                                                <li>
                                                    <div class="form-check ps-0 m-0 category-list-box">
                                                        <input class="checkbox_animated" type="checkbox"
                                                            id="flexCheckDefault4" name="discount[]" value="5"
                                                            {{ in_array("5", $discount) ? 'checked' : '' }}>
                                                        <label class="form-check-label" for="flexCheckDefault4">
                                                            <span class="name">More than 25%</span>
                                                            <span class="number">({{ $discountWithProductCount->group_5_count }})</span>
                                                        </label>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <input type="hidden" id="id" name="id" value="{{ $id }}">
                <input type="hidden" id="sortValue" name="sort" value="{{ $sort !== 0 ? $sort : '1' }}">
                </form>

                <div class="col-custom-">
                    <div class="show-button">
                        <div class="filter-button-group mt-0">
                            <div class="filter-button d-inline-block d-lg-none">
                                <a><i class="fa-solid fa-filter"></i> Filter Menu</a>
                            </div>
                        </div>

                        <div class="top-filter-menu">
                            <div class="category-dropdown">
                                <h5 class="text-content">Sort By :</h5>
                                <div class="dropdown">
                                    <button class="dropdown-toggle" type="button" id="dropdownMenuButton1"
                                        data-bs-toggle="dropdown">
                                        @if ($sort == 1)
                                            <span>Low - High Price</span>
                                        @elseif ($sort == 2)
                                            <span>High - Low Price</span>
                                        @elseif ($sort == 3)
                                            <span>Average Rating</span>
                                        @elseif ($sort == 4)
                                            <span>A - Z Order</span>
                                        @elseif ($sort == 5)
                                            <span>Z - A Order</span>
                                        @elseif ($sort == 6)
                                            <span>% Off - Hight To Low</span>
                                        @else
                                            <span>Choose Sorting</span>
                                        @endif
                                            <i class="fa-solid fa-angle-down"></i>
                                    </button>

                                    <ul class="dropdown-menu">
                                        <li>
                                            <a class="dropdown-item" id="drop1" name="sort" value="1" href="#">Low - High Price</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" id="drop2" name="sort" value="2" href="#">High - Low
                                                Price</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" id="drop3" name="sort" value="3" href="#">Average
                                                Rating</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" id="drop4" name="sort" value="4" href="#">A - Z
                                                Order</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" id="drop5" name="sort" value="5" href="#">Z - A
                                                Order</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" id="drop6" name="sort" value="6" href="#">% Off - Hight To
                                                Low</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="grid-option d-none d-md-block">
                                <ul>
                                    <li class="grid-btn d-xxl-inline-block d-none active">
                                        <a href="javascript:void(0)">
                                            <img src="{{ asset('frontend/assets/svg/grid-4.svg') }}"
                                                class="blur-up lazyload d-lg-inline-block d-none" alt="">
                                            <img src="{{ asset('frontend/assets/svg/grid.svg') }}"
                                                class="blur-up lazyload img-fluid d-lg-none d-inline-block" alt="">
                                        </a>
                                    </li>
                                    <li class="three-grid">
                                        <a href="javascript:void(0)">
                                            <img src="{{ asset('frontend/assets/svg/grid-3.svg') }}" class="blur-up lazyload" alt="">
                                        </a>
                                    </li>
                                    <li class="list-btn">
                                        <a href="javascript:void(0)">
                                            <img src="{{ asset('frontend/assets/svg/list.svg') }}" class="blur-up lazyload" alt="">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    @if($products->count() < 1)
                        <h1 class="text-center">No Products Found</h1>
                    @endif
                    <div class="row g-sm-4 g-3 product-list-section row-cols-xxl-4 row-cols-xl-3 row-cols-lg-2 row-cols-md-3 row-cols-2">
                    
                        @foreach ($products as $product)
                            @php
                                $starRating = 0;
                                $count = 0;
                            @endphp
                            @foreach ($reviews as $review)
                                @if ($product->id == $review->product_id)
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
                        <div>
                            <div class="product-box-3 h-100 wow fadeInUp" data-wow-delay="{{ $loop->index * 0.05 }}s">
                                <div class="product-header">
                                    <div class="product-image">

                                        <a href="{{ route('show-product-left-thumbnail', ['id' => $product->id]) }}">
                                        <img width="100" src="{{ asset('upload/product_thambnail/'.$product-> product_thambnail) }}"
                                                class="img-fluid blur-up lazyload" alt="">
                                        </a>

                                        <ul class="product-option d-flex justify-content-center">
                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="View">
                                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                                    data-bs-target="#view-product{{ $product->id }}" data-product="{{ $product->id }}">
                                                    <i data-feather="eye"></i>
                                                </a>
                                            </li>
                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                                <a href="{{ route('show-comparelist', ['id' => $product->id ]) }}">
                                                    <i data-feather="refresh-cw"></i>
                                                </a>
                                            </li>
                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                                <a href="{{ route('show-wishlist', ['id' => $product->id]) }}" class="notifi-wishlist">
                                                    <i data-feather="heart"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-footer">
                                    <div class="product-detail">
                                        <span class="span-name">{{ $product->Category->category_name }}</span>
                                        <a href="{{ route('show-product-left-thumbnail', ['id' => $product->id]) }}">
                                            <h5 class="name">{{ $product->product_name }}</h5>
                                        </a>
                                        <p class="text-content mt-1 mb-2 product-content">{{ $product->short_desc }}</p>
                                        <div class="product-rating mt-2">
                                            <ul class="rating">
                                                @for ($i = 1; $i <= 5; $i++)
                                                    @if ($i <= $starRating)
                                                        <li><i data-feather="star" class="fill"></i></li>
                                                    @else
                                                        <li><i data-feather="star"></i></li>
                                                    @endif
                                                @endfor
                                            </ul>
                                            <span>(<?php echo number_format($starRating, 1); ?>)</span>
                                        </div>
                                            <h6 class="unit">{{ $product->product_size }}</h6>
                                        <h5 class="price">
                                        @if ($product->discount_percent != 0)
                                            <h4 class="price"><span class="theme-color">¥{{ number_format($product->selling_price, 0, '', ',') }}</span>
                                            <del>¥{{ number_format($product->original_price, 0, '', ',') }}</del>
                                        @else
                                            <h4 class="price"><span class="theme-color">¥{{ number_format($product->selling_price, 0, '', ',') }}</span>
                                        @endif
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                @include('components.pagination')
                </div>
            </div>
        </div>
    </section>
    <!-- Shop Section End -->

    @foreach ($products as $product)
    @if ($product->status == 1)
    @php
        $starRating = 0;
        $count = 0;
    @endphp
    @foreach ($reviews as $review)
        @if ($product->id == $review->product_id)
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
    <!-- Quick View Modal Box Start -->
     <div class="modal fade theme-modal view-modal" id="view-product{{ $product->id }}" tabindex="-1">
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
                                <img src="{{ asset('upload/product_thambnail/'.$product-> product_thambnail) }}"
                                    class="img-fluid blur-up lazyload" alt="">
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="right-sidebar-modal">
                                <h4 class="title-name">{{ $product->product_name }}</h4>
                                @if ($product->discount_percent != 0)
                                    <h4 class="price"><span class="theme-color">¥{{ number_format($product->selling_price, 0, '', ',') }}</span>
                                    <del>¥{{ number_format($product->original_price, 0, '', ',') }}</del>
                                @else
                                    <h4 class="price"><span class="theme-color">¥{{ number_format($product->selling_price, 0, '', ',') }}</span>
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
                                    <p>{!! ($product->long_desc) !!}</p>
                                </div>

                                <ul class="brand-list">
                                    <li>
                                        <div class="brand-box">
                                            <h5>Brand Name:</h5>
                                            <h6>
                                                @php
                                                    $brand = DB::table('brands')->where('id',$product->brand_id)->first();
                                                @endphp
                                                {{ $brand->brand_name }}
                                            </h6>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="brand-box">
                                            <h5>Product Code:</h5>
                                            <h6>{{ $product->product_code }}</h6>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="brand-box">
                                            <h5>Category:</h5>
                                            <h6>
                                                @php
                                                    $category = DB::table('categories')->where('id',$product->category_id)->first();
                                                @endphp
                                                {{ $category->category_name }}
                                            </h6>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="brand-box">
                                            <h5>In Stock:</h5>
                                            <h6>{{ $product->in_stock }}</h6>
                                        </div>
                                    </li>
                                </ul>
                                <div class="modal-button">
                                    <button onclick="location.href = '{{ route('show_carts', ['id' => $product->id]) }}';"
                                        class="btn btn-md add-cart-button icon" @if ($product->in_stock < 1) disabled @endif>
                                        Add To Cart</button>

                                    <button onclick="location.href = '{{ route('show-product-left-thumbnail', ['id' => $product->id]) }}';"
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

    <script>
        document.getElementById("drop1").addEventListener("click", function() {
            document.getElementById("sortValue").value = "1";
            document.getElementById("searchForm").submit();
        });
        document.getElementById("drop2").addEventListener("click", function() {
            document.getElementById("sortValue").value = "2";
            document.getElementById("searchForm").submit();
        });
        document.getElementById("drop3").addEventListener("click", function() {
            document.getElementById("sortValue").value = "3";
            document.getElementById("searchForm").submit();
        });
        document.getElementById("drop4").addEventListener("click", function() {
            document.getElementById("sortValue").value = "4";
            document.getElementById("searchForm").submit();
        });
        document.getElementById("drop5").addEventListener("click", function() {
            document.getElementById("sortValue").value = "5";
            document.getElementById("searchForm").submit();
        });
        document.getElementById("drop6").addEventListener("click", function() {
            document.getElementById("sortValue").value = "6";
            document.getElementById("searchForm").submit();
        });
        document.getElementById("searchBtn").addEventListener("click", function() {
            document.getElementById("searchForm").submit();
        });

    </script>
    <script>
        jQuery(document).ready(function($) {
            var rangeSlider = $(".js-range-slider");

            var price = "{{ $price }}";

            if (price !== null) {
                var priceRange = price.split(';');

                rangeSlider.data("ionRangeSlider").update({
                    from: parseFloat(priceRange[0]),
                    to: parseFloat(priceRange[1])
                });
            }
        });
    </script>

</x-guest-layout>