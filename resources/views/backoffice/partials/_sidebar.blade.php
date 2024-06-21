@use('App\Models\TypeOffre', 'TypeOffre')
@use('App\Models\StatusValidation', 'StatusValidation')
@use('App\Models\CategoryOffre', 'CategoryOffre')
@use('App\Models\StatusOffreEmploi', 'StatusOffreEmploi')


<div id="removeNotificationModal" class="modal fade zoomIn" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                    id="NotificationModalbtn-close"></button>
            </div>
            <div class="modal-body">
                <div class="mt-2 text-center">
                    <lord-icon src="https://cdn.lordicon.com/gsqxdxog.json" trigger="loop"
                        colors="primary:#f7b84b,secondary:#f06548" style="width:100px;height:100px"></lord-icon>
                    <div class="mt-4 pt-2 fs-15 mx-4 mx-sm-5">
                        <h4>Are you sure ?</h4>
                        <p class="text-muted mx-4 mb-0">Are you sure you want to remove this Notification ?</p>
                    </div>
                </div>
                <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                    <button type="button" class="btn w-sm btn-light" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn w-sm btn-danger" id="delete-notification">Yes, Delete It!</button>
                </div>
            </div>

        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- ========== App Menu ========== -->
<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <!-- Dark Logo-->
        <a href="index.html" class="logo logo-dark">
            <span class="logo-sm">
                <img src="assets/images/logo-sm.png" alt="logo-lg" height="22">
            </span>
            <span class="logo-lg">
                <img src="assets/images/logo-dark.png" alt="logo-sm" height="17">
            </span>
        </a>
        <!-- Light Logo-->
        <a href="index.html" class="logo logo-light">
            <span class="logo-sm text-white">
                {{ auth()->user()->name }}
            </span>
            <span class="logo-lg text-white">
                {{ auth()->user()->name }}

            </span>
        </a>
        <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover"
            id="vertical-hover">
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
                    <a class="nav-link menu-link" href="{{ route('backoffice.home') }}" role="button"
                        aria-expanded="false" aria-controls="sidebarDashboards">
                        <i class="ri-home-3-line"></i> <span data-key="t-dashboards">Tableau de board</span>
                    </a>
                </li> <!-- end Dashboard Menu -->

                {{-- Offres --}}
                 @canany(['voir liste entreprise', 'voir liste cabinet'])
                    <li class="nav-item">
                        <a class="nav-link menu-link <?php if (@$sidebarEnterprises) {
                            echo ' active';
                        } ?>" href="#sidebarEntCab" data-bs-toggle="collapse"
                            role="button" aria-expanded="false" aria-controls="sidebarEntCab">
                            <i class=" ri-briefcase-line"></i> <span data-key="t-apps">Cabinets</span>
                        </a>
                        <div class="collapse menu-dropdown <?php if (@$sidebarEnterprises) {
                            echo ' show';
                        } ?>" id="sidebarEntCab">
                            <ul class="nav nav-sm flex-column">
                                @can(\App\Models\Permission::VOIR_LISTE_ENTREPRISE)
                                    <li class="nav-item">
                                        <a href="{{ route('backoffice.entreprise.index', 'entreprise') }}"
                                            class="nav-link <?php if (@$sidebarEntreprises) {
                                                echo ' active';
                                            } ?>" role="button" aria-expanded="false"
                                            aria-controls="sidebarCalendar" data-key="t-calender">
                                            Cabinet
                                        </a>
                                    </li>
                                @endcan
                                @can(\App\Models\Permission::VOIR_LISTE_CABINET)
                                    <li class="nav-item">
                                        <a href="{{ route('backoffice.entreprise.index', 'cabinet') }}"
                                            class="nav-link <?php if (@$sidebarCabinets) {
                                                echo ' active';
                                            } ?>" data-key="t-chat">Cabinets</a>
                                    </li>
                                @endcan
                            </ul>
                        </div>
                    </li>
                @endcanany 
                @canany([
                    'voir creer offre',
                    'voir liste offre',
                    'voir offre attente validation',
                    'voir offre attente
                    publication',
                    'voir offre valide',
                    'voir offre publie',
                    'voir offre atraite',
                    'voir offre traite',
                    'voir
                    offre traite',
                    'voir offre interne',
                    ])
                    <li class="nav-item">
                        <a class="nav-link menu-link <?php if (@$sidebarOffers) {
                            echo ' active';
                        } ?>" href="#sidebarApps" data-bs-toggle="collapse"
                            role="button" aria-expanded="false" aria-controls="sidebarApps">
                            <i class=" ri-briefcase-line"></i> <span data-key="t-apps">Offres de formation</span>
                        </a>
                        <div class="collapse menu-dropdown <?php if (@$sidebarOffers) {
                            echo ' show';
                        } ?>" id="sidebarApps">
                            <ul class="nav nav-sm flex-column">
                                @can(\App\Models\Permission::CREER_OFFRE)
                                <li class="nav-item">
                                        <a href="{{ route('backoffice.offres.matrice_form') }}" class="nav-link <?php if (@$sidebarMatriceOffers) {echo ' active';} ?>" role="button"
                                            aria-expanded="false" aria-controls="sidebarCalendar" data-key="t-calender">
                                            Ajouter une Matrice
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('backoffice.offres.matrice') }}" class="nav-link <?php if (@$sidebarListMatrices) {echo ' active';} ?>"
                                            data-key="t-chat">Liste des matrices</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('backoffice.offres.create') }}" class="nav-link <?php if (@$sidebarCreateOffers) {echo ' active';} ?>" role="button"
                                            aria-expanded="false" aria-controls="sidebarCalendar" data-key="t-calender">
                                            Ajouter une formation
                                        </a>
                                    </li>
                                    
                                @endcan
                                @can(\App\Models\Permission::VOIR_LISTE_OFFRE)
                                    <li class="nav-item">
                                        <a href="{{ route('backoffice.offres.index') }}" class="nav-link <?php if (@$sidebarListOffers) {echo ' active';} ?>"
                                            data-key="t-chat">En Attende de validation</a>
                                    </li>
                                @endcan
                                 <li class="nav-item">
                                    <a href="{{ route('backoffice.offres.validated-list') }}" class="nav-link <?php if (@$sidebarValidateOffers) {echo ' active';} ?>"
                                        data-key="t-chat">Validées</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('backoffice.offres.preselect-list') }}" class="nav-link <?php if (@$sidebarPreselectOffers) {echo ' active';} ?>"
                                        data-key="t-chat">En attente de présélection</a>
                                </li>
                                <!--@canany([
                                    'voir offre attente validation',
                                    'voir offre attente publication',
                                    'voir offre
                                    valide',
                                    'voir offre publie',
                                    'voir offre atraite',
                                    'voir offre traite',
                                    ])
                                    <li class="nav-item">
                                        <a href="#sidebarCRM" class="nav-link <?php if (@$sidebarPublicOffers) {
                                            echo ' active';
                                        }
                                        ?>" data-bs-toggle="collapse"
                                            role="button" aria-expanded="false" aria-controls="sidebarCRM"
                                            data-key="t-crm"> Offres publiques
                                        </a>
                                        <div class="collapse menu-dropdown <?php if (@$sidebarPublicOffers) {
                                            echo ' show';
                                        } ?>" id="sidebarCRM">
                                            <ul class="nav nav-sm flex-column">
                                                <li class="nav-item">
                                                    <a href="#handledByAej" class="nav-link <?php if (@$sidebarPublicOffers) {
                                                        echo ' active';
                                                    }
                                                    ?>"
                                                        data-bs-toggle="collapse" role="button" aria-expanded="false"
                                                        aria-controls="sidebarCRM" data-key="t-crm"> Gérées par l'Agence
                                                        Emploi Jeunes
                                                    </a>
                                                    <div class="collapse menu-dropdown <?php if (@$sidebarPublicOffers) {
                                                        echo ' show';
                                                    } ?>" id="handledByAej">
                                                        <ul class="nav nav-sm flex-column">

                                                            {{-- @can(App\Models\Permission::VOIR_OFFRE_ATTENTE_VALIDATION) --}}
                                                            <li class="nav-item">
                                                                <a href="{{ route('backoffice.offres.publiques.filter-by-status', StatusOffreEmploi::STATUS_VALIDATION_PENDING) }}"
                                                                    class="nav-link <?php if (@$sidebarToProcessOffers) {
                                                                        echo ' active';
                                                                    } ?>" data-key="t-deals">
                                                                    en attente de validation
                                                                </a>
                                                            </li>
                                                            {{-- @endcan --}}
                                                            {{-- @can(App\Models\Permission::VOIR_OFFRE_TRAITE_PAR_ENTREPRISE) --}}
                                                            <li class="nav-item">
                                                                <a href="{{ route('backoffice.offres.publiques.filter-by-status', StatusOffreEmploi::STATUS_PRESELECTION_PENDING) }}"
                                                                    class="nav-link <?php if (@$sidebarToProcessOffers) {
                                                                        echo ' active';
                                                                    } ?>" data-key="t-deals">
                                                                    en attente de préselection
                                                                </a>
                                                            </li>
                                                            {{-- @endcan --}}
                                                            {{-- @can(App\Models\Permission::VOIR_OFFRE_TRAITE_PAR_AEJ) --}}
                                                            <li class="nav-item">
                                                                <a href="{{ route('backoffice.offres.publiques.filter-by-status', StatusOffreEmploi::STATUS_SELECTION_PENDING) }}"
                                                                    class="nav-link <?php if (@$sidebarToProcessOffers) {
                                                                        echo ' active';
                                                                    } ?>" data-key="t-deals">
                                                                    En attente de sélection
                                                                </a>
                                                            </li>
                                                            {{-- @endcan --}}
                                                            {{-- @can(App\Models\Permission::VOIR_OFFRE_TRAITE_PAR_CABINET) --}}
                                                            <li class="nav-item">
                                                                <a href="{{ route('backoffice.offres.publiques.filter-by-status', StatusOffreEmploi::STATUS_FINAL_SELECTION_PENDING) }}"
                                                                    class="nav-link <?php if (@$sidebarToProcessOffers) {
                                                                        echo ' active';
                                                                    } ?>" data-key="t-deals">
                                                                    En attente de la sélection finale
                                                                </a>
                                                            </li>
                                                            {{-- @endcan --}}
                                                            {{-- @can(App\Models\Permission::VOIR_OFFRE_PUBLIE) --}}
                                                            <li class="nav-item">
                                                                <a href="{{ route('backoffice.offres.publiques.filter-by-status', StatusOffreEmploi::STATUS_DONE) }}"
                                                                    class="nav-link <?php if (@$sidebarToProcessOffers) {
                                                                        echo ' active';
                                                                    } ?>" data-key="t-deals">
                                                                    traités
                                                                </a>
                                                            </li>
                                                            {{-- @endcan --}}
                                                        </ul>
                                                    </div>
                                                </li>
                                                @role([App\Models\Role::ENTREPRISE])
                                                    <li class="nav-item">
                                                        <a href="{{ route('backoffice.offres.publiques.filter-by-hiring-mode', CategoryOffre::NONA_POURVOIR_SLUG) }}"
                                                            class="nav-link <?php if (@$sidebarToProcessOffers) {
                                                                echo ' active';
                                                            } ?>" data-key="t-deals">
                                                            Gérées par mon entreprise
                                                        </a>
                                                    </li>
                                                @endrole
                                                @role([App\Models\Role::CABINET])
                                                    <li class="nav-item">
                                                        <a href="{{ route('backoffice.offres.publiques.filter-by-hiring-mode', CategoryOffre::TRAITE_PAR_CABINET) }}"
                                                            class="nav-link <?php if (@$sidebarToProcessOffers) {
                                                                echo ' active';
                                                            } ?>" data-key="t-deals">
                                                            Gérées par mon cabinet
                                                        </a>
                                                    </li>
                                                @endrole
                                                @role([App\Models\Role::CIP, App\Models\Role::CHEF_AGENCE])
                                                    <li class="nav-item">
                                                        <a href="{{ route('backoffice.offres.publiques.filter-by-agence-regionale', base64_encode(auth()->user()->agence_regionale_id)) }}"
                                                            class="nav-link <?php if (@$sidebarToProcessOffers) {
                                                                echo ' active';
                                                            } ?>" data-key="t-deals">
                                                            Gérées par ma division régionale
                                                        </a>
                                                    </li>
                                                @endrole
                                            </ul>
                                        </div>
                                    </li>
                                @endcanany
                                @can(App\Models\Permission::VOIR_OFFRE_INTERNE)
                                    <li class="nav-item">
                                        <a href="{{ route('backoffice.offres.interne') }}" class="nav-link" role="button"
                                            aria-expanded="false" aria-controls="sidebarCrypto" data-key="t-crypto"> Offres
                                            internes aux entreprises
                                        </a>
                                    </li>
                                @endcan -->
                            </ul>
                        </div>
                    </li>
                @endcanany
                {{-- End offre --}}

                {{-- Demandeur --}}
                @role([\App\Models\Role::CIP, \App\Models\Role::CHEF_AGENCE])
                    <li class="nav-item">
                        <a class="nav-link menu-link" href="index.html#sidebarLayouts" data-bs-toggle="collapse"
                            role="button" aria-expanded="false" aria-controls="sidebarLayouts">
                            <i class="ri-group-line"></i> <span data-key="t-layouts">Demandeurs</span>
                        </a>
                        <div class="collapse menu-dropdown" id="sidebarLayouts">
                            <ul class="nav nav-sm flex-column">
                                <li class="nav-item">
                                    <a href="{{ route('backoffice.job-seekers.filter-by-agence-name', base64_encode(auth()->user()->agenceRegionale->nom)) }}"
                                        class="nav-link" data-key="t-detached">de mon agence
                                        régionale</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                @endrole
                {{-- End Demandeur --}}

               <!--  {{-- Stagiaires --}}
                <li class="nav-item">
                    <a class="nav-link menu-link" href="index.html#sidebarLayouts" data-bs-toggle="collapse"
                        role="button" aria-expanded="false" aria-controls="sidebarLayouts">
                        <i class="ri-layout-3-line"></i> <span data-key="t-layouts">Stagiaires</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarLayouts">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{ route('backoffice.stagiaires.create') }}" class="nav-link"
                                    data-key="t-horizontal">Création</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('backoffice.stagiaires.index') }}" class="nav-link"
                                    data-key="t-detached">Accéder à la
                                    liste</a>
                            </li>
                        </ul>
                    </div>
                </li>
                {{-- End stagiaire --}} -->

                @can(App\Models\Permission::VOIR_MENU_UTILISATEUR)
                    <li class="nav-item">
                        <a class="nav-link menu-link <?php if (@$sidebarAuth) {
                            echo ' active';
                        } ?>" href="#sidebarAuth" data-bs-toggle="collapse"
                            role="button" aria-expanded="false" aria-controls="sidebarAuth">
                            <i class=" ri-shield-user-fill"></i> <span data-key="t-authentication">Gestion des
                                utilisateurs</span>
                        </a>
                        <div class="collapse menu-dropdown <?php if (@$sidebarAuth) {
                            echo ' show';
                        } ?>" id="sidebarAuth">
                            <ul class="nav nav-sm flex-column">
                                @can(App\Models\Permission::VOIR_PAGE_UTILISATEUR)
                                    <li class="nav-item">
                                        <a href="{{ route('backoffice.users.index') }}"
                                            class="nav-link <?php if (@$sidebarusers) {
                                                echo ' active';
                                            } ?>">Utilisateurs</a>
                                    </li>
                                @endcan
                                @can(App\Models\Permission::VOIR_PAGE_ROLE)
                                    <li class="nav-item">
                                        <a href="{{ route('backoffice.users.roles') }}"
                                            class="nav-link <?php if (@$sidebarroles) {
                                                echo ' active';
                                            } ?>"> Rôles
                                        </a>
                                    </li>
                                @endcan
                                @can(App\Models\Permission::VOIR_PAGE_PERMISSION)
                                    <li class="nav-item">
                                        <a href="{{ route('backoffice.users.permissions') }}"
                                            class="nav-link <?php if (@$sidebarpermissions) {
                                                echo ' active';
                                            } ?>"> Permissions
                                        </a>
                                    </li>
                                @endcan
                            </ul>
                        </div>
                    </li>
                @endcan
            </ul>
        </div>
        <!-- Sidebar -->
    </div>

    <div class="sidebar-background"></div>
</div>
<!-- Left Sidebar End -->
<!-- Vertical Overlay-->
<div class="vertical-overlay"></div>
