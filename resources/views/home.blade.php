@extends("layouts.custum")

@section("content")

<div class="swiper mySwiper">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <img src="{{ asset('web/imgs/22977_b.jpg') }}" alt="">
      </div>
      <div class="swiper-slide">       
         <img src="{{ asset('web/imgs/22986_b_002.jpg') }}" alt="">
      </div>
      <div class="swiper-slide">       
         <img src="{{ asset('web/imgs/22980_b_002.jpg') }}" alt="">
      </div>
      <div class="swiper-slide">    
            <img src="{{ asset('web/imgs/22987_b_002.jpg') }}" alt="">
      </div>
      <div class="swiper-slide">
        <img src="{{ asset('web/imgs/22996_b_002.jpg') }}" alt="">
      </div>
      <div class="swiper-slide">
        <img src="{{ asset('web/imgs/23010_b_002.jpg') }}" alt="">
        
      </div>
    </div>
  </div>





<div class="categorie-section">
    <div class="container-lg">
        <div class=" hidden md:grid md:grid-cols-4 gap-4">
            <div class="im-cate flex place-items-center ">
                <i class="fas fa-star fa-2x"></i> 
                <p> 23 ans d'expertise à votre service </p>
            </div>
            <div class="im-cate flex place-items-center ">
                <i class="fas fa-shopping-cart fa-2x"></i> 
                <p> + de 15 000 références choisies par nos experts </p>
            </div>
            <div class="im-cate flex place-items-center ">
                <i class="fas fa-truck fa-2x"></i> 
                <p> Livraison en magasin offerte dès 200 euros d'achat  </p>
            </div>
            <div class="im-cate flex place-items-center   ">
             <i class="fas fa-comments fa-2x"></i>
                <p> Une équipe clientèle à votre écoute </p>
            </div>
           
        </div>

       
    </div>
</div>



<div class="categorie-section">
    <div class="">
        <div class="grid lg:grid-cols-4 ">
            <div class="im-cate flex place-items-center w-46">
               
            </div>
            <div class="im-cate flex place-items-center w-46">
                
            </div>
            <div class="im-cate flex place-items-center w-46">
               
            </div>
            <div class="im-cate flex place-items-center   w-46">
           
            </div>
           
        </div>

       
    </div>
</div>

<div class="recomation p-4">
    <div class="grid  grid-cols-2 md:grid-cols-4  lg:grid-cols-5  xl:grid-cols-6 gap-6 ">
        
        @foreach ($products as $product)
        <div class="card">
            <a href="{{route('show',['slug'=> $product->getSlug(),'product' => $product->id])}}">
              <img src="{{ asset('storage/' . $product ->image) }}" alt="{{ $product->name }}" class="w-full">
              <div class="card-body">
                <h3 class="card-title">{{ $product->product_name }}</h3>
                <h3 class="card-title">{{ $product->price }}</h3>
                
            </div>
            </a>
        </div>
    @endforeach
        
    </div>
</div>

<div class="baner-carousel">

</div>



<div class="brands">

</div>

<div class="Categorie">
    <div class="">
        <div class="grid grid-cols-4  p-4 gap-4 place-items-center justify-center place-content-center ">
            @foreach ($categories as $categorie)
            <ul >
                <li class="bg-gray-200 w-48 flex justify-center p-4"><a href="{{route('categorie',['slug'=> $categorie->getSlug(),'categorie' => $categorie->id])}}" class="text-md  font-bold" >{{$categorie->name}}</a></li>
            </ul>
             @endforeach
        </div>
    </div>
</div>


<div class="recomation">
   <div class="">
    <div class="">
        <div class="">
            @foreach ($produitsVendus as $produitsVendu )
            <div class="">
                <img src="{{ asset('storage/' . $produitsVendu  ->image) }}" alt="">
                <div class="">
                    <h4>{{$produitsVendu->product_name}}</h4>
                    <div class="">
                        <div class="">
                            <p>{{$produitsVendu->price}}</p>
                            <p>Descprions</p>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
           
        </div>
    </div>
   </div>
</div>




<div class="other-carousel">
    
</div>


@endsection

