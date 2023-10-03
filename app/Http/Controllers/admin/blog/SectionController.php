<?php

namespace App\Http\Controllers\admin\blog;

use App\Http\Controllers\Controller;
use App\Http\Requests\admin\blog\SectionFormRequest;
use App\Models\blog\Section;
use Illuminate\Http\Request;

class SectionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $sections = Section::orderBy('created_at', 'asc')->paginate(25);
        return view('admin.section.index', [
            "sections"=>$sections
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //

        $section = new Section();

        return view("admin.section.form", [
            "section"=>$section
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SectionFormRequest $request)
    {
        //
        $validedata= $request->validated();
        $section = Section::create($validedata);
        return to_route('admin.section.index')->with('success' , 'Categorie Add Succesfully');
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
    public function edit(Section $section)
    {
        //

        return view('admin.section.form', [
            "section" => $section
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SectionFormRequest $request, Section $section)
    {
        //
        $validedata = $request->validated();

        $section->update($validedata);
        return to_route('admin.section.index')->with('success' , 'section Modifier Succesfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Section $section)
    {
        //
        $section->delete();
        return to_route('admin.section.index')->with('success' , 'section Modifier Succesfully');

    }
}
