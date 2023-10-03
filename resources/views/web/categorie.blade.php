@extends('layouts.custum')

@section('title', $categorie->name)

@section("content")
 


    <section class="product-section px-6  mt-24">
        <div class="mb-6 text-left">
            <h1 class="text-2xl font-bold ">{{$categorie->name}}</h1>
            <p  class="text-2xl ">Donnez le meilleur de  vous meme avec nos product. Votre allier pour des performanec exceptionnells</p>
        </div>
        <div class="w-full grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-4 gap-14 p-4">
           
            @foreach ($products as $product)
            @include('card.productcard')
        @endforeach
           
        </div>
    </section>
@endsection