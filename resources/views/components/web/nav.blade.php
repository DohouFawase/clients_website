<header >
    <div class="first_nav bg-[#373737] text-white p-4">
        <div class="flex items-center justify-between">
          <div class="flex items-center ">
            <div class="bars">
                <i class="fas fa-bars c-opener__open text-red-700 text-4xl"></i> 
            </div>
            <div class="">
                <img src="{{ asset('web/imgs/png/logo.png') }}" alt="">
            </div>
          </div>
            <div class="seeach flex items-center">
                <div class="">
                    <select name="" id="">
                        <option value=""></option>
                    </select>
                </div>
                <div class="">
                    <input type="search" name="" id="" placeholder="Cherche un product, cateforie">
                    <button><i class="fa fa-search"></i></button>
                </div>

               
            </div>

            <div class="flex items-center ">
                <div class="">
                 <a href="" class="flex items-center flex-col">
                     <i class="fa-solid fa-location-dot text-4xl"></i>
                     <p>Magazin</p>
                 </a>
                </div>

                <div class="">
                 <a href="" class="flex items-center flex-col">
                     <i class="fa-solid fa-user text-4xl"></i>
                     <p>Compte</p>
                 </a>
                </div>

                <div class="" >
                 <a href="" class="flex items-center flex-col">
                     <i class="fa-solid fa-shopping-cart text-4xl"></i>
                 <p>Panier</p>
                 </a>
                </div>
             </div>
        </div>
    </div>
    <div class="secodne_nav flex justify-center mt-[-15px]">
        <div class="bg-black container text-white rounded-lg">
                <div class="flex items-center gap-6">
                    <div class="r rounded-sm">
                        <select name="" id=""></select>
                    </div>

                    <div class="">
                       <ul class="flex justify-center gap-6">
                        <li><a href="">Home</a></li>
                        <li><a href="{{ route('boutique') }}">Boutique</a></li>
                        <li><a href="{{ route('cart.panier') }}">A propos</a></li>
                        <li><a href="">Contact</a></li>
                       
                       </ul>
                    </div>
                </div>
        </div>
    </div>
</header>