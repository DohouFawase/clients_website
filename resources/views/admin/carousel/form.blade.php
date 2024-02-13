@extends('layouts.base')

@section("title", $header->exists ? 'Modifier le Carousel' : 'Ajouter un carousel')

@section("content")
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Forms/</span> @yield('title')</h4>

    <div class="row">
        <div class="col-xxl">
            <div class="card mb-4">
                <div class="card-body">
                    <form action="{{ route($header->exists ? "admin.carousel.update" : "admin.carousel.store", $header) }}" method="post"  enctype="multipart/form-data">
                        @csrf
                        @method($header->exists ? 'put' : 'post')

                       

                        <div class="mb-3">
                            @if ("/storage/images/{{ $header->image }}")
                            <img src="{{asset('storage/' . $header->image) }}">
                            @else
                                <p>No image found</p>
                            @endif
                            @include('shared.file', ["name" => "carousel", "class" => "col", "value" => $header->image])
                        </div>

                     

                        <div class="row justify-content-end">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">
                                    @if ($header->exists)
                                    Modifier
                                    @else
                                    Ajouter
                                    @endif
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
