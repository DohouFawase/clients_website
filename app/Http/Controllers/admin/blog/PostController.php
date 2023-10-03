<?php

namespace App\Http\Controllers\admin\blog;

use App\Http\Controllers\Controller;
use App\Http\Requests\admin\blog\PostFormRequest;
use App\Http\Requests\admin\commerce\ProductFormRequest;
use App\Models\blog\Post;
use App\Models\blog\Section;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $posts = Post::orderBy('created_at', 'desc')->paginate(25);
        return view("admin.post.index", [
            'posts' =>$posts
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //.
        $post = new Post();
        $sections = Section::pluck("name", 'id');
    
       
      return view("admin.post.form", [
         "post" => $post,
         "sections" =>  $sections

      ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PostFormRequest $request)
    {
        //
        $validatedData = $request->validated();

        if ($request->hasFile('post_img')) {
            $imagePath = $request->file('post_img')->store('post', 'public');
            $validatedData["post_img"] = $imagePath;
          
        }
        $post = Post::create($validatedData);
        $post->set()->associate($validatedData['section_id']);
        return to_route("admin.post.index")->with("success", "Votre Product a été Ajouter avec suceess");
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
    public function edit(Post $post)
    {
        //
        $sections = Section::pluck("name", 'id');
        return view("admin.post.form", [
           "post" => $post,
           "sections" =>  $sections
  
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PostFormRequest $request, Post $post)
    {
        //
        $validatedData = $request->validated();

        if ($request->hasFile('post_img')) {
            $imagePath = $request->file('post_img')->store('post', 'public');
            $validatedData["post_img"] = $imagePath;
          
        }
        $post->update($validatedData);
        $post->set()->associate($validatedData['section_id']);
        return to_route("admin.post.index")->with("success", "Votre Product a été Modifier avec suceess");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
