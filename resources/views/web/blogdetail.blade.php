
@extends("layouts.custum")
@section("title",$post->title )
@section("content")


<main class="mt-24">

   <!-- 
Install the "flowbite-typography" NPM package to apply styles and format the article content: 

URL: https://flowbite.com/docs/components/typography/ 
-->

<main class="pt-8 pb-16 lg:pt-16 lg:pb-24 bg-white dark:bg-gray-900 antialiased">
  <div class="flex justify-between px-4 mx-auto max-w-screen-xl ">
      <article class="mx-auto w-full max-w-2xl format format-sm sm:format-base lg:format-lg format-blue dark:format-invert">
          <header class="mb-4 lg:mb-6 not-format">
              <address class="flex items-center mb-6 not-italic">
                  <div class="inline-flex items-center mr-3 text-sm text-gray-900 dark:text-white">
                      <div>
                          <a href="#" rel="author" class="text-xl font-bold text-gray-900 dark:text-white">{{$post->author}}</a>

                          <p class="text-base text-gray-500 dark:text-gray-400"><time pubdate datetime="2022-02-08" title="February 8th, 2022">{{$post->date_pub}}</time></p>
                      </div>
                  </div>
              </address>
              <h1 class="mb-4 text-3xl font-extrabold leading-tight text-gray-900 lg:mb-6 lg:text-4xl dark:text-white">{{$post->title}}</h1>
          </header>

          <figure><img src="{{ asset('storage/' . $post->post_img) }}" alt="">
              <figcaption>Digital art by Anonymous</figcaption>
          </figure>

          <p class="text-xl">
            {{$post->contenu}}
          </p>
      </article>
  </div>
</main>









  
  
 
    
 
@endsection