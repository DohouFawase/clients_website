<header >
    <div class="first_nav bg-[#373737] text-white p-4">
        <div class="flex items-center justify-between">
          <div class="flex items-center space-x-3 ">
            <div class="bars md:hidden">
                <i class="fas fa-bars c-opener__open text-red-700 text-4xl"></i> 
            </div>
            <div class="w-52">
                <img src="{{ asset('web/imgs/png/logo.png') }}" alt="" class="w-full sm:hidden md:block">
                <img src="{{ asset('web/imgs/png/logo-mobile.png') }}" alt="" class="w-[50px] md:hidden">
            </div>
          </div>
                <div class="">
                    <div class="">
                        <div class="flex items-center gap-3 ">
                            <div class= "bg-gray-400 flex gap-2">
                                <input type="text" name="" id="" class="w-[45rem]">
                            <button class=""> <i class=" py-2.5 px-5 me-2 mb-2 fa fa-search font-bold "></i></button>
                            </div>
                            <div class="flex gap-2 pr-4">
                                <div >
                                    <a href="" class="flex flex-col text-center">
                                        <i class="fas fa-map-marker-alt font-bolder text-2xl "></i> 
                                    <p>Magazion</p> 
                                    </a>
                                </div>
                                <div >
                                 <a href="" class="flex flex-col text-center">
                                    <i class="fas fa-user  font-bolder text-2xl"></i> 
                                    <p>Compte</p> 
                                 </a>

                                </div >
                                <div>
                                    <a href="{{ route('cart.panier') }} "  class="flex flex-col text-center">
                                        <div class="">
                                        <i class="fas fa-bag-shopping font-bolder text-2xl"></i> <small>{{Cart::getContent()->count()}}</small>
                                        </div>
                                        <p>Panier</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="">
                           
                        </div>
                    </div>
                </div>
               
            </div>

           
    </div>
    <div class="secodne_nav flex justify-center mt-[-15px]">
        <div class="bg-black container text-white rounded-lg">
                <div class="gap-6  sm:hidden md:flex justify-center items-center p-2 ">

                    <div class="">
                       <ul class="flex justify-center gap-6">
                        <li><a href="/">Home</a></li>
                        <li><a href="{{ route('boutique') }}">Boutique</a></li>
                        <li><a href="{{ route('about') }}">A propos</a></li>
                        <li><a href="{{ route('conatct') }}">Contact</a></li>
                       
                       </ul>
                    </div>
                </div>
        </div>
    </div>
</header>