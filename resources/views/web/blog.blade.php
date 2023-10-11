@extends('layouts.custum')

@section("title",'Blogs')

@section("content")

<!-- ====== Blog Section Start -->

<!-- 
Install the "flowbite-typography" NPM package to apply styles and format the article content: 

URL: https://flowbite.com/docs/components/typography/ 
-->

<div class="">
  <div class="  mt-24 "> 
   <div class="flex  space-x-12 justify-center md:flex-wrap">
       @foreach ($sections as $section)
       <a href="{{route('section',['slug'=> $section->getSlug(),'section' => $section->id])}}" class=" text-xl t text-blue-800 hover:text-blue-900 ">{{$section->name}}</a>
       @endforeach
   </div>
 </div>
</div>
  
  <aside aria-label="Related articles" class="py-8 lg:py-24  mt-28 bg-gray-50 dark:bg-gray-800">
    <div class="px-4 mx-auto max-w-screen-xl">
        <div class="mb-6 text-center">
            <h1 class="text-3xl font-bold ">From the blog</h1>
            <p  class="text-2xl ">Rejoignez notre communautes passionées de sport et découvrez des articles inspirant sur les dernièer tenddance, <br> les astuces d'entrenements, les recette de nutitions 
            sportive et bien plus enconre!!!!
            </p>
        </div>

       
        <div class="flex justify-center flex-wrap gap-5 md:flex-wrap  lg:flex-none">
         
            @foreach ($posts as $post)
            @include('card.blog')
            @endforeach
            

            
        </div>
    </div>
  </aside>
  
 
  
  








<!-- ====== Blog Section End -->


@endsection