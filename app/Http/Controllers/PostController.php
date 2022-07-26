<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::orderBy('updated_at', 'desc')->get();
        // dd($posts);
        return view('posts.index', ['posts'=>$posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $validatedData = $request->validate([
            'title' => 'required',
            'description' => "required",
            'image' => "required|mimes:jpg,png,jpeg|max:5048"
        ]);
        $newImageName = time() . '-' . $request->title . '.' .$request->image->extension();
        
        $request->image->move(public_path('images'), $newImageName);
        

        //dd($newImageName);



        
        $post = new Post;
        $post->title = $request->input('title');
        $post->description = $request->input('description');
        $post->image_path = $newImageName;
        $post->slug = 'user-id';
        $post->user_id = 1;
        $post->save();
        
        $request->session()->flash('status', 'Post Was Created !');
        
        return redirect()->route('posts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('posts.show', ['post' => Post::findOrFail($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('posts.edit', ['post' => Post::findOrFail($id)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'description' => "required"
        ]);

        
        $post = Post::findOrFail($id);
        $post->title = $request->input('title');
        $post->description = $request->input('description');
        $post->image_path = 'image-path';
        $post->slug = 'user-id';
        $post->user_id = 1;
        $post->save();
        
        $request->session()->flash('status', 'Post Was Updated !');

        return redirect()->route('posts.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $post = Post::findOrFail($id);
        $post->delete();

        $request->session()->flash('status', 'Post was Deleted !');
        return redirect()->route('posts.index');
    }
}
