<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\admin\commerce\Product;
use Illuminate\Http\Request;

use Cart;

class CartController extends Controller
{
    //
    public function index()
    {
        $products = Cart::getContent();

        // Obtenir le total avec TVA
        return view('web.cart', [
            "products" =>  $products

        ]);
    }


    public function addTocart(Request $request)
    {

        $product = Product::find($request->id);
        $existingCartItem = Cart::get($request->id);
        if ($existingCartItem) {
            # code...
            session()->flash('warning', 'Ce produit est déjà dans le panier.');
        } else {
            # code...
            $cartItem =  Cart::add([
                'id' => $request->id,
                'name' => $request->product_name,
                'price' => $request->price,
                'quantity' => $request->quantity,
                'attributes' => array(
                    'image' => $request->image,


                ),

            ]);
            session()->flash('success', 'Le produit a été ajouté dans le panier.');
        }

        return to_route('cart.panier');
    }

    public function cartUpdate(Request $request)
    {
        

        Cart::update( $request->id,
                [
            'quantity'=>[
                'relative'=>false,
                'value'=>$request->quantity
            ]

        ]);
         // Vous pouvez retourner une réponse JSON si nécessaire
            session()->flash("success", 'Item Cary is updated succesflly');
        return to_route('cart.panier');

    }

    public function removeCart(Request $request){
        Cart::remove($request->id);
        session()->flash("success", 'Ce product a ete retire du panier');
        return to_route('cart.panier');

    }

    public function clearAll(){
        Cart::clear();
        session()->flash("success", 'le  Panier a ete supprimer avec suuscess');
        return to_route('cart.panier');
    }
}
