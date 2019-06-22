<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Post;
use Illuminate\Support\Str;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index_home()
     {
       $posts = Post::orderBy('created_at','DESC');
        $posts = $posts->paginate(3);
         return view('home',compact('posts'));
     }

    public function index()
    {
      $posts = Post::all();
      return view('posts.index',compact('posts'));
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
      $data = $request->all();

      $newPost = New Post();

      $newPost->title = $data['title'];
      $newPost->content = $data['content'];
      $newPost->slug = Str::slug($data['title']);

      if(!empty($data['image_post'])){
        $image = Storage::disk('public')->put('posts', $data['image_post']);
        $newPost->image_post = $image;
      }

      $newPost->save();

      return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        return view('posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
      $data = $request->all();


      if(!empty($data['image_post'])){
        $image = Storage::disk('public')->put('posts', $data['image_post']);
        $data['image_post'] = $image;
      }

      $post->update($data);

      return redirect()->route('posts.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $post = Post::find($id);
      $post->delete();
      return redirect()->back();
    }
}
