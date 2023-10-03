<?php

namespace App\Http\Controllers\admin\commerce;

use App\Http\Controllers\Controller;
use App\Models\admin\commerce\Commande;
use Illuminate\Http\Request;

class CommandeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $commande = Commande::orderBy('created_at','asc')->paginate(25);
        return view('admin.commande.index', [
            "commandes" =>$commande
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Commande $commande)
    {
        //
        $commande->delete();
        return to_route("admin.commande.index")->with("success", "Votre Product a été Suprimer avec suceess");
       
    }
}
