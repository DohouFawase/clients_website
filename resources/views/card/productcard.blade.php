<div class="bg-white p-4 w-fit shadow rounded  ">
    <img  src="{{ asset('storage/' . $product->image) }}" alt="" class=" object-cover transition ease-in-out delay-150  hover:-translate-y-1 hover:scale-110  duration-300">
    <div class="pt-4">
        <h2 class="text-2xl text-balck "> {{$product->product_name}} </h2>
        <div class="flex items-end justify-between mb-5 ">
            <p> {{$product->price }} </p>
                
        </div>
     
        <div class="flex items-center justify-around flex-wrap">
            <a href="{{route('show',['slug'=> $product->getSlug(),'product' => $product->id])}}" class="uppercase  py-2 px-4 rounded-lg bg-pink-500  border-2 border-transparent text-white text-md  hover:bg-pink-400">
                Voir Product
             </a>

        </div>
    </div>  
</div>
