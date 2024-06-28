@extends('backoffice.partials.dashboard.admin_index')
@section('titre') Liste des Note @endsection
@section('page_desription') Liste des Note @endsection
@section('page_navigation') 
<li class="breadcrumb-item"><a href="javascript: void(0);">Menu</a></li>
<li class="breadcrumb-item active">Pédagogie</li>
<li class="breadcrumb-item active">Notes</li>
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
                                <th scope="col">Note</th>
                                <th scope="col">Description</th>
                                <th scope="col" style="width: 150px;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="cardtableCheck02">
                                        <label class="form-check-label" for="cardtableCheck02"></label>
                                    </div>
                                </td>
                                <td># </td>
                                <td></td>
                                <td></td>
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
                        </tbody>
                    </table>
                </div>
            </div>
        </div><!-- end card-body -->
    </div><!-- end card -->
</div>

@endsection