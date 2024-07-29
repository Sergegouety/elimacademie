@extends('backoffice.partials.dashboard.admin_index')
@section('titre') Liste des utilisateurs @endsection
@section('page_desription') Liste des utilisateurs @endsection
@section('page_navigation') 
<li class="breadcrumb-item"><a href="javascript: void(0);">Menu</a></li>
<li class="breadcrumb-item active">Paramètres</li>
<li class="breadcrumb-item active">Utilisateurs</li>
<li class="breadcrumb-item active">Liste</li>
@endsection
@section('content')

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title mb-0">Ajouter, Modifier & Supprimer un utilisateur</h4>
            </div><!-- end card header -->

            @if (session('success'))
                <div class="form-group ">
                    <div class="col-xs-12">
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    </div>
                </div>
            @endif
            @if (session('error'))
                <div class="form-group ">
                    <div class="col-xs-12">
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    </div>
                </div>
            @endif

            <div class="card-body">
                <div class="listjs-table" id="customerList">
                    <div class="row g-4 mb-3">
                        <div class="col-sm-auto">
                            <div>
                                @can(App\Models\Permission::AJOUTER_UTILISATEUR)
                                    <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle" type="button"
                                            id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                            Créer <i class="ri-add-line align-bottom me-1"></i>
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                            <a class="dropdown-item"
                                                href="{{ route('backoffice.users.create', 'companies') }}">Cabinets</a>
                                            <a class="dropdown-item"
                                                href="{{ route('backoffice.users.create', 'aej') }}">Utilisateurs AEJ</a>
                                        </div>
                                    </div>
                                @endcan
                                <!-- <button class="btn btn-soft-danger" onClick="deleteMultiple()"><i class="ri-delete-bin-2-line"></i></button> -->
                            </div>
                        </div>
                        <div class="col-sm">
                            <div class="d-flex justify-content-sm-end">
                                <div class="search-box ms-2">
                                    <input type="text" class="form-control search" placeholder="Search...">
                                    <i class="ri-search-line search-icon"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="table-responsive table-card mt-3 mb-1">
                        @php $perms = count($roles) @endphp
                        @if ($perms > 0)
                            <table class="table align-middle table-nowrap" id="utilisateurTable">
                                <thead class="table-light">
                                    <tr>
                                        <th scope="col" style="width: 50px;">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="checkAll"
                                                    value="option">
                                            </div>
                                        </th>
                                        <th class="sort" data-sort="action">Action</th>
                                        <th class="sort" data-sort="customer_name">Nom & prenoms</th>
                                        <th class="sort" data-sort="email">Email</th>
                                        <th class="sort" data-sort="phone">Téléphone</th>
                                        <th class="sort" data-sort="date">Date enrégistrement</th>
                                        <th class="sort" data-sort="status">Rôle(s)</th>
                                        {{-- <th class="sort" data-sort="status">Statut</th> --}}

                                    </tr>
                                </thead>
                                <tbody class="list form-check-all">
                                    @foreach ($users as $utilisateur)
                                        @php $permissionslist = $utilisateur->permission(); @endphp
                                        <tr>
                                            <th scope="row">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="chk_child"
                                                        value="option1">
                                                </div>
                                            </th>
                                            <td>
                                                <div class="d-flex gap-2">
                                                    @role('admin')
                                                        <div class="edit">
                                                            <a href="{{ route('users.login-as', $utilisateur->id) }}"
                                                                class="btn btn-sm btn-outline-success edit-item-btn"
                                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="Se connecter en tant que"><i
                                                                    class="ri-edit-circle-line label-icon align-middle rounded-pill fs-16"></i></a>
                                                        </div>
                                                    @endrole
                                                   
                                                    @can(App\Models\Permission::MODIFIER_UTILISATEUR)
                                                        <div class="edit">
                                                            <a href="{{ route('backoffice.users.edit', $utilisateur) }}"
                                                                class="btn btn-sm btn-outline-danger edit-item-btn"
                                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="Mettre à jour les informations de l'utilisateur"><i
                                                                    class="ri-pencil-fill label-icon align-middle rounded-pill fs-16"></i></a>
                                                        </div>
                                                    @endcan
                                                </div>
                                            </td>
                                            <td class="customer_name">{{ $utilisateur->nom.' '.$utilisateur->prenoms }}</td>
                                            <td class="email">{{ $utilisateur->email }}</td>
                                            <td class="phone">{{ $utilisateur->telephone }}</td>
                                            <td class="date">{{ $utilisateur->created_at->format('d-m-Y') }}</td>
                                            <td class="status">
                                                <span
                                                    class="badge bg-success-subtle text-success text-uppercase">{{ $utilisateur->getRole() }}</span>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        @else
                            <div class="noresult" style="display: block">
                                <div class="text-center">
                                    <lord-icon src="https://cdn.lordicon.com/msoeawqm.json" trigger="loop"
                                        colors="primary:#121331,secondary:#08a88a" style="width:75px;height:75px">
                                    </lord-icon>
                                    <h5 class="mt-2">Desolé! Aucun résultat trouvé</h5>
                                    <!-- <p class="text-muted mb-0">We've searched more than 150+ Orders We did not find any orders for you search.</p> -->
                                </div>
                            </div>
                        @endif
                    </div>

                    <div class="d-flex justify-content-end">
                        <div class="pagination-wrap hstack gap-2">
                            {{ $users->links() }}
                        </div>
                    </div>
                </div>
            </div><!-- end card -->
        </div>
        <!-- end col -->
    </div>
    <!-- end col -->
</div>

@endsection