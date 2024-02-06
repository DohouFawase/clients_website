<?php

namespace App\Http\Controllers\admin\commerce;

use App\Http\Controllers\Controller;
use App\Http\Requests\admin\commerce\ProductFormRequest;
use App\Models\admin\commerce\Categorie;
use App\Models\admin\commerce\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $products = Product::orderBy('created_at', 'desc')->paginate(25);
        return view("admin.product.index", [
            'products' =>$products
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $product = new Product();
        $categorie = Categorie::pluck("name", 'id');
    
       
      return view("admin.product.form", [
         "product" => $product,
       "categorie" =>  $categorie

      ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductFormRequest $request)
    {
        //
        $validatedData = $request->validated();

      if ($request->hasFile('image')) {
          $imagePath = $request->file('image')->store('product', 'public');
          $validatedData["image"] = $imagePath;
        
      }
      $product = Product::create($validatedData);
    $product->category()->associate($validatedData['category_id']);
    return to_route("admin.product.index")->with("success", "Votre Product a été Ajouter avec suceess");

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
        $categorie = Categorie::pluck("name", 'id');
    
       
        return view("admin.product.form", [
           "product" => $product,
         "categorie" =>  $categorie
  
        ]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProductFormRequest $request, Product $product)
    {
        //
        $validatedData = $request->validated();

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('product', 'public');
            $validatedData["image"] = $imagePath;
          
        }
        $product->update($validatedData);
        $product->category()->associate($validatedData['category_id']);
        return to_route("admin.product.index")->with("success", "Votre Product a été Ajouter avec suceess");

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
        $product->delete();
        return to_route('admin.product.index')->with('success' , 'Product Delete Succesfully');
        
    }
}
