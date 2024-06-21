<!DOCTYPE html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg"
    data-sidebar-image="none" data-preloader="disable">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') | AEJ FORMATION</title>
    <link href="{{ asset('template_assets/libs/jsvectormap/css/jsvectormap.min.css') }}" rel="stylesheet"
        type="text/css" />

    <!--Swiper slider css-->
    <link href="{{ asset('template_assets/libs/swiper/swiper-bundle.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- Layout config Js -->
    <script src="{{ asset('template_assets/js/layout.js') }}"></script>
    <!-- Bootstrap Css -->
    <link href="{{ asset('template_assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('template_assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset('template_assets/css/app.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href="{{ asset('template_assets/css/custom.min.css') }}" rel="stylesheet" type="text/css" />
    <style>
        .invalid-fdback {
            width: 100%;
            margin-top: 0.25rem;
            font-size: .875em;
            color: #f06548;
        }
    </style>
    @yield('styles')
    <x-head.tinymce-config />

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
    <script src="{{ asset('template_assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('template_assets/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('template_assets/libs/node-waves/waves.min.js') }}"></script>
    <script src="{{ asset('template_assets/libs/feather-icons/feather.min.js') }}"></script>
    <script src="{{ asset('template_assets/js/pages/plugins/lord-icon-2.1.0.js') }}"></script>
    <script src="{{ asset('template_assets/js/plugins.js') }}"></script>

    <!-- apexcharts -->
    <script src="{{ asset('template_assets/libs/apexcharts/apexcharts.min.js') }}"></script>

    <!-- Vector map-->
    <script src="{{ asset('template_assets/libs/jsvectormap/js/jsvectormap.min.js') }}"></script>
    <script src="{{ asset('template_assets/libs/jsvectormap/maps/world-merc.js') }}"></script>

    <!--Swiper slider js-->
    <script src="{{ asset('template_assets/libs/swiper/swiper-bundle.min.js') }}"></script>

    <!-- Dashboard init -->
    <script src="{{ asset('template_assets/js/pages/dashboard-ecommerce.init.js') }}"></script>

    <!-- App js -->

    <!--jquery cdn-->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script>
        $('input').on('input', function(e) {
            if ($(this).attr('type') != 'email' && !$(this).attr('id').includes('password')) {
                $(this).val($(this).val().toUpperCase());
            }
        });

        const submitForm = (formId, submitButtonId) => {
            const form = $(formId);
            const submitButton = $(submitButtonId);
            form.submit(function() {
                $('#loading_spinner').show()
                submitButton.attr('disabled', true);
            });
        }
    </script>
    <!--select2 cdn-->
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <script src="{{ asset('template_assets/js/pages/select2.init.js') }}"></script>
    <script src="{{ asset('template_assets/js/pages/form-wizard.init.js') }}"></script>
    @yield('scripts')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{ asset('template_assets/js/app.js') }}"></script>


</body>

</html>
