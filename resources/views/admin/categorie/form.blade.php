@extends('layouts.base')

@section("title", $categorie->exists ? 'Modifie La table Categorie' : 'AJouter La table Categorie')

@section("content")
       
<div class="container-xxl flex-grow-1 container-p-y">
  <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Forms/</span> @yield('title')</h4>

  <div class="row">
      <!-- Basic with Icons -->
      <div class="col-xxl">
          <div class="card mb-4">
              <div class="card-header d-flex align-items-center justify-content-between">
                  <h5 class="mb-0">@if ($categorie->exists) Modifier @else Ajouter @endif</h5>
                  <small class="text-muted float-end">Merged input group</small>
              </div>
              <div class="card-body">
                  <form action="{{ route($categorie->exists?"admin.categorie.update":'admin.categorie.store', $categorie) }}" method="post">
                      @csrf
                      @method($categorie->exists? 'put':'post')
                      <div class="mb-3">
                          <label for="name" class="form-label">Nom de la catégorie</label>
                          <div class="input-group">
                              @include('shared.input', ['name'=>'name', 'value'=> $categorie->name, 'class'=>'form-control'])
                          </div>
                      </div>

                      <div class="text-end">
                          <button type="submit" class="btn btn-primary">
                              @if ($categorie->exists) Modifier @else Ajouter @endif
                          </button>
                      </div>
                  </form>
              </div>
          </div>
      </div>
  </div>
</div>





@endsection