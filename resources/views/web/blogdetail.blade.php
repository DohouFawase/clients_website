
@extends("layouts.custum")
@section("title", $post->title)
@section("content")


<main class="mt-24">

    <div class="mb-4 md:mb-0 w-full mx-auto relative">
      <div class="px-4 lg:px-0">
        <h2 class="text-4xl font-semibold text-gray-800 leading-tight">
           {{ $post->title}}
        </h2>
        <a 
          href="#"
          class="py-2 text-green-700 inline-flex items-center justify-center mb-2"
        >
          Cryptocurrency
        </a>
      </div>

      <img src="{{ asset('storage/' . $post->post_img) }}" class="w-full object-cover lg:rounded" style="height: 28em;"/>
    </div>

    <div class="flex flex-col lg:flex-row lg:space-x-12">

      <div class="px-4 lg:px-0 mt-12 text-gray-700 text-lg leading-relaxed w-full lg:w-3/4">
    

        <div class="border-l-4 border-gray-500 pl-4 mb-6 italic rounded text-bleu">
            {{ $post->contenu}} <br>
            <a href="{{ $post->video }}">Cliquez ic Pour vois Le reportage et N'oubliez pas de vous Abonnez a notre chaine youtybe</a>  


        </div>

        
      </div>

      
    </div>
  </main>



  
  
 
    
 
@endsection