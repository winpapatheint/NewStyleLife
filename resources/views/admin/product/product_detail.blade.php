<x-auth-layout>
    <div class="page-body">
        <!-- Product Detail Start -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="row">
                        <div class="col-sm-8 m-auto">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-header-2">
                                        <h5>Product Information</h5>
                                    </div>

                                    <form class="theme-form theme-form-2 mega-form">
                                        <div class="mb-2 row align-items-center">
                                            <label class="form-label-title col-sm-5 mb-0">Product Code</label>
                                            <div class="col-sm-7">
                                                <p>{{ $product->product_code }}</p>
                                            </div>
                                        </div>
                                        <div class="mb-2 row align-items-center">
                                            <label class="form-label-title col-sm-5 mb-0">Product Name</label>
                                            <div class="col-sm-7">
                                                <p>{{ $product->product_name }}</p>
                                            </div>
                                        </div>
                                        <div class="mb-2 row align-items-center">
                                            <label class="form-label-title col-sm-5 mb-0">Brand</label>
                                            <div class="col-sm-7">
                                                <p>{{ $product->brand_name }}</p>
                                            </div>
                                        </div>
                                        <div class="mb-2 row align-items-center">
                                            <label class="form-label-title col-sm-5 mb-0">Category</label>
                                            <div class="col-sm-7">
                                                <p>{{ $product->Category->category_name }}</p>
                                            </div>
                                        </div>
                                        <div class="mb-2 row align-items-center">
                                            <label class="form-label-title col-sm-5 mb-0">Subcategory Title</label>
                                            <div class="col-sm-7">
                                                <p>{{ $product->SubCategoryTitle->sub_category_titlename }}</p>
                                            </div>
                                        </div>
                                        <div class="mb-2 row align-items-center">
                                            <label class="form-label-title col-sm-5 mb-0">Subcategory</label>
                                            <div class="col-sm-7">
                                                <p>{{ $product->SubCategory->sub_category_name }}</p>
                                            </div>
                                        </div>
                                        <div class="mb-2 row align-items-center">
                                            <label class="form-label-title col-sm-5 mb-0">Product Tags</label>
                                            <div class="col-sm-7">
                                                <p>{{ $product->product_tags }}</p>
                                            </div>
                                        </div>
                                        <div class="mb-2 row align-items-center">
                                            <label class="form-label-title col-sm-5 mb-0">Product Size</label>
                                            <div class="col-sm-7">
                                                <p>{{ $product->product_size }}</p>
                                            </div>
                                        </div>
                                        <div class="mb-2 row align-items-center">
                                            <label class="form-label-title col-sm-5 mb-0">Product Color</label>
                                            <div class="col-sm-7">
                                                <p>{{ $product->product_color }}</p>
                                            </div>
                                        </div>
                                        <div class="mb-2 row align-items-center">
                                            <label class="form-label-title col-sm-5 mb-0">Short Description</label>
                                            <div class="col-sm-7">
                                                <p>{{ $product->short_desc }}</p>
                                            </div>
                                        </div>
                                        <div class="mb-2 row align-items-center">
                                            <label class="form-label-title col-sm-5 mb-0">Long Description</label>
                                            <div class="col-sm-7">
                                                <p>{!! $product->long_desc !!}</p>
                                            </div>
                                        </div>
                                        <div class="mb-2 row align-items-center">
                                            <label class="form-label-title col-sm-5 mb-0">Thumbnail
                                                Image</label>
                                            <div class="col-sm-7">
                                                <img width="100"
                                                    src="{{ asset('images/' . $product->product_thambnail) }}">
                                            </div>
                                        </div>
                                        <div class="mb-2 row align-items-center">
                                            <label class="col-sm-5 form-label-title">Price</label>
                                            <div class="col-sm-7">
                                                <p>¥{{ number_format($product->selling_price) }}</p>
                                            </div>
                                        </div>
                                        <div class="mb-2 row align-items-center">
                                            <label class="col-sm-5 form-label-title">Discount</label>
                                            <div class="col-sm-7">
                                                <p>{{ $product->discount_percent }}</p>
                                            </div>
                                        </div>
                                        <div class="mb-2 row align-items-center">
                                            <label class="col-sm-5 form-label-title">Product Quantity</label>
                                            <div class="col-sm-7">
                                                <p>{{ $product->product_qty }}</p>
                                            </div>
                                        </div>
                                        <div class="mb-2 row align-items-center">
                                            <label class="col-sm-5 form-label-title">Delivey Estimate Day</label>
                                            <div class="col-sm-7">
                                                <p>{{ $product->estimate_date }}</p>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Product Detail End -->
    </div>
</x-auth-layout>
