@extends("layouts.custum")
@section("title", $product->product_name)
@section("content")
    <section class=" pt-24 overflow-hidden bg-white py-11  dark:bg-gray-800">
        <div class="max-w-6xl px-4 py-4 mx-auto lg:py-8 md:px-6">
            <div class=" flex flex-wrap -mx-4">
                <div class="w-ful px-4 md:w-1/2">
                    <div class=" relative mb:6 lg:mb-10 overflow-hidden">
                        <img src="{{ asset('storage/' . $product->image) }}" alt="" class="  lg:h-full  object-cover w-full">
                    </div>
                </div>
                <div class="w-full px-4 md:w-1/2">
                    <div class="lg:lp-20">
                        <h2 class="max-w-xl mt-2 mb-6 text-2xl ont-bold dark:text-gray-400 md:text-4xl">{{$product->product_name}}</h2>
                        <p class="max-w-md mb-8 text-gray-700 dark:text-gray-400">
                            {{$product->description}}
                        </p>

                        <p class="inline-block mb-8 text-4xl font-bold text-gray-700 dark:text-gray-400 ">
                            <span>{{$product->price}}</span>
                        </p>
                        

                        <div class="flex flex-wrap items-center -mx-4">
                            <div class="w-full px-4 mb-4 lg:w-1/2 lg:mb-0">

                                <form action="{{ route('cart.addTocart') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $product->id }}">
                                    <input type="hidden" name="product_name" value="{{ $product->product_name }}">
                                    <input type="hidden" name="price" value="{{ $product->price }}">
                                    <input type="hidden" name="image" value="{{ $product->image }}">
                                    <input type="hidden" name="quantity" value=" 1  "> 
                                    <button type="submit" class="flex items-center justify-center w-full p-4 text-blue-500 border border-blue-500 rounded-md dark:text-gray-200 dark:border-blue-600 hover:bg-blue-600  hover:text-gray-100 hover:border-blue-700 dark:hover:dark:border-blue-700 dark:hover:text-gray-300">
                                        Ajouter Au Panier
                                    </button>
                                </form>
                                
                                
                            </div>
                        </div>

                        
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

