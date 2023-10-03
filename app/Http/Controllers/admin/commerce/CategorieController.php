<?php

namespace App\Http\Controllers\admin\commerce;

use App\Http\Controllers\Controller;
use App\Http\Requests\admin\commerce\CategorieFormRequest;
use App\Models\admin\commerce\Categorie;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //Why you laptop
        $categorie = Categorie::orderBy('created_at', 'asc')->paginate(25);
        return view('admin.categorie.index', [
            "categories"=>$categorie
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $categorie = new Categorie();

        return view("admin.categorie.form", [
            "categorie"=>$categorie
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CategorieFormRequest $request)
    {
        //
        $validedata= $request->validated();
         $categorie = Categorie::create($validedata);
         return to_route('admin.categorie.index')->with('success' , 'Categorie Add Succesfully');
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
    public function edit(Categorie $categorie)
    {
        //
        return view('admin.categorie.form', [
            "categorie" => $categorie
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CategorieFormRequest $request, Categorie $categorie)
    {
        //
        $validedata = $request->validated();

        $categorie->update($validedata);
        return to_route('admin.categorie.index')->with('success' , 'Categorie Modifier Succesfully');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Categorie $categorie)
    {
        //
        $categorie->delete();
        return to_route('admin.categorie.index')->with('success' , 'Categorie Delete Succesfully');
       
    }
}
