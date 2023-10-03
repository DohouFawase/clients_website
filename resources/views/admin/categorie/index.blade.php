@extends('layouts.base')

@section('title', 'Table Categorie')

@section('content')




    <div class="table-responsive">
        <div class="card-header d-flex align-items-center justify-content-between">
            <h5 class="mb-0">@yield('title')</h5>
            <a href="{{ route('admin.categorie.create')}}" class=" float-end">Ajouter</a>
          </div>
        <table class="table table-striped table-bordered text-center">
            <thead class="table-hover">
                <tr>
                    <th scope="col"> ID</th>
                    <th scope="col"> Categorie</th>
                    <th scope="col"> Action</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($categories as $category)
                    <tr>
                            <th> {{$category->id}} </th>
                            <th> {{$category->name}} </th>
                            <th>
                                <div>
                                    <a href="{{ route("admin.categorie.edit", $category) }}" class="btn btn-primary">Edit</a>
                                        <button class="btn btn-danger" type="button" class="btn btn-primary" data-bs-toggle="modal"data-bs-target="#basicModal">Delete</button>
                                         @include('modal.categorie')
                                </div>
                            </th>
                    </tr>
                @endforeach
              
            </tbody>
        </table>
    </div>
@endsection