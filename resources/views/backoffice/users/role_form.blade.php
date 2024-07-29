@extends('backoffice.partials.dashboard.admin_index')
@php 
if($role){$roleId = $role->id;}else{$roleId = null;}
$sidebarAuth=1;
$sidebarroles=1;
@endphp
@section('titre') Création des rôles @endsection
@section('page_desription') Création des rôles @endsection
@section('page_navigation') 
<li class="breadcrumb-item"><a href="javascript: void(0);">Menu</a></li>
<li class="breadcrumb-item active">Paramètres</li>
<li class="breadcrumb-item active">Utilisateurs</li>
<li class="breadcrumb-item active">Rôle</li>
@endsection
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title mb-0">Nouveau rôle</h4>
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

               <form class="tablelist-form" autocomplete="off" method="GET" action="{{route('users.store.role')}}">

                <input type="hidden" name="roleId" value="{{@$roleId}}"/>

                <div class="modal-body">
                   
                    <div class="mb-3">
                        <label for="customername-field" class="form-label">Rôle</label>
                        <input type="text" id="customername-field" name="nom" class="form-control" placeholder="Entrez le rôle" value="{{@$role->name}}" required />
                        <div class="invalid-feedback">Entrez le rôle svp.</div>
                    </div>

                    <div>
                        <label for="status-field" class="form-label">Statut</label>
                        <select class="form-control" data-trigger name="statut" id="status-field" required>
                            <option value="">Statut</option>
                            <option value="2" @php if(@$role->statut == 2){ echo 'selected';} @endphp >Active</option>
                            <option value="1" @php if(@$role->statut == 1){ echo 'selected';} @endphp >Bloqué</option>
                        </select>
                    </div>
                    <br><br>
                    <div>
                        <label for="statut" class="form-label">Premissions</label>
                    </div>
                    <div>
                        @foreach($permission_list as $permission)
                        <div class="form-check form-check-success mb-3 col-sm-1" style="display:inline-block;padding: 10px;">
                            <input class="form-check-input" type="checkbox" id="{{$permission->id}}" name="checkbox_permission[]" value="{{$permission->id}}" {{checkRolePermission($roleId,$permission->id)}} >
                            <label class="form-check-label" for="{{$permission->id}}">
                                {{$permission->name}}
                            </label>
                        </div>
                        @endforeach
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
                        <p class="text-muted mx-4 mb-0">Etes-vous sure de vouloir supprimer cet utilisateur ?</p>
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