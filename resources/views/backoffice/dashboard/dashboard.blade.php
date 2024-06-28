@extends('backoffice.partials.dashboard.admin_index')
@section('titre') Elimac Dashboard @endsection
@section('page_desription') Tableau de bords @endsection
@section('page_navigation') 
<li class="breadcrumb-item"><a href="javascript: void(0);">Menu</a></li>
<li class="breadcrumb-item active">Tableau de bord</li>
@endsection
@section('content')
                

                        <div class="row">
                            <div class="col-xl-6">
                                <div class="d-flex flex-column h-100">
                                    <div class="row">
                                        <div class="col-xl-6 col-md-6">
                                            <div class="card card-animate overflow-hidden">
                                                <div class="position-absolute start-0" style="z-index: 0;">
                                                    <svg version="1.2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 120" width="200" height="120">
                                                        <style>
                                                            .s0 {
                                                                opacity: .05;
                                                                fill: var(--vz-success)
                                                            }
                                                        </style>
                                                        <path id="Shape 8" class="s0" d="m189.5-25.8c0 0 20.1 46.2-26.7 71.4 0 0-60 15.4-62.3 65.3-2.2 49.8-50.6 59.3-57.8 61.5-7.2 2.3-60.8 0-60.8 0l-11.9-199.4z" />
                                                    </svg>
                                                </div>
                                                <div class="card-body" style="z-index:1 ;">
                                                    <div class="d-flex align-items-center">
                                                        <div class="flex-grow-1 overflow-hidden">
                                                            <p class="text-uppercase fw-medium text-muted text-truncate mb-3">HA & ST CCA IATA</p>
                                                            <h4 class="fs-22 fw-semibold ff-secondary mb-0"><span class="counter-value" data-target="36894">0</span></h4>
                                                        </div>
                                                        <div class="flex-shrink-0">
                                                            <div id="total_jobs" data-colors='["--vz-success"]' class="apex-charts" dir="ltr"></div>
                                                        </div>
                                                    </div>
                                                </div><!-- end card body -->
                                            </div><!-- end card -->
                                        </div><!--end col-->
                                        <div class="col-xl-6 col-md-6">
                                            <!-- card -->
                                            <div class="card card-animate overflow-hidden">
                                                <div class="position-absolute start-0" style="z-index: 0;">
                                                    <svg version="1.2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 120" width="200" height="120">
                                                        <style>
                                                            .s0 {
                                                                opacity: .05;
                                                                fill: var(--vz-success)
                                                            }
                                                        </style>
                                                        <path id="Shape 8" class="s0" d="m189.5-25.8c0 0 20.1 46.2-26.7 71.4 0 0-60 15.4-62.3 65.3-2.2 49.8-50.6 59.3-57.8 61.5-7.2 2.3-60.8 0-60.8 0l-11.9-199.4z" />
                                                    </svg>
                                                </div>
                                                <div class="card-body" style="z-index:1 ;">
                                                    <div class="d-flex align-items-center">
                                                        <div class="flex-grow-1 overflow-hidden">
                                                            <p class="text-uppercase fw-medium text-muted text-truncate mb-3">SAGENT DE FRET</p>
                                                            <h4 class="fs-22 fw-semibold ff-secondary mb-0"><span class="counter-value" data-target="28410">0</span></h4>
                                                        </div>
                                                        <div class="flex-shrink-0">
                                                            <div id="apply_jobs" data-colors='["--vz-success"]' class="apex-charts" dir="ltr"></div>
                                                        </div>
                                                    </div>
                                                </div><!-- end card body -->
                                            </div><!-- end card -->
                                        </div><!-- end col -->
                                        <div class="col-xl-6 col-md-6">
                                            <!-- card -->
                                            <div class="card card-animate overflow-hidden">
                                                <div class="position-absolute start-0" style="z-index: 0;">
                                                    <svg version="1.2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 120" width="200" height="120">
                                                        <style>
                                                            .s0 {
                                                                opacity: .05;
                                                                fill: var(--vz-success)
                                                            }
                                                        </style>
                                                        <path id="Shape 8" class="s0" d="m189.5-25.8c0 0 20.1 46.2-26.7 71.4 0 0-60 15.4-62.3 65.3-2.2 49.8-50.6 59.3-57.8 61.5-7.2 2.3-60.8 0-60.8 0l-11.9-199.4z" />
                                                    </svg>
                                                </div>
                                                <div class="card-body" style="z-index:1 ;">
                                                    <div class="d-flex align-items-center">
                                                        <div class="flex-grow-1 overflow-hidden">
                                                            <p class="text-uppercase fw-medium text-muted text-truncate mb-3">AGENT D'ESCALE</p>
                                                            <h4 class="fs-22 fw-semibold ff-secondary mb-0"><span class="counter-value" data-target="4305">0</span></h4>
                                                        </div>
                                                        <div class="flex-shrink-0">
                                                            <div id="new_jobs_chart" data-colors='["--vz-success"]' class="apex-charts" dir="ltr"></div>
                                                        </div>
                                                    </div>
                                                </div><!-- end card body -->
                                            </div><!-- end card -->
                                        </div><!-- end col -->
                                        <div class="col-xl-6 col-md-6">
                                            <!-- card -->
                                            <div class="card card-animate overflow-hidden">
                                                <div class="position-absolute start-0" style="z-index: 0;">
                                                    <svg version="1.2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 120" width="200" height="120">
                                                        <style>
                                                            .s0 {
                                                                opacity: .05;
                                                                fill: var(--vz-success)
                                                            }
                                                        </style>
                                                        <path id="Shape 8" class="s0" d="m189.5-25.8c0 0 20.1 46.2-26.7 71.4 0 0-60 15.4-62.3 65.3-2.2 49.8-50.6 59.3-57.8 61.5-7.2 2.3-60.8 0-60.8 0l-11.9-199.4z" />
                                                    </svg>
                                                </div>
                                                <div class="card-body" style="z-index:1 ;">
                                                    <div class="d-flex align-items-center">
                                                        <div class="flex-grow-1 overflow-hidden">
                                                            <p class="text-uppercase fw-medium text-muted text-truncate mb-3"> Billetterie & Hotellerie</p>
                                                            <h4 class="fs-22 fw-semibold ff-secondary mb-0"><span class="counter-value" data-target="5021">0</span></h4>
                                                        </div>
                                                        <div class="flex-shrink-0">
                                                            <div id="interview_chart" data-colors='["--vz-danger"]' class="apex-charts" dir="ltr"></div>
                                                        </div>
                                                    </div>
                                                </div><!-- end card body -->
                                            </div><!-- end card -->
                                        </div><!-- end col -->
                                        <div class="col-xl-6 col-md-6">
                                            <div class="card card-animate overflow-hidden">
                                                <div class="position-absolute start-0" style="z-index: 0;">
                                                    <svg version="1.2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 120" width="200" height="120">
                                                        <style>
                                                            .s0 {
                                                                opacity: .05;
                                                                fill: var(--vz-success)
                                                            }
                                                        </style>
                                                        <path id="Shape 8" class="s0" d="m189.5-25.8c0 0 20.1 46.2-26.7 71.4 0 0-60 15.4-62.3 65.3-2.2 49.8-50.6 59.3-57.8 61.5-7.2 2.3-60.8 0-60.8 0l-11.9-199.4z" />
                                                    </svg>
                                                </div>
                                                <div class="card-body" style="z-index:1 ;">
                                                    <div class="d-flex align-items-center">
                                                        <div class="flex-grow-1 overflow-hidden">
                                                            <p class="text-uppercase fw-medium text-muted text-truncate mb-3"> Total Etudiants</p>
                                                            <h4 class="fs-22 fw-semibold ff-secondary mb-0"><span class="counter-value" data-target="3948">0</span></h4>
                                                        </div>
                                                        <div class="flex-shrink-0">
                                                            <div id="hired_chart" data-colors='["--vz-success"]' class="apex-charts" dir="ltr"></div>
                                                        </div>
                                                    </div>
                                                </div><!-- end card body -->
                                            </div><!-- end card -->
                                        </div><!--end col-->
                                        <div class="col-xl-6 col-md-6">
                                            <!-- card -->
                                            <div class="card card-animate overflow-hidden">
                                                <div class="position-absolute start-0" style="z-index: 0;">
                                                    <svg version="1.2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 120" width="200" height="120">
                                                        <style>
                                                            .s0 {
                                                                opacity: .05;
                                                                fill: var(--vz-success)
                                                            }
                                                        </style>
                                                        <path id="Shape 8" class="s0" d="m189.5-25.8c0 0 20.1 46.2-26.7 71.4 0 0-60 15.4-62.3 65.3-2.2 49.8-50.6 59.3-57.8 61.5-7.2 2.3-60.8 0-60.8 0l-11.9-199.4z" />
                                                    </svg>
                                                </div>
                                                <div class="card-body" style="z-index:1 ;">
                                                    <div class="d-flex align-items-center">
                                                        <div class="flex-grow-1 overflow-hidden">
                                                            <p class="text-uppercase fw-medium text-muted text-truncate mb-3">En attente</p>
                                                            <h4 class="fs-22 fw-semibold ff-secondary mb-0"><span class="counter-value" data-target="1340">0</span></h4>
                                                        </div>
                                                        <div class="flex-shrink-0">
                                                            <div id="rejected_chart" data-colors='["--vz-danger"]' class="apex-charts" dir="ltr"></div>
                                                        </div>
                                                    </div>
                                                </div><!-- end card body -->
                                            </div><!-- end card -->
                                        </div><!-- end col -->
                                    </div><!--end row-->
                                </div>
                            </div><!--end col-->
                            <div class="col-xl-6">
                                <div class="card card-height-100">
                                    <div class="card-header align-items-center d-flex">
                                        <h4 class="card-title mb-0 flex-grow-1">Nouveaux inscris</h4>
                                        <div class="flex-shrink-0">
                                            <a href="dashboard-job.html#!" class="btn btn-soft-primary btn-sm material-shadow-none">Voir tous les étudiants <i class="ri-arrow-right-line align-bottom"></i></a>
                                        </div>
                                    </div><!-- end card header -->

                                    <div class="card-body">
                                        <div class="table-responsive table-card">
                                            <table class="table table-centered table-hover align-middle table-nowrap mb-0">
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="avatar-xs me-2 flex-shrink-0">
                                                                    <div class="avatar-title bg-secondary-subtle rounded">
                                                                        <img src="assets/images/companies/img-1.png" alt="" height="16">
                                                                    </div>
                                                                </div>
                                                                <h6 class="mb-0">Force Medicines</h6>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <i class="ri-map-pin-2-line text-primary me-1 align-bottom"></i> Cullera, Spain
                                                        </td>
                                                        <td>
                                                            <ul class="list-inline mb-0">
                                                                <li class="list-inline-item">
                                                                    <a href="dashboard-job.html#!" class="link-secondary"><i class="ri-facebook-fill"></i></a>
                                                                </li>
                                                                <li class="list-inline-item">
                                                                    <a href="dashboard-job.html#!" class="link-danger"><i class="ri-mail-line"></i></a>
                                                                </li>
                                                                <li class="list-inline-item">
                                                                    <a href="dashboard-job.html#!" class="link-primary"><i class="ri-global-line"></i></a>
                                                                </li>
                                                                <li class="list-inline-item">
                                                                    <a href="dashboard-job.html#!" class="link-info"><i class="ri-twitter-line"></i></a>
                                                                </li>
                                                            </ul>
                                                        </td>
                                                        <td>
                                                            <a href="dashboard-job.html#!" class="btn btn-link btn-sm material-shadow-none">View More <i class="ri-arrow-right-line align-bottom"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="avatar-xs me-2 flex-shrink-0">
                                                                    <div class="avatar-title bg-warning-subtle rounded">
                                                                        <img src="assets/images/companies/img-3.png" alt="" height="16">
                                                                    </div>
                                                                </div>
                                                                <h6 class="mb-0">Syntyce Solutions</h6>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <i class="ri-map-pin-2-line text-primary me-1 align-bottom"></i> Mughairah, UAE
                                                        </td>
                                                        <td>
                                                            <ul class="list-inline mb-0">
                                                                <li class="list-inline-item">
                                                                    <a href="dashboard-job.html#!" class="link-secondary"><i class="ri-facebook-fill"></i></a>
                                                                </li>
                                                                <li class="list-inline-item">
                                                                    <a href="dashboard-job.html#!" class="link-danger"><i class="ri-mail-line"></i></a>
                                                                </li>
                                                                <li class="list-inline-item">
                                                                    <a href="dashboard-job.html#!" class="link-primary"><i class="ri-global-line"></i></a>
                                                                </li>
                                                                <li class="list-inline-item">
                                                                    <a href="dashboard-job.html#!" class="link-info"><i class="ri-twitter-line"></i></a>
                                                                </li>
                                                            </ul>
                                                        </td>
                                                        <td>
                                                            <a href="dashboard-job.html#!" class="btn btn-link btn-sm material-shadow-none">View More <i class="ri-arrow-right-line align-bottom"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="avatar-xs me-2 flex-shrink-0">
                                                                    <div class="avatar-title bg-primary-subtle rounded">
                                                                        <img src="assets/images/companies/img-2.png" alt="" height="16">
                                                                    </div>
                                                                </div>
                                                                <h6 class="mb-0">Moetic Fashion</h6>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <i class="ri-map-pin-2-line text-primary me-1 align-bottom"></i> Mughairah, UAE
                                                        </td>
                                                        <td>
                                                            <ul class="list-inline mb-0">
                                                                <li class="list-inline-item">
                                                                    <a href="dashboard-job.html#!" class="link-secondary"><i class="ri-facebook-fill"></i></a>
                                                                </li>
                                                                <li class="list-inline-item">
                                                                    <a href="dashboard-job.html#!" class="link-danger"><i class="ri-mail-line"></i></a>
                                                                </li>
                                                                <li class="list-inline-item">
                                                                    <a href="dashboard-job.html#!" class="link-primary"><i class="ri-global-line"></i></a>
                                                                </li>
                                                                <li class="list-inline-item">
                                                                    <a href="dashboard-job.html#!" class="link-info"><i class="ri-twitter-line"></i></a>
                                                                </li>
                                                            </ul>
                                                        </td>
                                                        <td>
                                                            <a href="dashboard-job.html#!" class="btn btn-link btn-sm material-shadow-none">View More <i class="ri-arrow-right-line align-bottom"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="avatar-xs me-2 flex-shrink-0">
                                                                    <div class="avatar-title bg-danger-subtle rounded">
                                                                        <img src="assets/images/companies/img-4.png" alt="" height="16">
                                                                    </div>
                                                                </div>
                                                                <h6 class="mb-0">Meta4Systems</h6>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <i class="ri-map-pin-2-line text-primary me-1 align-bottom"></i> Germany
                                                        </td>
                                                        <td>
                                                            <ul class="list-inline mb-0">
                                                                <li class="list-inline-item">
                                                                    <a href="dashboard-job.html#!" class="link-secondary"><i class="ri-facebook-fill"></i></a>
                                                                </li>
                                                                <li class="list-inline-item">
                                                                    <a href="dashboard-job.html#!" class="link-danger"><i class="ri-mail-line"></i></a>
                                                                </li>
                                                                <li class="list-inline-item">
                                                                    <a href="dashboard-job.html#!" class="link-primary"><i class="ri-global-line"></i></a>
                                                                </li>
                                                                <li class="list-inline-item">
                                                                    <a href="dashboard-job.html#!" class="link-info"><i class="ri-twitter-line"></i></a>
                                                                </li>
                                                            </ul>
                                                        </td>
                                                        <td>
                                                            <a href="dashboard-job.html#!" class="btn btn-link btn-sm material-shadow-none">View More <i class="ri-arrow-right-line align-bottom"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="avatar-xs me-2 flex-shrink-0">
                                                                    <div class="avatar-title bg-danger-subtle rounded">
                                                                        <img src="assets/images/companies/img-5.png" alt="" height="16">
                                                                    </div>
                                                                </div>
                                                                <h6 class="mb-0">Themesbrand</h6>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <i class="ri-map-pin-2-line text-primary me-1 align-bottom"></i> Limestone, US
                                                        </td>
                                                        <td>
                                                            <ul class="list-inline mb-0">
                                                                <li class="list-inline-item">
                                                                    <a href="dashboard-job.html#!" class="link-secondary"><i class="ri-facebook-fill"></i></a>
                                                                </li>
                                                                <li class="list-inline-item">
                                                                    <a href="dashboard-job.html#!" class="link-danger"><i class="ri-mail-line"></i></a>
                                                                </li>
                                                                <li class="list-inline-item">
                                                                    <a href="dashboard-job.html#!" class="link-primary"><i class="ri-global-line"></i></a>
                                                                </li>
                                                                <li class="list-inline-item">
                                                                    <a href="dashboard-job.html#!" class="link-info"><i class="ri-twitter-line"></i></a>
                                                                </li>
                                                            </ul>
                                                        </td>
                                                        <td>
                                                            <a href="dashboard-job.html#!" class="btn btn-link btn-sm material-shadow-none">View More <i class="ri-arrow-right-line align-bottom"></i></a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="align-items-center mt-4 pt-2 justify-content-between d-md-flex">
                                            <div class="flex-shrink-0 mb-2 mb-md-0">
                                                <div class="text-muted">
                                                    Showing <span class="fw-semibold">5</span> of <span class="fw-semibold">25</span> Results
                                                </div>
                                            </div>
                                            <ul class="pagination pagination-separated pagination-sm mb-0">
                                                <li class="page-item disabled">
                                                    <a href="dashboard-job.html#" class="page-link">←</a>
                                                </li>
                                                <li class="page-item">
                                                    <a href="dashboard-job.html#" class="page-link">1</a>
                                                </li>
                                                <li class="page-item active">
                                                    <a href="dashboard-job.html#" class="page-link">2</a>
                                                </li>
                                                <li class="page-item">
                                                    <a href="dashboard-job.html#" class="page-link">3</a>
                                                </li>
                                                <li class="page-item">
                                                    <a href="dashboard-job.html#" class="page-link">→</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div> <!-- .card-->
                            </div><!--end col-->
                        </div><!--end row-->
                        
                        
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="row g-4 align-items-center">
                                            <div class="col-sm-auto">
                                                <div>
                                                    <h4 class="card-title mb-0 flex-grow-1">Les rècentes absences</h4>
                                                </div>
                                            </div>
                                            <div class="col-sm">
                                                <div class="d-flex justify-content-sm-end">
                                                    <div class="search-box ms-2">
                                                        <input type="text" class="form-control" id="searchResultList" placeholder="Search for jobs...">
                                                        <i class="ri-search-line search-icon"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div id="recomended-jobs" class="table-card"></div>
                                    </div>
                                </div>
                            </div><!--end col-->
                        </div><!--end row-->
                        
                        <div class="row">
                            <div class="col-xxl-8">
                                <div class="card">
                                    <div class="card-header align-items-center d-flex">
                                        <h4 class="card-title mb-0 flex-grow-1">Recents paiements</h4>
                                        <div class="flex-shrink-0">
                                            <button type="button" class="btn btn-soft-info btn-sm material-shadow-none">
                                                <i class="ri-file-list-3-line align-bottom"></i> Generate Report
                                            </button>
                                        </div>
                                    </div><!-- end card header -->
                        
                                    <div class="card-body">
                                        <div class="table-responsive table-card">
                                            <table class="table table-borderless table-centered align-middle table-nowrap mb-0">
                                                <thead class="text-muted table-light">
                                                    <tr>
                                                        <th scope="col">ID</th>
                                                        <th scope="col">Candidate Name</th>
                                                        <th scope="col">Designation</th>
                                                        <th scope="col">Rate/hr</th>
                                                        <th scope="col">Location</th>
                                                        <th scope="col">Type</th>
                                                        <th scope="col">Rating</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <a href="dashboard-job.html#!" class="fw-medium link-primary">#VZ2112</a>
                                                        </td>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="flex-shrink-0 me-2">
                                                                    <img src="assets/images/users/avatar-1.jpg" alt="" class="avatar-xs rounded-circle" />
                                                                </div>
                                                                <div class="flex-grow-1">Nicholas Ball</div>
                                                            </div>
                                                        </td>
                                                        <td>Assistant / Store Keeper</td>
                                                        <td>
                                                            <span class="text-success">$109.00</span>
                                                        </td>
                                                        <td>California, US</td>
                                                        <td>
                                                            <span class="badge bg-success-subtle text-success">Full Time</span>
                                                        </td>
                                                        <td>
                                                            <h5 class="fs-14 fw-medium mb-0">5.0<span class="text-muted fs-11 ms-1">(245 Rating)</span></h5>
                                                        </td>
                                                    </tr><!-- end tr -->
                                                    <tr>
                                                        <td>
                                                            <a href="dashboard-job.html#!" class="fw-medium link-primary">#VZ2111</a>
                                                        </td>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="flex-shrink-0 me-2">
                                                                    <img src="assets/images/users/avatar-2.jpg" alt="" class="avatar-xs rounded-circle" />
                                                                </div>
                                                                <div class="flex-grow-1">Elizabeth Allen</div>
                                                            </div>
                                                        </td>
                                                        <td>Education Training</td>
                                                        <td>
                                                            <span class="text-success">$149.00</span>
                                                        </td>
                                                        <td>Zuweihir, UAE</td>
                                                        <td>
                                                            <span class="badge bg-secondary-subtle text-secondary">Freelancer</span>
                                                        </td>
                                                        <td>
                                                            <h5 class="fs-14 fw-medium mb-0">4.5<span class="text-muted fs-11 ms-1">(645 Rating)</span></h5>
                                                        </td>
                                                    </tr><!-- end tr -->
                                                    <tr>
                                                        <td>
                                                            <a href="dashboard-job.html#!" class="fw-medium link-primary">#VZ2109</a>
                                                        </td>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="flex-shrink-0 me-2">
                                                                    <img src="assets/images/users/avatar-3.jpg" alt="" class="avatar-xs rounded-circle" />
                                                                </div>
                                                                <div class="flex-grow-1">Cassian Jenning</div>
                                                            </div>
                                                        </td>
                                                        <td>Graphic Designer</td>
                                                        <td>
                                                            <span class="text-success">$215.00</span>
                                                        </td>
                                                        <td>Limestone, US</td>
                                                        <td>
                                                            <span class="badge bg-danger-subtle text-danger">Part Time</span>
                                                        </td>
                                                        <td>
                                                            <h5 class="fs-14 fw-medium mb-0">4.9<span class="text-muted fs-11 ms-1">(89 Rating)</span></h5>
                                                        </td>
                                                    </tr><!-- end tr -->
                                                    <tr>
                                                        <td>
                                                            <a href="dashboard-job.html#!" class="fw-medium link-primary">#VZ2108</a>
                                                        </td>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="flex-shrink-0 me-2">
                                                                    <img src="assets/images/users/avatar-4.jpg" alt="" class="avatar-xs rounded-circle" />
                                                                </div>
                                                                <div class="flex-grow-1">Scott Holt</div>
                                                            </div>
                                                        </td>
                                                        <td>UI/UX Designer</td>
                                                        <td>
                                                            <span class="text-success">$199.00</span>
                                                        </td>
                                                        <td>Germany</td>
                                                        <td>
                                                            <span class="badge bg-danger-subtle text-danger">Part Time</span>
                                                        </td>
                                                        <td>
                                                            <h5 class="fs-14 fw-medium mb-0">4.3<span class="text-muted fs-11 ms-1">(47 Rating)</span></h5>
                                                        </td>
                                                    </tr><!-- end tr -->
                                                    <tr>
                                                        <td>
                                                            <a href="dashboard-job.html#!" class="fw-medium link-primary">#VZ2109</a>
                                                        </td>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="flex-shrink-0 me-2">
                                                                    <img src="assets/images/users/avatar-6.jpg" alt="" class="avatar-xs rounded-circle" />
                                                                </div>
                                                                <div class="flex-grow-1">Hadley Leonard</div>
                                                            </div>
                                                        </td>
                                                        <td>React Developer</td>
                                                        <td>
                                                            <span class="text-success">$330.00</span>
                                                        </td>
                                                        <td>Mughairah, UAE</td>
                                                        <td>
                                                            <span class="badge bg-success-subtle text-success">Full Time</span>
                                                        </td>
                                                        <td>
                                                            <h5 class="fs-14 fw-medium mb-0">4.7<span class="text-muted fs-11 ms-1">(161 Rating)</span></h5>
                                                        </td>
                                                    </tr><!-- end tr -->
                                                    <tr>
                                                        <td>
                                                            <a href="dashboard-job.html#!" class="fw-medium link-primary">#VZ2110</a>
                                                        </td>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="flex-shrink-0 me-2">
                                                                    <img src="assets/images/users/avatar-10.jpg" alt="" class="avatar-xs rounded-circle" />
                                                                </div>
                                                                <div class="flex-grow-1">Harley Watkins</div>
                                                            </div>
                                                        </td>
                                                        <td>Project Manager</td>
                                                        <td>
                                                            <span class="text-success">$330.00</span>
                                                        </td>
                                                        <td>Texanna, US</td>
                                                        <td>
                                                            <span class="badge bg-secondary-subtle text-secondary">Freelancer</span>
                                                        </td>
                                                        <td>
                                                            <h5 class="fs-14 fw-medium mb-0">4.7<span class="text-muted fs-11 ms-1">(3.21k Rating)</span></h5>
                                                        </td>
                                                    </tr><!-- end tr -->
                                                    <tr>
                                                        <td>
                                                            <a href="dashboard-job.html#!" class="fw-medium link-primary">#VZ2111</a>
                                                        </td>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="flex-shrink-0 me-2">
                                                                    <img src="assets/images/users/avatar-8.jpg" alt="" class="avatar-xs rounded-circle" />
                                                                </div>
                                                                <div class="flex-grow-1">Nadia Harding</div>
                                                            </div>
                                                        </td>
                                                        <td>Web Designer</td>
                                                        <td>
                                                            <span class="text-success">$330.00</span>
                                                        </td>
                                                        <td>Pahoa, US</td>
                                                        <td>
                                                            <span class="badge bg-danger-subtle text-danger">Part Time</span>
                                                        </td>
                                                        <td>
                                                            <h5 class="fs-14 fw-medium mb-0">4.7<span class="text-muted fs-11 ms-1">(2.93k Rating)</span></h5>
                                                        </td>
                                                    </tr><!-- end tr -->
                                                    <tr>
                                                        <td>
                                                            <a href="dashboard-job.html#!" class="fw-medium link-primary">#VZ2112</a>
                                                        </td>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="flex-shrink-0 me-2">
                                                                    <img src="assets/images/users/avatar-9.jpg" alt="" class="avatar-xs rounded-circle" />
                                                                </div>
                                                                <div class="flex-grow-1">Jenson Carlson</div>
                                                            </div>
                                                        </td>
                                                        <td>Product Director</td>
                                                        <td>
                                                            <span class="text-success">$330.00</span>
                                                        </td>
                                                        <td>Pahoa, US</td>
                                                        <td>
                                                            <span class="badge bg-success-subtle text-success">Full Time</span>
                                                        </td>
                                                        <td>
                                                            <h5 class="fs-14 fw-medium mb-0">4.7<span class="text-muted fs-11 ms-1">(4.31k Rating)</span></h5>
                                                        </td>
                                                    </tr><!-- end tr -->
                                                </tbody><!-- end tbody -->
                                            </table><!-- end table -->
                                        </div>
                                    </div>
                                </div> <!-- .card-->
                            </div> <!-- .col-->
                            <div class="col-xxl-4">
                                <!-- card -->
                                <div class="card card-height-100">
                                    <div class="card-header align-items-center d-flex">
                                        <h4 class="card-title mb-0 flex-grow-1">Jobs Views Location</h4>
                                        <div class="flex-shrink-0">
                                            <button type="button" class="btn btn-soft-primary btn-sm material-shadow-none">
                                                Export Report
                                            </button>
                                        </div>
                                    </div><!-- end card header -->
                            
                                    <!-- card body -->
                                    <div class="card-body">
                            
                                        <div id="sales-by-locations" data-colors='["--vz-light", "--vz-success", "--vz-primary"]' style="height: 269px" dir="ltr"></div>
                            
                                        <div class="px-2 py-2 mt-4">
                                            <p class="mb-1">Canada <span class="float-end">75%</span></p>
                                            <div class="progress mt-2" style="height: 6px;">
                                                <div class="progress-bar progress-bar-striped bg-primary" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="75"></div>
                                            </div>
                            
                                            <p class="mt-3 mb-1">Greenland <span class="float-end">47%</span>
                                            </p>
                                            <div class="progress mt-2" style="height: 6px;">
                                                <div class="progress-bar progress-bar-striped bg-primary" role="progressbar" style="width: 47%" aria-valuenow="47" aria-valuemin="0" aria-valuemax="47"></div>
                                            </div>
                            
                                            <p class="mt-3 mb-1">Russia <span class="float-end">82%</span></p>
                                            <div class="progress mt-2" style="height: 6px;">
                                                <div class="progress-bar progress-bar-striped bg-primary" role="progressbar" style="width: 82%" aria-valuenow="82" aria-valuemin="0" aria-valuemax="82"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end card body -->
                                </div>
                                <!-- end card -->
                            </div>
                            <!-- end col -->
                        </div> <!-- end row-->
                  
@endsection