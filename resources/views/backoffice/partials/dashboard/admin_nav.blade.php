
            <!-- ========== App Menu ========== -->
            <div class="app-menu navbar-menu">
                <!-- LOGO -->
                <div class="navbar-brand-box">
                    <!-- Dark Logo-->
                    <a href="index.html" class="logo logo-dark">
                        <span class="logo-sm">
                            <img src="{{asset('assets/images/logo_academie.png')}}" alt="" height="50">
                        </span>
                        <span class="logo-lg">
                            <img src="{{asset('assets/images/logo_academie.png')}}" alt="" height="70">
                        </span>
                    </a>
                    <!-- Light Logo-->
                    <a href="index.html" class="logo logo-light">
                        <span class="logo-sm">
                            <img src="{{asset('assets/images/logo_academie.png')}}" alt="" height="50">
                        </span>
                        <span class="logo-lg">
                            <img src="{{asset('assets/images/logo_academie.png')}}" alt="" height="70">
                        </span>
                    </a>
                    <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
                        <i class="ri-record-circle-line"></i>
                    </button>
                </div>
                <div id="scrollbar">
                    <div class="container-fluid">

                        <div id="two-column-menu">
                        </div>
                        <ul class="navbar-nav" id="navbar-nav">
                            <li class="menu-title"><span data-key="t-menu">Menu</span></li>
                            <li class="nav-item">
                                <a class="nav-link menu-link" href="{{route('dashboard')}}">
                                    <i class="ri-dashboard-2-line"></i> <span data-key="t-dashboards">Dashboards</span>
                                </a>
                            </li> <!-- end Dashboard Menu -->
                            <li class="nav-item">
                                <a class="nav-link menu-link" href="dashboard-job.html#sidebarApps" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarApps">
                                    <i class="ri-apps-2-line"></i> <span data-key="t-apps">Parametre</span>
                                </a>
                                <div class="collapse menu-dropdown" id="sidebarApps">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="dashboard-job.html#sidebarCalendar" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarCalendar" data-key="t-calender">
                                                Utilisateurs
                                            </a>
                                            <div class="collapse menu-dropdown" id="sidebarCalendar">
                                                <ul class="nav nav-sm flex-column">
                                                    <li class="nav-item">
                                                        <a href="apps-calendar.html" class="nav-link" data-key="t-main-calender">Nouveau </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="apps-calendar-month-grid.html" class="nav-link" data-key="t-month-grid"> Liste </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="apps-calendar-month-grid.html" class="nav-link" data-key="t-month-grid"> Rôles </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="apps-calendar-month-grid.html" class="nav-link" data-key="t-month-grid"> Permissions </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        {{-- <li class="nav-item">
                                            <a href="apps-chat.html" class="nav-link" data-key="t-chat"> Chat </a>
                                        </li> --}}
                                        <li class="nav-item">
                                            <a href="dashboard-job.html#sidebarClasse" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarClasse" data-key="t-email">
                                                Classes
                                            </a>
                                            <div class="collapse menu-dropdown" id="sidebarClasse">
                                                <ul class="nav nav-sm flex-column">
                                                    {{-- <li class="nav-item">
                                                        <a href="apps-mailbox.html" class="nav-link" data-key="t-mailbox"> Nouvelle classe </a>
                                                    </li> --}}
                                                    <li class="nav-item">
                                                        <a href="{{route('classrooms.index')}}" class="nav-link" data-key="t-mailbox"> Liste classe </a>
                                                    </li>
                                                    
                                                </ul>
                                            </div>
                                        </li>

                                        <li class="nav-item">
                                            <a href="dashboard-job.html#sidebarFormation" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarFormation" data-key="t-email">
                                                Formations
                                            </a>
                                            <div class="collapse menu-dropdown" id="sidebarFormation">
                                                <ul class="nav nav-sm flex-column">
                                                    {{-- <li class="nav-item">
                                                        <a href="apps-mailbox.html" class="nav-link" data-key="t-mailbox"> Nouvelle Formation </a>
                                                    </li> --}}
                                                    <li class="nav-item">
                                                        <a href="{{route('formations.index')}}" class="nav-link" data-key="t-mailbox"> Liste Formation </a>
                                                    </li>
                                                    
                                                </ul>
                                            </div>
                                        </li>
                                        
                                    </ul>
                                </div>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link menu-link" href="dashboard-job.html#sidebarAuth" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarAuth">
                                    <i class="ri-account-circle-line"></i> <span data-key="t-authentication">Administration</span>
                                </a>
                                <div class="collapse menu-dropdown" id="sidebarAuth">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="dashboard-job.html#sidebarSignIn" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarSignIn" data-key="t-signin">Etudiants
                                            </a>
                                            <div class="collapse menu-dropdown" id="sidebarSignIn">
                                                <ul class="nav nav-sm flex-column">
                                                    <li class="nav-item">
                                                        <a href="{{route('preinscription')}}" target="_blanc" class="nav-link" data-key="t-basic"> Nouveau
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="{{route('etudiants.index')}}" class="nav-link" data-key="t-cover"> Liste
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        
                                    </ul>
                                </div>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link menu-link" href="dashboard-job.html#sidebarPages" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarPages">
                                    <i class="ri-pages-line"></i> <span data-key="t-pages">Pedagogie / Academie</span>
                                </a>
                                <div class="collapse menu-dropdown" id="sidebarPages">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="{{route('modules.index')}}" class="nav-link" data-key="t-starter"> Modules & cours </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{route('evaluations.index')}}" class="nav-link" data-key="t-starter"> Exercices / Evaluations </a>
                                        </li>
                                        
                                        <li class="nav-item">
                                            <a href="{{route('notes.index')}}" class="nav-link" data-key="t-team"> Notes </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{route('pointages.index')}}" class="nav-link" data-key="t-timeline"> Pointages </a>
                                        </li>
                                    
                                    </ul>
                                </div>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link menu-link" href="dashboard-job.html#sidebarLanding" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarLanding">
                                    <i class="ri-rocket-line"></i> <span data-key="t-landing">Enonomat</span>
                                </a>
                                <div class="collapse menu-dropdown" id="sidebarLanding">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="landing.html" class="nav-link" data-key="t-one-page"> Scolarité </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="nft-landing.html" class="nav-link" data-key="t-nft-landing"> Rapport </a>
                                        </li>
                                        
                                    </ul>
                                </div>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link menu-link" href="dashboard-job.html#sidebarMaps" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarMaps">
                                    <i class="ri-map-pin-line"></i> <span data-key="t-maps">Diffusion SMS</span>
                                </a>
                                <div class="collapse menu-dropdown" id="sidebarMaps">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="maps-google.html" class="nav-link" data-key="t-google">
                                                Campagne sms
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="maps-vector.html" class="nav-link" data-key="t-vector">
                                                Scolarité
                                            </a>
                                        </li>
                                       
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!-- Sidebar -->
                </div>

                <div class="sidebar-background"></div>
            </div>
            <!-- Left Sidebar End -->
            <!-- Vertical Overlay-->
            <div class="vertical-overlay"></div>