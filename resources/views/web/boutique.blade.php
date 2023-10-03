@extends('layouts.custum')

@section("title",'Boutique')

@section("content")
  <section class="px-6 mt-24 ">
        <div class="categorie-grid-sectin grid grid-cols-4 lg:grid-cols-3 md:grid-cols-4 sm:grid-cols-5 gap-6">
            <div class=" row-span-2 ">
              <ul class="text-black text-semibold px-6 py-6 flex flex-col gap-4 ">
               @foreach ($categories as $categorie)
               <li class="hover:bg-text-webjaune"><a href="{{route('categorie',['slug'=> $categorie->getSlug(),'categorie' => $categorie->id])}}">{{$categorie->name}}</a></li>
               @endforeach
                
              </ul>
            </div>
        
                <img src="{{ asset('web/img/head.jpg') }}" alt="" class="row-span-2 col-span-2   ">
                <img src="{{ asset('web/img/head.jpg') }}" alt="" class=" ">
                <img src="{{ asset('web/img/head.jpg') }}" alt="" class=" ">
                

        </div>
  </section>

  <section class="product-section px-6  mt-16">
    <div class="mb-6 text-center">
        <h1 class="text-2xl font-bold ">Nos product</h1>
        <p  class="text-2xl ">Donnez le meilleur de  vous meme avec nos product. <br/> Votre allier pour des performanec exceptionnells</p>
    </div>
    <div class="w-full grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-4 gap-14 p-4">
      
      
      @foreach ($products as $product)
      @include('card.productcard')
  @endforeach
       
    </div>
    {{$products->links('pagination::simple-tailwind')}}
</section>
@endsection