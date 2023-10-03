@extends('layouts.base')

@section('title', 'Section')

@section("content")
   
    <div class="table-responsive">
        
        <div class="card-header d-flex align-items-center justify-content-between">
            <h5 class="mb-0">@yield('title')</h5>
            <a href="{{ route('admin.section.create')}}" class=" float-end">Ajouter</a>
          </div>
        <table class="table table-striped table-bordered text-center ">
            <thead class="table-hover">
                <tr>
                    <th scope="col"> ID</th>
                    <th scope="col"> Section</th>
                    <th scope="col"> Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($sections as $section)
                    <tr>
                        <th scope="row"> {{ $section->id}} </th>
                        <th scope="row"> {{ $section->name}} </th>
                       
                        <th> 
                           <div class="">
                            <a href="{{ route('admin.section.edit', $section)  }}" class="btn btn-primary">
                                Edit
                            </a>
                           @include("modal.section")
                            <button class="btn btn-danger" type="button" class="btn btn-primary" data-bs-toggle="modal"data-bs-target="#basicModal">Delete</button>

                           </div>
                        </th>
    
                    </tr>
                @endforeach
            </tbody>
    
        </table>
    
        {{ $sections->links() }}
    </div>
@endsection