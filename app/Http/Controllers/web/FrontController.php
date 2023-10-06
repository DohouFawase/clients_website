<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\admin\commerce\Categorie;
use App\Models\admin\commerce\Commande;
use App\Models\admin\commerce\Product;
use App\Models\blog\Post;
use App\Models\blog\Section;
use Cart;
use Darryldecode\Cart\Cart as CartCart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class FrontController extends Controller
{
    //
    public function boutique()
    {
        $products = Product::orderBy('created_at', 'asc')->with('category')->paginate(50);


        $categories = Categorie::orderBy('created_at', 'asc')->limit(4)->get();


        return view("web.boutique", [
            'categories' => $categories,
            'products' => $products
        ]);
    }

    public function blog()
    {
        $posts = Post::orderBy('created_at', 'asc')->with('sections')->paginate(50);


        $sections = Section::orderBy('created_at', 'asc')->limit(4)->get();
        return view("web.blog", [
            'posts' => $posts,
            'sections' => $sections
        ]);
    }

    public function about(Request $request)
    {
        $public_key = "dsdsds";
        $private_key = "sdsds";
        $secret = "dsds";
        $kkiapay = new \Kkiapay\Kkiapay(
            $public_key,
            $private_key,
            $secret,
            $sandbox = true
        );
        $paymentResponse = $kkiapay->verifyTransaction($request->get('transaction_id'));
        if ($paymentResponse->status == "SUCCESS") {
            dd("Vous avez payez une somme de {$paymentResponse->amount}");
            //Enregistre les informations de la commande 
            Commande::create([]);
            //Envoi un mail de sucess
            Mail::to("dsdsdsd@gmma")->send();
            //Envoi une section success to notifier dans la view
            Session::flash("success", 'Paiment effectuer avec success');
            CartCart::delete();

        }else {
            return redirect()->back();
        }
        return view("web.about");
    }

    public function conatct()
    {
        return view("web.conatct");
    }



    public function categorie(string $slug, Categorie $categorie)
    {
        $products = $categorie->products;

        return view('web.categorie', [
            "products" => $products,
            'categorie' => $categorie
        ]);
    }

    public function show(string $slug, Product $product)
    {
        $expecteSlug = $product->getSlug();
        if ($slug !== $expecteSlug) {
            # code...
            return to_route('web.productdetail', ["slug" => $expecteSlug, "product" => $product]);
        }

        return view('web.productdetail', [
            "product" => $product
        ]);
    }

    public function blogdetail(string $slug, $post)
    {
        $expecteSlug = $post->getPost();
        if ($slug !== $expecteSlug) {
            # code...
            return to_route('web.blogdetail', ["slug" => $expecteSlug, "product" => $post]);
        }
        $posts = Post::orderBy('created_at', 'asc')->limit(2)->get();
        return view('web.blogdetail', [
            "post" => $post,
            "posts" => $posts
        ]);
    }
}
