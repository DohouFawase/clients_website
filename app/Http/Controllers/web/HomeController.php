<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\admin\commerce\Categorie;
use App\Models\admin\commerce\CmdDetail;
use App\Models\admin\commerce\Product;
use App\Models\blog\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index(){
        $products = Product::orderBy('created_at', 'asc')->limit(10)->get();
        $newproducts = Product::orderBy('created_at', 'desc')->limit(4)->get();
      $categories = Categorie::orderBy('created_at', 'asc')->get();

        $produitsVendus = $this->bestproduct();
        
        return view("home", [
            "products" => $products,
            "newproducts" => $newproducts,          
            'produitsVendus'    =>$produitsVendus,
            "categories" => $categories
        ]);
    }

    public function bestproduct()
 
    {
        $produitsVendus = CmdDetail::join('produits', 'cmd_details.produit_id', '=', 'produits.id')
        ->join('commandes', 'cmd_details.cmd_id', '=', 'commandes.id')
        ->selectRaw('produits.*, SUM(cmd_details.prix_unit * cmd_details.quantité) as totalRevenue')
        ->groupBy('produits.id')
        ->orderBy('totalRevenue', 'DESC')
        ->take(8);
    
    
        return  $produitsVendus;
    
     
    }
}
