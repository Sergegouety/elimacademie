@extends('backoffice.partials.dashboard.admin_index')
@section('titre') Liste des utilisateurs @endsection
@section('page_desription') Liste des utilisateurs @endsection
@section('page_navigation') 
<li class="breadcrumb-item"><a href="javascript: void(0);">Menu</a></li>
<li class="breadcrumb-item active">Paramètres</li>
<li class="breadcrumb-item active">Utilisateurs</li>
<li class="breadcrumb-item active">Créer</li>
@endsection
@section('content')

<div class="row">
    <div class="col-lg-12">
       
        <div class="card">
            <div class="card-header">
                <h4 class="card-title mb-0">
                </h4>
            </div><!-- end card header -->
            <div class="card-body">
                <form autocomplete="off" action="{{ route('users.store') }}" method="POST">
                    @csrf
                    
                    <div class="modal-body">
                       
                            <div class="mb-3">
                                <label for="nom" class="form-label"><strong>Nom 
                                    </strong></label>
                                <input value="{{ old('nom') }}" type="text" id="nom" name="nom"
                                    class="form-control" placeholder="EX: DOE" required />
                                @error('nom')
                                    <div class="invalid-fdback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="prenoms" class="form-label"><strong>Prenoms
                                       
                                    </strong></label>
                                <input value="{{ old('prenoms') }}" type="text" id="prenoms" name="prenoms"
                                    class="form-control" placeholder="EX: JOHN" required />
                                @error('prenoms')
                                    <div class="invalid-fdback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="sexe_id" class="form-label"><strong>Genre 
                                    </strong></label>
                                <select required class="form-control" data-trigger name="sexe_id" id="sexe_id"
                                    required>
                                    <option selected disabled value="">--Selectionnez--</option>
                                    <option {{ old('sexe_id') == '1' ? 'selected' : '' }} value="1">Masculin
                                    </option>
                                    <option {{ old('sexe_id') == '2' ? 'selected' : '' }} value="2">Féminin</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label"><strong>Email 
                                    </strong></label>
                                <input value="{{ old('email') }}" type="email" id="email" name="email"
                                    class="form-control" placeholder="Enter Email" required />
                                @error('email')
                                    <div class="invalid-fdback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="telephone" class="form-label"><strong>Téléphone </strong></label>
                                <input value="{{ old('telephone') }}" type="text" id="telephone" minlength="10"
                                    maxlength="10" name="telephone" class="form-control"
                                    placeholder="Entrez un numero de téléphone." required />
                                @error('telephone')
                                    <div class="invalid-fdback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="motdepasse" class="form-label"><strong>Mot de passe </strong></label>
                                <div class="position-relative auth-pass-inputgroup mb-3">
                                    <input name="password" type="password" class="form-control pe-5 password-input"
                                        placeholder="*********" id="password">
                                    @error('password')
                                        <span class="text-danger-emphasis">{{ $message }}</span>
                                    @enderror
                                    <button
                                        class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon"
                                        type="button" id="password-addon"><i
                                            class="ri-eye-fill align-middle"></i></button>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="password_confirmation" class="form-label"><strong>Confirmez le mot de passe
                                    
                                    </strong></label>
                                <div class="position-relative auth-pass-inputgroup mb-3">
                                    <input name="password_confirmation" type="password"
                                        class="form-control pe-5 password-input" placeholder="*********"
                                        id="password_confirmation">
                                    @error('password_confirmation')
                                        <span class="text-danger-emphasis">{{ $message }}</span>
                                    @enderror
                                    <button
                                        class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon"
                                        type="button" id="password-addon"><i
                                            class="ri-eye-fill align-middle"></i></button>
                                </div>
                            </div>
                            <br>
                            <div>
                                <label for="statut" class="form-label"><strong>Rôles </strong></label>
                            </div>
                            <div class="mb-3">
                                @foreach ($roles as $role)
                                    <div class="form-check form-radio-warning mb-3 col-sm-2"
                                        style="display:inline-block;">
                                        <input {{ old('role_name') == $role->name ? 'checked' : '' }}
                                            class="form-check-input" type="radio" name="role_name"
                                            id="{{ 'role'.$role->id }}" value="{{ $role->name }}">
                                        <label class="form-check-label" for="{{ 'role'.$role->id }}">
                                            {{ $role->name }}
                                        </label>
                                    </div>
                                @endforeach
                            </div>

                            <div>
                                <label for="statut" class="form-label"><strong>Permissions</strong></label>
                            </div>
                            <div class="mb-3">
                                @foreach ($permissions as $permission)
                                    <div class="form-check form-check-success mb-2 col-sm-2"
                                        style="display:inline-block;">
                                        <input class="form-check-input" type="checkbox" id="{{ 'perm'.$permission->id }}"
                                            name="checkbox_permission[]" value="{{ $permission->name }}"
                                            @if (old('checkbox_permission') !== null && in_array(strtoupper($permission->name), old('checkbox_permission'), true)) checked @endif>
                                        <label class="form-check-label" for="{{ 'perm'.$permission->id }}">
                                            {{ $permission->name }}
                                        </label>
                                    </div>
                                @endforeach
                            </div>
                    </div>
                    <div class="modal-footer mt-2">
                        <div class="hstack gap-2 justify-content-end">
                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Fermer</button>
                            <button type="submit" class="btn btn-success">Enregistrer</button>
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