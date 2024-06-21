<!DOCTYPE html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg"
    data-sidebar-image="none" data-preloader="disable">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset('template_assets/images/favicon.ico')}}">

    <!-- Sweet Alert css-->
    <link href="{{asset('template_assets/libs/sweetalert2/sweetalert2.min.css')}}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{asset('template_assets/libs/swiper/swiper-bundle.min.css')}}">

    <!-- Layout config Js -->
    <script src="{{asset('template_assets/js/layout.js')}}"></script>
    <!-- Bootstrap Css -->
    <link href="{{asset('template_assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{asset('template_assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{asset('template_assets/css/app.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href="{{asset('template_assets/css/custom.min.css')}}" rel="stylesheet" type="text/css" />
    @yield('styles')
</head>

<body>
    <!-- Begin page -->
    <div id="layout-wrapper">
        @include('backoffice.partials._header')
        @include('backoffice.partials._sidebar')
        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">
                    @yield('content')
                </div>
            </div>
            @include('backoffice.partials._footer')
        </div>
    </div>

    <!--start back-to-top-->
    <button onclick="topFunction()" class="btn btn-danger btn-icon" id="back-to-top">
        <i class="ri-arrow-up-line"></i>
    </button>
    <!--end back-to-top-->

    <!--preloader-->
    <div id="preloader">
        <div id="status">
            <div class="spinner-border text-primary avatar-sm" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
        </div>
    </div>

    <!-- JAVASCRIPT -->
    <script src="{{asset('template_assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('template_assets/libs/simplebar/simplebar.min.js')}}"></script>
    <script src="{{asset('template_assets/libs/node-waves/waves.min.js')}}"></script>
    <script src="{{asset('template_assets/libs/feather-icons/feather.min.js')}}"></script>
    <script src="{{asset('template_assets/js/pages/plugins/lord-icon-2.1.0.js')}}"></script>
    <script src="{{asset('template_assets/js/plugins.js')}}"></script>
    <!-- prismjs plugin -->
    <script src="{{asset('template_assets/libs/prismjs/prism.js')}}"></script>
    <script src="{{asset('template_assets/libs/list.js/list.min.js')}}"></script>
    <script src="{{asset('template_assets/libs/list.pagination.js/list.pagination.min.js')}}"></script>

    <!-- listjs init -->
    <script src="{{asset('template_assets/js/pages/listjs.init.js')}}"></script>

    <!-- Sweet Alerts js -->
    <script src="{{asset('template_assets/libs/sweetalert2/sweetalert2.min.js')}}"></script>
     <script src="{{asset('template_assets/libs/swiper/swiper-bundle.min.js')}}"></script>

    <!-- App js -->
    <script src="{{asset('template_assets/js/app.js')}}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    @yield('js')
</body>

</html>