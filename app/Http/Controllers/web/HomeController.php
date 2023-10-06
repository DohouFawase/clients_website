<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\admin\commerce\Product;
use App\Models\blog\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index(){
        $products = Product::orderBy('created_at', 'asc')->limit(10)->get();
        $posts = Post::orderBy('created_at', 'asc')->limit(2)->get();
        
        return view("home", [
            "products" => $products,
            "posts" => $posts
        ]);
    }
}
