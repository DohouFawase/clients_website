<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\admin\commerce\Categorie;
use App\Models\admin\commerce\Product;
use App\Models\blog\Post;
use App\Models\blog\Section;
use Cart;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    //
    public function boutique(){
        $products = Product::orderBy('created_at', 'asc')->with('category')->paginate(50);   
        

      $categories = Categorie::orderBy('created_at', 'asc')->limit(4)->get();
     
      
        return view("web.boutique", [
            'categories' => $categories,
            'products' => $products
        ]);
    }

    public function blog(){
        $posts = Post::orderBy('created_at', 'asc')->with('sections')->paginate(50);   
        

        $sections = Section::orderBy('created_at', 'asc')->limit(4)->get();
        return view("web.blog",[
            'posts' => $posts,
            'sections' => $sections
        ] );
    }

    public function about(){
        return view("web.about");
    }

    public function conatct(){
        return view("web.conatct");
    }

       

    public function categorie(string $slug,Categorie $categorie){
       $products = $categorie->products;
    
       return view('web.categorie', [
        "products" =>$products,
        'categorie'=>$categorie
       ]);

    }

    public function show(string $slug,Product $product){
           $expecteSlug = $product->getSlug(); 
        if ($slug !== $expecteSlug ) {
            # code...
            return to_route('web.productdetail', ["slug" => $expecteSlug, "product"=>$product]);
        }

        return view('web.productdetail', [
            "product" => $product
        ]);

        
    }

    public function blogdetail(string $slug, $post){
        $expecteSlug = $post->getPost(); 
     if ($slug !== $expecteSlug ) {
         # code...
         return to_route('web.blogdetail', ["slug" => $expecteSlug, "product"=>$post]);
     }
     $posts = Post::orderBy('created_at', 'asc')->limit(2)->get();
     return view('web.blogdetail', [
         "post" => $post,
         "posts" => $posts
     ]);

     
 }


   
}
