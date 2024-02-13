@extends('layouts.base')

@section('title', 'Table Carousel')

@section("content")
   
    <div class="container mt-4">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h5>@yield('title')</h5>
            <a href="{{ route('admin.carousel.create')}}" class="btn btn-success">Ajouter</a>
        </div>
        
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover text-center">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Image</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($headers as $header)
                        <tr>
                           
                            <td><img src="{{ asset('storage/' . $header->image) }}" alt="Header Image" class="img-fluid" width="100"></td>
                        
                            <td>
                                <div class="btn-group gaps-2" role="group" >
                                    <a href="{{ route('admin.carousel.edit', $header) }}" class="btn btn-primary">
                                        Edit
                                    </a>
                                    <form action="{{ route('admin.carousel.destroy', $header) }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button type='submite' class="btn btn-danger" id="deleteButton">Delete</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        {{ $headers->links() }}
    </div>
@endsection
