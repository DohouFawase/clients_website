@extends('layouts.base')

@section("title",$post->exists? 'Modifie Le post ' : 'Ajouter le post')

@section("content")
       
<div class="container-xxl flex-grow-1 container-p-y">
  <div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Forms/</span> @yield('title')</h4>

    <div class="card mb-4">
        <div class="card-body">
            <form action="{{ route($post->exists ? 'admin.post.update' : 'admin.post.store', $post) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method($post->exists ? 'put' : 'post')

                <div class="row mb-3">
                    <div class="col-md-4">
                        @include('shared.input', ['name' => 'title', 'class' => 'form-control', 'value' => $post->title, 'placeholder' => 'Titre'])
                    </div>
                    <div class="col-md-4">
                        @include('shared.input', ['name' => 'author', 'class' => 'form-control', 'value' => $post->author, 'placeholder' => 'Auteur'])
                    </div>
                    <div class="col-md-4">
                        @include('shared.date', ['name' => 'date_pub', 'class' => 'form-control', 'value' => $post->date_pub, 'placeholder' => 'Date de publication'])
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-12">
                        @include('shared.input', ['name' => 'video', 'class' => 'form-control', 'value' => $post->video, 'placeholder' => 'Lien de la vidéo'])
                        @include('shared.blog', ['name' => 'section_id', 'sections' => $sections, 'label' => 'Section', 'value' => $post->section_id])

                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-12">
                        @if (isset($post->post_img))
                            <img src="{{ $post->post_img }}" alt="">
                        @endif
                        @include('shared.file', ['name' => 'post_img', 'class' => 'form-control', 'value' => $post->post_img])
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-12">
                        @include('shared.input', ['name' => 'contenu', 'type' => 'textarea', 'class' => 'form-control', 'value' => $post->contenu, 'placeholder' => 'Contenu'])
                    </div>
                </div>

                <div class="row justify-content-end">
                    <div class="col-md-4">
                        <button type="submit" class="btn btn-primary">
                            @if ($post->exists)
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




@endsection