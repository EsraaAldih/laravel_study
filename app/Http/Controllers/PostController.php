<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post; //require('app/Post')
use App\Http\Requests\StorePostRequest;

class PostController extends Controller
{
    function index () 
    {
        return view('posts.index',[
            'posts' => Post::all()
        ]);
    }
    function create()
    {
        return view('posts.create');
    }

    function store(StorePostRequest $request)
    {
                
        Post::create([
            'title' => $request->title,
            'description' => $request->description,
            'user_id' => $request->user()->id
        ]);
        return redirect()->route('posts.index');
    }

    public function edit($post)
    {
        $post = Post::find($post);
      return view('posts.edit',[
          'post'=>$post
      ]);
    }
 
    function update( StorePostRequest $request ,$post){
        $post = Post::find($post);
        $post->title = $request->title;
        $post->description = $request->description;
        $post->save();
        return redirect()->route('posts.index');
    }

    //  function show($post)
    // {
    //     return $post;   //another way return request()->post;
    // }

    public function destroy($post)
    {
        $post = Post::find($post);
        $post->delete();
        return redirect()->route('posts.index');  
      }


public function show($post)
{
    $post = Post::find($post);
  return view('posts.view',[
      'post'=>$post
  ]);
}

 


}



