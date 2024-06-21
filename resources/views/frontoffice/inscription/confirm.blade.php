<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable" data-theme="default" data-theme-colors="default">

<head>

    <meta charset="utf-8" />
    <title>Confimation | Elim Academie - Admin & Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Confimation | Elim Academie - Admin & Dashboard" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset('assets/images/favicon.ico')}}">

    <!-- Layout config Js -->
    <script src="{{asset('assets/js/layout.js')}}"></script>
    <!-- Bootstrap Css -->
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{asset('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{asset('assets/css/app.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href="{{asset('assets/css/custom.min.css')}}" rel="stylesheet" type="text/css" />

</head>

<body>

    <!-- Begin page -->
<div id="layout-wrapper">

    <header id="page-topbar">

    </header>

 <!-- removeNotificationModal -->

        <!-- ========== App Menu ========== -->
        <div class="app-menu navbar-menu" style="background-image: {{asset('assets/images/auth-one-bg.jpg')}}">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <!-- Dark Logo-->
                <a href="index.html" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="{{asset('assets/images/logo_academie.png')}}" alt="" height="150">
                    </span>
                    <span class="logo-lg">
                        <img src="{{asset('assets/images/logo_academie.png')}}" alt="" height="150">
                    </span>
                </a>
                <!-- Light Logo-->
                <a href="index.html" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="{{asset('assets/images/logo_academie.png')}}" alt="" height="150">
                    </span>
                    <span class="logo-lg">
                        <img src="{{asset('assets/images/logo_academie.png')}}" alt="" height="150">
                    </span>
                </a>
                <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
                    <i class="ri-record-circle-line"></i>
                </button>
            </div>

            <div id="scrollbar" style="background-image: {{asset('assets/images/auth-one-bg.jpg')}}">
                <div class="container-fluid">

                    <div id="two-column-men" >
                    </div>
                    
                </div>
                <!-- Sidebar -->
            </div>

            <div class="sidebar-background"></div>
        </div>
        <!-- Left Sidebar End -->
        <!-- Vertical Overlay-->
        <div class="vertical-overlay"></div>

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">

                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Confirmation de la pré inscription </h4>
                                </div><!-- end card header -->
                                <div class="card-body form-steps">
                                    <form class="vertical-navs-step">
                                        <div class="row gy-5">
                                            <div class="col-lg-3">
                                                <div class="nav flex-column custom-nav nav-pills" role="tablist" aria-orientation="vertical">
                                                    <button class="nav-link done" id="v-pills-bill-info-tab" data-bs-toggle="pill" data-bs-target="#v-pills-bill-info" type="button" role="tab" aria-controls="v-pills-bill-info" aria-selected="true" disabled>
                                                        <span class="step-title me-2" >
                                                            <i class="ri-close-circle-fill step-icon me-2"></i> Etape 1
                                                        </span>
                                                        Informations de l'étudiant
                                                    </button>
                                                    <button class="nav-link done" id="v-pills-bill-address-tab" data-bs-toggle="pill" data-bs-target="#v-pills-bill-address" type="button" role="tab" aria-controls="v-pills-bill-address" aria-selected="false" disabled>
                                                        <span class="step-title me-2">
                                                            <i class="ri-close-circle-fill step-icon me-2"></i> Step 2
                                                        </span>
                                                        Informations complémentaires
                                                    </button>
                                
                                                    <button class="nav-link active" id="v-pills-finish-tab" data-bs-toggle="pill" data-bs-target="#v-pills-finish" type="button" role="tab" aria-controls="v-pills-finish" aria-selected="false">
                                                        <span class="step-title me-2">
                                                            <i class="ri-close-circle-fill step-icon me-2"></i> Etape 3
                                                        </span>
                                                        Confirmation
                                                    </button>
                                                </div>
                                                <!-- end nav -->
                                            </div> <!-- end col-->
                                            <div class="col-lg-8">
                                                <div class="px-lg-4">
                                                    <div class="tab-content">
                                                       
                                                        <div class="tab-pane fade show active" id="v-pills-finish" role="tabpanel" aria-labelledby="v-pills-finish-tab">
                                                            <div class="text-center pt-4 pb-2">

                                                                <div class="mb-4">
                                                                    <lord-icon src="https://cdn.lordicon.com/lupuorrc.json" trigger="loop" colors="primary:#0ab39c,secondary:#405189" style="width:120px;height:120px"></lord-icon>
                                                                </div>
                                                                <h5>Votre pré inscription a été enrégistré !</h5>
                                                                <p class="text-muted">Vous recevrez un e-mail de confirmation.</p>
                                                            </div>
                                                        </div>
                                                        <!-- end tab pane -->
                                                    </div>
                                                    <!-- end tab content -->
                                                </div>
                                            </div>
                                            <!-- end col -->

                                            
                                        </div>
                                        <!-- end row -->
                                    </form>
                                </div>
                            </div>
                            <!-- end -->
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->
                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <script>
                                document.write(new Date().getFullYear())
                            </script> © Elim Academie.
                        </div>
                        <div class="col-sm-6">
                            <div class="text-sm-end d-none d-sm-block">
                                Design & Develop by Malqowsh technology
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->



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
    <script src="{{asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/libs/simplebar/simplebar.min.js')}}"></script>
    <script src="{{asset('assets/libs/node-waves/waves.min.js')}}"></script>
    <script src="{{asset('assets/libs/feather-icons/feather.min.js')}}"></script>
    <script src="{{asset('assets/js/pages/plugins/lord-icon-2.1.0.js')}}"></script>
    <script src="{{asset('assets/js/plugins.js')}}"></script>

    <!-- form wizard init -->
    <script src="{{asset('assets/js/pages/form-wizard.init.js')}}"></script>

    <!-- App js -->
    <script src="{{asset('assets/js/app.js')}}"></script>
</body>

</html>