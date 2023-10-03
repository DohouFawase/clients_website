@extends('layouts.base')

@section('title', 'Article Publié')

@section("content")
   
<div class="table-responsive">
    <div class="card">
        <div class="card-header d-flex align-items-center justify-content-between">
            <h5 class="mb-0">@yield('title')</h5>
            <a href="{{ route('admin.post.create') }}" class="btn btn-primary">Ajouter</a>
        </div>
        <table class="table table-striped table-bordered text-center">
            <thead class="table-hover">
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Image</th>
                    <th>Auteur</th>
                    <th>Date de Publication</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $article)
                    <tr>
                        <td>{{ $article->id }}</td>
                        <td><img src="{{ asset('storage/' . $article->post_img) }}" alt="Product Image" class="img-fluid" width="100"></td>

                        <td>{{ $article->title }}</td>
                        <td>{{ $article->author }}</td>
                        <td>{{ $article->date_pub }}</td>
                        <td>
                            <div class="btn-group">
                                <a href="{{ route('admin.post.edit', $article) }}" class="btn btn-primary">Modifier</a>
                                    <form action="{{ route('admin.post.destroy', $article) }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-danger"  type="submite" >Supprimer</button>
                                    </form>
                               
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $posts->links() }}
    </div>
</div>

@endsection