@extends('layouts.base')

@section("title", $product->exists ? 'Modifier le Produit' : 'Ajouter un Produit')

@section("content")
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Forms/</span> @yield('title')</h4>

    <div class="row">
        <div class="col-xxl">
            <div class="card mb-4">
                <div class="card-body">
                    <form action="{{ route($product->exists ? "admin.product.update" : "admin.product.store", $product) }}" method="post"  enctype="multipart/form-data">
                        @csrf
                        @method($product->exists ? 'put' : 'post')

                        <div class="form-check mb-4">
                            @include('shared.checkbox', ['name' => 'status', 'value' => $product->status, 'categories'=>$categorie])
                        </div>

                        <div class="row mb-3">
                            @include('shared.input', ['name' => 'product_name', 'class' => 'col', 'value' => $product->product_name])
                            @include('shared.input', ['name' => 'price', 'class' => 'col', 'value' => $product->price])
                            @include('shared.input', ['name' => 'stock', 'class' => 'col', 'value' => $product->stock])
                        </div>

                        <div class="row mb-3">
                            @include('shared.date', ['name' => 'date', 'class' => 'col', 'value' => $product->date])
                            @include('shared.select', ['name' => 'category_id',"label"=>"Categorie", "value"=>$product->category()->pluck('id')])

                        </div>

                        <div class="mb-3">
                            @if (isset($product->image))
                            <img src="{{ $product->image }}" alt="">
                            @endif
                            @include('shared.file', ["name" => "image", "class" => "col", "value" => $product->image])
                        </div>

                        <div class="mb-3">
                            @include('shared.input', ["type" => "textarea", 'name' => 'description', 'class' => 'col', 'value' => $product->description])
                        </div>

                        <div class="row justify-content-end">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">
                                    @if ($product->exists)
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
