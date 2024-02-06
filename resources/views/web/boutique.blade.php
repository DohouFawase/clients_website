@extends('layouts.custum')

@section("title",'Boutique')

@section("content")




  <div class="w-full  pt-[30px] pb-[60px]">
   <div class="w-full">
    <div class=" mx-auto">
        <div class="">
          <div class="p-4">
            <div class="flex gap-24">
              <div class="">
                <div class="">
                <div class="mb-6 mt-2">
                  <h1 class="text-gray-500 font-bold text-xl">Affinez votre recherche</h1>
                  <p>Cherchez une référence</p>
                  <div class="max-auto w-60">
                    <div class="">
                      <input type="text"  class="w-36 bg-gray-500 focus:border-blue-300 rounded-lg">
                      <button class="bg-black text-white p-2 ">OK</button>
                    </div>
                  </div>
                </div>
                <div class="p-4 border border-solid shadow-md ">
                    <p class="pt-4 pb-4 text-xl font-bold uppercase">Categorie</p>
                    <div class="">
                      <ul class="space-y-2 ">
                            @foreach ($categories as $categorie)
                    <li ><a href="{{route('categorie',['slug'=> $categorie->getSlug(),'categorie' => $categorie->id])}}" class=" hover:text-blue-500 ">{{$categorie->name}}</a></li>
                    @endforeach
                            
                          </ul>
                    </div>
                </div>
        
                </div>
              </div>
              <div class="">
                <div class="">
                  <div class="">
                    <div class="">
                      @foreach ($categories as $category)
                  <h2 class="text-xl font-bold mb-4">{{ $category->name }}</h2>
                  <div class="grid grid-cols-3 gap-4">
                      @foreach ($category->products as $product)
                          <div class="card">
                              <a href="{{route('show',['slug'=> $product->getSlug(),'product' => $product->id])}}">
                                <img src="{{ asset('storage/' . $product ->image) }}" alt="{{ $product->name }}">
                                <div class="card-body">
                                  <h3 class="card-title">{{ $product->name }}</h3>
                              </div>
                              </a>
                          </div>
                      @endforeach
                  </div>
              @endforeach
              {{$products->links('pagination::simple-tailwind')}}
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
   </div>
  </div>


@endsection