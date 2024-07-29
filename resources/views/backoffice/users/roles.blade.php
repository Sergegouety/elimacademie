@extends('backoffice.partials.dashboard.admin_index')

@section('titre') Liste des rôles @endsection
@section('page_desription') Liste des rôles @endsection
@section('page_navigation') 
<li class="breadcrumb-item"><a href="javascript: void(0);">Menu</a></li>
<li class="breadcrumb-item active">Paramètres</li>
<li class="breadcrumb-item active">Utilisateurs</li>
<li class="breadcrumb-item active">rôles</li>
@endsection
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title mb-0">Ajouter, Modifier & Supprimer Rôles</h4>
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
                               
                                    <a class="btn btn-success add-btn" href="{{ route('users.roleform') }}">
                                        <i class="ri-add-line align-bottom me-1"></i> Nouveau rôle</a>
                                
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
                        @php $perms = count($role_list) @endphp
                        @if ($perms > 0)
                            <table class="table align-middle table-nowrap" id="roleTable">
                                <thead class="table-light">
                                    <tr>
                                        <th scope="col" style="width: 50px;">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="checkAll"
                                                    value="option">
                                            </div>
                                        </th>
                                        <th class="sort" data-sort="customer_name">Roles</th>
                                        <th class="sort" data-sort="email">Permissions</th>
                                        <th class="sort" data-sort="status">Statut</th>
                                        <th class="sort" data-sort="action">Action</th>
                                    </tr>
                                </thead>
                                <tbody class="list form-check-all">
                                    @foreach ($role_list as $role)
                                        @php $permissionslist = $role->permissions; @endphp
                                        <tr>
                                            <th scope="row">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="chk_child"
                                                        value="option1">
                                                </div>
                                            </th>
                                            <td class="customer_name">{{ $role->name }}</td>
                                            <td class="customer_name">
                                                @foreach ($permissionslist as $permission)
                                                    <span
                                                        class="badge bg-success-subtle text-success text-uppercase">{{ $permission->name }}</span>
                                                @endforeach
                                            </td>
                                            <td class="email">
                                                @if ($role->statut == 2)
                                                    <span
                                                        class="badge bg-success-subtle text-success text-uppercase">Active</span>
                                                @else
                                                    <span
                                                        class="badge bg-danger-subtle text-danger text-uppercase">Inactive</span>
                                                @endif
                                            </td>

                                            <td>
                                                <div class="d-flex gap-2">
                                                    @can(App\Models\Permission::MODIFIER_ROLE)
                                                        <div class="edit">
                                                            <a href="{{ route('backoffice.users.roleform', $role->id) }}"
                                                                class="btn btn-sm btn-success edit-item-btn">Modifier</a>
                                                        </div>
                                                    @endcan
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        @else
                            <div class="noresult" style="display: block">
                                <div class="text-center">
                                    <lord-icon src="https://cdn.lordicon.com/msoeawqm.json" trigger="loop"
                                        colors="primary:#121331,secondary:#08a88a"
                                        style="width:75px;height:75px"></lord-icon>
                                    <h5 class="mt-2">Desolé! Aucun résultat trouvé</h5>
                                    <!-- <p class="text-muted mb-0">We've searched more than 150+ Orders We did not find any orders for you search.</p> -->
                                </div>
                            </div>
                        @endif
                    </div>

                    <div class="d-flex justify-content-end">
                        <div class="pagination-wrap hstack gap-2">
                            {{ $role_list->links() }}
                        </div>
                    </div>
                </div>
            </div><!-- end card -->
        </div>
        <!-- end col -->
    </div>
    <!-- end col -->
</div>
<!-- end row -->

<!-- Modal -->
<div class="modal fade zoomIn" id="deleteRecordModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                    id="btn-close"></button>
            </div>
            <div class="modal-body">
                <div class="mt-2 text-center">
                    <lord-icon src="https://cdn.lordicon.com/gsqxdxog.json" trigger="loop"
                        colors="primary:#f7b84b,secondary:#f06548" style="width:100px;height:100px"></lord-icon>
                    <div class="mt-4 pt-2 fs-15 mx-4 mx-sm-5">
                        <h4>Etes-vous sure ?</h4>
                        <p class="text-muted mx-4 mb-0">Etes-vous sure de vouloir supprimer ce rôle ?</p>
                    </div>
                </div>
                <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                    <button type="button" class="btn w-sm btn-light" data-bs-dismiss="modal">Fermer</button>
                    <button type="button" class="btn w-sm btn-danger " id="delete-record">Oui, Supprimer!</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!--end modal -->
@endsection