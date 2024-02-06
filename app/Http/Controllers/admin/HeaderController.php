<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\admin\HeaderFormRequest;
use App\Models\admin\Header;
use Illuminate\Http\Request;

class HeaderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $headers = Header::orderBy('published_at', 'desc')->paginate(12)->get();
        return view ('',[
            'headers' => $headers
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $headers = new Header();
        return view('', [
            'headers'=>  $headers,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(HeaderFormRequest $request)
    {
        //
        $carousel= $request->validated();
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('carousel', 'public');
            $validatedData["image"] = $imagePath;
          
        }
        $header = Header::created($carousel);
     return to_route("admin..index")->with("success", "Votre Image a été Ajouter avec suceess");

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
    public function edit(Header $header)
    {
        //

        return view("admin.header.form", [
            "header" => $header,
         ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(HeaderFormRequest $request, Header $header)
    {
        //
        $carousel= $request->validated();
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('carousel', 'public');
            $validatedData["image"] = $imagePath;
          
        }
        $header->update($carousel);
        return to_route("admin.header.index")->with("success", "Votre Image a été Ajouter avec suceess");


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Header $header)
    {
        //
    }
}
