<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg"
    data-sidebar-image="none" data-preloader="disable" data-theme="default" data-theme-colors="default">

<head>

    <meta charset="utf-8" />
    <title>Inscription | Elim Academie - Admin & Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Inscription | Elim Academie - Admin & Dashboard" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset('assets/images/favicon_academie.jpeg')}}">

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

        <div class="app-menu navbar-menu" style="background-image: {{asset('assets/images/auth-one-bg.jpg')}}">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <!-- Dark Logo-->
                <a href="#" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="{{asset('assets/images/logo_academie.png')}}" alt="" height="150">
                    </span>
                    <span class="logo-lg">
                        <img src="{{asset('assets/images/logo_academie.png')}}" alt="" height="150">
                    </span>
                </a>
                <!-- Light Logo-->
                <a href="#" class="logo logo-light">
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
        <!-- Vertical Overlay-->
        <div class="vertical-overlay"></div>

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">
            <div style="text-align: center;">
                <img src="{{asset('assets/images/logo_academie.png')}}" alt="" height="150" style="border-radius: 50%;">
            </div>

            <div class="page-content">
                
                
                <div class="container-fluid">

                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Formulaire de pré inscription</h4>
                                </div><!-- end card header -->
                                <div class="card-body form-steps">
                                    <form class="vertical-navs-step" method="POST" action="{{ route('user.store') }}"
                                    id="create_offer_form" enctype="multipart/form-data">
                                    @csrf
                                        <div class="row gy-5">
                                            <div class="col-lg-3">
                                                <div class="nav flex-column custom-nav nav-pills" role="tablist"
                                                    aria-orientation="vertical">
                                                    <button class="nav-link active" id="v-pills-bill-info-tab"
                                                        data-bs-toggle="pill" data-bs-target="#v-pills-bill-info"
                                                        type="button" role="tab" aria-controls="v-pills-bill-info"
                                                        aria-selected="true">
                                                        <span class="step-title me-2">
                                                            <i class="ri-close-circle-fill step-icon me-2"></i> Etape 1
                                                        </span>
                                                        Informations de l'etudiant
                                                    </button>
                                                    <button class="nav-link" id="v-pills-bill-complement-tab"
                                                        data-bs-toggle="pill" data-bs-target="#v-pills-bill-complement"
                                                        type="button" role="tab" aria-controls="v-pills-bill-complement"
                                                        aria-selected="false">
                                                        <span class="step-title me-2">
                                                            <i class="ri-close-circle-fill step-icon me-2"></i> Etape 2
                                                        </span>
                                                        Informations complémentaires
                                                    </button>

                                                    <button class="nav-link" id="v-pills-finish-tab" data-bs-toggle="pill" data-bs-target="#v-pills-finish" type="button" role="tab" aria-controls="v-pills-finish" aria-selected="false" disabled>
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
                                                        <div class="tab-pane fade show active" id="v-pills-bill-info"
                                                            role="tabpanel" aria-labelledby="v-pills-bill-info-tab">
                                                            <div>
                                                                <h5>Informations relatives à l'étudiant</h5>
                                                                <p class="text-muted"> <span class="text-danger">(*)</span> Les champs suivis d'un astérisque sont obligatoires. </p>
                                                                </p>
                                                            </div>

                                                            <div>
                                                                <div class="row g-3">
                                                                    <div class="col-sm-6">
                                                                        <label for="nom"
                                                                            class="form-label">Nom</label>
                                                                            <span class="text-danger">(*)</span>
                                                                        <input type="text" class="form-control"
                                                                            id="nom" name="nom"
                                                                            placeholder="Entrer votre nom svp" value=""
                                                                            required>
                                                                        <div class="invalid-feedback">svp entrer votre
                                                                            nom</div>
                                                                    </div>

                                                                    <div class="col-sm-6">
                                                                        <label for="prenoms"
                                                                            class="form-label">Prénoms</label>
                                                                            <span class="text-danger">(*)</span>
                                                                        <input type="text" class="form-control"
                                                                            id="prenoms" name="prenoms"
                                                                            placeholder="Entrer vos prénoms svp"
                                                                            value="" required>
                                                                        <div class="invalid-feedback">svp entrer vos
                                                                            prénoms</div>
                                                                    </div>

                                                                    <div class="col-sm-6">
                                                                        <label for="telephone"
                                                                            class="form-label">Téléphone personnel
                                                                            (WhatsApp)</label>
                                                                            <span class="text-danger">(*)</span>
                                                                        <div class="input-group">
                                                                            <input type="number" class="form-control"
                                                                                id="telephone" name="telephone"
                                                                                placeholder="Entrer votre numéro de téléphone svp"
                                                                                required>
                                                                            <div class="invalid-feedback">svp entrer
                                                                                votre numéro de tel.</div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-sm-6">
                                                                        <label for="email"
                                                                            class="form-label">Email</label>
                                                                            <span class="text-danger">(*)</span>
                                                                        <input type="email" class="form-control" id="email" name="email"
                                                                        placeholder="Enter votre Email"
                                                                            required />
                                                                            <div class="invalid-feedback">svp entrer
                                                                                votre email.</div>
                                                                    </div>

                                                                    <div class="col-sm-6">
                                                                        <label for="date_naissance" class="form-label">Date de
                                                                            naissance</label>
                                                                            <span class="text-danger">(*)</span>
                                                                        <div class="input-group">
                                                                            <input type="date" class="form-control"
                                                                                id="date_naissance" name="date_naissance"
                                                                                placeholder="Entrer votre date de naissance svp"
                                                                                required>
                                                                            <div class="invalid-feedback">svp entrer
                                                                                votre date de naissance.</div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-sm-6">
                                                                        <label for="lieu_naissance" class="form-label">Lieu de
                                                                            naissance</label>
                                                                            <span class="text-danger">(*)</span>
                                                                        <div class="input-group">
                                                                            <select required class="form-select"
                                                                            name="lieu_naissance" required>
                                                                            <option value="">--Selectionnez--</option>
                                                                            @foreach ($communes as $commune)
                                                                                <option
                                                                                    {{ $commune->id == old('lieu_naissance') ? 'selected' : '' }}
                                                                                    value="{{ $commune->id }}">
                                                                                    {{ $commune->libelle }}</option>
                                                                            @endforeach
                                                                           </select>
                                                                            <div class="invalid-feedback">svp entrer
                                                                                votre lieu de naissance.</div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-sm-6">
                                                                        <label for="sexe_id" class="form-label">Genre</label>
                                                                            <span class="text-danger">(*)</span>
                                                                        <div class="input-group">
                                                                            <select required class="form-select"
                                                                            name="sexe_id" id="sexe_id" required>
                                                                            <option value="">--Selectionnez--</option>
                                                                            <option {{ 1 == old('sexe_id') ? 'selected' : '' }} value="1">Homme</option>
                                                                            <option {{ 2 == old('sexe_id') ? 'selected' : '' }} value="2">Femme</option>
                                                                           </select>
                                                                            <div class="invalid-feedback">svp selectionner votre genre.</div>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </div>

                                                            <div class="d-flex align-items-start gap-3 mt-4">
                                                                <button type="button"
                                                                    class="btn btn-success btn-label right ms-auto nexttab nexttab"
                                                                    data-nexttab="v-pills-bill-complement-tab">
                                                                    <i class="ri-arrow-right-line label-icon align-middle fs-16 ms-2"></i>Informations Complémentaires
                                                                </button>
                                                            </div>
                                                        </div>
                                                        <!-- end tab pane -->
                                                        <div class="tab-pane fade" id="v-pills-bill-complement"
                                                            role="tabpanel" aria-labelledby="v-pills-bill-complement-tab">
                                                            <div>
                                                                <h5>Informations Complémentaires</h5>
                                                                <p class="text-muted"> <span class="text-danger">(*)</span> Les champs suivis d'un astérisque sont obligatoires. </p>
                                                            </div>

                                                            <div>
                                                                <div class="row g-3">
                                                                    <div class="col-sm-6">
                                                                        <label for="ville"
                                                                            class="form-label">Ville</label>
                                                                            <select required class="form-select"
                                                                            name="ville">
                                                                            <option value="">--Selectionnez--</option>
                                                                            @foreach ($communes as $commune)
                                                                                <option
                                                                                    {{ $commune->id == old('ville') ? 'selected' : '' }}
                                                                                    value="{{ $commune->id }}">
                                                                                    {{ $commune->libelle }}</option>
                                                                            @endforeach
                                                                        </select>
                                                                        <div class="invalid-feedback">Svp entrer votre ville</div>
                                                                    </div>

                                                                    <div class="col-sm-6">
                                                                        <label for="nationalite"
                                                                            class="form-label">Nationalité</label>
                                                                        <input type="text" class="form-control"
                                                                            id="nationalite" name="nationalite"
                                                                            placeholder="Entrer votre nationalité svp" />
                                                                        <div class="invalid-feedback">Please select a
                                                                            country</div>
                                                                    </div>

                                                                    <div class="col-sm-6">
                                                                        <label for="adresse" class="form-label">Adresse
                                                                            <span
                                                                                class="text-muted">(Optionel)</span></label>
                                                                        <input type="text" class="form-control"
                                                                            id="adresse" name="adresse"
                                                                            placeholder="Entrer votre adresse" />
                                                                    </div>

                                                                    <div class="col-sm-6">
                                                                        <label for="code_postal" class="form-label">Code
                                                                            postal <span
                                                                                class="text-muted">(Optional)</span></label>
                                                                        <input type="text" class="form-control"
                                                                            id="code_postal" name="code_postal"
                                                                            placeholder="Entrer votre code postal" />
                                                                    </div>

                                                                    <div class="col-sm-6">
                                                                        <label for="telephone_parent" class="form-label">Téléphone
                                                                            parent</label>
                                                                        <input type="number" class="form-control" id="telephone_parent" name="telephone_parent"
                                                                            placeholder="Entrer le téléphone d'un parent" />
                                                                    </div>

                                                                    <div class="col-sm-6">
                                                                        <label for="numerparent" class="form-label">Numéro
                                                                            parent</label>
                                                                        <input type="number" class="form-control" id="numerparent" name="numerparent"
                                                                            placeholder="Entrer le numéro d'un parent" />
                                                                    </div>
                                                               
                                                                    <div class="col-sm-6">
                                                                        <label for="niveau_etude" class="form-label">Niveau d'étude</label>
                                                                        <select required class="form-select"
                                                                        name="niveau_etude">
                                                                        <option value="">--Selectionnez--</option>
                                                                        @foreach ($niveau_etude as $niveau)
                                                                            <option
                                                                                {{ $niveau->id == old('niveau_etude') ? 'selected' : '' }}
                                                                                value="{{ $niveau->id }}">
                                                                                {{ $niveau->libelle }}</option>
                                                                        @endforeach
                                                                    </select>
                                                                    </div>

                                                                    <div class="col-sm-6">
                                                                        <label for="diplome" class="form-label">Diplôme</label>
                                                                        <select required class="form-select"
                                                                        name="diplome">
                                                                        <option value="">--Selectionnez--</option>
                                                                        @foreach ($diplomes as $diplome)
                                                                            <option
                                                                                {{ $diplome->id == old('diplome') ? 'selected' : '' }}
                                                                                value="{{ $diplome->id }}">
                                                                                {{ $diplome->libelle }}</option>
                                                                        @endforeach
                                                                    </select>
                                                                    </div>

                                                                    <div class="col-md-12">
                                                                     <label for="formation" class="form-label">Formation souhaiter:</label>
                                                                    
                                                                     <div class="form-check mb-2">
                                                                        <input type="radio" class="form-check-input" value="1"
                                                                            id="f_hotesse" name="formation" required>
                                                                        <label class="form-check-label" for="f_hotesse">HOTESSE DE L'AIR ET STEWARD CCA IATA</label>
                                                                    </div>
    
                                                                    <div class="form-check">
                                                                        <input type="radio" class="form-check-input" value="2"
                                                                            id="f_fret" name="formation">
                                                                        <label class="form-check-label" for="f_fret">AGENT DE FRET</label>
                                                                    </div>

                                                                    <div class="form-check">
                                                                        <input type="radio" class="form-check-input" value="3"
                                                                            id="f_escale" name="formation">
                                                                        <label class="form-check-label" for="f_escale">AGENT D'ESCALE</label>
                                                                    </div>

                                                                    <div class="form-check">
                                                                        <input type="radio" class="form-check-input" value="4"
                                                                            id="f_billet" name="formation">
                                                                        <label class="form-check-label" for="f_billet">AGENT DE BILLETTERIE DU TOURISME ET DE L'HOTELLERIE</label>
                                                                    </div>
                                                                </div>

                                                                <hr class="my-4 text-muted">

                                                            </div>
                                                            <div class="d-flex align-items-start gap-3 mt-4">
                                                                <button type="button"
                                                                    class="btn btn-light btn-label previestab"
                                                                    data-previous="v-pills-bill-info-tab">
                                                                    <i class="ri-arrow-left-line label-icon align-middle fs-16 me-2"></i>
                                                                   Retour Informations de l'étudiant
                                                                </button>
                                                            
                                                                <button type="submit"
                                                                onclick="document.getElementById('create_offer_form').submit()"
                                                                class="btn btn-success btn-label right ms-auto">
                                                                Soumettre
                                                                </button>
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