@extends('backoffice.partials.dashboard.admin_index')
@section('titre') Liste des etudiants @endsection
@section('page_desription') Liste des étudiants @endsection
@section('page_navigation') 
<li class="breadcrumb-item"><a href="javascript: void(0);">Menu</a></li>
<li class="breadcrumb-item active">Administration</li>
<li class="breadcrumb-item active">Etudiants</li>
<li class="breadcrumb-item active">Liste</li>
@endsection
@section('content')

<div class="col-xl-12">
    <div class="card">
        <div class="card-header align-items-center d-flex">
            <h4 class="card-title mb-0 flex-grow-1">Liste</h4>
        </div><!-- end card header -->

        <div class="card-body">
            

            <div class="live-preview">
                <div class="table-responsive table-card">
                    <table class="table align-middle table-nowrap table-striped-columns mb-0">
                        <thead class="table-light">
                            <tr>
                                <th scope="col" style="width:40px;">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="cardtableCheck">
                                        <label class="form-check-label" for="cardtableCheck"></label>
                                    </div>
                                </th>
                                <th scope="col">#</th>
                                <th scope="col">Nom & prénoms</th>
                                <th scope="col">Téléphone</th>
                                <th scope="col">Email</th>
                                <th scope="col">Date de n'aissance</th>
                                <th scope="col">Genre</th>
                                <th scope="col">Formation</th>
                                <th scope="col" style="width: 150px;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $i=1; @endphp
                            @foreach($etudiants as $etudiant)
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="cardtableCheck02">
                                        <label class="form-check-label" for="cardtableCheck02"></label>
                                    </div>
                                </td>
                                <td># {{$i}}</td>
                                <td><a href="tables-basic.html#" class="fw-medium">{{$etudiant->user->nom .' '.$etudiant->user->prenoms}}</a></td>
                                <td>{{$etudiant->user->telephone}}</td>
                                <td>{{$etudiant->user->email}}</td>
                                <td><span class="badge bg-success">{{$etudiant->date_naissance}}</span></td>
                                <td>
                                    <button type="button" class="btn btn-sm btn-light">{{$etudiant->getGenreAttribute($etudiant->user->sexe_id)}}</button>
                                </td>
                                <td>
                                    @if($etudiant->formations->isEmpty())
                                        <p>Aucune formation trouvée pour cet étudiant.</p>
                                    @else
                                        <ul>
                                            @foreach($etudiant->formations as $formation)
                                                {{ $formation->intitule }}
                                            @endforeach
                                        </ul>
                                    @endif
                                </td>
                                <td>
                                    <div class="dropdown">
                                        <a href="tables-basic.html#" role="button" id="dropdownMenuLink1" data-bs-toggle="dropdown" aria-expanded="false" class="">
                                            <i class="ri-more-2-fill"></i>
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink1" style="">
                                            <li><a class="dropdown-item" href="tables-basic.html#">View</a></li>
                                            <li><a class="dropdown-item" href="tables-basic.html#">Edit</a></li>
                                            <li><a class="dropdown-item" href="tables-basic.html#">Delete</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div><!-- end card-body -->
    </div><!-- end card -->
</div>

@endsection