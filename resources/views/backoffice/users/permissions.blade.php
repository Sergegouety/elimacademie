@extends('backoffice.partials.dashboard.admin_index')
@section('titre') Liste des permissions @endsection
@section('page_desription') Liste des permissions @endsection
@section('page_navigation') 
<li class="breadcrumb-item"><a href="javascript: void(0);">Menu</a></li>
<li class="breadcrumb-item active">Paramètres</li>
<li class="breadcrumb-item active">Permissions</li>
<li class="breadcrumb-item active">Liste</li>
@endsection
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title mb-0">Ajouter, Modifier & Supprimer permissions</h4>
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
                                
                                    <button type="button" class="btn btn-success add-btn" data-bs-toggle="modal"
                                        id="create-btn" data-bs-target="#showModal"><i
                                            class="ri-add-line align-bottom me-1"></i> Nouvelle permission</button>
                                
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
                        @php $perms = count($permission_list) @endphp
                        @if ($perms > 0)
                            <table class="table align-middle table-nowrap" id="permissionTable">
                                <thead class="table-light">
                                    <tr>
                                        <th scope="col" style="width: 50px;">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="checkAll"
                                                    value="option">
                                            </div>
                                        </th>
                                        <!-- <th class="sort" data-sort="customer_name">Roles</th> -->
                                        <th class="sort" data-sort="email">Permissions</th>
                                        <th class="sort" data-sort="status">Statut</th>
                                        <th class="sort" data-sort="action">Action</th>
                                    </tr>
                                </thead>
                                <tbody class="list form-check-all">
                                    @foreach ($permission_list as $permission)
                                        <tr>
                                            <th scope="row">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="chk_child"
                                                        value="option1">
                                                </div>
                                            </th>
                                            <!-- <td class="customer_name"></td> -->
                                            <td class="customer_name">{{ $permission->name }}</td>
                                            <td class="email">
                                                @if ($permission->statut == 2)
                                                    <span
                                                        class="badge bg-success-subtle text-success text-uppercase">Active</span>
                                                @else
                                                    <span
                                                        class="badge bg-danger-subtle text-danger text-uppercase">Inactive</span>
                                                @endif
                                            </td>

                                            <td>
                                                <!-- <div class="d-flex gap-2">
                                                                    <div class="edit">
                                                                        <button class="btn btn-sm btn-success edit-item-btn" data-bs-toggle="modal" data-bs-target="#showModal">Modifier</button>
                                                                    </div>
                                                                    <div class="remove">
                                                                        <button class="btn btn-sm btn-danger remove-item-btn" data-bs-toggle="modal" data-bs-target="#deleteRecordModal">Supprimer</button>
                                                                    </div>
                                                                </div> -->
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
                        {{ $permission_list->links() }}
                    </div>
                </div>
            </div><!-- end card -->
        </div>
        <!-- end col -->
    </div>
    <!-- end col -->
</div>
<!-- end row -->

<div class="modal fade" id="showModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-light p-3">
                <h5 class="modal-title" id="exampleModalLab">Nouvelle permission</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                    id="close-modal"></button>
            </div>
            <form class="tablelist-form" autocomplete="off" method="GET"
                action="{{route('users.store.permission')}}">
                <div class="modal-body">

                    <div class="mb-3">
                        <label for="customername-field" class="form-label">Premission</label>
                        <input type="text" id="customername-field" name="nom" class="form-control"
                            placeholder="Entrez la permission" required />
                        <div class="invalid-feedback">Entrer la permission.</div>
                    </div>

                </div>
                <div class="modal-footer">
                    <div class="hstack gap-2 justify-content-end">
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Fermer</button>
                        <button type="submit" class="btn btn-success" id="add-btn">Ajouter</button>
                        <!-- <button type="button" class="btn btn-success" id="edit-btn">Update</button> -->
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

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
                        <p class="text-muted mx-4 mb-0">Etes-vous sure de vouloir supprimer cette permission ?</p>
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