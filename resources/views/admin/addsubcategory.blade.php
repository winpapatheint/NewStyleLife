<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description"
    content="Fastkart admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
<meta name="keywords"
    content="admin template, Fastkart admin template, dashboard template, flat admin template, responsive admin template, web app">
<meta name="author" content="pixelstrap">
<link rel="icon" href="{{ asset('frontend/assets/logos/logos_foods.png') }}" type="image/x-icon">
<title>New Style Life</title>
    <title>Dynamic Dependent Dropdown - WebJourney</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Google font -->
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Russo+One&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Exo+2:wght@400;500;600;700;800;900&display=swap"
    rel="stylesheet">
<link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap">



<!-- Template css -->
<link id="color-link" rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/style.css') }}">

<!-- Linear Icon css -->
<link rel="stylesheet" href="{{ asset('backend/assets/css/linearicon.css') }}">

<!-- remixicon css -->
<link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/css/remixicon.css') }}">

<!-- Fontawesome css -->
<link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/css/vendors/font-awesome.css') }}">

<!-- Themify icon css-->
<link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/css/vendors/themify.css') }}">

<!-- ratio css-->
<link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/css/ratio.css') }}">

<!-- Feather icon css-->
<link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/css/vendors/feather-icon.css') }}">

<!-- Plugins css -->
<link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/css/vendors/scrollbar.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/css/vendors/animate.css') }}">

<!-- datepicker css-->
<link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/css/vendors/date-picker.css') }}">

<!-- Bootstrap css-->
<link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/css/vendors/bootstrap.css') }}">

<!-- vector map css  -->
<link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/css/vector-map.css') }}">
<!-- slick slider css-->
<link rel="stylesheet" href="{{ asset('backend/assets/css/vendors/slick.css') }}">

<!-- App css -->
<link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/css/style.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/bootstrap_tagsinput/bootstrap-tagsinput.css') }}">


</head>

  <body>
    <!-- tap on top start -->
    <div class="tap-top">
        <span class="lnr lnr-chevron-up"></span>
    </div>
    <!-- tap on tap end -->

    <!-- page-wrapper Start-->
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
        <!-- Page Header Start-->
        <div class="page-header">
            <div class="header-wrapper m-0">
                <div class="header-logo-wrapper p-0">
                    <div class="logo-wrapper">
                        <a href="{{route('admin.dashboard')}}">
                            <img class="img-fluid main-logo" src="{{ asset('backend/assets/images/logo/logo-h4.png') }}" alt="logo">
                            <img class="img-fluid white-logo" src="{{ asset('backend/assets/images/logo/logo-h4.png') }}" alt="logo">
                        </a>
                    </div>
                    <div class="toggle-sidebar">
                        <i class="status_toggle middle sidebar-toggle" data-feather="align-center"></i>
                        <a href="{{route('admin.dashboard')}}">
                            <img src="{{ asset('backend/assets/images/logo/logo-h4.png') }}" class="img-fluid" alt="">
                        </a>
                    </div>
                </div>

                <form class="form-inline search-full" action="javascript:void(0)" method="get">
                    <div class="form-group w-100">
                        <div class="Typeahead Typeahead--twitterUsers">
                            <div class="u-posRelative">
                                <input class="demo-input Typeahead-input form-control-plaintext w-100" type="text"
                                    placeholder="Search Fastkart .." name="q" title="" autofocus>
                                <i class="close-search" data-feather="x"></i>
                                <div class="spinner-border Typeahead-spinner" role="status">
                                    <span class="sr-only">Loading...</span>
                                </div>
                            </div>
                            <div class="Typeahead-menu"></div>
                        </div>
                    </div>
                </form>
                <div class="nav-right col-6 pull-right right-header p-0">
                    <ul class="nav-menus">
                        <li>
                            <span class="header-search">
                                <i class="ri-search-line"></i>
                            </span>
                        </li>
                        <li class="onhover-dropdown">
                            <div class="notification-box">
                                <i class="ri-notification-line"></i>
                                <span class="badge rounded-pill badge-theme">4</span>
                            </div>
                            <ul class="notification-dropdown onhover-show-div">
                                <li>
                                    <i class="ri-notification-line"></i>
                                    <h6 class="f-18 mb-0">Notitications</h6>
                                </li>
                                <li>
                                    <p>
                                        <i class="fa fa-circle me-2 font-primary"></i>Delivery processing <span
                                            class="pull-right">10 min.</span>
                                    </p>
                                </li>
                                <li>
                                    <p>
                                        <i class="fa fa-circle me-2 font-success"></i>Order Complete<span
                                            class="pull-right">1 hr</span>
                                    </p>
                                </li>
                                <li>
                                    <p>
                                        <i class="fa fa-circle me-2 font-info"></i>Tickets Generated<span
                                            class="pull-right">3 hr</span>
                                    </p>
                                </li>
                                <li>
                                    <p>
                                        <i class="fa fa-circle me-2 font-danger"></i>Delivery Complete<span
                                            class="pull-right">6 hr</span>
                                    </p>
                                </li>
                                <li>
                                    <a class="btn btn-primary" href="javascript:void(0)">Check all notification</a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <div class="mode">
                                <i class="ri-moon-line"></i>
                            </div>
                        </li>
                        <li class="profile-nav onhover-dropdown pe-0 me-0">
                            <div class="media profile-media">
                                <img class="user-profile rounded-circle" src="{{ asset('backend/assets/images/users/4.jpg') }}" alt="">
                                <div class="user-name-hide media-body">
                                    <span>Emay Walter</span>
                                    <p class="mb-0 font-roboto">Admin<i class="middle ri-arrow-down-s-line"></i></p>
                                </div>
                            </div>

                            <ul class="profile-dropdown onhover-show-div">
                               <div>
                                    <li>
                                        <a href="{{ route('admin.profile') }}">
                                            <i data-feather="user"></i>
                                                <span>Profile</span>
                                        </a>
                                    </li>
                                </div>

                                <li>
                                    <form method="POST" action="{{ route('adminlogout') }}">
                                        @csrf
                                        <a class="ticket-btn btn" style='padding: 0px 10px;' href="route('adminlogout')" onclick="event.preventDefault(); this.closest('form').submit();"> logout</a>
                                        </form>


                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Page Header Ends-->

        <!-- Page Body Start-->
        <div class="page-body-wrapper">
            <!-- Page Sidebar Start-->
            <div class="sidebar-wrapper">
                <div id="sidebarEffect"></div>
                <div>
                    <div class="logo-wrapper logo-wrapper-center">
                        <a href="{{route('admin.dashboard')}}" data-bs-original-title="" title="">
                            <img class="img-fluid for-white" src="{{ asset('backend/assets/images/logo/full-white.png') }}" alt="logo">
                        </a>
                        <div class="back-btn">
                            <i class="fa fa-angle-left"></i>
                        </div>
                        <div class="toggle-sidebar">
                            <i class="ri-apps-line status_toggle middle sidebar-toggle"></i>
                        </div>
                    </div>
                    <div class="logo-icon-wrapper">
                        <a href="{{route('admin.dashboard')}}">
                            <img class="img-fluid main-logo main-white" src="{{ asset('backend/assets/images/logo/logo.png') }}" alt="logo">
                            <img class="img-fluid main-logo main-dark" src="{{ asset('backend/assets/images/logo/logo-white.png') }}"
                                alt="logo">
                        </a>
                    </div>
                    <nav class="sidebar-main">
                        <div class="left-arrow" id="left-arrow">
                            <i data-feather="arrow-left"></i>
                        </div>

                        <div id="sidebar-menu">
                            <ul class="sidebar-links" id="simple-bar">
                                <li class="back-btn"></li>

                                <li class="sidebar-list">
                                    <a class="sidebar-link sidebar-title link-nav" href="{{ route('admin.dashboard') }}">
                                        <i class="ri-home-line"></i>
                                        <span>Dashboard</span>
                                    </a>
                                </li>

                                <li class="sidebar-list">
                                    <a class="sidebar-link sidebar-title link-nav" href="{{ route('admin.all.product') }}">
                                        <i class="ri-store-3-line"></i>
                                        <span>Product</span>
                                    </a>
                                </li>

                                <li class="sidebar-list">
                                    <a class="sidebar-link sidebar-title link-nav" href="{{ route('admin.category') }}">
                                        <i class="ri-store-3-line"></i>
                                        <span>Category</span>
                                    </a>
                                </li>


                                 <li class="sidebar-list">
                                    <a class="sidebar-link sidebar-title link-nav" href="{{ route('admin.all.blog') }}">
                                        <i class="ri-newspaper-line"></i>
                                        <span>News</span>
                                    </a>
                                </li>


                                <li class="sidebar-list">
                                    <a class="sidebar-link sidebar-title link-nav" href="{{ route('orderlist') }}">
                                        <i class="ri-archive-line"></i>
                                        <span>Orders</span>
                                    </a>
                                </li>

                                <li class="sidebar-list">
                                    <a class="sidebar-link sidebar-title link-nav" href="{{ route('admin.product.review') }}">
                                        <i class="ri-star-line"></i>
                                        <span>Review</span>
                                    </a>
                                </li>

                                 <li class="sidebar-list">
                                    <a class="sidebar-link sidebar-title link-nav" href="{{ route('admin.all.users') }}">
                                        <i class="ri-file-user-line"></i>
                                        <span>Users</span>
                                    </a>
                                </li>
                                <li class="sidebar-list">
                                    <a class="sidebar-link sidebar-title link-nav" href="{{ url('admin/subadmin' )}}">
                                        <i class="ri-admin-line"></i>
                                        <span>SubAdmin</span>
                                    </a>
                                </li>
                                <li class="sidebar-list">
                                    <a class="sidebar-link sidebar-title link-nav" href="{{ route('admin.indexhelp') }}">
                                        <i class="ri-phone-line"></i>
                                        <span>Help</span>
                                    </a>
                                </li>


                                <li class="sidebar-list">
                                    <a class="sidebar-link sidebar-title link-nav" href="{{ route('admin.profile') }}">
                                        <i class="ri-profile-line"></i>
                                        <span>Profile</span>
                                    </a>
                                </li>

                            </ul>
                        </div>

                        <div class="right-arrow" id="right-arrow">
                            <i data-feather="arrow-right"></i>
                        </div>
                    </nav>
                </div>
            </div>
            <!-- Page Sidebar Ends-->
            <style>
                .error{
                    margin:0 auto;
                    display:flex;
                }
            </style>

            @php $error = $errors->toArray(); if(!isset($editmode)){$editmode = false;} if(!isset($editother)){$editother = false;}
            @endphp
            <div class="page-body">
            <!-- New Product Add Start -->
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="row">
                                <div class="col-sm-8 m-auto">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="card-header-2">
                                                <h5>SubCategory Title Information</h5>
                                            </div>
                                            @php $action= route('registersubcategory'); @endphp

                                            <form class="theme-form theme-form-2 mega-form" id="registersubcategory" class="contact-form" method="POST" action="{{ $action }}" enctype="multipart/form-data">
                                                @csrf
                                                @if ($editmode)
                                                <input type="hidden" name="id" value="{{ $subtitle->id }}">

                                                @endif

                                                <div class="mb-4 row align-items-center">
                                                    <label class="col-sm-3 col-form-label form-label-title">Category</label>
                                                        <div class="col-sm-8">
                                                            <select class="js-example-basic-single w-100" name="category" id="category">
                                                                <option value="0">select Category</option>
                                                                @foreach($categories as $category)
                                                                    <option value="{{ $category -> id }}"  >
                                                                        {{ $category -> category_name }}  </option>
                                                                @endforeach

                                                            </select>
                                                            <p style="display:none" class="category error text-danger"></p>
                                                            @if (!empty($error['category']))
                                                                @foreach ($error['category'] as  $key => $value)
                                                                    <p class="category error text-danger">{{ $value }}</p>
                                                                @endforeach
                                                            @endif
                                                        </div>
                                                </div>
                                                <div class="mb-4 row align-items-center">
                                                    <label
                                                        class="col-sm-3 col-form-label form-label-title">SubCategory  Title</label>
                                                    <div class="col-sm-8">
                                                        <select class="js-example-basic-single w-100 get_subcategory" name="subcategory" id="subcategory">

                                                        </select>
                                                        <p style="display:none" class="subcategory error text-danger"></p>
                                                        @if (!empty($error['subcategory']))
                                                            @foreach ($error['subcategory'] as  $key => $value)
                                                                <p class="subcategory error text-danger">{{ $value }}</p>
                                                            @endforeach
                                                        @endif
                                                    </div>
                                                </div>

                                                <div class="mb-4 row align-items-center">
                                                    <label class="form-label-title col-sm-3 mb-0">SubCategory Name</label>
                                                    <div class="col-sm-9">
                                                        <div class="input-group">
                                                            <input class="form-control" type="text" placeholder="SubCategory Name" name="subname[]" id="subname"
                                                                value="{{ old('subname')  }}">
                                                            <div class="input-group-append align-self-center mx-auto justify-content-center">
                                                                <a href="#" class="align-items-center d-flex" id="add-more-field">
                                                                    <i data-feather="plus-square"></i> Add
                                                                </a>
                                                            </div>
                                                        </div>
                                                            <div id="dynamic-form"></div>
                                                                <p style="display:none" class="subname error text-danger"></p>
                                                                    @if (!empty($error['subname']))
                                                                        @foreach ($error['subname'] as  $key => $value)
                                                                            <p class="subname error text-danger">{{ $value }}</p>
                                                                        @endforeach
                                                                    @endif
                                                            </div>
                                                    </div>
                                                        <button type="button" class="btn btn-submit btn-animation ms-auto fw-bold">
                                                            @if (!$editmode)
                                                                <i class="fa fa-user-plus" aria-hidden="true"></i>
                                                                    Save
                                                            @else
                                                                <i class="fa fa-edit" aria-hidden="true"></i>
                                                                  Edit
                                                            @endif
                                                        </button>

                                                        <!-- Confirm Modal Box -->
                                    <div class="modal fade theme-modal remove-coupon" id="confirmModal" tabindex="-1" data-bs-toggle="modal" role="dialog" aria-labelledby="deleteConfirmModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header d-block text-center">
                                                    <h5 class="modal-title w-100" id="exampleModalLabel22">Are You Sure?</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                                        <i class="fas fa-times"></i>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="remove-box">
                                                        <p>SubCategory will be added.</p>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-submit btn-animation btn-md fw-bold me-2">
                                                        @if (!$editmode)
                                                            Yes
                                                        @else
                                                            Yes
                                                        @endif
                                                    </button>
                                                    <button type="button" class="btn btn-animation btn-md fw-bold" data-bs-dismiss="modal"
                                                    style="background-color: #ff6b6b;border-color: #ff6b6b;">No</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Confirm Modal Box End-->
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- New Product Add End -->
            </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script>
    	$.ajaxSetup({
		    headers: {
		        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		    }
		});
    </script>

    <script>
        $(document).ready(function(){
            $(document).on('change','#category', function() {
                let category = $(this).val();
                // $('#subcategory_info').show();
                $.ajax({
                    method: 'post',
                    url: "{{ route('getSubcategories') }}",
                    data: {
                        category: category
                    },
                    success: function(res) {

                        if (res.status == 'success') {
                            let all_options = "<option value=''>Select Sub Category</option>";
                            let all_subcategories = res.subcategories;
                            $.each(all_subcategories, function(index, value) {
                                all_options += "<option value='" + value.id +
                                    "'>" + value.sub_category_titlename + "</option>";
                            });
                            $(".get_subcategory").html(all_options);
                        }
                    }
                })
            });
        });
    </script>

    <script>
        $('.btn-submit').click(function() {

            $('.error').hide();

            if ($.trim($("#category").val()) === "0"  ||  $.trim($("#subcategory").val()) === "" || ($.trim($("#subname").val()) === "" )) {
                if ($.trim($("#category").val()) === "0") {
                    $('.error.category').text('Category Name is required');
                    $('.error.category').show();
                }
                if ( $.trim($("#subcategory").val()) === "") {
                    $('.error.subcategory').text('Subcategory Title Name is required');
                    $('.error.subcategory').show();
                }

                if ($.trim($("#subname").val()) === "" ) {
                    $('.error.subname').text('Subcategory Name is required');
                    $('.error.subname').show();
                }

                if ($.trim($("#addedsubname").val()) === "" ) {
                    $('.error.subname').text('Subcategory Name is required');
                    $('.error.subname').show();
                }
                return false;
            } else {

                $('.error').hide()
            $('#confirmModal').modal('show');

            }
            });
        </script>

<script>
    // Function to add new input field
    function addInputField()
    {
        var inputGroup = document.createElement('div');
        inputGroup.classList.add('mb-4', 'row', 'align-items-center');
        inputGroup.innerHTML = `

            <div class="col-sm-12">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="SubCategory Name" name="subname[]" id="addedsubname">
                    <div class="input-group-append align-self-center mx-auto justify-content-center">
                        <a href="#" class="align-items-center d-flex remove-field">
                            <i data-feather="minus-square" class="remove-field"></i> Remove
                        </a>
                    </div>
                </div>
            </div>
        `;
        document.getElementById('dynamic-form').appendChild(inputGroup);
        feather.replace(); // Refresh Feather icons
    }

        // Add event listener to the add button
        document.getElementById('add-more-field').addEventListener('click', function(event) {
            event.preventDefault();
            addInputField();
        });

        // Event delegation to handle remove button click
        document.getElementById('dynamic-form').addEventListener('click', function(event) {
            if (event.target.classList.contains('remove-field')) {
                event.preventDefault();
                event.target.closest('.row').remove();
            }
        });
</script>
    <!-- latest js -->


    <script src="{{ asset('backend/assets/bootstrap_tagsinput/bootstrap-tagsinput.js') }}"></script>

    <!-- Bootstrap js -->
    <script src="{{ asset('backend/assets/js/bootstrap/bootstrap.bundle.min.js') }}"></script>

    <!-- feather icon js -->
    <script src="{{ asset('backend/assets/js/icons/feather-icon/feather.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/icons/feather-icon/feather-icon.js') }}"></script>

    <!-- scrollbar simplebar js -->
    <script src="{{ asset('backend/assets/js/scrollbar/simplebar.js') }}"></script>
    <script src="{{ asset('backend/assets/js/scrollbar/custom.js') }}"></script>

    <!-- Sidebar js -->
    <script src="{{ asset('backend/assets/js/config.js') }}"></script>

    <!-- tooltip init js -->
    <script src="{{ asset('backend/assets/js/tooltip-init.js') }}"></script>

    <!-- Plugins js -->
    <script src="{{ asset('backend/assets/js/sidebar-menu.js') }}"></script>
    <script src="{{ asset('backend/assets/js/notify/bootstrap-notify.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/notify/index.js') }}"></script>

    <!-- Apexchar js -->
    <script src="{{ asset('backend/assets/js/chart/apex-chart/apex-chart1.js') }}"></script>
    <script src="{{ asset('backend/assets/js/chart/apex-chart/moment.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/chart/apex-chart/apex-chart.js') }}"></script>
    <script src="{{ asset('backend/assets/js/chart/apex-chart/stock-prices.js') }}"></script>
    <script src="{{ asset('backend/assets/js/chart/apex-chart/chart-custom.js') }}"></script>


    <!-- customizer js -->
    <script src="{{ asset('backend/assets/js/customizer.js') }}"></script>

    <!-- ratio js -->
    <script src="{{ asset('backend/assets/js/ratio.js') }}"></script>

    <!-- sidebar effect -->
    <script src="{{ asset('backend/assets/js/sidebareffect.js') }}"></script>

    <!-- Theme js -->
    <script src="{{ asset('backend/assets/js/script.js') }}"></script>
  </body>
</html>