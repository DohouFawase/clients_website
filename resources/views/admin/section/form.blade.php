@extends('layouts.base')

@section("title", $section->exists ? 'Modifier la table Section' : 'Ajouter la table Section')

@section("content")
       
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Forms/</span> @yield('title')</h4>

    <div class="row">
        <!-- Basic with Icons -->
        <div class="col-xxl">
          <div class="card mb-4">
            <div class="card-header d-flex align-items-center justify-content-between bg-primary text-white">
              <h5 class="mb-0">@yield('title')</h5>
              <small class="text-muted">Merged input group</small>
            </div>
            <div class="card-body">
              <form action="{{ route($section->exists ? 'admin.section.update' : 'admin.section.store', $section) }}" method="post">
                @csrf
                @method($section->exists ? 'put' : 'post')

                <div class="mb-3 row">
                  <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Name</label>
                  <div class="col-sm-10">
                    <div class="input-group input-group-merge">
                      @include('shared.input', ['class'=>'form-control', 'name'=>'name', 'value'=> $section->name])
                    </div>
                  </div>
                </div>
               
                <div class="row justify-content-end">
                  <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">
                        {{ $section->exists ? 'Modifier' : 'Ajouter' }}
                    </button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>

</div>

@endsection
