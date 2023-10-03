@extends('layouts.custum')

@section("title",'Blogs')

@section("content")

<!-- ====== Blog Section Start -->
<section class="product-section px-6  mt-16">
  <div class="mb-6 text-center">
      <h1 class="text-3xl font-bold ">From the blog</h1>
      <p  class="text-2xl ">Rejoignez notre communautes passionées de sport et découvrez des articles inspirant sur les dernièer tenddance, <br> les astuces d'entrenements, les recette de nutitions 
      sportive et bien plus enconre!!!!
      </p>
  </div>
  <section class="flex items-center bg-gray-100 lg:h-screen font-poppins dark:bg-gray-900 ">
      <div class="justify-center max-w-6xl px-4 py-4 mx-auto lg:py-0">
          <div class="grid grid-cols-1 gap-6 lg:grid-cols-3 md:grid-cols-2">
            
              @foreach ($posts as $post)
      @include('card.blog')
      @endforeach
             
          </div>
      </div>
  </section>
</section>







<!-- ====== Blog Section End -->


@endsection