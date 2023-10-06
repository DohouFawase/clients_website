@extends('layouts.custum')

@section("title",'Boutique')

@section("content")


<section>
  <div class="w-full h-80 bg-red-400 relative mt-22">

<nav class="flex pt-44 justify-center" aria-label="Breadcrumb">
  <ol class="inline-flex items-center space-x-1 md:space-x-3">
    <li class="inline-flex items-center">
      <a href="#" class="inline-flex items-center text-sm font-bold text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
        <svg class="w-3 h-3 mr-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
          <path d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z"/>
        </svg>
        Home
      </a>
    </li>
    <li>
      <div class="flex items-center">
        <svg class="w-3 h-3 text-gray-400 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
        </svg>
        <a href="#" class="ml-1 text-sm font-bold text-gray-700 hover:text-blue-600 md:ml-2 dark:text-gray-400 dark:hover:text-white">@yield('title')</a>
      </div>
    </li>
    
  </ol>
</nav>

    <p class=" font-bold  text-3xl text-white flex justify-center lg:text-xl items-center pt-44" ></p>
  </div>
</section>

  <section class="px-6 mt-12 ">
    <ul class="text-black text-semibold px-6 py-6 flex items-center justify-center gap-4 sm:flex-wrap ">
      @foreach ($categories as $categorie)
      <li ><a href="{{route('categorie',['slug'=> $categorie->getSlug(),'categorie' => $categorie->id])}}" class="text-xl border border-solid border-green-900 hover:bg-gray-300  p-2 text-black  font-bold ">{{$categorie->name}}</a></li>
      @endforeach
       
     </ul>
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