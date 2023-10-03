@extends("layouts.custum")

@section("content")

<section class="relative isolate overflow-hidden bg-gray-900 py-24 sm:py-32">
    <img src="{{ asset('web/img/head.jpg') }}" alt="" class="absolute inset-0 -z-10 h-full object-cover object-right md:object-cente w-full">
    <div class="hidden sm:absolute sm:-top-10 sm:right-1/2 sm:-z-10 sm:mr-10 sm:block sm:transform-gpu sm:blur-3xl" aria-hidden="true">
        <div class="aspect-[1097/845] w-[68.5625rem] bg-gradient-to-tr from-[#ff4694] to-[#776fff] opacity-20" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
    </div>
    <div class="absolute -top-52 left-1/2 -z-10 -translate-x-1/2 transform-gpu blur-3xl sm:top-[-28rem] sm:ml-16 sm:translate-x-0 sm:transform-gpu" aria-hidden="true">
        <div class="aspect-[1097/845] w-[68.5625rem] bg-gradient-to-tr from-[#ff4694] to-[#776fff] opacity-20" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
    </div> 

    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto max-w-2xl lg:mx-0">
        <h2 class="text-4xl font-bold tracking-tight text-white sm:text-6xl">BIienvenue sur notre site dedié à la vente des equipement sportive</h2>
        <p class="mt-6 text-2xl  leading-8 text-webjaune text-bold   ">Nous sommes là pour vous aider à atteindre vos objectis de fitness en vous fournissant des produicts 
            de haute performance et en vous offrant un service
            clients exceotionel.Que vous soyez un athlète proffesionnel ou débutant,
            nous avons tous ce dont vous avez besoins pour vous mettre en forme et vous sentir 
            bien dans votre corps.Alors qu'attendez-vous pour commencer votre parcour sportives avec nous..?
        </p>
        </div>
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
</section>


<section class="relative isolate overflow-hidden bg- py-24 sm:py-32">
    <img src="{{ asset('web/img/head.jpg') }}" alt="" class="absolute inset-0 -z-10 h-full  object-cover object-right md:object-cente w-full">
    <div class="hidden sm:absolute sm:-top-10 sm:right-1/2 sm:-z-10 sm:mr-10 sm:block sm:transform-gpu sm:blur-3xl" aria-hidden="true">
        <div class="aspect-[1097/845] w-[68.5625rem] bg-gradient-to-tr from-[#ff4694] to-[#776fff] opacity-20" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
    </div>
    <div class="absolute -top-52 left-1/2 -z-10 -translate-x-1/2 transform-gpu blur-3xl sm:top-[-28rem] sm:ml-16 sm:translate-x-0 sm:transform-gpu" aria-hidden="true">
        <div class="aspect-[1097/845] w-[68.5625rem] bg-gradient-to-tr from-[#ff4694] to-[#776fff] opacity-20" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
    </div> 

    <div class="mx-auto max-w-7xl px-6 lg:px-8 text-center ">
        <div class="mx-auto max-w-2xl lg:mx-0">
        <p class="mt-6  mb-6 text-white leading-8 text-2xl font-bold ">Découvrez notre section exceptionnelle d'équipememnts sportives de qualités superieur votre corps merite le meilleurs.
        </p>
        <a href="#" class="uppercase  py-2 px-4 rounded-lg bg-pink-500 border-2 border-transparent text-white text-md mr-4 hover:bg-pink-400">
          Visitez La boutique
        </a>
        </div>
    </div>
</section>

   

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
    


@endsection