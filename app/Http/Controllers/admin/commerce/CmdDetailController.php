<?php

namespace App\Http\Controllers\admin\commerce;

use App\Http\Controllers\Controller;
use App\Models\admin\commerce\CmdDetail;
use Illuminate\Http\Request;

class CmdDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $detail = CmdDetail::orderBy('created_at', 'asc')->paginate(15);
        return view('admin.detail.index', [
            'details' => $detail
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
    public function destroy(CmdDetail $detail)
    {
        //
        $detail->delete();
        return to_route("admin.detail.index")->with("success", "Votre Product a été Modifier avec suceess");
    }
}
