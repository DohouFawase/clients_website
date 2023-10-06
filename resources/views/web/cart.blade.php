@extends("layouts.custum")

@section('title', 'Shopping Cart')

@section("content")
   <!-- component -->
   @if (Cart::getcontent()->count() >0)
   <div class=" relative overflow-x-auto shadow-md sm:rounded p-24">

         <table class="w-full tex-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700  uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                     <tr>
                        <th scope="col" class="px-6 py-3">
                           <span>Image</span>
                        </th>
   
                        <th scope="col" class="px-6 py-3">
                           <span>Product</span>
                        </th>
   
                        <th scope="col" class="px-6 py-3">
                           <span>Quantity</span>
                        </th>
   
                        <th scope="col" class="px-6 py-3">
                           <span>Price</span>
                        </th>

                        <th scope="col" class="px-6 py-3">
                           <span>Actions</span>
                        </th>
            </thead>
            <tbody>
              @foreach ($products as $product)
              <tr class="bg-white border-b dark:bg-gray-700 hover:bg-gray-5 dark:hover:bg-slate-500">
               <th class="w-10 h-10 rounded-full">
                 <img src="{{ asset('storage/' . $product->attributes->image) }}" alt="" class="w-full rounded-sm ">
               </th>
   
               <th class="px-6  py-4 font-semibold text-gray-900  dark:text-white">
                  <span>{{$product->name}}</span>
               </th>
   
               <th class="px-6 py-4">
                  <form action="{{route('cart.cartUpdate')}}" method="POST">
                     @csrf
                     <input type="hidden" name="id" value="{{$product->id}}">
                  <input type="number" name="quantity"  value="{{$product->quantity}}" id="" class="bg-gray-50  w-14 font-medium h-6  border-gray-300 text-gray-900 text-sm rounded-lg focus:border-blue-500 block px-2.5 py-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder:bg-gray-400  dark:focus:border-blue-500 mb-4">
                        <button type="submit" class=" text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 shadow-lg shadow-blue-500/50 dark:shadow-lg dark:shadow-blue-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">update</button>
                  </form>
               </th>
               <th class="px-6 py-4 font-semibold text-gray-900  dark:text-white">
                  <span>{{$product->price}} Cfa</span>
               </th>
   
               <th class="px-6 py-4 font-semibold text-gray-900  dark:text-white">
              <form action="{{route('cart.removeCart')}}" method="post">
               @csrf
               <input type="hidden" name="id" value="{{$product->id}}">

               <button  class="text-white bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 shadow-lg shadow-red-500/50 dark:shadow-lg dark:shadow-red-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 "  >Delete</button>
              </form>
               </th>
   
   
            </tr>
   
              @endforeach
   
   
            </tbody>
   
            
         </table>
         
         <div class="flex gap-5 justify-around items-center pt-4">

            <form action="{{route('cart.clearAll')}}" method="post">
               @csrf
               <button class="p-3 bg-red-950 text-white uppercase dark:hover:bg-red-500 hover:bg-slate-800  rounded" value="{{ $product->id }}" >Vider le Panier</button>
              </form>
         
           
         </div>
    
 
    


      <hr class="pb-6 mt-6">
      <div class="pt-6">
         <p class="pb-6 text-2xl font-bold text-primary-950 underline ">Total Panier</p>
         
         <div class="max-w-full bg-slate-800 rounded-sm block py-4 px-6">
            <div class="flex justify-between pb-4 items-center border-b-2 ">
               <p class="font-bold text-white ">Subtotal</p>
               <p class="font-bold text-white ">{{Cart::getSubTotal()}}  Cfa</p>
            </div>
            <div class="flex justify-between  pt-4 items-center ">
               <p  class="font-bold text-white ">Total</p>
               <p  class="font-bold text-white ">{{Cart::getTotal()}} fcaf </p>
            </div>
            
         </div>
        
      </div>

   </div>


   <button type="submit" class="kkiapay-button bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
      Payer
  </button>
  <script amount="{{ Cart::getTotal() }}" callback="{{ route('success') }}" data="" url="<url-vers-votre-logo>"
      position="left" theme="black" sandbox="true" key="8f59a0e0f8a911eca56ad905c440058f"
      src="https://cdn.kkiapay.me/k.js"></script>
  @else

  <div class=" bg-red-900 rounded-sm ml-96 m max-w-sm  max-h-sm flex justify-center  mt-24">
   <p class=" text-2xl p-14 text-green-500 font-semibold uppercase">Votre Panier est Vide.</p>
  </div>

  
   @endif


  

 
  
  
@endsection








