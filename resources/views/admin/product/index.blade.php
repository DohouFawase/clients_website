@extends('layouts.base')

@section('title', 'Table Product')

@section("content")
   
    <div class="container mt-4">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h5>@yield('title')</h5>
            <a href="{{ route('admin.product.create')}}" class="btn btn-success">Ajouter</a>
        </div>
        
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover text-center">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Image</th>
                        <th>Product Name</th>
                        <th>Category</th>
                        <th>Price</th>
                        <th>Stock</th>
                        <th>Status</th>
                        <th>Description</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                        <tr>
                            <td>{{ $product->id }}</td>
                            <td><img src="{{ asset('storage/' . $product->image) }}" alt="Product Image" class="img-fluid" width="100"></td>
                            <td>{{ $product->product_name }}</td>
                            <td>{{ $product->category->name }}</td>
                            <td>{{ $product->price }}</td>
                            <td>{{ $product->stock }}</td>
                            <td>
                                <span class="badge bg-{{ $product->status == 1 ? 'danger' : 'success' }}">
                                    {{ $product->status == 1 ? 'Épuisé' : 'Disponible' }}
                                </span>
                                
                            </td>
                            <td>{{ Str::limit($product->description, 40, '...') }}</td>
                            <td>
                                <div class="btn-group gaps-2" role="group" >
                                    <a href="{{ route('admin.product.edit', $product) }}" class="btn btn-primary">
                                        Edit
                                    </a>
                                    <form action="{{ route('admin.product.destroy', $product) }}" method="post">
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

        {{ $products->links() }}
    </div>
@endsection
