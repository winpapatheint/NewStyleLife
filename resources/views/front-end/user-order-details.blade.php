<x-guest-layout>
    <script src="https://cdn.ckeditor.com/ckeditor5/41.1.0/classic/ckeditor.js"></script>
    <div class="page-body">
        <!-- Breadcrumb Section Start -->
        <section class="breadcrumb-section pt-0">
            <div class="container-fluid-lg">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb-contain">
                            <h2>Orders</h2>
                            <nav>
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item">
                                        <a href="/">
                                            <i class="fa-solid fa-house"></i>
                                        </a>
                                    </li>
                                    <li class="breadcrumb-item active">Orders</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Breadcrumb Section End -->
    
        <!-- User Dashboard Section Start -->
        <section class="user-dashboard-section section-b-space">
            <div class="container-fluid-lg">
                <div class="row">
                    <div class="col-xxl-3 col-lg-4">
                        <div class="dashboard-left-sidebar">
                            <div class="close-button d-flex d-lg-none">
                                <button class="close-sidebar">
                                    <i class="fa-solid fa-xmark"></i>
                                </button>
                            </div>
                            <div class="profile-box">
                                <div class="cover-image">
                                    <img src="{{ asset('frontend/assets/images/inner-page/cover-img.jpg') }}" class="img-fluid blur-up lazyload"
                                        alt="">
                                </div>
    
                                <div class="profile-contain">
                                    <div class="profile-image">
                                        <div class="position-relative">
                                            @if ($user->user_photo)
                                            <img src="{{ asset('upload/profile/' . $user->user_photo) }}"
                                                class="blur-up lazyload update_img" alt=""  id="uploaded_image">
                                            @else
                                            <img src="{{ asset('frontend/assets/images/profile.png') }}"
                                                class="blur-up lazyload update_img" alt=""  id="uploaded_image">
                                            @endif
                                                <div class="cover-icon">
                                                    <label for="user_profile_upload_input">
                                                        <i class="fa-solid fa-pen">
                                                        <input type="file" id="user_profile_upload_input" name="user_profile" class="form-control" onchange="uploadUserProfile()">
                                                        </i>
                                                    </label>
                                                </div>
                                        </div>
                                    </div>
    
                                    <div class="profile-name">
                                        <h3>{{ $user->name }}</h3>
                                        <h6 class="text-content">{{ $user->email }}</h6>
                                    </div>
                                </div>
                            </div>
    
                            <ul class="nav nav-pills user-nav-pills" id="pills-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                <a class="nav-link" id="pills-dashboard-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-dashboard" type="button" style="font-size: 14px; text-align: center;"><i data-feather="home"></i>
                                        DashBoard</a>
                                </li>
                                <li class="nav-item active" role="presentation">
                                    <a class="nav-link" id="pills-order-tab"
                                        style="font-size: 14px; text-align: center;" href="{{route ('user_order')}}"><i
                                            data-feather="shopping-bag"></i>Orders</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="delivery-detail"
                                        type="button" style="font-size: 14px; text-align: center;" href="{{route ('user_deivery_status')}}"><i data-feather="box"></i>
                                        Delivery Status</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="pills-address-tab"
                                        type="button" role="tab" style="font-size: 14px; text-align: center;" href="{{route ('user_addresses')}}"><i
                                            data-feather="map-pin"></i>Addresses</a>
                                </li>
                                {{-- <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="pills-card-tab"
                                        type="button" role="tab" style="font-size: 14px; text-align: center;" href="{{route ('user_cards')}}"><i
                                            data-feather="credit-card"></i>Payment Methods</a>
                                </li> --}}
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="pills-profile-tab"
                                        type="button" role="tab" style="font-size: 14px; text-align: center;" href="{{route ('user_profile')}}"><i data-feather="user"></i>
                                        Profile</a>
                                </li>
                                @php
                                    $buyer = DB::table('buyers')->where('user_id', $user->id)->first();
                                    $noti = DB::table('user_notifications')->where('buyer_id', $buyer->id)->where('seen', 0)->count();
                                @endphp
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="pills-profile-tab"
                                        type="button" role="tab" style="font-size: 14px; text-align: center; display: flex; align-items: center;" href="{{route ('user_message')}}"><i data-feather="mail"></i>
                                        Message
                                        <span id="notification-badge" class="badge rounded-pill badge-theme" style="color: #ff6b6b; font-size: 12px; margin-left: auto;">
                                            <b>{{ $noti > 0 ? 'new' : '' }}</b>
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
    
                    <!-- User Dashboard Section End -->
    
                    <div class="col-xxl-9 col-lg-8" class="tab-pane fade" id="pills-order" role="tabpanel">
                        <!-- Orders Details Start -->
                            <div class="page-body">
                    <!-- tracking table start -->
    
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-12">
                            @php
                                $price = 0;
                                $shippingFee = 0;
                                $couponDiscountAmount = 0;
                                $subTotalAmount  = 0;
                                $totalAmount = 0;
                                $orders = 0;
                            @endphp
                                <div class="card">
                                    <div class="card-body">
                                        <div class="title-header title-header-block package-card">
                                        @if($orderDetails->isNotEmpty())
                                            @php
                                                $orders = $orderDetails->first();
                                                $subTotalAmount = $orders->sub_total_amount;
                                                $totalAmount = $orders->total_amount;
                                                $couponDiscountAmount = $orders->coupon_discount_amount;
                                                $shippingFee = $orders->shipping_fee;
                                            @endphp
                                        @endif
                                            <div>
                                                <h5>Order Code <span style="color: var(--theme-color);">{{ $orders->order_code }}</span></h5>
                                            </div>
                                            <div class="card-order-section">
                                                <h5 style="color: var(--theme-color);">{{ date('Y/m/d', strtotime($orders->order_created_at)) }}</h5>
                                                <h5>Items: <span style="color: var(--theme-color);">{{ $orders->total_qty }}</span></h5>
                                                <h5>Total: <span style="color: var(--theme-color);">¥ {{ number_format($orders->total_amount , 0, '.', ',') }}</span></h5>
                                            </div>
                                        </div>
                                        <br>
                                        @if ($orderDetails->first()->payment_approved == 0)
                                            <p style="color:red; font-size:12px;">* Please make the transfer for this order.</p>
                                        @endif
                                        <div class="bg-inner cart-section order-details-table">
                                            <div class="row g-4">
                                                <div class="col-xl-8">
                                                    <div class="table-responsive table-details">
                                                        <table class="table cart-table table-borderless">
                                                            <thead>
                                                                <tr>
                                                                    <th>No</th>
                                                                    <th>Product Name</th>
                                                                    <th>Shop</th>
                                                                    <th>Quantity</th>
                                                                    <th>Price (tax inc)</th>
                                                                    <th>Size</th>
                                                                    <th>Color</th>
                                                                    <th></th>
                                                                </tr>
                                                            </thead>
    
                                                            @foreach($orderDetails as $index => $order)
                                                            <tbody>
                                                                <tr class="table-order">
                                                                    <td>
                                                                        {{ $index + 1 }}
                                                                    </td>
                                                                    <td>
                                                                        <a href="{{ route('show-product-left-thumbnail', ['id' => $order->product_id]) }}">
                                                                            <h5 style="width: 100px;">{{ $order->product_name }}</h5>
                                                                        </a>
                                                                    </td>
                                                                    @php
                                                                        $shop = DB::table('sellers')->where('user_id', $order->seller_id)->first();
                                                                    @endphp
                                                                    <td>
                                                                        <h5>{{ $shop->shop_name }}</h5>
                                                                    </td>
                                                                    <td>
                                                                        <h5>{{ $order->qty }}</h5>
                                                                    </td>
                                                                    <td>
                                                                        <h5>{{ $order->size }}</h5>
                                                                    </td>
                                                                    <td>
                                                                        <h5>{{ $order->color }}</h5>
                                                                    </td>
                                                                    <td>
                                                                        <h5>¥ {{ number_format($order->selling_price * $order->qty , 0, '.', ',') }}</h5>
                                                                    </td>
                                                                    <td>
                                                                        @if ($order->payment_approved == 1)
                                                                            @if ($order->status != "Cancel")
                                                                            <a type="button" class="btn btn-sm" style="background-color: var(--theme-color); border:0.5px solid var(--theme-color); margin-left:0.5em; color:white;"
                                                                                href="{{route ('order_detail_tracking',['id' => $order->order_detail_id]) }}">Tracking</a>
                                                                            @else
                                                                            <button type="button" class="btn btn-sm" style="background-color: #ff6b6b; border:0.5px solid var(--theme-color); margin-left:0.5em; color:white;"
                                                                                onclick="cancelReason({{ $order->order_detail_id }})">Canceled</button>
                                                                            @endif
                                                                        @endif
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                            <!-- Confirmation Modal for Edit -->
                                                            @if ($order->status == "Cancel")
                                                            <div class="modal fade theme-modal remove-profile" id="showCancelReason{{ $order->order_detail_id }}" tabindex="-1" aria-hidden="true">
                                                                <div class="modal-dialog modal-dialog-centered">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header d-block text-center">
                                                                            <h5 class="modal-title w-100" id="exampleModalLabel{{ $order->order_detail_id }}">Cancelled Reason</h5>
                                                                            <button type="button" class="btn-close" data-bs-dismiss="modal">
                                                                                <i class="fa-solid fa-xmark"></i>
                                                                            </button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <div class="remove-box">
                                                                                <p>{{ $order->cancelled_reason}}</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            @endif
                                                            @endforeach
                                                            <tfoot>
                                                                <tr class="table-order">
                                                                    <td colspan="4">
                                                                        <h5>Subtotal :</h5>
                                                                    </td>
                                                                    <td>
                                                                        <h4>¥ {{ number_format($subTotalAmount , 0, '.', ',') }}</h4>
                                                                    </td>
                                                                </tr>
    
                                                                <tr class="table-order">
                                                                    <td colspan="4">
                                                                        <h5>Shipping :</h5>
                                                                    </td>
                                                                    <td>
                                                                        <h4>¥ {{ number_format($shippingFee , 0, '.', ',') }}</h4>
                                                                    </td>
                                                                </tr>
    
                                                                <tr class="table-order">
                                                                    <td colspan="4">
                                                                        <h5>Coupon Discounted :</h5>
                                                                    </td>
                                                                    <td>
                                                                        <h4>¥ {{ number_format($couponDiscountAmount , 0, '.', ',') }}</h4>
                                                                    </td>
                                                                </tr>
    
                                                                <tr class="table-order">
                                                                    <td colspan="4">
                                                                        <h4 class="theme-color fw-bold">Total Price :</h4>
                                                                    </td>
                                                                    <td>
                                                                        <h4 class="theme-color fw-bold">¥ {{ number_format($totalAmount , 0, '.', ',') }}</h4>
                                                                    </td>
                                                                </tr>
                                                            </tfoot>
                                                        </table>
                                                    </div>
                                                </div>
    
                                                <div class="col-xl-4">
                                                    <div class="order-success">
                                                        <div class="row g-4">
                                                            <h3>Summery</h3>
                                                            <ul class="order-details">
                                                                <li>Order Code: {{ $order->order_code }}</li>
                                                                <li>Order Date: {{ date('Y/m/d H:i', strtotime($order->created_at)) }}</li>
                                                                <li>Order Total: ¥ {{ number_format($totalAmount , 0, '.', ',') }}</li>
                                                            </ul>
    
                                                            @php
                                                                function formatZipCode($zipCode) {
                                                                    if (preg_match('/^\d{3}-\d{4}$/', $zipCode)) {
                                                                        return $zipCode;
                                                                    }
                                                                    if (preg_match('/^\d{7}$/', $zipCode)) {
                                                                        return substr($zipCode, 0, 3) . '-' . substr($zipCode, 3, 4);
                                                                    }
                                                                    return $zipCode; // return as-is if not a standard 7 digit zip code
                                                                }
                                                            @endphp
                                                            <div class="payment-mode">
                                                                <h4>Shipping address</h4>
                                                                <ul class="order-details">
                                                                    <li><h5>{{ $order->order_details_name }}</h5></li><br>
                                                                    <li>〒{{ formatZipCode($order->post_code) }}</li><br>
                                                                    <li>{{ $order->prefecture->name }}</li><br>
                                                                    <li>{{ $order->city }}</li><br>
                                                                    <li>{{ $order->chome }}</li><br>
                                                                    <li>{{ $order->building }} {{ $order->room_no }}</li><br>
                                                                    <li>{{ $order->order_details_phone }}</li>
                                                                </ul>
                                                            </div>
    
                                                            <div class="payment-mode">
                                                                <h4>Payment method</h4>
                                                                <p>{{ $order->payment_type }}</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- section end -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- tracking table end -->
                <!-- tracking section End -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- User Dashboard Section End -->
    
    <script>
        ClassicEditor
            .create(document.querySelector('#ckeditor'))
            .catch(error => {
                console.error(error);
            });
    </script>
    <script>
        function mainThamUrl(input){
            if(input.files && input.files[0]){
                var reader = new FileReader();
                reader.onload = function(e){
                    $('#mainThmb').attr('src', e.target.result).width(70).height(70);
                };
                reader.readAsDataURL(input.files[0]); // Corrected method name
            }
        }
    </script>
    <script>
        document.getElementById('multiImg').addEventListener('change', function(event) {
            const preview = document.getElementById('preview_img');
            preview.innerHTML = '';
    
            Array.from(event.target.files).forEach(file => {
                const reader = new FileReader();
                reader.onload = function(e) {
                    const img = document.createElement('img');
                    img.src = e.target.result;
                    img.style.maxWidth = '100px';
                    img.style.maxHeight = '100px';
                    preview.appendChild(img);
                };
                reader.readAsDataURL(file);
            });
        });
    </script>
    <script>
        function cancelReason(id) {
            const confirmModal = new bootstrap.Modal(document.getElementById('showCancelReason' + id));
                confirmModal.show();
        }
    </script>
    
    </x-guest-layout>